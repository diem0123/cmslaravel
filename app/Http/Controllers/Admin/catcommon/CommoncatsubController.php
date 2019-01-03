<?php

namespace App\Http\Controllers\Admin\catcommon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use App\module\common\common_cat_sub;
use App\module\common\common_cat;
use App\module\common\common_type;
use DB;
class CommoncatsubController extends Controller
{
    //
    public function index($idcat){

       $datacat = common_cat::show_info_catsub($idcat)->toArray();//->toArray chuyển object sang array
       $datatype = common_type::showinfo_idtype($datacat[0]['ID_TYPE']);
       $data = common_cat_sub::list_data($idcat);
    	return view('backend.admin.catsublv3common.index',['data'=>$data,'ID_CAT'=>$idcat,'namecat'=>$datacat[0]['SNAME'],'datatype'=>$datatype]);
    }

    public function info_data($idcatsub){
    	return view('backend.admin.catsubcommon.info_data');
    }

    public function viewaddAction($idcatsub){
    	return view('backend.admin.catsublv3common.add',['idcatsub'=>$idcatsub]);
    }

    public function addAction(Request $request){
    	
    	$data = $request->except('_token','sub_header');
    	$data['PICTURE'] = common_cat_sub::check_and_upload_file($request,'PICTURE');
    	
    	common_cat_sub::store($data);
    	echo '<script language=javascript>window.close();window.opener.location.reload();</script>';
    }

    public function viewupdateAction($idcatsub){
    	$data = common_cat_sub::show_info_catsub($idcatsub);
    	return view('backend.admin.catsublv3common.update',['data'=>$data]);
    }
    
    public function updateAction(Request $request){
    	$data = $request->except('_token','sub_header');
    	if(isset($data['img']) and $data['img'] !=''){
          
           $data['PICTURE'] = common_cat_sub::check_and_upload_file($request,'img');
        }
        unset($data['img']);
    	common_cat_sub::update_commoncatsub($data,$data['ID_CAT_SUB']);
    	echo '<script language=javascript>window.close();window.opener.location.reload();</script>';
    }
}
