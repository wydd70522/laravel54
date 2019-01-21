<?php

namespace App\Http\Middleware;

use Closure;

class adminLogin
{
    /**
     * Handle an incoming request. 处理传入的请求。
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next 关闭
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		//判断session中是否存在用户数据
		//如果存在访问后台 不存在请用户登录
		
		if(session('adminUserInfo')){
			
			return $next($request);
		}else{
			//让用户登录
			return redirect('admin/login');
		}
		
      
    }
}
