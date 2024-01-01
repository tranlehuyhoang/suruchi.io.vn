<?php 
    if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
        extract($_SESSION['s_user']);
        $html_account='<li class="header__account--items1">
                            <a class="header__account--btn" href="index.php?pg=my-account">
                                <img class="img-xs rounded-circle" src="./uploads/'.$img.'" alt="" alt="User" width="40px" height="40px">
                                <span class="header__account--btn__text">'.$username.'</span>
                            </a>
                        </li>';
        $html_account_mobile='<a class="offcanvas__account--items__btn d-flex align-items-center" href="index.php?pg=my-account">
                                <img class="img-xs rounded-circle" src="./uploads/'.$img.'" alt="" alt="User" width="40px" height="40px">
                                <span class="offcanvas__account--items__label">'.$username.'</span>
                            </a>';
        $html_account_scroll='<a class="header__account--btn" href="index.php?pg=my-account">
                                <img class="img-xs rounded-circle" src="./uploads/'.$img.'" alt="" alt="User" width="30px" height="30px">
                            </a>';  
    }else {
        $html_account='<li class="header__account--items">
                            <a class="header__account--btn" href="index.php?pg=signin-signup">
                                <svg xmlns="http://www.w3.org/2000/svg"  width="26.51" height="23.443" viewBox="0 0 512 512"><path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg> 
                                <span class="header__account--btn__text">Đăng Nhập</span>
                            </a>
                        </li>';
        $html_account_mobile='<a class="offcanvas__account--items__btn d-flex align-items-center" href="index.php?pg=signin-signup">
                                <span class="offcanvas__account--items__icon"> 
                                    <svg xmlns="http://www.w3.org/2000/svg"  width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg> 
                                </span>
                                <span class="offcanvas__account--items__label">Đăng nhập / Đăng ký</span>
                            </a>';
        $html_account_scroll='<a class="header__account--btn" href="index.php?pg=signin-signup">
                                <svg xmlns="http://www.w3.org/2000/svg"  width="26.51" height="23.443" viewBox="0 0 512 512"><path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                <span class="visually-hidden">Đăng Nhập</span>
                            </a>';
        
    }

    $html_cart='';
    if(isset($_SESSION['giohang'])&&is_array($_SESSION['giohang'])) {
        $i=0;
        $sum=0;
        foreach ($_SESSION['giohang'] as $item) {
            extract($item);
            $tt= (int)$price* (int)$amount;
            (int)$sum += (int)$price* (int)$amount;
            $linkdel="index.php?pg=delcart-box&ind=".$i;
            $html_cart.='<div class="minicart__product--items d-flex">
                            <div class="minicart__thumb">
                                <img src="./uploads/'.$img.'" alt="prduct-img">
                            </div>
                            <div class="minicart__text">
                                <h3 class="minicart__subtitle h4">'.$name.'</h3>
                                <div class="minicart__price">
                                    <span class="current__price">'.number_format($price,0,",",".").'VNĐ</span>
                                    <span class="old__price">'.number_format($price,0,",",".").'VNĐ</span>
                                </div>
                                <div class="minicart__text--footer d-flex align-items-center" data-product-id="'.$id.'" data-product-price="'.$price.'">
                                    <div class="quantity__box minicart__quantity">
                                        <button type="button"  class="quantity__value decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                        <label>
                                            <input type="number" class="quantity__number form-input-number" min="1" max="50" value="'.$amount.'" data-counter />
                                        </label>
                                        <button type="button" class="quantity__value increase"  value="Increase Value">+</button>
                                    </div>
                                    <a href="'.$linkdel.'">
                                        <button class="minicart__product--remove">Xóa</button>
                                    </a>
                                </div>
                            </div>
                        </div>';
                        $i++; 
        }
    }
?>

<!doctype html>
<html lang="vi">

<head>
  <meta charset="utf-8">
  <title>Suruchi</title>
  <meta name="description" content="Morden Bootstrap HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="./view/assets/img/favicon.ico">
    
   <!-- ======= All CSS Plugins here ======== -->
  <link rel="stylesheet" href="./view/assets/css/plugins/swiper-bundle.min.css">
  <link rel="stylesheet" href="./view/assets/css/plugins/glightbox.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Plugin css -->
  <link rel="stylesheet" href="./view/assets/css/vendor/bootstrap.min.css">

  <!-- Custom Style CSS -->
  <link rel="stylesheet" href="./view/assets/css/style.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>

    <!-- Start preloader -->
    <!-- <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    
                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
                    
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    
                    <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
                </div>
            </div>	
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div> -->
    <!-- End preloader -->
	
    <!-- Start header area -->
    <header class="header__section">
        <div class="header__topbar bg__secondary">
            <div class="container-fluid">
                <div class="header__topbar--inner d-flex align-items-center justify-content-between">
                    <div class="header__shipping">
                        <ul class="header__shipping--wrapper d-flex">
                            <li class="header__shipping--text text-white">Chào mừng bạn đến với SURUCHI</li>
                            <li class="header__shipping--text text-white d-sm-2-none"><img class="header__shipping--text__icon" src="./view/assets/img/icon/bus.png" alt="bus-icon"> Theo dõi đơn hàng của bạn</li>
                            <li class="header__shipping--text text-white d-sm-2-none"><img class="header__shipping--text__icon" src="./view/assets/img/icon/email.png" alt="email-icon"> <a class="header__shipping--text__link" href="mailto:suruchi@gmail.com">suruchi@gmail.com</a></li>
                        </ul>
                    </div>
                    <!-- <div class="language__currency d-none d-lg-block">
                        <ul class="d-flex align-items-center">
                            <li class="language__currency--list">
                                <a class="language__switcher text-white" href="#">
                                    <span>Việt Nam</span> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11.797" height="9.05" viewBox="0 0 9.797 6.05">
                                        <path  d="M14.646,8.59,10.9,12.329,7.151,8.59,6,9.741l4.9,4.9,4.9-4.9Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                    </svg>
                                </a>
                                <div class="dropdown__language">
                                    <ul>
                                        <li class="language__items"><a class="language__text" href="#">English</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="language__currency--list">
                                <a class="account__currency--link text-white" href="#">
                                    <span>VNĐ</span> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11.797" height="9.05" viewBox="0 0 9.797 6.05">
                                        <path  d="M14.646,8.59,10.9,12.329,7.151,8.59,6,9.741l4.9,4.9,4.9-4.9Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                    </svg>
                                </a>
                                <div class="dropdown__currency">
                                    <ul>
                                        <li class="currency__items"><a class="currency__text" href="#">$ US Dollar</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="main__header header__sticky">
            <div class="container-fluid">
                <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                    <div class="offcanvas__header--menu__open ">
                        <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg" viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352"/></svg>
                            <span class="visually-hidden">Menu Open</span>
                        </a>
                    </div>
                    <div class="main__logo">
                        <h1 class="main__logo--title"><a class="main__logo--link" href="index.php"><img class="main__logo--img" src="./view/assets/img/logo/nav-log.png" alt="logo-img"></a></h1>
                    </div>
                    <div class="header__search--widget header__sticky--none d-none d-lg-block">
                        <form class="d-flex header__search--form" action="index.php?pg=shop" method="post">
                            <div class="header__select--categories select">
                                <select class="header__select--inner">
                                    <option selected value="1">Tất cả danh mục</option>
                                    <option value="2">Phụ kiện</option>
                                </select>
                            </div>
                            <div class="header__search--box">
                                <label>
                                    <input class="header__search--input" placeholder="Tìm kiếm..." type="text" name="kyw">
                                </label>
                                <button class="header__search--button bg__secondary text-white" type="submit" name="search" aria-label="search button">
                                    <svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="27.51" height="26.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="header__account header__sticky--none">
                        <ul class="d-flex">
                            <?=$html_account;?>
                            <li class="header__account--items">
                                <a class="header__account--btn minicart__open--btn" href="javascript:void(0)" data-offcanvas>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443" viewBox="0 0 14.706 13.534">
                                        <g  transform="translate(0 0)">
                                          <g >
                                            <path  data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"/>
                                            <path  data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"/>
                                            <path  data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"/>
                                          </g>
                                        </g>
                                    </svg>
                                    <span class="header__account--btn__text">Giỏ Hàng</span>   
                                    <span class="items__count" id="cart-item-count"><?php echo count($_SESSION['giohang']);?></span> 
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__menu d-none header__sticky--block d-lg-block">
                        <nav class="header__menu--navigation">
                            <ul class="d-flex">
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link" href="index.php">Trang chủ</a>
                                </li>
                                <li class="header__menu--items mega__menu--items style2">
                                    <a class="header__menu--link" href="index.php?pg=shop">Cửa hàng <a>
                                </li>
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link" href="index.php?pg=blog">Tin tức</a>
                                </li>
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link" href="index.php?pg=about">Về chúng tôi</a>  
                                </li>
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link " href="index.php?pg=contact">Liên hệ </a>  
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header__account header__account2 header__sticky--block">
                        <ul class="d-flex">
                            <li class="header__account--items header__account2--items  header__account--search__items d-none d-lg-block">
                                <a class="header__account--btn search__open--btn" href="javascript:void(0)" data-offcanvas>
                                    <svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>  
                                    <span class="visually-hidden">Tìm kiếm</span>
                                </a>
                            </li>
                            <li class="header__account--items header__account2--items">
                                <?=$html_account_scroll;?>
                            </li>
                            <li class="header__account--items header__account2--items">
                                <a class="header__account--btn minicart__open--btn" href="javascript:void(0)" data-offcanvas>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443" viewBox="0 0 14.706 13.534">
                                        <g  transform="translate(0 0)">
                                          <g >
                                            <path  data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"/>
                                            <path  data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"/>
                                            <path  data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"/>
                                          </g>
                                        </g>
                                    </svg>
                                    <span class="items__count style2" id="cart-item-count"><?php echo count($_SESSION['giohang']);?></span> 
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container-fluid">
                <div class="header__bottom--inner position__relative d-none d-lg-flex justify-content-between align-items-center">
                    <div class="header__menu">
                        <nav class="header__menu--navigation">
                            <ul class="d-flex">
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="index.php">Trang chủ<a>
                                </li>
                                <li class="header__menu--items mega__menu--items">
                                    <a class="header__menu--link" href="index.php?pg=shop">Cửa hàng</a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="index.php?pg=blog">Tin tức</a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="index.php?pg=about">Về chúng tôi</a>  
                                </li>    
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="index.php?pg=contact">Liên hệ </a>  
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <p class="header__discount--text"><img class="header__discount--icon__img" src="./view/assets/img/icon/lamp.png" alt="lamp-img"> Đặc biệt giảm giá tới 60% tất cả mặt hàng</p>
                </div>
            </div>
        </div>

        <!-- Start Offcanvas header menu -->
        <div class="offcanvas__header">
            <div class="offcanvas__inner">
                <div class="offcanvas__logo">
                    <a class="offcanvas__logo_link" href="index.php">
                        <img src="./view/assets/img/logo/nav-log.png" alt="Grocee Logo" width="158" height="36">
                    </a>
                    <button class="offcanvas__close--btn" data-offcanvas>close</button>
                </div>
                <nav class="offcanvas__menu">
                    <ul class="offcanvas__menu_ul">
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="index.php">TRANG CHỦ</a>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="index.php?pg=shop">CỬA HÀNG</a>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="index.php?pg=blog">TIN TỨC</a>
                        </li>
                        <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="index.php?pg=about">VỀ CHÚNG TÔI</a></li>
                        <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="index.php?pg=contact">LIÊN HỆ</a></li>
                    </ul>
                    <div class="offcanvas__account--items">
                        <?=$html_account_mobile;?>
                    </div>
                    <div class="language__currency">
                        <ul class="d-flex align-items-center">
                            <li class="language__currency--list">
                                <a class="offcanvas__language--switcher" href="#">
                                    <span>Việt Nam</span> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11.797" height="9.05" viewBox="0 0 9.797 6.05">
                                        <path  d="M14.646,8.59,10.9,12.329,7.151,8.59,6,9.741l4.9,4.9,4.9-4.9Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                    </svg>
                                </a>
                                <div class="offcanvas__dropdown--language">
                                    <ul>
                                        <li class="language__items"><a class="language__text" href="#">English</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="language__currency--list">
                                <a class="offcanvas__account--currency__menu" href="#">
                                    <span>VNĐ</span> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11.797" height="9.05" viewBox="0 0 9.797 6.05">
                                        <path  d="M14.646,8.59,10.9,12.329,7.151,8.59,6,9.741l4.9,4.9,4.9-4.9Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                    </svg>
                                </a>
                                <div class="offcanvas__account--currency__submenu">
                                    <ul>
                                        <li class="currency__items"><a class="currency__text" href="#">$ US Dollar</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- End Offcanvas header menu -->

        <!-- Start Offcanvas stikcy toolbar -->
        <div class="offcanvas__stikcy--toolbar">
            <ul class="d-flex justify-content-between">
                <li class="offcanvas__stikcy--toolbar__list">
                    <a class="offcanvas__stikcy--toolbar__btn" href="index.php">
                    <span class="offcanvas__stikcy--toolbar__icon"> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="21.51" height="21.443" viewBox="0 0 22 17"><path fill="currentColor" d="M20.9141 7.93359c.1406.11719.2109.26953.2109.45703 0 .14063-.0469.25782-.1406.35157l-.3516.42187c-.1172.14063-.2578.21094-.4219.21094-.1406 0-.2578-.04688-.3515-.14062l-.9844-.77344V15c0 .3047-.1172.5625-.3516.7734-.2109.2344-.4687.3516-.7734.3516h-4.5c-.3047 0-.5742-.1172-.8086-.3516-.2109-.2109-.3164-.4687-.3164-.7734v-3.6562h-2.25V15c0 .3047-.11719.5625-.35156.7734-.21094.2344-.46875.3516-.77344.3516h-4.5c-.30469 0-.57422-.1172-.80859-.3516-.21094-.2109-.31641-.4687-.31641-.7734V8.46094l-.94922.77344c-.11719.09374-.24609.14062-.38672.14062-.16406 0-.30468-.07031-.42187-.21094l-.35157-.42187C.921875 8.625.875 8.50781.875 8.39062c0-.1875.070312-.33984.21094-.45703L9.73438.832031C10.1094.527344 10.5312.375 11 .375s.8906.152344 1.2656.457031l8.6485 7.101559zm-3.7266 6.50391V7.05469L11 1.99219l-6.1875 5.0625v7.38281h3.375v-3.6563c0-.3046.10547-.5624.31641-.7734.23437-.23436.5039-.35155.80859-.35155h3.375c.3047 0 .5625.11719.7734.35155.2344.211.3516.4688.3516.7734v3.6563h3.375z"></path></svg>
                        </span>
                    <span class="offcanvas__stikcy--toolbar__label">Trang chủ</span>
                    </a>
                </li>
                <li class="offcanvas__stikcy--toolbar__list">
                    <a class="offcanvas__stikcy--toolbar__btn" href="index.php?pg=shop">
                    <span class="offcanvas__stikcy--toolbar__icon"> 
                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18.51" height="17.443" viewBox="0 0 448 512"><path d="M416 32H32A32 32 0 0 0 0 64v384a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32V64a32 32 0 0 0-32-32zm-16 48v152H248V80zm-200 0v152H48V80zM48 432V280h152v152zm200 0V280h152v152z"></path></svg>
                        </span>
                    <span class="offcanvas__stikcy--toolbar__label">Cửa hàng</span>
                    </a>
                </li>
                <li class="offcanvas__stikcy--toolbar__list ">
                    <a class="offcanvas__stikcy--toolbar__btn search__open--btn" href="javascript:void(0)" data-offcanvas>
                        <span class="offcanvas__stikcy--toolbar__icon"> 
                            <svg xmlns="http://www.w3.org/2000/svg"  width="22.51" height="20.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>   
                        </span>
                    <span class="offcanvas__stikcy--toolbar__label">Tìm kiếm</span>
                    </a>
                </li>
                <li class="offcanvas__stikcy--toolbar__list">
                    <a class="offcanvas__stikcy--toolbar__btn minicart__open--btn" href="javascript:void(0)" data-offcanvas>
                        <span class="offcanvas__stikcy--toolbar__icon"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="18.51" height="15.443" viewBox="0 0 18.51 15.443">
                            <path  d="M79.963,138.379l-13.358,0-.56-1.927a.871.871,0,0,0-.6-.592l-1.961-.529a.91.91,0,0,0-.226-.03.864.864,0,0,0-.226,1.7l1.491.4,3.026,10.919a1.277,1.277,0,1,0,1.844,1.144.358.358,0,0,0,0-.049h6.163c0,.017,0,.034,0,.049a1.277,1.277,0,1,0,1.434-1.267c-1.531-.247-7.783-.55-7.783-.55l-.205-.8h7.8a.9.9,0,0,0,.863-.651l1.688-5.943h.62a.936.936,0,1,0,0-1.872Zm-9.934,6.474H68.568c-.04,0-.1.008-.125-.085-.034-.118-.082-.283-.082-.283l-1.146-4.037a.061.061,0,0,1,.011-.057.064.064,0,0,1,.053-.025h1.777a.064.064,0,0,1,.063.051l.969,4.34,0,.013a.058.058,0,0,1,0,.019A.063.063,0,0,1,70.03,144.853Zm3.731-4.41-.789,4.359a.066.066,0,0,1-.063.051h-1.1a.064.064,0,0,1-.063-.051l-.789-4.357a.064.064,0,0,1,.013-.055.07.07,0,0,1,.051-.025H73.7a.06.06,0,0,1,.051.025A.064.064,0,0,1,73.76,140.443Zm3.737,0L76.26,144.8a.068.068,0,0,1-.063.049H74.684a.063.063,0,0,1-.051-.025.064.064,0,0,1-.013-.055l.973-4.357a.066.066,0,0,1,.063-.051h1.777a.071.071,0,0,1,.053.025A.076.076,0,0,1,77.5,140.448Z" transform="translate(-62.393 -135.3)" fill="currentColor"/>
                            </svg> 
                        </span>
                        <span class="offcanvas__stikcy--toolbar__label">Giỏ hàng</span>
                        <span class="items__count" id="cart-item-count"><?php echo count($_SESSION['giohang']);?></span> 
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Offcanvas stikcy toolbar -->

        <!-- Start offCanvas minicart -->
        <div class="offCanvas__minicart">
            <div class="minicart__header ">
                <div class="minicart__header--top d-flex justify-content-between align-items-center">
                    <h2 class="minicart__title h3">Giỏ Hàng</h2>
                    <button class="minicart__close--btn" aria-label="minicart close button" data-offcanvas> 
                        <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"/></svg>
                    </button>
                </div>
                <!-- <p class="minicart__header--desc">Clothing and fashion products are limited</p> -->
            </div>
            <div class="minicart__product">
                <?=$html_cart;?>
            </div>
            <div class="minicart__amount">
                <div class="minicart__amount_list d-flex justify-content-between">
                    <span>Tạm Tính:</span>
                    <span id="totalAmount"><b><?=number_format($sum,0,",",".")?>VNĐ</b></span>
                </div>
                <div class="minicart__amount_list d-flex justify-content-between">
                    <span>Tổng:</span>
                    <span id="totalAmount"><b><?=number_format($sum,0,",",".")?>VNĐ</b></span>
                </div>
            </div>
            <div class="minicart__conditions text-center">
                <input class="minicart__conditions--input" id="accept" type="checkbox">
                <label class="minicart__conditions--label" for="accept">Tôi đồng ý với <a class="minicart__conditions--link" href="index.php?pg=privacy-policy">Chính sách và quyền riêng tư</a></label>
            </div>
            <div class="minicart__button d-flex justify-content-center">
                <a class="primary__btn minicart__button--link" href="index.php?pg=cart">Xem giỏ hàng</a>
                <a class="primary__btn minicart__button--link" href="index.php?pg=checkout">Thanh toán</a>
            </div>
        </div>
        <!-- End offCanvas minicart -->

        <!-- Start serch box area -->
        <div class="predictive__search--box ">
            <div class="predictive__search--box__inner">
                <h2 class="predictive__search--title">Tìm Kiếm Sản Phẩm</h2>
                <form class="predictive__search--form" action="index.php?pg=shop" method="post">
                    <label>
                        <input class="predictive__search--input" placeholder="Tìm kiếm" type="text" name="kyw">
                    </label>
                    <button class="predictive__search--button" aria-label="search button" type="submit" name="search">
                        <svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="30.51" height="25.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>  
                    </button>
                </form>
            </div>
            <button class="predictive__search--close__btn" aria-label="search close button" data-offcanvas>
                <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51" height="30.443"  viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"/></svg>
            </button>
        </div>
        <!-- End serch box area -->

    </header>
    <!-- End header area -->