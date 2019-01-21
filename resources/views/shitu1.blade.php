<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">

        <title>Laravel</title>

    </head>
    <body>
	<h1>我是视图1页面</h1>
	@foreach ($data as $key=>$value)
    <h1>
        <span>{{$value->id}}</span>
        <span>{{$value->name}}</span>
        <span>{{$value->age}}</span>
		@if($value->sex == 10)
			<span>男</span>
		@elseif($value->sex == 20)
			<span>女</span>
		@else
			<span>未知</span>
        @endif
        <span>{{date('Y-m-d H:i:s',$value->updated_at)}}</span>
    </h1>
@endforeach
	
    </body>
</html>
