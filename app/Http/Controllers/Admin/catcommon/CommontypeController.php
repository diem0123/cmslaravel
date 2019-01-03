<?php

namespace App\Http\Controllers\Admin\catcommon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\module\common\Common_type;
use Carbon\Carbon;
use DB;
class CommontypeController extends Controller
{
    public function index(){//Show list common_type
    	/*$data = $request->all();
    	echo '<pre>';print_r($data);die;*/
    	//echo '<pre>';
    	$data = common_type::listdata();
        return view('backend.admin.categoriescommon.index',['data'=>$data]);
    }
    public function viewadd(){
    	return view('backend.admin.categoriescommon.add');
    }
    public function addAction(Request $request){
    	$data = $request->except('_token','submit');
        $data['PICTURE'] = common_type::check_and_upload_file($request,'PICTURE');
    	common_type::store($data);
    	echo '<script language=javascript>window.close();window.opener.location.reload();</script>';
    		
	}
    public function viewupdate($id){
       $data =  common_type::showinfo_idtype($id);
       return view('backend.admin.categoriescommon.update',['data'=>$data]);
    }
    public function updateAction(Request $request){
        $data = $request->except('_token','sub_header');
        if(isset($data['img']) and $data['img'] !=''){
           $data['PICTURE'] = common_type::check_and_upload_file($request,'img');
         }
       common_type::updatecat($data,$data['ID_TYPE']);
       echo '<script language=javascript>window.close();window.opener.location.reload();</script>';
      
    }
}
