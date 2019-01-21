<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

//User控制器
class UserController extends Controller
{
   
   //添加方法
   public function add(Request $request){

	//判断当前是get请求
	if($request->isMethod('GET')){
		//加载添加页面
		return view('add');
	}else{
		echo('插入数据库');
		//var_dump($_POST);
		//var_dump($_GET);
		//获取所有的请求数据 POST GET PUT..
		$data = $request->all();	
		//dd($data);
		//获取特定字段
		//echo $request->input('name');
		//设置默认值
		//echo $request->input('yao','强哥');
		
		//判断属性是否存在
		//var_dump($request->has('sex'));
		
		//获取部分数据
		//$data1=$request->only('name','meinv');
		//$data1=$request->only(['name','meinv']);
		//获取除了某些字段以外的数据
	//	$data1=$request->except('_token','name');
		$data1=$request->except(['_token','name']);
		var_dump($data1);
		
	}

   }
   
   //文件上传页面
   public function photo(){
	   
	   return view('photo');
   }
   
   //上传文件处理
   public function upload(Request $request){
	  // var_dump($_FILES);
	  //var_dump($request->all());
	  //如何实现文件上传
	  //1.1 判断是否上传文件
	  //1.2 把文件移动到指定目录
	  
	  //获取上传文件
	  //$img = $request -> file('img');
	 // $img2 = $request -> img;
	  //dd($img2);
	  //判断上传的文件是否存在
	 // var_dump($request->hasFile("img"));
	 
	 if($request->hasFile('img')){
		 //获取后缀名
		 $ext= $request ->file('img')-> getClientOriginalExtension();
		 //新的文件名
		 $newFile=time().rand().".".$ext;
		 
		 //上传文件操作
		 $request->file('img')->move('./Uploads',$newFile);//[实际开发中使用无刷新上传文件]
	 }else{
		 //回到上一个页面
		 return back();
	 }
	   
   }
   //新建cookie方法
   public function cookie(Request $request){
	   //查看所有cookie
	   //laravel 框架把所有的cookie进行加密
	   //$_COOKIE['name'] =/= $request->cookie('name')
	   var_dump($_COOKIE);

	var_dump ($request->cookie());
	//  echo "<hr>";
	//  echo Cookie::get('laravel_session');

       //设置COOKIE
       //Cookie::queue('shuaige','非浩哥莫属',10);
     // $cookie = cookie('name1', 'value1', 10);

     //  return response('Hello World')->cookie($cookie);
   }
   
   
	
}
