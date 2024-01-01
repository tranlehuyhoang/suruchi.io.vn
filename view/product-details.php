<?php
    extract($spchitiet);
    // die(print_r($spchitiet, true));
    $html_dssp_lienquan=showsp_slide($splienquan);
    
    if (isset($_GET['idpro'])) {
        $idpro = $_GET['idpro'];
    }
    
    $total_comments = count_comments_by_idpro($idpro);
    $html_dsbl = "";
    foreach ($commentlist as $item) {
        // Khởi tạo lại chuỗi HTML cho đánh giá sao
        $html_rating = '<ul class="rating d-flex" data-commentid="'.$item['id'].'">';
        for ($i = 1; $i <= 5; $i++) {
            $activeClass = ($i <= $item['rating']) ? 'active' : ''; 
            $html_rating .= '<li class="rating__list '.$activeClass.'" data-rating="'.$i.'">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">  
                                        <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="'.($activeClass ? 'currentColor' : '#ccc').'"></path>
                                    </svg>
                                </span>
                            </li>';
        }
        $html_rating .= '</ul>';
        $html_dsbl .= '<div class="reviews__comment--list d-flex">
                            <div class="reviews__comment--thumb">
                                <img src="./uploads/'.$item['img'].'" alt="comment-thumb">
                            </div>
                            <div class="reviews__comment--content">
                                <div class="reviews__comment--top d-flex justify-content-between">
                                    <div class="reviews__comment--top__left">
                                        <h3 class="reviews__comment--content__title h4">'.$item['name'].'</h3>
                                        '.$html_rating.'
                                    </div>
                                    <span class="reviews__comment--content__date">'.$item['date'].'</span>
                                </div>
                                <p class="reviews__comment--content__desc">'.$item['content'].'</p>
                            </div>
                        </div>';
    }
?>

<main class="main__content_wrapper">
        
    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title text-white mb-25">Chi tiết sản phẩm</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.php">Trang chủ</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text-white">Chi tiết sản phẩm</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start product details section -->
    <section class="product__details--section section--padding">
        <div class="container">
            <div class="row row-cols-lg-2 row-cols-md-2">
                <div class="col">
                    <div class="product__details--media">
                        <div class="product__media--preview  swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product__media--preview__items">
                                        <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="./uploads/<?=$img?>"><img class="product__media--preview__items--img" src="./uploads/<?=$img?>" alt="product-media-img"></a>
                                        <div class="product__media--view__icon">
                                            <a class="product__media--view__icon--link glightbox" href="./uploads/<?=$img?>" data-gallery="product-media-preview">
                                                <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="swiper-slide">
                                    <div class="product__media--preview__items">
                                        <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="./uploads/big-product1.jpg"><img class="product__media--preview__items--img" src="./uploads/big-product1.jpg" alt="product-media-img"></a>
                                        <div class="product__media--view__icon">
                                            <a class="product__media--view__icon--link glightbox" href="./uploads/big-product1.jpg" data-gallery="product-media-preview">
                                                <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--preview__items">
                                        <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="./uploads/big-product3.jpg"><img class="product__media--preview__items--img" src="./uploads/big-product3.jpg" alt="product-media-img"></a>
                                        <div class="product__media--view__icon">
                                            <a class="product__media--view__icon--link glightbox" href="./uploads/big-product3.jpg" data-gallery="product-media-preview">
                                                <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--preview__items">
                                        <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="./uploads/big-product4.jpg"><img class="product__media--preview__items--img" src="./uploads/big-product4.jpg" alt="product-media-img"></a>
                                        <div class="product__media--view__icon">
                                            <a class="product__media--view__icon--link glightbox" href="./uploads/big-product4.jpg" data-gallery="product-media-preview">
                                                <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--preview__items">
                                        <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="./uploads/big-product5.jpg"><img class="product__media--preview__items--img" src="./uploads/big-product5.jpg" alt="product-media-img"></a>
                                        <div class="product__media--view__icon">
                                            <a class="product__media--view__icon--link glightbox" href="./uploads/big-product5.jpg" data-gallery="product-media-preview">
                                                <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--preview__items">
                                        <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="./uploads/big-product6.jpg"><img class="product__media--preview__items--img" src="./uploads/big-product6.jpg" alt="product-media-img"></a>
                                        <div class="product__media--view__icon">
                                            <a class="product__media--view__icon--link glightbox" href="./uploads/big-product6.jpg" data-gallery="product-media-preview">
                                                <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="product__media--nav swiper">
                            <div class="swiper-wrapper">
                                <!-- <div class="swiper-slide">
                                    <div class="product__media--nav__items">
                                        <img class="product__media--nav__items--img" src="./uploads/small-product7.png" alt="product-nav-img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--nav__items">
                                        <img class="product__media--nav__items--img" src="./uploads/small-product8.png" alt="product-nav-img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--nav__items">
                                        <img class="product__media--nav__items--img" src="./uploads/small-product9.png" alt="product-nav-img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--nav__items">
                                        <img class="product__media--nav__items--img" src="./uploads/small-product10.png" alt="product-nav-img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--nav__items">
                                        <img class="product__media--nav__items--img" src="./uploads/small-product11.png" alt="product-nav-img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--nav__items">
                                        <img class="product__media--nav__items--img" src="./uploads/small-product12.png" alt="product-nav-img">
                                    </div>
                                </div> -->
                            </div>
                            <div class="swiper__nav--btn swiper-button-next"></div>
                            <div class="swiper__nav--btn swiper-button-prev"></div>
                        </div>
                    </div>
                </div>   
                <div class="col">
                    <div class="product__details--info">
                        <h2 class="product__details--info__title mb-15"><?=$name?></h2>
                        <div class="product__details--info__price mb-10">
                            <span class="current__price"><?=number_format($price,0,",",".")?>VNĐ</span>
                            <span class="price__divided"></span>
                            <span class="old__price">- <?=number_format($old_price,0,",",".")?>VNĐ</span>
                        </div>
                        <div class="product__details--info__rating d-flex align-items-center mb-15">
                            <ul class="rating d-flex justify-content-center">
                                <li class="rating__list">
                                    <span class="rating__list--icon">
                                        <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                        <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </li>
                                <li class="rating__list">
                                    <span class="rating__list--icon">
                                        <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                        <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </li>
                                <li class="rating__list">
                                    <span class="rating__list--icon">
                                        <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                        <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </li>
                                <li class="rating__list">
                                    <span class="rating__list--icon">
                                        <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                        <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </li>
                                <li class="rating__list">
                                    <span class="rating__list--icon">
                                        <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                        <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </li>
                            </ul>
                            <span class="product__items--rating__count--number">(<?=$total_comments;?>)</span>
                        </div>
                        <p class="product__details--info__desc mb-15"><?=$describe1?></p>
                        <form action="index.php?pg=addcart" method="post" class="product__variant">
                            <div class="product__variant--list quantity d-flex align-items-center mb-20"> 
                                <input type="hidden" name="id" value="<?=$id?>">
                                <input type="hidden" name="name" value="<?=$name?>">
                                <input type="hidden" name="img" value="<?=$img?>">
                                <input type="hidden" name="price" value="<?=$price?>">
                                <div class="quantity__box">
                                    <button type="button" class="quantity__value quickview__value--quantity decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                    <label>
                                        <input type="number" class="quantity__number quickview__value--number form-input-number" name="amount" min="1" max="50" value="1" data-counter/>
                                    </label>
                                    <button type="button" class="quantity__value quickview__value--quantity increase" aria-label="quantity value" value="Increase Value">+</button>
                                </div>
                                <button class="quickview__cart--btn primary__btn" type="submit" name="btnaddcart">Thêm vào giỏ hàng</button>  
                            </div>
                            <div class="product__variant--list mb-15">
                                <button class="variant__buy--now__btn primary__btn" type="submit" name="btnaddcart">Mua ngay</button>
                            </div>
                            <div class="product__details--info__meta">
                                <p class="product__details--info__meta--list">
                                    <strong>Mã vạch:</strong>  <span><?=$id?></span>
                                </p>
                            </div>
                        </form>
                        <div class="quickview__social d-flex align-items-center mb-15">
                            <label class="quickview__social--title">Chia sẻ xã hội:</label>
                            <ul class="quickview__social--wrapper mt-0 d-flex">
                                <li class="quickview__social--list">
                                    <a class="quickview__social--icon" target="_blank" href="https://www.facebook.com">
                                        <svg  xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524" viewBox="0 0 7.667 16.524">
                                            <path  data-name="Path 237" d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z" transform="translate(-960.13 -345.407)" fill="currentColor"/>
                                        </svg>
                                        <span class="visually-hidden">Facebook</span>
                                    </a>
                                </li>
                                <li class="quickview__social--list">
                                    <a class="quickview__social--icon" target="_blank" href="https://twitter.com">
                                        <svg  xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384" viewBox="0 0 16.489 13.384">
                                            <path  data-name="Path 303" d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z" transform="translate(-951.23 -1140.849)" fill="currentColor"/>
                                        </svg>
                                        <span class="visually-hidden">Twitter</span>
                                    </a>
                                </li>
                                <li class="quickview__social--list">
                                    <a class="quickview__social--icon" target="_blank" href="https://www.instagram.com">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.497" height="16.492" viewBox="0 0 19.497 19.492">
                                            <path  data-name="Icon awesome-instagram" d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z" transform="translate(0.004 -1.492)" fill="currentColor"/>
                                        </svg>
                                        <span class="visually-hidden">Instagram</span> 
                                    </a>
                                </li>
                                <li class="quickview__social--list">
                                    <a class="quickview__social--icon" target="_blank" href="https://www.youtube.com">
                                        <svg  xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582" viewBox="0 0 16.49 11.582">
                                            <path  data-name="Path 321" d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z" transform="translate(-951.269 -1359.8)" fill="currentColor"/>
                                        </svg>
                                        <span class="visually-hidden">Youtube</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="guarantee__safe--checkout">
                            <h5 class="guarantee__safe--checkout__title">Thanh toán an toàn:</h5>
                            <img class="guarantee__safe--checkout__img" src="./view/assets/img/other/safe-checkout.png" alt="Payment Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End product details section -->

    <!-- Start product details tab section -->
    <section class="product__details--tab__section section--padding">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <ul class="product__details--tab d-flex mb-30">
                        <li class="product__details--tab__list active" data-toggle="tab" data-target="#description">Mô tả</li>
                        <li class="product__details--tab__list" data-toggle="tab" data-target="#reviews">Đánh giá</li>
                    </ul>
                    <div id="cmt" class="product__details--tab__inner border-radius-10">
                        <div class="tab_content">
                            <div id="description" class="tab_pane active show">
                                <div class="product__tab--content">
                                    <div class="product__tab--content__step mb-30">
                                        <?=$describe2?>
                                    </div>
                                </div> 
                            </div>
                            <div id="reviews" class="tab_pane">
                                <div class="product__reviews">
                                    <div class="product__reviews--header">
                                        <h2 class="product__reviews--header__title h3 mb-20">Phản hồi khách hàng</h2>
                                        <div class="reviews__ratting d-flex align-items-center">
                                            <ul class="rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="reviews__summary--caption">Dựa trên <?=$total_comments;?> đánh giá</span>
                                        </div>
                                        <a class="actions__newreviews--btn primary__btn" href="#writereview">Viết đánh giá</a>
                                    </div>
                                    <div class="reviews__comment--area">
                                        <?=$html_dsbl;?>
                                    </div>
                                    <?php 
                                        if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
                                    ?>
                                    <div id="writereview" class="reviews__comment--reply__area">
                                        <form action="index.php?pg=process-comment" method="post" id="commentForm">
                                            <h3 class="reviews__comment--reply__title mb-15">Thêm một bài đánh giá</h3>
                                            <div class="reviews__ratting d-flex align-items-center mb-20">
                                                <ul class="rating d-flex" id="starRating">
                                                    <li class="rating__list1" data-rating="1">
                                                        <span class="rating__list--icon1">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list1" data-rating="2">
                                                        <span class="rating__list--icon1">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list1" data-rating="3">
                                                        <span class="rating__list--icon1">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list1" data-rating="4">
                                                        <span class="rating__list--icon1">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list1" data-rating="5">
                                                        <span class="rating__list--icon1">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="row" id="">
                                                <div class="col-12 mb-10">
                                                    <textarea name="content" class="reviews__comment--reply__textarea" placeholder="Bình luận của bạn...." ></textarea>
                                                </div>  
                                            </div>
                                            <input type="hidden" name="idpro" value="<?php echo $idpro; ?>">
                                            <input type="hidden" name="rating" id="hiddenRatingInput" value="">
                                            <button class="reviews__comment--btn text-white primary__btn" type="submit">GỬI</button>
                                        </form>   
                                    </div> 
                                    <?php    
                                        }else{
                                            $_SESSION['page'] = "product-details";
                                            $_SESSION['idpro'] = $_GET['idpro'];
                                            echo 'Hãy <a href="index.php?pg=signin-signup" style="color:#ee2761; text-decoration: none;" > Đăng nhập </a> để đánh giá !';
                                        }
                                    ?>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End product details tab section -->
    
    <!-- Start product section -->
    <section class="product__section product__section--style3 section--padding">
        <div class="container product3__section--container">
            <div class="section__heading text-center mb-50">
                <h2 class="section__heading--maintitle">Có thể bạn sẽ thích</h2>
            </div>
            <div class="product__section--inner product__swiper--column4__activation swiper">
                <div class="swiper-wrapper">
                    <?=$html_dssp_lienquan?>
                </div>
                <div class="swiper__nav--btn swiper-button-next"></div>
                <div class="swiper__nav--btn swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <!-- End product section -->

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
