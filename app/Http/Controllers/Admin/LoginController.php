<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;


//后台登录控制器
class LoginController extends Controller
{

	//后台登录方法
    public function index()
    {

		return view('admin/login');
    }
	
	//后台登录处理
	public function check(){
		//dd($_POST);
		//判断
		if($_POST['name']=='admin' && $_POST['pass']=='123'){
			session(['adminUserInfo'=>$_POST['name']]);
			return redirect('admin');
		}else{
			return back();
		}
		
	}
	
	
}
?>