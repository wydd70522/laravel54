<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>

        <!-- {{ asset('insert') }}   value="{{old('name')}}" -->
		<form action="/upload" method="post" enctype="multipart/form-data">
			<p>
			{{csrf_field()}}
				PHOTO:
				<input type="file" name="img" id="">
			</p>
			
			<p>
				<input type="submit" value="提交">
			</p>
		</form>
    </body>
</html>
