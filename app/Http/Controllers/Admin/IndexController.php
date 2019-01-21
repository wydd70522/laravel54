<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{


    public function index()
    {



		//引入页面
		return view('admin.index');
    }
	
	
	
}
?>