<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

//公共控制器
class CommonController extends Controller
{


	//文件上传的方法
	public function upload(Request $request){
		 //获取用户上传内容
		$file = $request->file('Filedata');
		
		//判断目录是否存在
		$dir = $request->input('files');//获取用户提交过来的files
		
		if(file_exists("./Uploads/{$dir}")){
			//echo "A";
		}else{
			//echo "B";
			mkdir("./Uploads/{$dir}");
		}
		
		 //判断上传文件是否有效
		 if($file->isValid()){
			 //获取后缀
			 $ext = $file->getClientOriginalExtension();
			 
			 //生成新的文件名
			 $newFile= time().rand().'.'.$ext;
			// echo  $newFile;
			 //移动到指定目录
			$file -> move('./Uploads/'.$dir,$newFile);
			return $newFile; //echo
			 
		 }
		 
		 
		 
	}


	
	
}
?>