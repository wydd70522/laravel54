<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>

    <!--CSRF 保护表单安全 -->
        <form action="" method="post">
            {{csrf_field()}}
            <input type="text" name="search" id="">
            <input type="submit" value="搜索">
        </form>

    <table border="1" width="800px" align="center">
        <th>ID</th>
        <th>姓名</th>
        <th>年龄</th>
        <th>性别</th>
        @foreach($data as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->age}}</td>
            <td>{{$value->sex}}</td>
        </tr>
            @endforeach
    </table>
    </body>
</html>
