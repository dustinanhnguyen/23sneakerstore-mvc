<div class="customer-login">
    <h2 class="customer-login-title text-center">Đăng nhập</h2>

    <span class="error-name-form">
        <?php
        if (isset($_SESSION['error_login'])) {
            echo $_SESSION['error_login'];
            unset($_SESSION['error_login']);
        }
        ?>
    </span>
    <form action="../login/process_login/" method="post" class="customer-login-form">
        <label class="customer-login-label">
            <span>Email</span>
            <span class="error-name-form">
                <?php
                if (isset($_SESSION['error_email_exist'])) {
                    echo $_SESSION['error_email_exist'];
                    unset($_SESSION['error_email_exist']);
                }
                if (isset($_SESSION['error_email'])) {
                    echo $_SESSION['error_email'];
                    unset($_SESSION['error_email']);
                }
                if (isset($_SESSION['empty_value'])) {
                    echo $_SESSION['empty_value'];
                }
                ?>
            </span>
            <input class="customer-login-input" type="email" name="email">
        </label>
        <label class="customer-login-label">
            <span>Mật khẩu</span>
            <span class="error-name-form">
                <?php
                if (isset($_SESSION['empty_value'])) {
                    echo $_SESSION['empty_value'];
                    unset($_SESSION['empty_value']);
                }
                if (isset($_SESSION['error_password'])) {
                    echo $_SESSION['error_password'];
                    unset($_SESSION['error_password']);
                }
                ?>
            </span>
            <input class="customer-login-input" type="password" name="password">
        </label>
        <label style="margin-top: 12px">
            <span class="span-remember">Ghi nhớ đăng nhập </span>
            <input type="checkbox" name="remember" id="">
        </label>
        <button class="customer-login-btn" name="formLogin">Đăng nhập</button>
    </form>
    <div class="customer-login-wrap">
        <a class="customer-login-forgot" href="./forgot_password.php">Quên mật khẩu?</a>
        <a class="customer-login-signup" href="../register/">Đăng ký</a>
    </div>
</div>