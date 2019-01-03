<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::namespace('Admin')->group(function(){
		Route::get('admin/login','LoginController@showlogin')->name('admin.login');
		Route::post('admin/login','LoginController@login')->name('admin.login');
		Route::get('admin/logout','LogoutController@logout')->name('admin.logout');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin'],function(){
	Route::namespace('Admin')->group(function(){
		Route::get('/','DashboardController@showdasboard')->name('dashboard');
		Route::group(['prefix'=>'company'],function(){
			Route::get('info-company','CompanyController@index')->name('company');
			Route::get('showinfo','CompanyController@showinfo')->name('update-company');
			Route::post('add-info-company',['as'=>'addinfo','uses'=>'CompanyController@updateAction']);
		});

		Route::namespace('catcommon')->group(function(){
			Route::group(['prefix'=>'catcommon'],function(){
				Route::get('list-catcommon','CommontypeController@index')->name('category-common');
				Route::get('add-common','CommontypeController@viewadd')->name('view-add-category');
				Route::post('addcat',['as'=>'addcommoncat','uses'=>'CommontypeController@addAction']);
				Route::get('update-common-{ID_TYPE}','CommontypeController@viewupdate')->name('view-update-category');
				Route::post('update-catetogy',['as'=>'updatecategory','uses'=>'CommontypeController@updateAction']);
			});
			Route::group(['prefix'=>'catsubcommon'],function(){
				Route::get('list-catsubcommon-{idtype}','CommoncatController@index')->name('categorysub-common');
				Route::get('add-catsubcommon-{idtype}','CommoncatController@viewaddAction')->name('add-common-cat');
				Route::post('addcatsubcommon',['as'=>'addcommoncatsub','uses'=>'CommoncatController@addAction']);
				Route::get('update-catsubcomon-{idcat}','CommoncatController@viewupdateAction')->name('update-common-cat');
				Route::post('update-common-cat',['as'=>'update-commoncat','uses'=>'CommoncatController@updateAction']);
			});
			Route::group(['prefix'=>'catsublvcommon'],function(){
				Route::get('list-catsublvcommon-{idcatsub}','CommoncatsubController@index')->name('categorycatsub-common');
				Route::get('add-catsublvcommon-{idcatsub}','CommoncatsubController@viewaddAction')->name('viewaddcategorycatsub-common');
				Route::post('addcatsublvcommon',['as'=>'addcommoncatsublv','uses'=>'CommoncatsubController@addAction']);
				Route::get('update-catsublvcommon-{idcatsub}','CommoncatsubController@viewupdateAction')->name('viewupdatecategorysub-common');
				Route::post('update-common-catsub',['as'=>'update-common-catsub','uses'=>'CommoncatsubController@updateAction']);
			});

		});
		Route::namespace('common')->group(function(){
			Route::group(['prefix'=>'commonlist'],function(){
				Route::get('list-common','CommonController@index')->name('common');
				
				Route::get('commontype','CommonController@commontype');
				Route::get('commoncat','CommonController@commoncat');
				Route::get('commoncat_sub','CommonController@commoncat_sub');
				Route::get('addcommon','CommonController@viewaddAction')->name('addcommon');
				Route::post('addaction',['as'=>'addcommonaction','uses'=>'CommonController@addAction']);
			});
		});
		
	});
	
	

});


