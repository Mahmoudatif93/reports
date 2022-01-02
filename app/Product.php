<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Product extends Model
{


    protected $guarded = ['id'];
    protected $cost = ['examName'=>'array'];
    protected $fillable = [
        'client_name','client_number', 'file'  ,'examName'  ];


    public function getImagePathAttribute()
    {
        return asset('uploads/product_images/' . $this->image);

    }//end of image path attribute


    

    


}//end of model
