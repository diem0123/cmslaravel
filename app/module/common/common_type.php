<?php

namespace App\module\common;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class common_type extends Model
{
   protected $table="common_type";
 
   /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
   public function common_cat(){
   	return $this->hasMany('App\module\common\common_cat','ID_TYPE','ID_CAT');//hasMany là quan hệ một nhiều
   }

  public static function store(array $data){
   		$post = new common_type();
   		$post->SNAME = $data['SNAME'];
   		$post->IORDER = $data['IORDER'];
   		$post->STATUS = $data['STATUS'];
   		$post->SCONTENTSHORT = $data['SCONTENTSHORT'];
   		$post->SCONTENTS = $data['SCONTENTS'];
   		$post->PICTURE = $data['PICTURE'];
   		$post->HT = $data['HT'];
   		$post->save();
   }

   public static function updatecat(array $data, $id){
      $post = new common_type();  
      $data1['SNAME'] = $data['SNAME'];
      $data1['IORDER'] = $data['IORDER'];
      $data1['STATUS'] = $data['STATUS'];
      $data1['SCONTENTSHORT'] = $data['SCONTENTSHORT'];
      $data1['SCONTENTS'] = $data['SCONTENTS'];
      $data1['PICTURE'] = $data['PICTURE'];
      $data1['HT'] = $data['HT'];
      $post->where('ID_TYPE',$id)->update($data1);
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

    public static function listdata(){
    	$list = new common_type();
    	$data = $list->where('STATUS','Active')->paginate(15);
      return $data;
    }

    public static function list_data_type(){
      $list = new common_type();
      $data = $list->where('STATUS','Active')->get();
      return $data;
    }

    public static function showinfo_idtype($id){
      $post = new common_type();
      $data =  $post->select()->where('ID_TYPE','=',$id)->get();
      return $data;
    }
     
}
