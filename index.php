<?php
  session_start();
  ob_start();
  if(!isset($_SESSION["giohang"])) {
    $_SESSION["giohang"]=[];
  }
  
  // nhúng kết nối csdl
  include "model/pdo.php";
  include "model/global.php";
  include "model/sanpham.php";
  include "model/danhmuc.php";
  include "model/binhluan.php";
  include "model/donhang.php";
  include "model/giohang.php";
  include "model/tintuc.php";
  include "model/dmuc-tintuc.php";
  include "model/user.php";

  require_once 'PHPMailer/Mailer.php';

  include "view/header.php";

  if(!isset($_GET['pg'])) {
    $dssp_new=get_new(10);
    $dssp_hot=get_hot(10);
    $dssp_best=get_best(10);
    $dssp_best2=get_best(10);
    $dsblog=get_blog(6);
    $comment_list = comment_select_all_home();
    include "view/home.php";
  } else {
    switch ($_GET['pg']) {
      case 'signin-signup':
        $tbdk="";
        include "view/login.php";
        break;
      case 'forgot-password':
        $tb_mail = '';
        if (isset($_POST['guiemail'], $_POST['fg_usr'], $_POST['fg_mail'])) {
          $usr = $_POST['fg_usr'];
          $Mailer = $_POST['fg_mail'];
          $checkmail = checkmail($usr, $Mailer);
  
          if ($checkmail && is_array($checkmail)) {
            $_SESSION['reset_user_id'] = $checkmail['id'];
            //Nội dung mail là link dẩn tới trang thay đổi password và có username của user muốn thay đổi pass
            $context = "https://suruchi/index.php?pg=reset-pass&id=".$checkmail['id'];
            $link_text = '<div style="border: 1px solid #dadce0;border-radius:8px;padding:20px 30px;width: 40%;margin: 0px auto;" align="center">
                            <img src="https://lh3.googleusercontent.com/CBDv24siAwX6vHlA4gqFH0p5U98Nb0_jWnOoWQoaoUrgT3kwqg5jKAcFxeBiSUkYFZ8j=s157" alt="logo" style="width: 190px;padding-bottom: 20px;padding-top: 5px;">
                            <div style="font-family: Google Sans,Roboto,RobotoDraft,Helvetica,Arial,sans-serif;border-bottom:thin solid #dadce0;color:rgba(0,0,0,0.87);line-height:32px;padding-bottom:24px;text-align:center;">
                                <h1 style="font-size:24px">Đổi mật khẩu mới</h1>
                            </div>
                            <div style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:14px;color:rgba(0,0,0,0.87);line-height:20px;padding-top:20px;text-align:left">
                                <span style="display: block;text-align: center;width: 360px;margin: 0 auto;font-size: 18px;line-height: 1.3;" >Bấm vào đường dẫn để tiếp tục tiến hành thay đổi mật khẩu của bạn</span>
                                <a href="'.$context.'" style="display: block;width: 100px;margin: 0 auto;line-height: 30px;border-radius: 0.3rem;background: #ee2761;color: #fff;border: 0;text-align: center;text-decoration: none;margin-top: 20px;">TẠI ĐÂY</a>
                            </div>
                        </div>';
            sendMail($Mailer, "Mat khau moi", $link_text);
  
            // Thành công thì thông báo user kiểm tra mail
            $tb_mail = '<p class="h4" style="color: green;">Đã gửi mail! Vui lòng kiểm tra mail của bạn.</p>';
          } else {
            $tb_mail = '<p class="h4" style="color: red;">Username và Email không khớp với bất kỳ mail nào!</p>';
          }
        }
        include "view/forgot-password.php";
        break;
      case 'reset-pass':
        $iduser = $_GET['id'];
        $tbpw="";
        if (isset($_POST['guipwd'])) {
          $rs_pwf = $_POST['rs_pwd'];
          $rs_cfp = $_POST['rs_cfp'];
          if (empty($rs_pwf) || empty($rs_cfp)) {
            $tbpw='<p class="h4" style="color: red;">Vui lòng điền đầy đủ thông tin đăng ký.</p>';
          } elseif(strlen($rs_pwf) < 6 || strlen($rs_cfp) < 6) {
            $tbpw='<p class="h4" style="color: red;">Tài khoản và mật khẩu phải chứa ít nhất 6 ký tự.</p>';
          }else{
            if (($_POST['rs_pwd']) == ($_POST['rs_cfp'])) {
              user_change_password($rs_pwf, $iduser);
            } 
            $tbpw='<p class="h4" style="color: green;">Đổi mật khẩu thành công !</p>';
          }
        }
        include "view/reset_pass.php";
        break;
      case 'signin':
        $tbdk="";
        //input
        if(isset($_POST["login"])) {
          $username=$_POST["username"];
          $password=$_POST["password"];
          //xử lý: kiem tra
          $kq=checkuser($username, $password);
          if(is_array($kq)&&(count($kq))) {
            $_SESSION['s_user']=$kq;
            header('location: index.php');
          } 
          else{
            if(empty($username) || empty($password)){
              $tb = "Vui lòng điền đầy đủ thông tin !"; 
            } else{
              $tb="Tài khoản không tồn tại hoặc thông tin đăng nhập sai !";
            }
            $_SESSION['tb_dangnhap']=$tb;
            header('location: index.php?pg=signin-signup');
          }
          //xl
        }
        break;
      case 'logout':
        if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)) {
          unset($_SESSION['s_user']);
        }
        header('location: index.php');
        break;
      case 'adduser':
        $tbdk = "";
        // Xác định nếu biểu mẫu đã được gửi đi
        if (isset($_POST["register"])) {
            // Lấy giá trị từ input
            $username = $_POST["username"];
            $password = $_POST["password"];
            $repassword = $_POST["repassword"];
            $email = $_POST["email"];
            // Kiểm tra xem các trường có được điền đầy đủ không
            if (empty($username) || empty($password) || empty($email) || empty($repassword)) {
              $tbdk = "Vui lòng điền đầy đủ thông tin đăng ký.";
            } elseif (strlen($password) < 6) {
              $tbdk = "Mật khẩu phải chứa ít nhất 6 ký tự.";
            } else {
              // Kiểm tra xem tài khoản đã tồn tại hay chưa
              if (isUsernameExists($username)) {
                  $tbdk = "Tài khoản đã tồn tại. Vui lòng chọn một tài khoản khác.";
              } else {
                  // Kiểm tra xem địa chỉ email hợp lệ
                  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                      $tbdk = "Địa chỉ email không hợp lệ.";
                  } else {
                      // Kiểm tra xem mật khẩu và nhập lại mật khẩu khớp nhau
                      if ($password != $repassword) {
                          $tbdk = "Mật khẩu nhập lại không khớp.";
                      } else {
                          // Thực hiện thêm người dùng vào cơ sở dữ liệu
                          user_insert($username, $password, $email);
                          $tbdk = "Đăng ký thành công!";
                      }
                  }
              }
          }
        }
        // Bạn có thể thay đổi đường dẫn tới file view nếu cần thiết
        include "view/login.php";
        break;
      case 'updateuser':
        // xác định giá trị input
        if(isset($_POST["update"])) {
          $username=$_POST["username"];
          // $password=$_POST["password"];
          $email=$_POST["email"];
          $name=$_POST["name"];
          $address=$_POST["address"];
          $sdt=$_POST["sdt"];
          $id=$_POST["id"];
          $role=0;

          $img=$_FILES["img"]["name"];
          $target_file = IMG_PATH_USER.basename($img);
          if($img!=""){
            //upload hình
            $target_file = IMG_PATH_USER.$img;
            move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
            
            // //xóa hình cũ trên host
            // $old_img=IMG_PATH_USER.$_POST['old_img'];
            // if(file_exists($old_img)) unlink($old_img);

          } else {
            $img="";
          }
            //xử lý
          user_update($username, $password, $email, $name, $img, $address, $sdt, $role, $id);

          include "view/my-account.php";
        }
        break;  
      case 'my-account':
        if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)) {
          include "view/my-account.php";
        }
        break;
      case 'change-pw':
        $tbpw="";
        if(isset($_POST['change_pw'])){
          $username = $_POST['username'];
          $password = $_POST['pw'];
          $newpassword = $_POST['newpw'];
          $repassword = $_POST['repw'];
          
          // Kiểm tra xác thực mật khẩu và thực hiện đổi mật khẩu
          if (isPasswordExists($password)) {
            if (strlen($newpassword ) < 6) {
              $tbpw = '<span class="h4" style="color: red";>Mật khẩu mới phải chứa ít nhất 6 ký tự.</span>';
            }elseif ($newpassword === $repassword) {
              change_password($username, $newpassword);
              $tbpw = '<span class="h4" style="color: green";>Đổi mật khẩu thành công!</span>';
            }else {
              $tbpw = '<span class="h4" style="color: red";>Mật khẩu mới không trùng khớp!</span>';
            }
          }else {
            $tbpw = '<span class="h4" style="color: red";>Mật khẩu hiện tại không chính xác!</span>';
          }  
        }
        include "view/change-pw.php";
        break;  
      case 'my-account-2';
        include "view/my-account-2.php";
        break;
      case 'my-account-3':
        if(isset($_SESSION['s_user'])) {
          $iduser = $_SESSION['s_user']['id'];
        }
        $orderlist=get_orders_by_user($iduser);
        include "view/my-account-3.php";
        break;
      case 'orders-detail':
        if(isset($_GET['id']) && ($_GET["id"] > 0)) {
          $id = $_GET['id'];
          if(isset($_SESSION['s_user'])) {
            $iduser = $_SESSION['s_user']['id'];
          }
          $ordercart = get_cart_by_id($id);
          $orderdetail = get_order_by_id($id);
          include "view/order-detail.php";
        }else {
          include "view/home.php";
        }
        break;
      case 'order-cancelled':
        if(isset($_GET['id']) && $_GET['id'] > 0) {
          $id = $_GET['id'];
          if(isset($_SESSION['s_user'])) {
            $iduser = $_SESSION['s_user']['id'];
          }
          // Lấy trạng thái từ cơ sở dữ liệu hoặc bất kỳ nguồn dữ liệu nào khác
          $status = get_status($id);

          // Kiểm tra xem có phải đơn hàng đang ở trạng thái "Pending" hay không
          update_status($id, 6);
          $orderlist = get_orders_by_user($iduser);
          include "view/my-account-3.php";
        }else {
          include "view/index.php";
        }
        break;
      case 'shop':
        $dsdm=danhmuc_all();
        $kyw="";
        $titledm="";
        $titlepage="";

        if(!isset($_GET['iddm'])){
          $iddm=0;
        }else{
          $iddm=$_GET['iddm'];
          $titledm=get_name_dm($iddm);
        }  

        if (isset($_POST["search"])) {
          $kyw=$_POST["kyw"];
          $titlepage="Tìm kiếm sản phẩm: '$kyw'";
        }
        if(!isset($_GET['page'])){
          $pg=1;
        }else{
          $pg=$_GET['page'];
        }
        $sosp=16;
        $dssp=get_dssp($kyw, $iddm, $pg, $sosp);
        $tongsp=get_dssp_all();
        $hienthist=hien_thi_st($tongsp, $sosp);
        include "view/shop.php";
        break;
      case 'product-detail':
        $iduser="";
        if(isset($_GET['idpro'])&&($_GET["idpro"]>0)) {
          $id=$_GET['idpro'];
          $iddm=get_iddm($id);
          $spchitiet=get_sp_by_id($id);
          $splienquan=get_dssp_lienquan($iddm, $id, 4);
          $commentlist = comment_select_by_idpro($id);
          include "view/product-details.php";
        }else {
          include "view/home.php";
        }
        break;
      case 'process-comment':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          // Kiểm tra xem các trường cần thiết có tồn tại không
          if (isset($_POST['idpro'], $_SESSION['s_user']['id'], $_POST['content'])) {
              $idpro = $_POST['idpro'];
              $iduser = $_SESSION['s_user']['id'];
              $content = $_POST['content'];
              $rating = $_POST['rating'];
              // Lấy ngày và giờ hiện tại
              $date = date('Y-m-d');
              $time = date('H:i:s');
              // Thực hiện chèn bình luận
              comment_insert($iduser, $idpro, $content, $date, $time, $rating);
              // Chuyển hướng sau khi thêm bình luận
              header("Location: index.php?pg=product-detail&idpro=$idpro");
              exit();
          }
        }
        break;
      case 'cart':
        $dssp_new=get_new(10);
        if(isset($_GET['del'])&&($_GET['del']==1)) {
          unset($_SESSION["giohang"]);
          header('location: index.php?pg=cart');
        }else{
          include "view/cart.php";
        }
        break;
      case 'addcart':
        if (isset($_POST["btnaddcart"])) {
          $id = $_POST['id'];
          $name = $_POST["name"];
          $img = $_POST["img"];
          $amount = $_POST["amount"];
          $price = $_POST["price"];
          $thanhtien = (int)$amount * (int)$price;
          $sp = array("id" => $id, "name" => $name, "img" => $img, "price" => $price, "amount" => $amount, "thanhtien" => $thanhtien);

          // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
          $productExists = false;
          foreach ($_SESSION['giohang'] as &$item) {
            // Nếu sản phẩm đã tồn tại, tăng số lượng
            if ($item['id'] == $id) {
              $item['amount'] += $amount;
              $sp['thanhtien'] = (int)$sp['amount'] * (int)$price;
              $productExists = true;
              break;
            }
          }

          if (!$productExists) {
            // Nếu sản phẩm chưa có trong giỏ hàng, thêm mới
            array_push($_SESSION['giohang'], $sp);
          }
          echo '<script>updateCartItemCount();</script>';
          header('location: index.php?pg=cart');
        }
        // Trang PHP nơi bạn muốn thực hiện thêm sản phẩm vào giỏ hàng
        include_once("./controller/AddToCart.php");
        break;
        case "edit":
          $total_price = 0;
          foreach ($_SESSION['cart_item'] as $k => $v) {
            if($_POST["code"] == $k) {
              if($_POST["quantity"] == '0') {
                unset($_SESSION["cart_item"][$k]);
              } else {
              $_SESSION['cart_item'][$k]["quantity"] = $_POST["quantity"];
              }
            }
            $total_price += $_SESSION['cart_item'][$k]["price"] * $_SESSION['cart_item'][$k]["quantity"];	
              
          }
          if($total_price!=0 && is_numeric($total_price)) {
            print "$" . number_format($total_price,2);
            exit;
          }
        break;	
      case 'delcart':
        if(isset($_GET['ind'])&&($_GET['ind']>=0)) {
          array_splice($_SESSION['giohang'],$_GET['ind'],1);
          header('location: index.php?pg=cart');
        }
        break;
      case 'delcart-box':
        if(isset($_GET['ind'])&&($_GET['ind']>=0)) {
          array_splice($_SESSION['giohang'],$_GET['ind'],1);
          header('location: index.php');
        }
        break;
      case 'checkout':
        $tbdn="";
        if (isset($_SESSION['s_user'])){
          if (isset($_POST['btnpay'])) {
            $nguoidat_ten = $_POST['name'];
            $nguoidat_tel = $_POST['sdt'];
            $nguoidat_diachi = $_POST['address'];
            $nguoidat_email = $_POST['email'];
            $note = $_POST['note'];
            $pttt = isset($_POST['pttt']) ? $_POST['pttt'] : '';
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $datetime = new DateTime();
            $date = $datetime->format('Y-m-d');
            $time = $datetime->format('H:i:s');
            $iduser = $_SESSION['s_user']['id'];
            $mahd = "Suruchi".rand(1,999);
            $total = get_tongdonhang();
            $ship = 30000;
            if (isset($_SESSION['giatrivoucher'])) {
              $voucher = $_SESSION['giatrivoucher'];
            } else {
              $voucher = 0;
            }
            $tongthanhtoan = ($total - $voucher) + $ship;
            $_SESSION['customer_info'] = array(
              'name' => $nguoidat_ten,
              'sdt' => $nguoidat_tel,
              'address' => $nguoidat_diachi,
              'email' => $nguoidat_email,
            );
            $idbill = order_insert_id($mahd, $iduser, $nguoidat_ten, $nguoidat_email, $nguoidat_tel, $nguoidat_diachi, $note, $total, $ship, $voucher, $tongthanhtoan, $pttt, $date, $time);
            foreach ($_SESSION['giohang'] as $sp) {
              extract($sp);
              cart_insert($id, $price, $name, $img, $amount, $thanhtien, $idbill);
            }

            header('location: index.php?pg=checkout-2&mahd='.$mahd);
          }
        }else{
          $tbdn='<p class="layout__flex--item">
                  <span style="color:red; font-weight:500">Bạn cần đăng nhập để thanh toán ! </span>
                  <a class="layout__flex--item__link" href="index.php?pg=signin-signup">Đăng nhập</a>
                </p>';
        }
        include "view/checkout.php";
        break;
      case 'checkout-2':
        if(isset($_SESSION['customer_info'])) {
          // Lấy thông tin khách hàng từ session
          $customer_info = $_SESSION['customer_info'];
        }
        include "view/checkout-2.php";
        break;
      case 'blog':
        $dmtintuc=dmuc_all();
        $kyw="";
        $titlepage="";

        if(!isset($_GET['idloai'])){
          $idloai=0;
        }else{
          $idloai=$_GET['idloai'];
          $titlepage=get_name_dmuc($idloai);
        } 

        if (isset($_POST["search"])) {
          $kyw=$_POST["kyw"];
          $titlepage="Kết quả tìm kiếm với từ khóa: ".$kyw;
        }
        if(!isset($_GET['page'])){
          $pg=1;
        }else{
          $pg=$_GET['page'];
        }
        $so_tintuc=4;
        $dsblog=get_dsblog($kyw, $idloai, $pg, $so_tintuc);
        $tong_tintuc= get_tintuc_all();
        $hienthitintuc=hienthitintuc($tong_tintuc, $so_tintuc);
        include "view/blog.php";
        break;
      case 'blog-detail':
        if(isset($_GET['idblog'])&&($_GET["idblog"]>0)) {
          $id=$_GET['idblog'];
          $idloai=get_iddmuc($id);
          $blogchitiet=get_blog_by_id($id);
          $bloglienquan=get_blog_lienquan($idloai, $id, 2);
          include "view/blog-details.php";
        }else {
          include "view/home.php";
        }
          break;
      case 'about':
        include "view/about.php";
        break;
      case 'contact':
        include "view/contact.php";
        break;
        
      case 'privacy-policy':
        include "view/privacy-policy.php";
        break;
  
      default:
        include "view/home.php";
        break;
    }
  }

  include "view/footer.php";
?>