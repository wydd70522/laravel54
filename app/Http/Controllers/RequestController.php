<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//laravel 的请求  GET,POST,.....
class RequestController extends Controller
{
    //首页方法
	public function index(Request $request){
		
		//dd($request);
		//输出当前url地址 不带有查询字符串的 URL
		//echo $request->url();
		//echo "<br>";
		//echo $request->fullUrl();
		//echo "<br>";
		
		//获取URL的路径部分  路由
		//echo $request->path();
		
		//判断路由是否是request  返回值 TRUE|false
		
		//var_dump($request->is('request*'));
		
		//当前的请求类型
		echo $request->method();
		
		//判断当前的请求是不是get请求
		var_dump($request->isMethod('POST'));
		
		
	}
	
}
