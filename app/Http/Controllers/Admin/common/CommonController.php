<?php

namespace App\Http\Controllers\Admin\common;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use App\module\common\common_type;
use App\module\common\common_cat;
use App\module\common\common_cat_sub;
use App\module\common\common;
use app\module\upload\uploadimg;
use App\Http\Requests\Admin\common\comrequest;
class CommonController extends Controller
{
    public function index(){

    	//$list_types = DB::table('common_type t','common_cat c','common_cat_sub s')->select()->get();
    	/*$data_list = DB::table('common_type')
    					->join('common_cat','common_type.ID_TYPE','=','common_cat.ID_TYPE')
    					->select('common_type.ID_TYPE','common_type.SNAME as NAMELV1','common_cat.ID_CAT','common_cat.SNAME as NAMELV2')
    					->get();    	
    	echo '<pre>';
    	print_r($data_list);
		$list_cat  	  = common_cat::list_data_cat();
    	$list_cat_sub = common_cat_sub::list_data_catsub(); 
    	*/
    	$list_type 	  = common_type::all();
    	return view('backend.admin.common.index',['list_type'=>$list_type]);
    }

    public function commontype(){
      $list_type = common_type::all();
      return view('backend.admin.common.index', compact('list_type'));
    }

    public function commoncat(){
      $id_type = Input::get('id_type');
      $datacat = common_cat::where('ID_TYPE', '=', $id_type)->get();
      return response()->json($datacat);
    }

    public function commoncat_sub(){
      $id_cat = Input::get('id_cat');
      $data_cat = common_cat_sub::where('ID_CAT', '=', $id_cat)->get();
      return response()->json($data_cat);
    }

    public function viewaddAction(){
    	$list_type 	= common_type::all();
    	return view('backend.admin.common.addcommon',compact('list_type'));
    }

    public function addAction(comrequest $request){
    	$data = $request->flash();
    	$data = $request->except('_token','submit');
		  $data['file_ul'] = uploadimg::check_and_upload_file($request,'file_ul');
      common::store($data);
      echo'<pre>';
    	print_r($data);die;

    }
}
