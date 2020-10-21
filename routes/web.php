<?php
//use App\Http\Controllers\Gwhar\NewForTestControllerNamespace;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Gwhar\Firstcon;
//
///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
///*
//Route::get('/', function () {
//    return view('welcome');
//});
///*  route optional parameter  */
//Route::get('/tryoptional/{id?}', function () {
//    return view('hellopage');
//})->name('p');
///*  route require  parameter  */
//Route::get('/try/{id}', function () {
//    return "wellcome";
//});
///*  route require  parameter  */
//Route::get('/tryrequire/{id}', function ($u) {
//    return "wellcome".$u;
//})->name("require_parameter");
//Route::get('/hellopagee', function () {
//    return view('hellopagee');
//})->name("hello");
///*
//route::namespace("gwharcontrolerfolder")->group(function (){
//    route::get("namespace","gwhar_Controller@gwharcontrolerfu");
//});*/
//
//Route::namespace('Gwhar')->group(function (){
//    Route::get('/name','GwharController@GWharfun');
//});
////Route::get('/name','GwharController@GWharfun');
////Route::get("/name",[\App\Http\Controllers\Gwhar\GwharController::class,'GWharfun']);
///*Route::prefix("user")->group(function (){
//    Route::get("/h",function (){return "hi";});
//});*/
//Route::prefix("user")->group(function (){
//    Route::get("/h",function (){return view('hellopagee');});
//});
///*Route::group(['prefix'=>'user'],function (){
//    Route::get('/wel',function (){
//return "wel page";
//    });
//});*/
///*Route::group(['prefix'=>'user','middleware'=>''],function (){
//    Route::get('/wel',function (){
//return "wel page";
//    });
//});*/
////Route::get('/hello',function (){})->middleware('');
////
///// /*
//Route::get('/first','Gwhar\FirstController@getinfo');/*
//Route::get('/second/{id}','Secondcotroller@getinfo');
//Route::group(['namespace'=>'Gwhar'],function (){
//    Route::get('/firstg','FirstController@getinfo');
//});*/
////Route::resources('res','ResourceController');
////Route::get('uu','First@index');
////Route::resources("yy",'First',array('All'));
//Route::resource('/jjr','First');
//Route::resource('/gett','Gwhar\Gwharcontrol');
//Route::get('/kl','Gwhar\Gwharcontrol@gethhh');
////Route::resource('/jjr/{id}','First');
//Route::view('/ggt','hellopagee');
///*Route::get('/trypar/{name}', function ($name) {
//    return $name;
//});*/
//Route::get('/trypar1/{id?}',function ($id=8){
//   return view('hellopagee',['id'=>$id]);
//});
//Route::get('/kk/{name?}','ControlerPassValue@pass');
//Route::get("/index",'Gwhar\GwharView@getviewindex');
//Route::get("/indexof/{id?}",'Gwhar\GwharView@getviewof');
//// pass parameter to view number 1
//Route::get('/parmeter0',function (){
//return view('saadview',['name'=>"gwhar saad"]);
//});
//// pass parameter to view number 2
//Route::get('/parmeter1',function (){
//    $data=[];
//    $data['name']="gwhar ali";
//    return view('saadview',$data);
//});
//// pass parameter to view number 3
//Route::get('/parmeter2',function (){
//
//    return view('saadview')->with('name','GWHAR RAJEH');
//});
//// pass parameter to view number 4
//Route::get('/parmeter3',function (){
//
//    return view('saadview')->with(['name'=>'gwhar saad ali']);
//});
////pass parameter to view number 5 to GwharView controller in folder Gwhar and method geter
////in this method like the previous
//Route::get('/geter/{name?}','Gwhar\GwharView@geter');
////object
//Route::get('/geterobj','Gwhar\GwharView@getobject');
//// template get its data like css and js  from public folder
//Route::get('/mytamplate',function (){
//    return view('pageremplate');
//});
//Route::get('/trylayouts',function (){
//    return view('trylayout');
//})->name('ggggg');
//// route controller for directive view
//Route::get('/direct','Gwhar\directive@getarray');
//
//
//Route::get('/getdatawit/{age}','Gwhar\controll_middleware@getviewaftermiddelwarw')->middleware('middlegwhar');
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
////////////////////////////////////////////
/////
///// uuuuuuuuuuuuuuuuuuuu
/////
/////
//
//route::get('/showhome',function(){
//    return  "hello my home page ";
//})->name('page1');
///*Route::redirect('/page',function (){ return route('page1');
//});*/
//Route::get('/viewtest/{id}',function ($id) {
//    return view('gview\viewpagetest', ["name" => "gwharsaad","id"=>$id]);
//});
//Route::get('/gwhar2/{id?}/{name?}',function ($id=8,$name='ggggg'){
//    return view('newtest')->with(compact('id'));
//})->name('te');
//Route::get('/forroutename',function (){
//    return"teste route name okkay";
//})->name('test');
//Route::get('/testarrayparameter',function (){
//    $name=[];
//    $name[0]="gwhar";
//    return view('newtest')->with(compact('name'));
//});
////Route::view('/a','newtest',['namee'=>"gwharsaad"])->name('veiwroute');
////Route::get('/trynamespace'.[NewForTestControllerNamespace::class,'yyy']);
////Route::get('/pppp',[Gwhar\NewForTestControllerNamespace::class,'yyy']);
//// شغال في الطريقه القديمه بحيث اني اشغال الخاصيه في ملحف routeserviceprovider حق ال namespace
//route::namespace('Gwhar')->group(function (){
//  Route::get('/hget','NewForTestControllerNamespace@yyy');
//    Route::get('/myget','NewForTestControllerNamespace@yyy');
//});
//route::group([],function (){
//  Route::get('/hg',[Gwhar\NewForTestControllerNamespace::class,'yyy']);
//    Route::get('/tr',[Gwhar\Gwharcontrol::class,'gethhh']);
//});
//Route::get('/mygett','Gwhar\NewForTestControllerNamespace@yyy');
//// prefix
//Route::prefix('/uu')->get('/tt',function (){
//    return "hello prefix";
//})->name('routenmae1');
//Route::group(['prefix'=>'at'],function (){
//    Route::get('/{id}',function (){return"form 2 ";})->middleware('gmiddle');
//});
//
//
//
//Route::get('/po/{id}','Gwhar\Firstcon@yu')->name('routename2');
//route::get('/try1','Gwhar\Firstcon@ty');
//route::get('/try2','Gwhar\Firstcon@tryview');
//route::get('/try3','Gwhar\Firstcon@tryfun2');*/
//route::resource('/news','Fgwhar');
//Route::resource('/jjr','First');
//Route::get('/tyrone',function (){
//    return view('trylayout');
//});
//Route::view('trygwhar','gwhar_view\content\main');
//
//Route::get('/trycontrol',function (){
//   $data=['name'=>'gwhar','age'=>25];
//   $obj=new stdClass();
//   $obj->name="saad";
//   $obj->age=26;
//   return view('try1view',compact('obj'));
//});

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified  ');
Route::get('/',function (){
    return "home";
});
