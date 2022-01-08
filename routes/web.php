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
    return view('auth.login');
});
////////////main of admin/////////////
Route::get('index', function () {
    return view('admin/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


////////////emphasis تاكيد////////
Route::get('emphasis','admin\emphasisController@index')->name('emphasis');
Route::get('emphasis/{id}','admin\c_doctorController@emphasis' );
////////////m_view////////
Route::get('m_view','admin\m_viewController@index')->name('m_view');
Route::get('editm_view/{id}','admin\m_viewController@edit' );
Route::get('upm_view/{id}','admin\m_viewController@update' );


Route::get('Delm_view/{id}','admin\m_viewController@distory' );
/////////////////insert of doctor for admin////////
Route::get('c_doctorsave','admin\c_doctorController@c_doctor' )->name('c_doctorsave');
Route::get('doctorStort','admin\c_doctorController@Stort' )->name('topicsaveStort');
/////////////////insert of admin for admin////////
Route::get('c_adminsave','admin\c_adminController@c_admin' )->name('c_doctorsave');
Route::get('adminStort','admin\c_adminController@Stort' )->name('topicsaveStort');

/////////////////choose//////////
Route::get('choose','admin\chooseController@index')->name('choose');



//////////spe////////////
Route::get('spe','admin\s_speController@index');
Route::get('Delspe/{id}','admin\s_speController@distory')->name('Delspe');
Route::get('createspe','admin\s_speController@createspe' )->name('createspe');
Route::get('speStort','admin\s_speController@Stort' )->name('speStort');

//////////city////////////
Route::get('city','admin\c_cityController@index');
Route::get('Delcity/{id}','admin\c_cityController@distory')->name('Delcity');
Route::get('createcity','admin\c_cityController@createcity' )->name('createcity');
Route::get('cityStort','admin\c_cityController@Stort' )->name('cityStort');

//////////local////////////
Route::get('local','admin\l_localController@index');
Route::get('Dellocal/{id}','admin\l_localController@distory')->name('Dellocal');
Route::get('createlocal','admin\l_localController@createlocal' )->name('createlocal');
Route::get('localStort','admin\l_localController@Stort' )->name('localStort');
//////////////////editpassword/////////////////
Route::get('e_pssword','editpassword\e_passwordController@index');

Route::get('e_pssword1/{id}', 'editpassword\e_passwordController@Stort');





///////////////qr_code////////////
Route::get('qrcodr','qrcodeController@index');
Route::post('qr_builder','qrcodeController@qr_builder');
Route::get('qrcodr_phone','qrcodeController@phone');
Route::get('qrcodr_email','qrcodeController@email');
Route::get('qrcodr_geo','qrcodeController@geo');
Route::get('qrcodr_sms','qrcodeController@sms');




/////////////test////////////


Route::get('GetSubCatAgainstMainCatEdit/{c_city}', 'admin\c_doctorController@GetSubCatAgainstMainCatEdit');
