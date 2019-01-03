<?php

namespace App\module\common;

use Illuminate\Database\Eloquent\Model;
use app\module\upload\uploadimg;

class common extends Model
{
    protected $table="common";

    public function common_cat_sub(){
    	return $this->belongsTo('App\module\common\common_cat_sub','ID_CAT_SUB','ID_COMMON');
    } 
    public function common_cat(){
    	return $this->belongsTo('App\module\common\common_cat','ID_TYPE','ID_CAT');
    }
   /* public function common_type(){
    	return $this->belongsTo('App\module\common\common_type','ID_TYPE','ID_COMMON');
    }*/
    public static function store(array $data){
        $post = new common();
        $post->STITLE = $data['commonname'];
        $post->SCONTENTSHORT = $data['short_content'];
        $post->SCONTENTS = $data['content'];       
        $post->ID_TYPE = $data['idtype'];
        $post->STATUS = $data['status'];
        $post->DATE_POST = date('Y-m-d H:i:s');
        $post->DATE_UPDATED = date('Y-m-d H:i:s');

        $post->POST_BY = 1;// user post new

        $post->PICTURE = $data['file_ul'];
        $post->ID_CAT = $data['typecat'];        
        $post->ID_CAT_SUB = $data['subcat'];
        $post->HOME = $data['HOME'];
        $post->TIEUDIEM = $data['tieudiem'];
        $post->COUNTVIEW = 0;
        $post->save();
    }
}
