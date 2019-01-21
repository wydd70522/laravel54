<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">

        <title>Laravel</title>

    </head>
    <body>
	
	<!--可以直接使用php代码 但是不建议大家使用-->
	
	{{date('Y-m-d H:i:s')}}
	<hr>
	{{substr(strtoUpper(md5($pass)),10,2)}}
	<hr>
	{{$pass1 or "数据不存在"}}
	<hr>
	{!!$html!!}
	<hr>
	@{{$pass}}
    </body>
</html>
