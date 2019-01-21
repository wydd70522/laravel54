<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//login控制器
class LoginController extends Controller
{
	//注册页面
	public function index(){
		
		return view('reg');
		
	}
	
	//注册功能
	public  function insert(Request $request){
		
		//判断用户名长度
		$name = $request->input('name');
		
		//写入闪存
		//把表单提交所有数据写入闪存
		//$request->flash();
		//把谁写入闪存
		//$Request->flashOnly();
		//除了谁写入闪存
		//$Request->flashExcept();
		
		if(strlen($name)>=6 && strlen($name)<=12) {
			
		}else{
			//back()直接回退到上个页面
			//withInput()  把当前所有数据都写入闪存
			return back()->with('errors','用户名长度不满足')->withInput();
		}
	}
	
}
