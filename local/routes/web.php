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

Route::group(['namespace' => 'guest'], function() {
    Route::get('/','HomeController@getHome');

    Route::get('gioi-thieu','IntroduceController@getIntroduce');

    Route::get('tin-tuc','NewsController@getNews');
    Route::get('tin-tuc/{slug}','NewsController@getDetail');

    Route::get('tuyen-dung','RecruitmentController@getRecruitment');
    Route::get('tuyen-dung/{slug}','RecruitmentController@getDetail');
    Route::get('ung-tuyen','RecruitmentController@getFormCv');
    Route::post('ung-tuyen','RecruitmentController@postFormCv');

    Route::get('lien-he','ContactController@getContact');
    Route::post('them-lien-he','ContactController@postContact');

    Route::post('dang-ki-email','ContactController@postRegisterEmail');

    
});

//LOGIN
Route::get('login','LogInController@getLogin');
Route::post('login','LogInController@postLogin');
Route::get('logout','LogInController@LogOut');


Route::group(['prefix' => 'admin','namespace' => 'admin','middleware' => 'CheckLogin'], function() {
    
    Route::get('/','IndexController@getIndex');

    //TIN TỨC
    Route::group(['prefix' => 'news'], function() {
        Route::get('list','NewsController@getListNews');
        Route::get('add','NewsController@getAddNews');
        Route::post('add','NewsController@postAddNews');
        Route::get('edit/{id}','NewsController@getEditNews');
        Route::post('edit/{id}','NewsController@postEditNews');
        Route::get('delete/{id}','NewsController@deleteNews');
    });

    //Tuyển dụng
    Route::group(['prefix' => 'recruit'], function() {
        Route::get('list','RecruitController@getListRecruit');
        Route::get('add','RecruitController@getAddRecruit');
        Route::post('add','RecruitController@postAddRecruit');
        Route::get('edit/{id}','RecruitController@getEditRecruit');
        Route::post('edit/{id}','RecruitController@postEditRecruit');
        Route::get('delete/{id}','RecruitController@deleteRecruit');
    });

    //DANH SÁCH CTY
    Route::group(['prefix' => 'intro'], function() {
        Route::get('list','IntroController@getListIntro');
        Route::get('add','IntroController@getAddIntro');
        Route::post('add','IntroController@postAddIntro');
        Route::get('edit/{id}','IntroController@getEditIntro');
        Route::post('edit/{id}','IntroController@postEditIntro');
        Route::get('delete/{id}','IntroController@deleteIntro');
    });

    //DANH SÁCH NHÂN SỰ
    Route::group(['prefix' => 'staff'], function() {
        Route::get('list','StaffController@getListStaff');
        Route::get('add','StaffController@getAddStaff');
        Route::post('add','StaffController@postAddStaff');
        Route::get('edit/{id}','StaffController@getEditStaff');
        Route::post('edit/{id}','StaffController@postEditStaff');
        Route::get('delete/{id}','StaffController@deleteStaff');
    });

    //BANNER
    Route::group(['prefix' => 'banner'], function() {
        Route::get('list','BannerController@getListBanner');
        Route::get('add','BannerController@getAddBanner');
        Route::post('add','BannerController@postAddBanner');
        Route::get('edit/{id}','BannerController@getEditBanner');
        Route::post('edit/{id}','BannerController@postEditBanner');
        Route::get('delete/{id}','BannerController@deleteBanner');
    });

    //LIÊN HỆ
    Route::group(['prefix' => 'contact'], function() {
        Route::get('list','ContactController@getListContact');
        Route::get('delete/{id}','ContactController@deleteContact');
    });

    //ĐĂNG KÍ NHẬN EMAIL
    Route::group(['prefix' => 'register'], function() {
        Route::get('list','ContactController@getListRegister');
        Route::get('delete/{id}','ContactController@deleteRegister');
    });

    //CÀI ĐẶT    
    Route::group(['prefix' => 'setting','middleware' => 'CheckLevel'], function() {
        Route::get('/','SettingController@getSetting');
        Route::post('/','SettingController@postSetting');
    });

    //DANH SÁCH CV
    Route::group(['prefix' => 'cv'], function() {
        Route::get('list','CvController@getListCv');
        Route::get('show/{id}','CvController@getShowCv');
        Route::get('delete/{id}','CvController@deleteCv');
    });

    //NGƯỜI DÙNG
    Route::group(['prefix' => 'user','middleware' => 'CheckLevel'], function() {
        Route::get('list','UserController@getListUser');
        Route::get('add','UserController@getAddUser');
        Route::post('add','UserController@postAddUser');
        Route::get('edit/{id}','UserController@getEditUser');
        Route::post('edit/{id}','UserController@postEditUser');
        Route::get('delete/{id}','UserController@deleteUser');
    });
    
    
    
});
