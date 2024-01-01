<main class="main__content_wrapper">
    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title text-white mb-25">Tài khoản</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.php">Trang chủ</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text-white">Tài khoản</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- my account section start -->
    <section class="my__account--section section--padding">
        <div class="container">
            <div class="my__account--section__inner border-radius-10 d-flex">
                <div class="account__left--sidebar">
                    <h2 class="account__content--title h3 mb-20">Thông tin của tôi</h2>
                    <ul class="account__menu">
                        <li class="account__menu--list active"><a href="index.php?pg=my-account">Tài khoản</a></li>
                        <li class="account__menu--list"><a href="index.php?pg=my-account-3">Đơn hàng của tôi</a></li>
                        <li class="account__menu--list"><a href="index.php?pg=logout">Đăng xuất</a></li>
                        <?php 
                            if($role==1){
                                echo '<li class="account__menu--list"><a href="admin/index.php">Dành cho Admin</a></li>';
                            }
                        ?>
                    </ul>
                </div>
                <div class="account__wrapper">
                    <form class="account__content" action="index.php?pg=change-pw" method="post" enctype="multipart/form-data">
                      <h3 class="account__content--title mb-20">Đổi mật khẩu</h3>
                        <input type="hidden" value="<?=$username?>" name="username">
                        <input class="account__login--input" placeholder="Nhập mật khẩu hiện tại" type="password" name="pw">
                        <input class="account__login--input" placeholder="Nhập mật khẩu mới" type="password" name="newpw" >
                        <input class="account__login--input" placeholder="Xác nhận mật khẩu mới" type="password" name="repw">
                        <div class="account__details--footer d-flex">
                          <button class="account__details--footer__btn" name="change_pw" type="submit">Cập nhật</button>
                        </div> <br>
                        <?=$tbpw?>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- my account section end -->

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
