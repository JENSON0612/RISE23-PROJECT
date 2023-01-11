<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/addRent', function () {
    return view('addRent');
});

Route::get('/addYourProperty', function () {
    return view('addYourProperty');
});



Route::get('/rentDetails', function(){
    return view('rentDetails');
});

Route::get('/signUp', function () {
    return view('signUp');
});

Route::get('/register', function(){
    return view('register');
});

Route::get('/adminLogin', function(){
    return view('adminLogin');
});

Route::get('/nearMe', function () {
    return view('nearMe');
});



Route::get('/welcome',[App\Http\Controllers\homeController::class, 'welcome'])->name('welcome');

Route::get('/sell',[App\Http\Controllers\homeController::class, 'sell'])->name('sell');

Route::get('/notification',[App\Http\Controllers\homeController::class, 'notification'])->name('notification');

Route::get('/sign-in',[App\Http\Controllers\homeController::class, 'signin'])->name('login');

Route::post('/sign-in',[App\Http\Controllers\homeController::class, 'checkUserAccount'])->name('login');

Route::get('/yourProperty',[App\Http\Controllers\homeController::class, 'yourProperty'])->name('yourProperty');

Route::get('/guideForSell&Rent',[App\Http\Controllers\homeController::class, 'addBtn'])->name('guideForSell&Rent');

Route::get('/addYourProperty',[App\Http\Controllers\homeController::class, 'addYourProperty'])->name('addYourProperty');

Route::get('/contactUs',[App\Http\Controllers\homeController::class, 'contactUs'])->name('contactUs');

Route::get('/submitComplete',[App\Http\Controllers\homeController::class, 'submitComplete'])->name('submitComplete');

Route::get('/aboutUs',[App\Http\Controllers\homeController::class, 'aboutUs'])->name('aboutUs');

Route::get('/chat',[App\Http\Controllers\homeController::class, 'chat'])->name('chat');

Route::get('/rating',[App\Http\Controllers\homeController::class, 'rating'])->name('rating');

Route::get('/recommend',[App\Http\Controllers\homeController::class, 'recommend'])->name('recommend');

Route::get('/ratingPulishProperties',[App\Http\Controllers\homeController::class, 'ratingbtn1'])->name('ratingPublishProperties');

Route::get('/ratingAppointment',[App\Http\Controllers\homeController::class, 'ratingbtn2'])->name('ratingAppointment');

Route::get('/ratingRating',[App\Http\Controllers\homeController::class, 'ratingbtn3'])->name('ratingRating');

Route::get('/ratingBio',[App\Http\Controllers\homeController::class, 'ratingbtn4'])->name('ratingBio');

Route::get('/propertiesContent',[App\Http\Controllers\homeController::class, 'toSell'])->name('propertiesContent');

Route::get('/propertiesContent',[App\Http\Controllers\homeController::class, 'jB'])->name('propertiesContent');

Route::post('/propertiesContent',[App\Http\Controllers\homeController::class, 'addToFavourite']);

Route::post('/addYourProperty',[App\Http\Controllers\homeController::class,'add'])->name('addYourProperty');

Route::post('/addProperty',[App\Http\Controllers\homeController::class,'addProperty'])->name('addProperty');

Route::get('/rent',[App\Http\Controllers\homeController::class,'toRent'])->name('rent');

Route::get('/rentDetails/{id}',[App\Http\Controllers\homeController::class,'showRentDetails'])->name('rentDetails');

Route::post('/signUp',[App\Http\Controllers\homeController::class,'storeUserData'])->name('signUp');

Route::post('/contactUs',[App\Http\Controllers\homeController::class,'submitMessage'])->name('contactUs');

Route::get('/favourite',[App\Http\Controllers\homeController::class,'favourite'])->name('favourite');

Route::get('/ratingPublishProperties',[App\Http\Controllers\homeController::class,'showPublished'])->name('ratingPublishProperties');

Route::get('/larkin',[App\Http\Controllers\larkinController::class, 'toSell'])->name('larkin');

Route::get('/larkin',[App\Http\Controllers\larkinController::class, 'district'])->name('larkin');

Route::post('/larkin',[App\Http\Controllers\larkinController::class, 'addToFavourite']);

Route::get('/tampoi',[App\Http\Controllers\tampoiController::class, 'toSell'])->name('tampoi');

Route::get('/tampoi',[App\Http\Controllers\tampoiController::class, 'district'])->name('tampoi');

Route::post('/tampoi',[App\Http\Controllers\tampoiController::class, 'addToFavourite']);

Route::get('/kempas',[App\Http\Controllers\kempasController::class, 'toSell'])->name('kempas');

Route::get('/kempas',[App\Http\Controllers\kempasController::class, 'district'])->name('kempas');

Route::post('/kempas',[App\Http\Controllers\kempasController::class, 'addToFavourite']);

Route::get('/dangaBay',[App\Http\Controllers\dangaBayController::class, 'toSell'])->name('dangaBay');

Route::get('/dangaBay',[App\Http\Controllers\dangaBayController::class, 'district'])->name('dangaBay');

Route::post('/dangaBay',[App\Http\Controllers\dangaBayController::class, 'addToFavourite']);


Route::get('/gelangPatah',[App\Http\Controllers\gelangPatahController::class, 'toSell'])->name('gelangPatah');

Route::get('/gelangPatah',[App\Http\Controllers\gelangPatahController::class, 'district'])->name('gelangPatah');

Route::post('/gelangPatah',[App\Http\Controllers\gelangPatahController::class, 'addToFavourite']);

Route::get('/kangkarPulai',[App\Http\Controllers\kangkarPulaiController::class, 'toSell'])->name('kangkarPulai');

Route::get('/kangkarPulai',[App\Http\Controllers\kangkarPulaiController::class, 'district'])->name('kangkarPulai');

Route::post('/kangkarPulai',[App\Http\Controllers\kangkarPulaiController::class, 'addToFavourite']);

Route::get('/kotaIskandar',[App\Http\Controllers\kotaIskandarController::class, 'toSell'])->name('kotaIskandar');

Route::get('/kotaIskandar',[App\Http\Controllers\kotaIskandarController::class, 'district'])->name('kotaIskandar');

Route::post('/kotaIskandar',[App\Http\Controllers\kotaIskandarController::class, 'addToFavourite']);

Route::get('/masai',[App\Http\Controllers\masaiController::class, 'toSell'])->name('masai');

Route::get('/masai',[App\Http\Controllers\masaiController::class, 'district'])->name('masai');

Route::post('/masai',[App\Http\Controllers\masaiController::class, 'addToFavourite']);

Route::get('/pasirGudang',[App\Http\Controllers\pasirGudangController::class, 'toSell'])->name('pasirGudang');

Route::get('/pasirGudang',[App\Http\Controllers\pasirGudangController::class, 'district'])->name('pasirGudang');

Route::post('/pasirGudang',[App\Http\Controllers\pasirGudangController::class, 'addToFavourite']);

Route::get('/plentong',[App\Http\Controllers\plentongController::class, 'toSell'])->name('plentong');

Route::get('/plentong',[App\Http\Controllers\plentongController::class, 'district'])->name('plentong');

Route::post('/plentong',[App\Http\Controllers\plentongController::class, 'addToFavourite']);

Route::get('/puteriHarbour',[App\Http\Controllers\puteriHarbourController::class, 'toSell'])->name('puteriHarbour');

Route::get('/puteriHarbour',[App\Http\Controllers\puteriHarbourController::class, 'district'])->name('puteriHarbour');

Route::post('/puteriHarbour',[App\Http\Controllers\puteriHarbourController::class, 'addToFavourite']);

Route::get('/senai',[App\Http\Controllers\senaiController::class, 'toSell'])->name('senai');

Route::get('/senai',[App\Http\Controllers\senaiController::class, 'district'])->name('senai');

Route::post('/senai',[App\Http\Controllers\senaiController::class, 'addToFavourite']);

Route::get('/skudai',[App\Http\Controllers\skudaiController::class, 'toSell'])->name('skudai');

Route::get('/skudai',[App\Http\Controllers\skudaiController::class, 'district'])->name('skudai');

Route::post('/skudai',[App\Http\Controllers\skudaiController::class, 'addToFavourite']);

Route::get('/tanjungKupang',[App\Http\Controllers\tanjungKupangController::class, 'toSell'])->name('tanjungKupang');

Route::get('/tanjungKupang',[App\Http\Controllers\tanjungKupangController::class, 'district'])->name('tanjungKupang');

Route::post('/tanjungKupang',[App\Http\Controllers\tanjungKupangController::class, 'addToFavourite']);

Route::get('/uluTiram',[App\Http\Controllers\uluTiramController::class, 'toSell'])->name('uluTiram');

Route::get('/uluTiram',[App\Http\Controllers\uluTiramController::class, 'district'])->name('uluTiram');

Route::post('/uluTiram',[App\Http\Controllers\uluTiramController::class, 'addToFavourite']);

Route::get('/tanjungPelepas',[App\Http\Controllers\tanjungPelepasController::class, 'toSell'])->name('tanjungPelepas');

Route::get('/tanjungPelepas',[App\Http\Controllers\tanjungPelepasController::class, 'district'])->name('tanjungPelepas');

Route::post('/tanjungPelepas',[App\Http\Controllers\tanjungPelepasController::class, 'addToFavourite']);

Route::get('/appointment',[App\Http\Controllers\homeController::class, 'appointment'])->name('appointment');

Route::get('/admin',[App\Http\Controllers\adminController::class, 'admin'])->name('admin');

Route::get('/login',[App\Http\Controllers\adminController::class, 'adminLogin'])->name('login');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/adminLogin', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/adminLogin', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');

    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/adminWelcome', function () {
            return view('adminWelcome');
        })->name('adminDashboard');

    });
});

Route::get('/admin',[App\Http\Controllers\adminController::class,'admin'])->name('admin');


Route::get('/adminHome',[App\Http\Controllers\adminController::class,'adminHome'])->name('adminHome');


Route::get('/adminHome',[App\Http\Controllers\adminController::class,'adminData'])->name('adminHome');


Route::get('/adminUserData',[App\Http\Controllers\adminController::class,'adminUserData'])->name('adminUserData');

Route::get('/adminPropertyData',[App\Http\Controllers\adminController::class,'adminPropertyData'])->name('adminPropertyData');

Route::get('/nearMe',[App\Http\Controllers\homeController::class,'nearMe'])->name('nearMe');

Route::post('/propertiesContent',[App\Http\Controllers\homeController::class,'search'])->name('propertiesContent');

Route::get('/apartment',[App\Http\Controllers\apartmentController::class,'apartment'])->name('apartment');

Route::get('/doubleStorey',[App\Http\Controllers\doubleStoreyController::class,'doubleStorey'])->name('doubleStorey');

Route::get('/singleStorey',[App\Http\Controllers\singleStoreController::class,'singleStorey'])->name('singleStorey');

Route::get('/semiD',[App\Http\Controllers\semiDController::class,'semiD'])->name('semiD');

Route::get('/cluster',[App\Http\Controllers\clusterController::class,'cluster'])->name('cluster');

Route::get('/bungalow',[App\Http\Controllers\bungalowController::class,'bungalow'])->name('bungalow');

Route::get('/apartment',[App\Http\Controllers\homeController::class,'addToFavourite'])->name('apartment');

Route::get('/doubleStorey',[App\Http\Controllers\homeController::class,'addToFavourite'])->name('doubleStorey');

Route::get('/singleStorey',[App\Http\Controllers\homeController::class,'addToFavourite'])->name('singleStorey');

Route::get('/semiD',[App\Http\Controllers\homeController::class,'addToFavourite'])->name('semiD');

Route::get('/cluster',[App\Http\Controllers\homeController::class,'addToFavourite'])->name('cluster');

Route::get('/bungalow',[App\Http\Controllers\homeController::class,'addToFavourite'])->name('bungalow');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

