<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

class UserController extends Controller
{

	//后台用户管理首页方法  GET
    public function index()
    {

		//加载用户管理界面

			return view('admin.user.index');
    }
	
	//后台用户管理修改页面 GET
	public function edit(){
		
		return view('admin.user.edit');
	}
	
	
	//后台用户管理添加页面 GET
	public function create(){
		
		return view('admin.user.create');
	}
	
	
	
	//添加操作  POST
	public function store(){
		
	}
	
	//修改操作 PUT
	public function update(){
		
	}
	
	//删除操作  DELETE
	public function destory(){
		
	}
	
	
}
?>