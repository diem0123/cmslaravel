<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\module\company\Company;
use Carbon\Carbon;
use DB;
use Illuminate\Session\TokenMismatchException;
use App\Http\Controllers\Controller;
class CompanyController extends Controller
{
   
   public function index(){//Lấy thông tin từ database show ra cho admin xem 
   		 $data = Company::select(['ID_COM','COM_NAME','SHORT_NAME','EMAIL','TEL','FAX','WEBSITE','ADDRESS'])->get()->first();
         return view('backend.admin.company.index',['company'=>$data]);
   }
   public function showinfo(){
   		//return view('backend.admin.company.update');//Show form để update thông tin 
         $data = Company::select(['ID_COM','COM_NAME','SHORT_NAME','EMAIL','TEL','FAX','WEBSITE','ADDRESS'])->get()->first();
        return view('backend.admin.company.update',['company'=>$data]);
   }
   public function updateAction(Request $request){
   		$data = $request->except('_token','ac');//Loại bỏ token trong form
         Company::updateCompany($data);
         echo '<script language=javascript>window.close();window.opener.location.reload();</script>';
        
   }
   public function viewupdateinfo(){
   		return view('backend.admin.company.viewupdateinfo');
   }
}
