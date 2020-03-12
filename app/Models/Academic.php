<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    protected $fillable= [ 'Start_Year','Start_Month','End_Year','End_Month','state','institution_id'];

    public function Institution()
    {
        return $this->belongsTo('App\Models\Institution');
    }

}

