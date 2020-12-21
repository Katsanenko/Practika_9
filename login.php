<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        .container {
            width: 400px;
            padding-top: 3em;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="auth.php" method="post">
            <input type="text" name="login" placeholder="Введите логин" /><br>
            <input type="password" name="password" placeholder="Введите пароль" /><br>
            <input type="submit" value="Отправить"/>
        </form>
    </div>
</body>
</html>