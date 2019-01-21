<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;


//数据库控制器
class DataController extends Controller
{
   
   //展示页面
   public function index(){

	   //连接数据
	   //$data = \DB::select('select * from user');
	  // dd($data);
	  //删除数据
	   
	   //返回影响行数
	  // var_dump(\DB::delete('delete from user where id=5'));
	  
	  //增加数据
	  //返回值bool
	 // var_dump(\DB::insert("INSERT INTO user VALUES(null,'123','123',0,'121213323')"));
	  
	  //修改数据
	  //返回值 影响行数
	  // var_dump(\DB::update('update user set name="帅哥" where id>3'));
	  // var_dump(\DB::update('update user set name="帅哥1" where id>?',['3']));
	  
	  //运行一段命令
	  //创建一个数据库
	 // \DB::statement("create database yzmedu1");
	  
	 //\DB::statement("drop database yzmedu1");
	/* 
	 //事物机制
	 \DB::beginTransaction();
	 
	 //删除id=6数据 YOU
	 $a=\DB::delete('delete from user where id=:id',['id'=>26]);
	  //删除id=10数据 WU
	 $b=\DB::delete('delete from user where id=:id',['id'=>200]);
	 if($a && $b){
		 //提交事务
		 \DB::commit();
	 }else{
		 //回滚事务
		 \DB::rollBack();
		// echo "11";
	 }

	 DB::transaction(function () {
				 //删除id=6数据 YOU
			 DB::delete('delete from user where id=?',['12']);
			  //删除id=10数据 WU
			 DB::delete('delete from user where id=?',['20']);
		});

	   */
   }
	
}
