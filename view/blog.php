<?php
    $html_dmuc='';
    foreach ($dmtintuc as $dmblog) {
        extract($dmblog);
        $link='index.php?pg=blog&idloai='.$id;
        $html_dmuc.='<li class="widget__categories--menu__list">
                        <a href="'.$link.'">
                            <label class="widget__categories--menu__label d-flex align-items-center">
                                <img class="widget__categories--menu__img" src="./uploads/'.$img.'" alt="categories-img">
                                <span class="widget__categories--menu__text">'.$name.'</span>
                            </label>
                        </a>
                    </li>';
    }
    if($titlepage!="") $title=$titlepage;
    else $title="Tin tức";
    
    $html_dsblog=showblog($dsblog);
?>

<main class="main__content_wrapper">
        
        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title text-white mb-25"><?=$title;?></h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Trang chủ</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">Tin tức</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start blog section -->
        <section class="blog__section section--padding">
            <div class="container-fluid">
                <div class="row row-md-reverse">
                    <div class="col-xxl-3 col-xl-4 col-lg-4">
                        <div class="blog__sidebar--widget left widget__area">
                            <!-- <div class="single__widget widget__search widget__bg">
                                <h2 class="widget__title h3">Tìm kiếm</h2>
                                <form class="widget__search--form" action="#">
                                    <label>
                                        <input class="widget__search--form__input" placeholder="Tìm kiếm..." type="text">
                                    </label>
                                    <button class="widget__search--form__btn" aria-label="search button" type="button">
                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                    </button>
                                </form>
                            </div> -->
                            <div class="single__widget widget__bg">
                                <h2 class="widget__title h3">Danh mục</h2>
                                <ul class="widget__categories--menu">
                                    <?=$html_dmuc;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9 col-xl-8 col-lg-8">
                        <div class="blog__wrapper blog__wrapper--sidebar">
                            <div class="row row-cols-xl-3 row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-sm-u-2 row-cols-1 mb--n30">
                                <?=$html_dsblog;?>
                            </div>
                            <div class="pagination__area bg__gray--color">
                                <nav class="pagination justify-content-center">
                                    <ul class="pagination__wrapper d-flex align-items-center justify-content-center">
                                        <!-- <li class="pagination__list">
                                            <a href="blog.html" class="pagination__item--arrow  link ">
                                                <svg xmlns="http://www.w3.org/2000/svg"  width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292"/></svg>
                                                <span class="visually-hidden">pagination arrow</span>
                                            </a>
                                        <li> -->
                                        <?php
                                            echo $hienthitintuc;
                                        ?>
                                        <!-- <li class="pagination__list">
                                            <a href="blog.html" class="pagination__item--arrow  link ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"/></svg>
                                                <span class="visually-hidden">pagination arrow</span>
                                            </a>
                                        <li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End blog section -->

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