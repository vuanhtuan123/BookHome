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
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" required>
                        <label>Enter your email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required>
                        <label>Enter your password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#">Forgot password?</a>
                    </div>
                    <button type="submit" class="btn">Login</button>
                    <div class="register-link">
                        <p>Not a member <a href="#">Sign up now</a></p>
                    </div>
                </form>
            </div>
            <div class="boxphai">
               <?php include "boxright.php";?>
            </div>
            

        </section>