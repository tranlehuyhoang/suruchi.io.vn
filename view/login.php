<main class="main__content_wrapper">  
    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title text-white mb-25">Đăng nhập - Đăng ký</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.php">Trang chủ</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text-white">Đăng nhập - Đăng ký</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start login section  -->
    <div class="login__section section--padding">
        <div class="container">
            <div class="login__section--inner">
                <div class="row row-cols-md-2 row-cols-1">
                    <form action="index.php?pg=signin" name="form" method="post">
                        <div class="col">
                            <div class="account__login">
                                <div class="account__login--header mb-25">
                                    <h2 class="account__login--header__title h3 mb-10">Đăng Nhập</h2>
                                    <p class="account__login--header__desc">Đăng nhập nếu bạn là khách hàng cũ.</p>
                                </div>
                                <div class="account__login--inner">
                                    <input class="account__login--input" name="username" placeholder="Tên đăng nhập" type="text">
                                    <input class="account__login--input" name="password" placeholder="Mật khẩu" type="password">
                                    <span style="color: red;">
                                        <?php 
                                            if(isset($_SESSION['tb_dangnhap'])&&($_SESSION['tb_dangnhap']!="")) {
                                                echo $_SESSION['tb_dangnhap'];
                                                unset($_SESSION['tb_dangnhap']);
                                            }
                                        ?>
                                    </span> <br>
                                    <div class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-center">
                                        <div class="account__login--remember position__relative">
                                            <input class="checkout__checkbox--input" id="check1" type="checkbox">
                                            <span class="checkout__checkbox--checkmark"></span>
                                            <label class="checkout__checkbox--label login__remember--label" for="check1">Ghi nhớ mật khẩu</label>
                                        </div>
                                        <a class="account__login--forgot" href="index.php?pg=forgot-password">Quên mật khẩu</a>
                                    </div>
                                    <button class="account__login--btn primary__btn" name="login" type="submit">Đăng Nhập</button>
                                    <div class="account__login--divide">
                                        <span class="account__login--divide__text">HOẶC</span>
                                    </div>
                                    <div class="account__social d-flex justify-content-center mb-15">
                                        <a class="account__social--link facebook" target="_blank" href="https://www.facebook.com">Facebook</a>
                                        <a class="account__social--link google" target="_blank" href="https://www.google.com">Google</a>
                                        <a class="account__social--link twitter" target="_blank" href="https://twitter.com">Twitter</a>
                                    </div>
                                    <p class="account__login--signup__text">Bạn chưa có tài khoản? <a href="#">Đăng ký ngay</a></p>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form action="index.php?pg=adduser" name="form" method="post">
                        <div class="col">
                            <div class="account__login register">
                                <div class="account__login--header mb-25">
                                    <h2 class="account__login--header__title h3 mb-10">Tạo tài khoản</h2>
                                    <p class="account__login--header__desc">Đăng ký tại đây nếu bạn là khách hàng mới</p>
                                </div>
                                <div class="account__login--inner">
                                    <input class="account__login--input" name="username" placeholder="Tên đăng nhập" type="text">
                                    <input class="account__login--input" name="email" placeholder="Email của bạn" type="text">
                                    <input class="account__login--input" name="password" placeholder="Mật khẩu" type="password">
                                    <input class="account__login--input" name="repassword" placeholder="Xác nhận mật khẩu" type="password">
                                    <span style="color: red;"><?=$tbdk;?></span><br>
                                    <button class="account__login--btn primary__btn mb-10" name="register" type="submit">Đăng Ký</button>
                                    <div class="account__login--remember position__relative">
                                        <input class="checkout__checkbox--input" id="check2" type="checkbox">
                                        <span class="checkout__checkbox--checkmark"></span>
                                        <label class="checkout__checkbox--label login__remember--label" for="check2">
                                            Tôi đã đọc và đồng ý với các điều khoản và điều kiện</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>     
    </div>
    <!-- End login section  -->

    <!-- Start shipping section -->
    <section class="shipping__section2 shipping__style3 section--padding pt-0">
        <div class="container">
            <div class="shipping__section2--inner shipping__style3--inner d-flex justify-content-between">
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img src="./view/assets/img/other/shipping1.png" alt="">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">Vận Chuyển</h2>
                        <p class="shipping__items2--content__desc">Miễn Phí Vận Chuyển</p>
                    </div>
                </div>
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img src="./view/assets/img/other/shipping2.png" alt="">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">Thanh Toán</h2>
                        <p class="shipping__items2--content__desc">Thanh toán trực tiếp và trực tuyến</p>
                    </div>
                </div>
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img src="./view/assets/img/other/shipping3.png" alt="">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">Liên Hệ</h2>
                        <p class="shipping__items2--content__desc">Hotline: 10072004</p>
                    </div>
                </div>
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img src="./view/assets/img/other/shipping4.png" alt="">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">Hỗ trợ</h2>
                        <p class="shipping__items2--content__desc">Hỗ trợ 24/7</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End shipping section -->
</main>
<script>

</script>
