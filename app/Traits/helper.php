<?php

namespace App\Traits;

trait helper
{
///////////////////////////////////////
#function for upload image
public function UpImage($image,$directory){

        $base_path = "public/uploads/" . $directory;
        $filename = md5(strtotime(date("Y-m-d H:i:s")) . rand(1111, 9999)) . "." . $image->getClientOriginalExtension();
        $image->storePubliclyAs($base_path, $filename);
  
  
        return  $directory . "/" . $filename;
}

/////////////////
////////////////////////////////////////////////////////////////
//////////////////
#function for hash password
public function HashPassword($password){
        //if statment for trim password from link url for hash
        if(trim($password) === '')
        {
               return; 
        }
        $this->attributes['password']= Hash::make($password);
}









}

