<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

//后台图片管理控制器
class PicController extends Controller
{

	//后台图片首页方法  GET
    public function index()
    {

		//加载图片管理界面

			return view('admin.pic.index');
    }
	
	//后台图片管理修改页面 GET
	public function edit(){
		
		return view('admin.pic.edit');
	}
	
	
	//后台图片管理添加页面 GET
	public function create(){
		
		return view('admin.pic.create');
	}
	
	
	
	//添加图片操作  POST
	public function store(){
		
	}
	
	//修改图片操作 PUT
	public function update(){
		
	}
	
	//删除图片操作  DELETE
	public function destory(){
		
	}
	
	
}
?>