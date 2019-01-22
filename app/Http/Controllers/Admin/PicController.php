<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
	public function store(Request $request){
		//获取数据
		//dd($request->all());
		$a = DB::insert("INSERT INTO pic VALUES (?,?,?)",[null,$_POST['title'],$_POST['img']]);
		//判断是否插入成功
		if($a){
			//成功进行跳转
			return redirect("admin/pic");
		}else{
			//失败返回上一个页面
			return back();
		}
		
	}
	
	//修改图片操作 PUT
	public function update(){
		
	}
	
	//删除图片操作  DELETE
	public function destory(){
		
	}
	
	
}
?>