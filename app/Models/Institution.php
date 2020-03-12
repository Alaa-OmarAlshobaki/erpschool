<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DateTimeZone;

class Institution extends Model
{
    protected $fillable = [
        'Institution_Name','Institution_Address','Institution_Email','Institution_Phone','Institution_Mobile', 'Institution_Fax', 'password','phone','admin_id','Country','Currency_Type','language','Institution_Code','logo','Timezone'
    ];
    // public function Admin(){
    //     return $this->belongsTo(Admin::class);
    // }

    public function Admin()
{
    return $this->belongsTo('App\Models\Admin');
}

public function TimeZoneList(){
    		//function for timezone
		$timezone = array();
		$timestamp = time();
		
	foreach(timezone_identifiers_list(\DateTimeZone::ALL) as $key => $t) {
			date_default_timezone_set($t);
			$timezone[$key]['zone'] = $t;
			$timezone[$key]['GMT_difference'] =  date('P', $timestamp);
	}
		return collect($timezone)->sortBy('GMT_difference');
 
}

}
