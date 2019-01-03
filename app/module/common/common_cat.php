<?php

namespace App\module\common;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class common_cat extends Model
{
    protected $table = "common_cat";
    /*protected $filltable = ['SNAME','IORDER','STATUS','SCONTENTSHORT','SCONTENT','HT','MN','ID_TYPE','PICTURE','created_at','updated_at'];*/
    public function common_type(){
    	return $this->belongsTo('App\module\common_type','ID_TYPE','ID_CAT');//belongsTo là quan hệ nhiều nhiều 1
    }
    public function common_cat_sub(){
    	return $this->hasMany('App\module\common_cat_sub','ID_CAT','ID_CAT_SUB');
    }
    public function common(){
    	return $this->hasMany('App\module\common','ID_CAT','ID_COMMON');
    }
    public static function list_data_common_cat($idtype){
        $data = new common_cat();
        $listdata = $data->select()->where(['ID_TYPE'=>$idtype,'STATUS'=>'Active'])->paginate(15);
        return $listdata;
    }
    public static function list_data_cat(){
        $data = new common_cat();
        $listdata = $data->select()->where(['STATUS'=>'Active'])->get();
        return $listdata;
    }  
    public static function check_and_upload_file(Request $request, $file){
        if($request->hasfile($file)){
            $datafile = $request->file($file);
            $extension = $datafile->getClientOriginalExtension($file);
            $checkarrayimg = array('1' =>'png' ,'2'=>'PNG','3'=>'jpg','4'=>'JPG','5'=>'jpeg','6'=>'JPEG' );
            if(in_array($extension, $checkarrayimg)){
                $date = Carbon::now();
                  $string = $date->year.$date->month.$date->day.$date->hour.$date->minute.$date->second;
                  $filename = $string.'_'.$datafile->getClientOriginalName($file);//Lấy tên file            
                if($datafile->move('Images/bin/Imagenews',$filename)){
                    
            return $filename;
                }
            }
            else {
            $filename = 'noimage.png';
                    return $filename;
            }
        }else {
        $filename = 'noimage.png';
            return $filename;
        }
    }
    public static function store(array $data){
        $post = new common_cat();
        $post->SNAME = $data['SNAME'];
        $post->IORDER = $data['IORDER'];
        $post->STATUS = $data['STATUS'];
        $post->SCONTENTSHORT = $data['SCONTENTSHORT'];
        $post->SCONTENTS = $data['SCONTENTS'];
        $post->HT = $data['HT'];
        $post->MN = $data['MN'];
        $post->ID_TYPE = $data['ID_TYPE'];
        $post->PICTURE = $data['PICTURE'];
        $post->DISP_ONMN = 0;
        $post->save();
    }
    public static function show_info_catsub($idcat){
        $getdata = new common_cat();
        $data = $getdata->select()->where(['ID_CAT'=>$idcat])->get();
        return $data;
    }
    public static function update_commoncat(array $data, $idcat){
        $action = new common_cat();
        $action->where('ID_CAT',$idcat)->update($data);
    }
    
}
