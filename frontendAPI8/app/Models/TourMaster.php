<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class TourMaster extends Model
{
    //
    protected $table = "tour_master";
    public function gallery()
    {
        return $this->hasMany(GalleryMaster::class,'dest_id','dest_id');
    }
    public function destination()
    {
       return $this->belongsTo(Destination::class,'dest_id');
    }
    
}