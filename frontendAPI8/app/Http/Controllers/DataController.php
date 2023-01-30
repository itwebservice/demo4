<?php

namespace App\Http\Controllers;

use App\Models\AppSetting;
use App\Models\B2bTransferMaster;
use App\Models\B2cBlog;
use App\Models\b2cSetting;
use App\Models\b2cTestimonial;
use App\Models\CustomPackageMaster;
use App\Models\Destination;
use App\Models\ExcursionMasterTariff;
use App\Models\ExcursionMasterImages;
use App\Models\ExcursionMasterTariffBasics;
use App\Models\GalleryMaster;
use App\Models\HotelMaster;
use App\Models\PopularHotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    //
    public function banner()
    {
        $banners = json_decode(b2cSetting::first()->banner_images);
        $imgs = array();
        foreach ($banners as $banner) {
            $url = $banner->image_url;
            $pos = strstr($url, 'uploads');
            if ($pos != false) {
                $newUrl1 = preg_replace('/(\/+)/', '/', $banner->image_url);
                $newUrl = str_replace('../', '', $newUrl1);
            } else {
                $newUrl =  $banner->image_url;
            }
            $imgs[] = $newUrl;
        }
        return response($imgs, 200);
    }
    public function testimonial()
    {
        $testimonials = b2cTestimonial::all();
        foreach($testimonials as $testimonial)
        {
            $testimonial->filter_img = $this->filterImgUrl($testimonial->image);
        }
        return response($testimonials, 200);
    }
    public function gallery()
    {
        $gallery = json_decode(b2cSetting::first()->gallery);
        return response($gallery, 200);
    }
    public function footerHolidays()
    {
        $footer = json_decode(b2cSetting::first()->footer_holidays);
        if (empty($footer)) {
            return response([], 200);
        }
        $packageData = CustomPackageMaster::with('destination')->get();
        $allData = array();
        foreach ($packageData as $data) {
            foreach ($footer as $f) {
                if ($f->package_id == $data->package_id) {
                    array_push($allData, $data);
                }
            }
        }
        return response($allData, 200);
    }
    public function destination()
    {
        $packageData = CustomPackageMaster::with('destination.galleryImages', 'images')->get();

        $setData = b2cSetting::first();
        $popularDest = json_decode($setData->popular_dest);
        $verifyDest = array();
        if (empty($popularDest)) {
            return response([], 200);
        }
        $popularDestData = array();
        foreach ($packageData as $data) {


            $temp = $data->destination;
            $count = Destination::with(['packageMaster'])->where('dest_id', $temp->dest_id)->first()->packageMaster->count();
            $temp->total_packages = $count;
            if (!in_array($temp->dest_id, $verifyDest)) {
                array_push($verifyDest, $temp->dest_id);
                array_push($popularDestData, $temp);
            }
        }


        return response($popularDestData, 200);
    }
    public function popularPackage()
    {

        $packageData = CustomPackageMaster::with('destination.galleryImages', 'images', 'tariff')->get();

        $setData = b2cSetting::first();
        $popularDest = json_decode($setData->popular_dest);

        if (empty($popularDest)) {
            return response([], 200);
        }
        $popularDestData = array();
        foreach ($popularDest as $destination) {
            foreach ($packageData as $data) {
                if ($destination->package_id == $data->package_id) {

                    $package_name = $data->package_name;
                    $currency_id = $data->currency_id;
                    $currency_logo_d = DB::table('currency_name_master')->select('default_currency', 'currency_code')->where('id', $currency_id)->first();
                    $currency_code = $currency_logo_d->currency_code;
                    $package_fname = str_replace(' ', '_', $package_name);
                    $file_name = 'package_tours/' . $package_fname . '-' . $data->package_id . '.php';

                    $data->file_name_url = $file_name;
                    $data->main_img_url = $destination->url;
                    array_push($popularDestData, $data);
                }
            }
        }

        return response($popularDestData, 200);
    }
    public function activities()
    {
        $setData = b2cSetting::first();
        $popularAct = json_decode($setData->popular_activities);
        if (empty($popularAct)) {
            return response([], 200);
        }
        $activities = ExcursionMasterTariff::all();
        $selectedActivities = array();
        foreach ($activities as $main) {
            foreach ($popularAct as $act) {

                if ($act->exc_id == $main->entry_id) {
                    $basic = ExcursionMasterTariffBasics::where('exc_id', $main->entry_id)->first();
                    $images = ExcursionMasterImages::where('exc_id', $main->entry_id)->get();
                    $main->basics = $basic;
                    $main->images = $images;
                    $imgUrl = (!empty($images)) ? $images[0]->image_url : 'images/activity_default.png';
                    $main->main_img_url = $this->filterImgUrl($imgUrl);
                    
                    array_push($selectedActivities, $main);
                }
            }
        }
        // dd($selectedActivities);
        return response($selectedActivities, 200);
    }
    public function general()
    {
        $general = AppSetting::first(['setting_id', 'app_version', 'app_email_id', 'currency', 'app_contact_no', 'app_landline_no', 'app_address', 'app_website', 'app_name', 'country']);
        return response($general, 200);
    }
    public function social()
    {
        $social = json_decode(b2cSetting::first()->social_media)[0];

        return response([$social], 200);
    }
    public function associationLogos()
    {
        $b2c = json_decode(b2cSetting::first(['assoc_logos'])->assoc_logos);
        $dir = 'https://itourscloud.com/destination_gallery/association-logo/';
        $logoArray = array();
        $count = 55;
        for ($i = 1; $i <= $count; $i++) {
            if (in_array($i, $b2c)) {
                $image_path = $dir . $i . '.png';
                array_push($logoArray, $image_path);
            }
        }
        return response($logoArray, 200);
    }
    public function popularHotel()
    {
        $popularHotels = HotelMaster::with(['hotelImage', 'hotelCity'])->get();
        $b2chotels = json_decode(b2cSetting::first()->popular_hotels);
          
        if (empty($b2chotels)) {
            return response([], 200);
        }
        $selectedHotel = array();
        foreach ($popularHotels as $hotel) {
            foreach ($b2chotels as $b2chotel) {
                if ($b2chotel->hotel_id == $hotel->hotel_id) {
                    $hotel->main_img = (!empty($hotel->hotelImage)) ? $this->filterImgUrl($hotel->hotelImage->hotel_pic_url) : 'images/hotel_general.png';
                    array_push($selectedHotel, $hotel);
                }
            }
        }

        return response($selectedHotel, 200);
    }
    public function transport()
    {
        $transport = B2bTransferMaster::with(['tariff.tariffEntry.cityFrom', 'tariff.tariffEntry.cityTo'])->get();
        //dd($transport);
        return response($transport, 200);
    }
    public function blogs()
    {
        $blogs = B2cBlog::where('active_flag', 0)->get();
        foreach($blogs as $blog)
        {
            $blog->img_filter = $this->filterImgUrl($blog->image);                
        }
        return response($blogs, 200);
    }
    public function filterImgUrl($imgUrlMain)
    {
        if(empty($imgUrlMain))
        {
            return 0;        }
        $url = $imgUrlMain;
        $pos = strstr($url, 'uploads');
        if ($pos != false) {
            $newUrl1 = preg_replace('/(\/+)/', '/', $imgUrlMain);
            $newUrl = str_replace('../', '', $newUrl1);
        } else {
            $newUrl =  $imgUrlMain;
        }
        return $newUrl;
    }
}
