<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{


    public function index()
    {

        if(empty($_POST['search'])){
            $data= DB::table('student')->get();
        }else{
            echo "<h2>用户使用了搜索</h2>";
            $data= DB::table('student')->get();
        }


        return view('user')->with("data",$data);
    }
	
	//新建UserInfo   带参数访问到控制器
	public function UserInfo($name11,$sex2){
		var_dump($name11);
		var_dump($sex2);
	}
	
	public function abc(){
		echo "ABC";
	}
	
	public function shuai(){
		//echo route('one');
		//return redirect('abc'); 重定向
		//通过命名路由实现重定向
		return redirect()->route('one');
	}
	
}
?>