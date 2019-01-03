<?php

namespace App\module\common;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class common_cat_sub extends Model
{
    protected $table = "common_cat_sub";
    public function common_cat(){
    	return $this->belongsTo('App\module\common_cat','ID_CAT_SUB','ID_CAT');
    }
    public function common(){
    	return $this->hasMany('App\module\common','ID_CAT_SUB','ID_COMMON');
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

    public static function list_data($idcat){
    	$data = new common_cat_sub();
    	$listdata = $data->where(['ID_CAT'=>$idcat,'STATUS'=>'Active'])->paginate(15);
    	return $listdata;
    }

    public static function list_data_catsub(){
        $data = new common_cat_sub();
        $listdata = $data->where(['STATUS'=>'Active'])->get();
        return $listdata;
    }

    public static function store(array $data){
    	$post = new common_cat_sub();
    	$post->SNAME = $data['SNAME'];
        $post->ID_CAT = $data['ID_CAT'];
        $post->IORDER = $data['IORDER'];
        $post->STATUS = $data['STATUS'];
        $post->SCONTENTSHORT = $data['SCONTENTSHORT'];
        $post->SCONTENT = $data['SCONTENT'];
        $post->PICTURE = $data['PICTURE'];
        $post->MN = $data['MN'];
        $post->HT = $data['HT'];
        $post->save();
    }
    public static function show_info_catsub($idcatsub){
        $getdata = new common_cat_sub();
        $data = $getdata->where(['ID_CAT_SUB'=>$idcatsub])->get();
        return $data;
    }
    public static function update_commoncatsub(array $data, $idcatsub){
        $action = new common_cat_sub();
        $action->where('ID_CAT_SUB',$idcatsub)->update($data);
    }
}
