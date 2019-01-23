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
		//从数据库中读取相关数据
		$data = DB::select("select * from pic");
		//var_dump($data);



		//加载图片管理界面

			return view('admin.pic.index')->with('data',$data);
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
	public function destroy(Request $request){
		
		//var_dump($request->all());
		//获取删除id
		$id=$request->input('id');
		
		//查询图片
		$data=DB::select("select * from pic where id=?",[$id]);
		//var_dump($data);exit;
		//echo $data[0]->img;
		//exit;
		
		 //删除操作 1成功  0失败
		 if(DB::delete('delete from pic where id=?',[$id])){
			//删除成功,删除图片
			if(!empty($data[0]->img)){
				unlink("./Uploads/Goods/".$data[0]->img);
			 }
			 return '1';
		 }else{
			 return '0';
		 }
	}
	
	
}
?>