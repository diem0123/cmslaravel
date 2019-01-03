<?php

namespace App\module\company;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
class Company extends Model
{
    protected $table="company";

    public static function updateCompany(array $param){
    	$param['STATUS']="Active";
         //$data['DATE_JOIN'] = Carbon::now();
        $param['DATE_UPDATE'] = Carbon::now();
    	DB::table('company')->where('ID_COM',$param['ID_COM'])->update(['COM_NAME'=>$param['COM_NAME'],'SHORT_NAME'=>$param['SHORT_NAME'],'EMAIL'=>$param['SHORT_NAME'],'EMAIL'=>$param['EMAIL'],'TEL'=>$param['TEL'],'FAX'=>$param['FAX'],'WEBSITE'=>$param['WEBSITE']]);
    }
}
