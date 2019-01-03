<?php

namespace App\Http\Controllers\Admin\catcommon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\module\common\Common_cat;
use App\module\common\Common_type;
class CommoncatController extends Controller
{
    public function index($id){
        $datatype = common_type::showinfo_idtype($id);
      
    	$data = common_cat::list_data_common_cat($id);
    	return view('backend.admin.catsubcommon.index',['data'=>$data,'idtype'=>$id,'datatype'=>$datatype]);
    }
    public function viewaddAction($idtype){
        return view('backend.admin.catsubcommon.add',['idtype'=>$idtype]);
    }

    public function addAction(Request $request){
        $data = $request->except('_token','sub_header');
        $data['PICTURE'] = common_cat::check_and_upload_file($request,'PICTURE');
        common_cat::store($data);
    	echo '<script language=javascript>window.close();window.opener.location.reload();</script>';
    }
    public function viewupdateAction($idcat){
        $data = common_cat::show_info_catsub($idcat);
        return view('backend.admin.catsubcommon.update',['data'=>$data]);
    }
    public function updateAction(Request $request){
        $data = $request->except('_token','sub_header');
       if(isset($data['img']) and $data['img'] !=''){
          
           $data['PICTURE'] = common_cat::check_and_upload_file($request,'img');
        }
        unset($data['img']);
        common_cat::update_commoncat($data,$data['ID_CAT']);
    	echo '<script language=javascript>window.close();window.opener.location.reload();</script>';
    }
    public function deletedAction(Request $request){
    	return view('backend.admin.catsubcommon.deleted');
    }
}
