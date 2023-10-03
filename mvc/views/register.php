<div class="customer-login">
    <h2 class="customer-login-title text-center">Đăng Ký</h2>
    <form action="../register/process_register" method="post" class="customer-login-form">
        <label class="customer-login-label">
            <span>Họ tên</span>
            <span class="error-name-form">
                <?php
                if (isset($_SESSION['error_name'])) {
                    echo $_SESSION['error_name'];
                    unset($_SESSION['error_name']);
                }
                if (isset($_SESSION['empty_value'])) {
                    echo $_SESSION['empty_value'];
                }
                ?>
            </span>
            <input type="text" class="customer-login-input input-name" name="name" placeholder="eg: Nguyen Van A">
        </label>
        <label class="customer-login-label">
            <span>Số điện thoại</span>
            <span class="error-name-form">
                <?php
                if (isset($_SESSION['empty_value'])) {
                    echo $_SESSION['empty_value'];
                }

                if (isset($_SESSION['error_phone_number'])) {
                    echo $_SESSION['error_phone_number'];
                    unset($_SESSION['error_phone_number']);
                }
                ?>
            </span>
            <input type="text" class="customer-login-input input-phone-number" name="phone_number" placeholder="eg: 0123456789 or +84123456789">
        </label>
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
            <input type="text" class="customer-login-input" name="email" placeholder="eg: example@gmail.com">
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
            <input type="password" class="customer-login-input" name="password" placeholder="Mật khẩu ít nhất 8 ký tự chứa 1 số 1 chữ cái.">
        </label>
        <label class="customer-login-label">
            <span>Địa chỉ</span>
            <input type="text" class="customer-login-input" name="address">
        </label>
        <button class="customer-login-btn" name="formRegister" type="button" onclick="validateForm()">Đăng ký</button>
    </form>
    <div class="customer-login-wrap">
        <a class="customer-login-forgot" href="../sign-in/forgot_password.php">Quên mật khẩu?</a>
        <a class="customer-login-signup" href="../login/">Đăng Nhập</a>
    </div>
</div>

<script>
        function validateForm() {
            let name = document.querySelector('.input-name').value;
            let phone_number = document.querySelector('.input-phone-number').value;
            // let span_empty1 = document.querySelectorAll('.customer-login-input');
            // alert (name);
            if (name == '' || phone_number == '') {
                window.sessionStorage.setItem('empty_value', '(*) Thông tin không được để trống');
                error_empty = window.sessionStorage.getItem('empty_value');
                document.querySelector('.error-name-form').innerHTML = error_empty
                // sessionStorage.removeItem('empty_value');
            } else {
                document.querySelector('.customer-login-btn').setAttribute('type', 'submit')
            }
        }
</script>