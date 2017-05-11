<?php

/* old routes file 
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('log', function () {
    return view('log');
});



Route::get('welcome', function () {
    return view('welcome');
});

Route::get('demo', function () {
    return view('demo');
});

Route::get('header', function () {
    return view('header');
});


Route::get('login', function () {
    return view('login');
});

Route::get('reg_1', function () {
    return view('reg_1');
});

Route::get('reg_2', function () {
    return view('reg_2');
});

Route::get('reg_3', function () {
    return view('reg_3');
});

Route::get('/user/login', function () {
    return view('user.login');
});


Route::get('/user/Inprincipal_Number/{im_no}', 'IN_PrnController@in1')->name('form.in1.im_no');
Route::post('/user/Inprincipal_Number/inprnc/{im_no}', 'IN_PrnController@in_applicant')->name('form.inprnc.im_no');


Route::get('/form/sub/{im_no}', 'IN_PrnController@index')->name('form.sub.im_no');


//Route::get('IN_1/{im_no}/form', 'IN_PrnController@in')->name('IN_1.im_no.form');

//Route::get('/home/form/IN_1', ['as' => 'form', 'uses' => 'IN_PrnController@in']);

Route::get('USER.InPrincipal_Number', ['as' => 'IN_1', 'uses' => 'IN_PrnController@in']);


Route::get('format_II', ['as' => 'format_II', 'uses' => 'IN_PrnController@in_app']);
 

 Route::get('RO/RO_IM_Print', function () {
    return view('RO.RO_IM_Print');
});
Route::get('home', array('uses' => 'HomeController@index') );
Route::get('RO_IM1_Print', array('uses' => 'IM_RegController@printdoc'));
Route::get('/RO/RO_dashboard', 'HomeController@RO_dashboard');
Route::get('/RO/RO_pend_IM', array('uses' => 'IM_RegController@RO_IM_list'));
Route::get('RO/RO_pend_IM/update/{im_no}', 'IM_RegController@update')->name('RO.RO_pend_IM.update.im_no');
Route::get('RO/RO_pend_IM/reject/{im_no}', 'IM_RegController@reject')->name('RO.RO_pend_IM.reject.im_no');
Route::get('RO/RO_pend_IM/print/{im_no}', 'IM_RegController@print')->name('RO.RO_pend_IM.print.im_no');

//Route::get('status', 'IM_RegController@update');
Route::get('/home/reg_3', array('uses' => 'IM_RegController@reg3'));
Route::get('/home/reg_2', array('uses' => 'IM_RegController@create'));
Route::get('/home/reg_1', array('uses' => 'IM_RegController@index'));
//Route::get('/home/form/{im_no}/IN_1', array('uses' => 'IN_PrnController@in'));



Route::post('/home/registered', array('uses' => 'IM_RegController@store'));

//Route::post('/home/in_prnc_reg', array('uses' => 'IN_PrnController@in_applicant'));


Route::post('home', function () {
    return view('home');
});

Route::get('format_I_1', function () {
    return view('format_I_1');
});

Route::get('format_I_2', function () {
    return view('format_I_2');
});

Route::get('format_I_3', function () {
    return view('format_I_3');
});

Route::get('format_III_1', function () {
    return view('format_III_1');
});

Route::get('format_III_2', function () {
    return view('format_III_2');
});

Route::get('JIT-3', function () {
    return view('JIT_VIEW_3');
});

Route::get('format_IV', function () {
    return view('format_IV');
});

Route::get('in_approval', function () {
    return view('in_approval');
});

Route::get('format_II', function () {
    return view('format_II');
});


Route::get('admin_manf_rate', function () {
    return view('admin_manf_rate');
});

Route::get('mainlogin', function () {
    return view('mainlogin');
});

Route::post('/action', 'IN_PrnController@action');


Route::get('/JIT/JIT_dashboard', 'HomeController@JIT_dashboard');

Route::get('/JIT/JIT_Format_III', 'HomeController@JIT_app_form');

Route::get('/OIC/OIC_dashboard', 'HomeController@OIC_dashboard');

Route::get('/OIC/OIC_Format_IV', 'HomeController@OIC_app_form');
//Route::get('/admin/approved', array('uses' => 'IM_RegController@approve'));

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::post('home', array('uses' => 'HomeController@index') );
