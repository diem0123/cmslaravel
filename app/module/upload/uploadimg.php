<?php

namespace App\module\upload;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Carbon\Carbon;
class uploadimg extends Model
{
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
}
