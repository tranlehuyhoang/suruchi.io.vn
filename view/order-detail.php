<?php
  extract($orderdetail);
    if($pttt=0){
        $tbpt='Thanh toán khi nhận hàng';
    }
    if($pttt=1){
        $tbpt='Thanh toán bằng thẻ tín dụng';
    }
  extract($ordercart);
    $html_cartorder='';
    $html_cartorder_mobile='';
    foreach ($ordercart as $item) {
        extract($item);
        $html_cartorder.='<tr class="cart__table--body__items">
                            <td class="cart__table--body__list">
                                <div class="product__image two  d-flex align-items-center">
                                    <div class="product__thumbnail border-radius-5">
                                        <img class="border-radius-5" src="./uploads/'.$img.'" alt="cart-product">
                                        <span class="product__thumbnail--quantity">'.$soluong.'</span>
                                    </div>
                                    <div class="product__description">
                                        <h3 class="product__description--name h4">'.$name.'</h3>
                                    </div>
                                </div>
                            </td>
                            <td class="cart__table--body__list">
                                <span class="cart__price">'.number_format($price,0,",",".").'VNĐ</span>
                            </td>
                        </tr>';
        $html_cartorder_mobile.='<tr class=" summary__table--items">
                                    <td class=" summary__table--list">
                                        <div class="product__image two  d-flex align-items-center">
                                            <div class="product__thumbnail border-radius-5">
                                                <img class="border-radius-5" src="./uploads/'.$img.'" alt="cart-product">
                                                <span class="product__thumbnail--quantity">'.$soluong.'</span>
                                            </div>
                                            <div class="product__description">
                                                <h3 class="product__description--name h4">'.$name.'</h3>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=" summary__table--list">
                                        <span class="cart__price">'.number_format($price,0,",",".").'VNĐ</span>
                                    </td>
                                </tr>';
    }
?>

<!-- Start checkout page area -->
<div class="checkout__page--area">
    <div class="container">
        <div class="checkout__page--inner d-flex">
            <div class="main checkout__mian">
                <header class="main__header checkout__mian--header mb-30">
                    <h1 class="main__logo--title"><a class="logo logo__left mb-20" href="index.html"><img src="./view/assets/img/logo/nav-log.png" alt="logo"></a></h1>
                    <details class="order__summary--mobile__version">
                        <summary class="order__summary--toggle border-radius-5">
                            <span class="order__summary--toggle__inner">
                                <span class="order__summary--toggle__icon">
                                    <svg width="20" height="19" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.178 13.088H5.453c-.454 0-.91-.364-.91-.818L3.727 1.818H0V0h4.544c.455 0 .91.364.91.818l.09 1.272h13.45c.274 0 .547.09.73.364.18.182.27.454.18.727l-1.817 9.18c-.09.455-.455.728-.91.728zM6.27 11.27h10.09l1.454-7.362H5.634l.637 7.362zm.092 7.715c1.004 0 1.818-.813 1.818-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817zm9.18 0c1.004 0 1.817-.813 1.817-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817z" fill="currentColor"></path>
                                    </svg>
                                </span>
                                <span class="order__summary--toggle__text show">
                                    <span>Hiển thị tóm tắt đơn hàng</span>
                                    <svg width="11" height="6" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle__dropdown" fill="currentColor"><path d="M.504 1.813l4.358 3.845.496.438.496-.438 4.642-4.096L9.504.438 4.862 4.534h.992L1.496.69.504 1.812z"></path></svg>
                                </span>
                                <span class="order__summary--final__price"><?=number_format($tongthanhtoan,0,",",".")?></b> VNĐ</span>
                            </span>
                        </summary>
                        <div class="order__summary--section">
                            <div class="cart__table checkout__product--table">
                                <table class="summary__table">
                                    <tbody class="summary__table--body">
                                        <?=$html_cartorder_mobile;?>
                                    </tbody>
                                </table> 
                            </div>
                            <div class="checkout__total">
                                <table class="checkout__total--table">
                                    <tbody class="checkout__total--body">
                                        <tr class="checkout__total--items">
                                            <td class="checkout__total--title text-left">Tổng đơn hàng </td>
                                            <td class="checkout__total--amount text-right"><?=number_format($total,0,",",".")?> VNĐ</td>
                                        </tr>
                                        <tr class="checkout__total--items">
                                            <td class="checkout__total--title text-left">Vận chuyển</td>
                                            <td class="checkout__total--calculated__text text-right"><?=number_format($ship,0,",",".")?> VNĐ</td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="checkout__total--footer">
                                        <tr class="checkout__total--footer__items">
                                            <td class="checkout__total--footer__title checkout__total--footer__list text-left">Tổng cộng </td>
                                            <td class="checkout__total--footer__amount checkout__total--footer__list text-right"><?=number_format($tongthanhtoan,0,",",".")?> VNĐ</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </details>
                </header>
                <main class="main__content_wrapper">
                    <form action="#">
                        <div class="checkout__content--step section__shipping--address pt-0">
                            <div class="section__header checkout__header--style position__relative mb-25">
                                <h2 class="section__header--title h3">Chi tiết đơn hàng: #<?=$mahd;?></h2>
                                <span class="checkout__order--number">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><style>svg{fill:#ee2671}</style><path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192h80v56H48V192zm0 104h80v64H48V296zm128 0h96v64H176V296zm144 0h80v64H320V296zm80-48H320V192h80v56zm0 160v40c0 8.8-7.2 16-16 16H320V408h80zm-128 0v56H176V408h96zm-144 0v56H64c-8.8 0-16-7.2-16-16V408h80zM272 248H176V192h96v56z"/></svg>
                                    <?=$date;?> - <?=$time;?>
                                </span>
                            </div>
                            <div class="customer__information--area border-radius-5">
                                <h3 class="customer__information--title h4">Thông tin của bạn</h3>
                                <div class="customer__information--inner d-flex">
                                    <div class="customer__information--list">
                                        <div class="customer__information--step">
                                            <h4 class="customer__information--subtitle h5">Thông tin liên lạc</h4>
                                            <ul>
                                                <li class="customer__information--text">Họ Tên: <?=$nguoidat_ten;?></li>
                                                <li class="customer__information--text">Email: <a class="customer__information--text__link" href="mailto:<?=$nguoidat_email;?>"><?=$nguoidat_email;?></a></li>
                                                <li class="customer__information--text">SĐT: <?=$nguoidat_tel;?></li>
                                            </ul>
                                        </div>
                                        <div class="customer__information--step">
                                            <h4 class="customer__information--subtitle h5">Địa chỉ giao hàng</h4>
                                            <ul>
                                                <li><span class="customer__information--text"><?=$nguoidat_diachi;?></span></li>
                                            </ul>
                                        </div>
                                        <div class="customer__information--step">
                                            <h4 class="customer__information--subtitle h5">Phương pháp vận chuyển</h4>
                                            <ul>
                                                <li><span class="customer__information--text">Giao hàng nhanh</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="customer__information--list">
                                        <div class="customer__information--step">
                                            <h4 class="customer__information--subtitle h5">Phương thức thanh toán</h4>
                                            <ul>
                                                <li><span class="customer__information--text"><?=$tbpt;?></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </main>
                <footer class="main__footer checkout__footer">
                    <p class="copyright__content">Bản quyền © 2023 <a class="copyright__content--link text__primary" href="index.html">Suruchi</a> . Đã đăng ký Bản quyền.Thiết kế bởi Suruchi</p>
                </footer>
            </div>
            <aside class="checkout__sidebar sidebar">
                <div class="cart__table checkout__product--table">
                    <table class="cart__table--inner">
                        <tbody class="cart__table--body">
                            <?=$html_cartorder;?>
                        </tbody>
                    </table> 
                </div>
                <div class="checkout__total">
                    <table class="checkout__total--table">
                        <tbody class="checkout__total--body">
                            <tr class="checkout__total--items">
                                <td class="checkout__total--title text-left">Tổng đơn hàng </td>
                                <td class="checkout__total--amount text-right"><?=number_format($total,0,",",".")?> VNĐ</td>
                            </tr>
                            <tr class="checkout__total--items">
                                <td class="checkout__total--title text-left">Vận chuyển</td>
                                <td class="checkout__total--calculated__text text-right"><?=number_format($ship,0,",",".")?> VNĐ</td>
                            </tr>
                        </tbody>
                        <tfoot class="checkout__total--footer">
                            <tr class="checkout__total--footer__items">
                                <td class="checkout__total--footer__title checkout__total--footer__list text-left">Tổng cộng </td>
                                <td class="checkout__total--footer__amount checkout__total--footer__list text-right"><?=number_format($tongthanhtoan,0,",",".")?></b> VNĐ</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </aside>
        </div>
    </div>
</div>
<!-- End checkout page area -->
