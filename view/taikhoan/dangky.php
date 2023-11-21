<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../login/style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-size: "Poppins" sans-serif;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 99;
        }

        .header .logo {
            font-size: 1.7em;
            color: #fff;
            text-decoration: none;
        }

        .nav a {
            position: relative;
            font-size: 1.1em;
            color: #fff;
            text-decoration: none;
            margin-left: 40px;
        }

        .nav a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 100%;
            height: 3px;
            background: #fff;
            border-radius: 5px;
            transform: scaleX(0);
            transform: 0.5s;
        }

        .nav a:hover::after {
            transform: scaleX(1);
        }

        .home {
            position: relative;
            width: 100%;
            height: 100vh;
            background: url(2752563.jpg) no-repeat;
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 80px 100px 0;
        }

        .home .content {
            max-width: 600px;
            color: #c04040;
        }

        .content h2 {
            font-size: 3em;
            letter-spacing: 0.03em;
        }

        .content p {
            margin: 10px 0 40px;
        }

        .content a {
            color: #fff;
            text-decoration: none;
            border: 2px solid #fff;
            font-weight: 500;
            padding: 10px 40px;
            border-radius: 40px;
            transition: 0.5s;
        }

        .content a:hover {
            background: #1e0b04;
        }

        .home .wrapper-login {
            position: relative;
            width: 600px;
        }

        .wrapper-login h2 {
            font-size: 2em;
            color: #100707;
            text-align: center;
        }

        .wrapper-login .input-box {
            position: relative;
            width: 100%;
            height: 50%;
            margin: 40px 0;
        }

        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: 1px solid #181313;
            outline: none;
            border-radius: 40px;
            font-size: 1.9em;
            color: #130909;
            padding: 0 5px 0 45px;
        }

        .input-box label {
            position: absolute;
            top: 50%;
            left: 45px;
            transform: translateY(-50%);
            font-size: 1em;
            color: #160d0d;
            pointer-events: none;
            transition: 0.5s;
        }

        .input-box input:focus~label,
        .input-box input:valid~label {
            font-size: 0.8em;
            top: -14px;
            left: 17px;
        }

        .input-box .icon {
            position: absolute;
            top: 5px;
            left: 15px;
            font-size: 1.2em;
            color: #120909;
        }

        .wrapper-login .wrapper-forgot {
            font-size: 0.9em;
            color: #211616;
            margin: -25px 0 15px;
            display: flex;
            justify-content: space-between;
        }

        .remember-forgot label input {
            accent-color: #1e0b04;
            margin-right: 3px;
        }

        .remember-forgot a {
            color: #1e1818;
            text-decoration: none;
            float: right;
        }

        .remember-forgot a:hover {
            text-decoration: underline;
        }

        .wrapper-login .btn {
            width: 100%;
            height: 50px;
            border: none;
            outline: none;
            border-radius: 40px;
            background: linear-gradient(90deg, #df977c, #c04040);
            box-shadow: 0 8px 10px rgba(0, 0, 0, 0.5);
            cursor: pointer;
            font-size: 1em;
            color: #110c0c;
            font-weight: 600;
        }

        .wrapper-login .register-link {
            font-size: 0.9em;
            color: #141212;
            text-align: center;
            margin: 30px 0;
        }

        .register-link p a {
            color: #110a0a;
            text-decoration: none;
            font-weight: 600;
        }

        .register-link p a:hover {
            text-decoration: underline;
        }

        /*....trang chủ...*/

        .banner img {
            width: 80%;
            height: 100px;
            image-rendering: crisp-edges;
            margin-left: 10%;
        }

        .logo img {
            width: 200px;
            height: 100px;
            margin-left: 60px;
        }

        .content1 {
            display: flex;
        }

        .content1 .search {
            margin-left: 100px;
            margin-top: 30px;
            width: 900px;
        }

        .content1 .search input {
            width: 800px;
            height: 40px;
            border-radius: 20px !important;
        }

        .content1 .search button {
            width: 90px;
            height: 40px;
            border-radius: 20px !important;
        }

        .content1 .cart {
            margin-top: 30px;
            margin-left: 100px;
        }

        .content1 .cart a {
            display: flex;
            flex-direction: column;
            text-decoration: none;
        }

        .content1 .login {
            margin-top: 30px;
            margin-left: 10px;
        }

        .content1 .login a {
            display: flex;
            flex-direction: column;
            text-decoration: none;
        }

        .thongbao{
            color:red;
        }
    </style>
</head>

<body>
    <header class="header">
        <a href="#" class="logo"><ion-icon name="book"></ion-icon>coffee</a>
        <nav class="nav">
            <a href="#">Trang Chủ</a>
            <a href="#">Liên Hệ</a>
            <a href="#">Liên hệ</a>
            <a href="#">Thông tin</a>
        </nav>
    </header>

    <section class="home">
    <div class="content">
            <h2>Chào mừng bạn đến với HomeBook</h2>
            <p>Chào mừng bạn đến với nhà sách của chúng tôi nơi mà bạn
                thỏa sức đam mê đọc sách với nhiều loại sách khác nhau
            </p>
            <a href="#">Chào Mừng</a>
        </div>

        <div class="wrapper-login">
            <h2>Member Login</h2>
            <form action="index.php?act=dangky" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="email"></ion-icon></span>
                    <input type="email" required name="email">
                    <label>Enter your email</label>
                </div>
                <div class="input-box">
                    <input type="text" required name="user">
                    <label>Ten dang nhap</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required name="pass">
                    <label>Nhập mật khẩu</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                </div>
                <input type="submit" value="dangky" name="dangky" class="btn" />
                <div class="register-link">
                    <p>Not a member <a href="">Sign up now</a></p>
                </div>
            </form>
            <h2 clas="thongbao">
                <?php
                    if(isset($thongbao) &&($thongbao != "")){
                        echo $thongbao;
                    }
                ?>
            </h2>
        </div>

    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
