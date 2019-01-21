<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
    <!--CSRF 保护表单安全 -->
        <form action="check" method="post">
            {{csrf_field()}}
            <p>
                User:
                <input type="text" name="user" id="">
            </p>
            <p>
                PASS:
                <input type="password" name="password" id="">
            </p>
            <p>
                <input type="submit" value="提交">
                <input type="reset" value="重置">
            </p>
        </form>
		
    </body>
</html>
