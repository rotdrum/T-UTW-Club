<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;300;500;700;900&display=swap');
    
        * {
            margin: 0;
            padding: 0;
            font-family: 'Roboto Slab', serif;
        }
        .container {
            width: 1000px;
            display: flex;
            align-items: center;
            flex-direction: column;
            margin: 100px auto;
        }
        .txt-login {
            width: 20%;
            padding: 10px;
            font-size: 1rem;
            margin: 10px 0;
        }
        .btn-login {
            width: 22%;
            background: #000;
            color: #fff;
            padding: 10px 20px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }
        a {
            margin: 10px 0;
        }
        .notice-error {
            color: #e74c3c;
            border: 2px solid #e74c3c;
            padding: 10px 40px;
            background: #FFD2CA;
        }
    </style>
</head>
<body>
    <form class="container" action="postlogin_admin.php" method="post">
        <h1>Login</h1>
        <input type="text" name="password" class="txt-login" placeholder="PASS CODE">
        <button type="submit" name="btn_login" class="btn-login">Login</button>
        <a href="index.php">Not yet a member?</a>
    </form>
</body>
</html>