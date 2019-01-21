<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
<?php
	//var_dump($errors);
	if(is_object($errors)){
		
	}else{
		echo "<h1>$errors</h1>";
	}
?>
        
		<form action="{{ asset('insert') }}" method="post">
			<p>
			{{csrf_field()}}
				USER:
				<input type="text" name="name" id="" value="{{old('name')}}">
			</p>
			<p>
				PASS:
				<input type="password" name="pass" id="">
			</p>
			<p>
				REPASS:
				<input type="password" name="repass" id="">
			</p>
			<p>
				TEL:
				<input type="text" name="tel" id="" value="{{old('tel')}}">
			</p>
			<p>
				EMAIL:
				<input type="text" name="email" id="" value="{{old('email')}}">
			</p>
			<p>
				<input type="submit" value="提交">
			</p>
		</form>
    </body>
</html>
