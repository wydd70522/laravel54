<?php
namespace App\Http\Controllers\Home;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;//使用Controller
//前台首页模块
class IndexController extends Controller
{
	//前台首页方法
    public function index()
    {
		echo "前台首页";
    
    }
	

}
?>