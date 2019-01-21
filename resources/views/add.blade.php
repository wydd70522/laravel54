<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        
		<form action="{{ asset('admin/user/add') }}?meinv=xiaoma&shuaige=qiangge" method="post">
			<p>
			{{csrf_field()}}
				USER:
				<input type="text" name="name" id="">
			</p>
			<p>
				PASS:
				<input type="password" name="pass" id="">
			</p>
			<p>
				<input type="submit" value="提交">
			</p>
		</form>
    </body>
</html>
