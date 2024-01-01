<main class="main__content_wrapper">
    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title text-white mb-25">Quên mật khẩu</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.php">Trang chủ</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text-white">Quên mật khẩu</span></li>
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
                <div class="row forgot-pass">
                    <div class="col">
                        <div class="account__login">
                            <form action="index.php?pg=forgot-password" method="post">
                                <div class="account__login--header mb-25">
                                    <h2 class="account__login--header__title h3 mb-10">Quên mật khẩu</h2>
                                </div>
                                <div class="account__login--inner">
                                    <input class="account__login--input" placeholder="Username của bạn" type="text" name="fg_usr" value="<?= isset($usr) ? $usr : '' ?>">
                                    <input class="account__login--input" placeholder="Email của bạn" type="text" name="fg_mail" value="<?= isset($Mailer) ? $Mailer : '' ?>">
                                    <div class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-center">
                                        <?=$tb_mail;?>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Gửi xác nhận" class="account__login--btn primary__btn" name="guiemail">
                                    </div>
                                </div>
                            </from>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End shipping section -->
</main>