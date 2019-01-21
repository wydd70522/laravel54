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
/*
Route::get('/', function () {
    return view('welcome');
});
//自定义路由
Route::get('/user'," @index");

//获取环境配置
Route::get('env',function(){
	var_dump(env('APP_DEBUG'));
	var_dump(env('DB_HOST'));
	var_dump(env('DB_PREFIX','DY_'));
});
//获取配置
Route::get('conf',function(){
	//读取系统配置中的时区
	//dd(config('app.timezone'));
	//读取邮件配置中的端口
	//dd(config('mail.port'));
	
	Config(['app.title'=>'云知梦，一家伟大的教育公司']);//动态修改配置
	dd(Config('app.title'));
	
	echo date('Y-m-d H:i:s');
	
});
//基本路由
Route::get('jiben', function () {
    echo "我是基本路由";
});
//加载页面
Route::get('jiben1',function(){
	return view('home');
});
//加载控制器
Route::get('jiben2','JibenController@index');
Route::get('jiben3','Jiben1Controller@index');

//路由类型
//登录页面
Route::get('login','LoginController@index');

//处理登录操作
Route::post('check',"LoginController@check");


//put 请求
Route::get('putWeb','LoginController@putWeb');

//put的处理页面
Route::put('put','LoginController@put');
*/
//一个路由实现多种请求
//Route::match(['get','post'],'/',"IndexController@index");
//Route::any('/',"IndexController@index");

//资源路由
/*Route::get('user/index','UserController@index');//展示页面
Route::get('user/add','UserController@add');//添加页面
Route::get('user/edit','UserController@edit');//修改页面
Route::post('user/insert','UserController@insert');//添加操作
Route::post('user/update','UserController@update');//更新操作
Route::get('user/del','UserController@del');//删除操作 */
//麻烦..

/*
| GET|HEAD  | Admin              | Admin.index   | App\Http\Controllers\IndexController@index   展示页面
| POST      | Admin              | Admin.store   | App\Http\Controllers\IndexController@store    添加操作
| GET|HEAD  | Admin/create       | Admin.create  | App\Http\Controllers\IndexController@create   添加页面
| DELETE    | Admin/{Admin}      | Admin.destroy | App\Http\Controllers\IndexController@destroy  删除操作
| PUT|PATCH | Admin/{Admin}      | Admin.update  | App\Http\Controllers\IndexController@update   更新操作
| GET|HEAD  | Admin/{Admin}      | Admin.show    | App\Http\Controllers\IndexController@show
| GET|HEAD  | Admin/{Admin}/edit | Admin.edit    | App\Http\Controllers\IndexController@edit   修改页面
| GET|HEAD  | api/user           |               | Closure
*/
//Route::resource('Admin','IndexController');
/*
//带参数的路由
Route::get('User/del/{id}',function($id){
	echo $id;
});
//带多个参数的路由
Route::get('UserInfo/{name}/{sex}',function($name,$sex){
	echo $name;
	echo $sex;
});
//设置路由的默认值
Route::get('user/edit/{id?}',function($id="moren值"){
	echo $id;
});
*/

//Route::get('UserInfo/{name}/{sex}',"IndexController@UserInfo");

//命名路由
//Route::get('abc',"IndexController@abc")->name('one');
//Route::get('shuai',"IndexController@shuai");

//后台首页
//Route::get('admin','Admin\IndexController@index');
//后台用户管理模块
//Route::resource('admin/user','Admin\UserController');
//后台商品管理模块
//Route::resource('admin/goods','Admin\GoodsController');



//路由组
//后台路由
//完成用户的登录路由
Route::get('admin/login',"Admin\LoginController@index");
//登录操作
Route::post('admin/check',"Admin\LoginController@check");
//通过路由组，提取公共命名空间 公共的前缀  中间件
Route::group(['namespace'=>"Admin","prefix"=>"admin","middleware"=>"adminLogin"],function(){
	Route::get('','IndexController@index');
	//后台用户管理模块
	Route::resource('user','UserController');
	//后台商品管理模块
	Route::resource('goods','GoodsController');
	//后台图片管理模块
	Route::resource('pic','PicController');
	
});
Route::group(['namespace'=>"Home"],function(){
	//前台首页
	Route::get('','IndexController@index');
});



/* 模拟PUT请求、delete请求
{{csrf_field}}
<input type="hidden" name="_method" value="put">
<input type="hidden" name="_method" value="delete">
*/
/*
//请求
Route::get('request','RequestController@index');

Route::match(['get','post'],'admin/user/add','UserController@add');

//注册页面
Route::get('reg','LoginController@index');
//注册操作
Route::post('insert','LoginController@insert');

//图片上传
Route::get('photo','UserController@photo');
//处理文件上传
Route::post('upload','UserController@upload');

//查看cookie
Route::get('cookie','UserController@cookie');*/

//响应
//Route::get('xiang',function(){
	
	//响应字符串
	//return "123";
	//响应数组形式
	//如果响应数组的话，直接回转换成json
	//$arr=array('name'=>'小镊子','love'=>'小猫咪');
	
	//return $arr;
	//响应页面
	//$arr=array('name'=>'小镊子','love'=>'小猫咪');
	//$arr1=array('name'=>'小镊子1','love'=>'小猫咪1');
	//$arr2=array('name'=>'小镊子2','love'=>'小猫咪2');
	//$arr3=array('name'=>'小镊子3','love'=>'小猫咪3');
	//return view('xiang')->with($arr);
	//return view('xiang')->with(['name'=>'小镊子','love'=>'小猫咪']);
	//$data=array(
	//	'brr'=>$arr,
	//	'brr1'=>$arr1,
	//	'brr2'=>$arr2,
	//	'brr3'=>$arr3,
	//);
	//return view('xiang')->with($data);

	//return response()->json(['name'=>'小镊子','love'=>'小猫咪']); //返回 /u3434
	
	//文件下载
	//return response()->download('./Uploads/a.png','sqf.png');
	#会报错  需要打开php.ini 开启扩展 extension=php_fileinfo.dll
	#重启服务
	
	//文件查看
	//return response()->file('./Uploads/a.png');
	
//});

//视图
//Route::get('shitu','ShiTuController@index');
//Route::get('shitu1','ShiTuController@index1');
//Route::get('buju','ShiTuController@buju');
//Route::get('baohan','ShiTuController@baohan');

//数据库操作
Route::get('/','DataController@index');


