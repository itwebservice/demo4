<?php

namespace App\Http\Controllers;

use App\Models\b2cSetting;
use App\Models\CustomPackageMaster;
use Illuminate\Http\Request;

class PopularPackageController extends Controller
{
    //
    public function index()
    {
    
      $packageData = CustomPackageMaster::with('destination')->get();
      $setData = b2cSetting::first();
      $popularDest = json_decode($setData->popular_dest);
     $popularDestData = array();
      foreach($popularDest as $destination)
      {
        foreach($packageData as $data)
        {
            if($destination->package_id == $data->package_id)
            {
                    array_push($popularDestData,$data);
            }


        }
      }
      return response($popularDestData,200);
    }
}
