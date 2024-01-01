<?php
  session_start();
  ob_start();
  if(isset($_SESSION['s_user']) && is_array($_SESSION['s_user']) && count($_SESSION['s_user']) > 0) {
    $admin = $_SESSION['s_user'];
    if(isset($admin['role']) && $admin['role'] == 1) {
        // Người dùng có role == 1, cho phép truy cập
    } else {
        header('location: login.php');
        exit();
    }
  } else {
      header('location: login.php');
      exit();
  }
  include "../model/sanpham.php";
  include "../model/danhmuc.php";
  include "../model/donhang.php";
  include "../model/giohang.php";
  include "../model/user.php";
  include "../model/tintuc.php";
  include "../model/dmuc-tintuc.php";
  include "../model/global.php";
  include "../model/binhluan.php";

  include "view/header.php";
  if(!isset($_GET['pg'])){
    $orderlist=get_order_home();
    $orderlimit=get_order_limi(5);
    $count_product=product_all();
    $count_user=get_user_all();
    
    $userlist=load_user(5);
    include "view/home.php";
  }else{
    switch ($_GET['pg']){
      case 'update-role':
        if(isset($_GET['id']) && $_GET['id'] > 0) {
          $id = $_GET['id'];

          update_role($id, 1);
          $kyw="";
          if (isset($_POST["search"])) {
            $kyw=$_POST["kyw"];
          }
          if(!isset($_GET['page'])){
            $page=1;
          }else{
            $page=$_GET['page'];
          }
          $soluong_user=4;
          $listuser=loadall_user($kyw, $page, $soluong_user);
          $tongso_user= get_user_all();
          $hienthi_user= hien_thi_user($tongso_user, $soluong_user);
          include "view/page-user-list.php";
        }else {
          include "view/home.php";
        }
        break;

      case 'abort-role':
        if(isset($_GET['id']) && $_GET['id'] > 0) {
          $id = $_GET['id'];

          update_role($id, 0);
          $kyw="";
          if (isset($_POST["search"])) {
            $kyw=$_POST["kyw"];
          }
          if(!isset($_GET['page'])){
            $page=1;
          }else{
            $page=$_GET['page'];
          }
          $soluong_user=4;
          $listuser=loadall_user($kyw, $page, $soluong_user);
          $tongso_user= get_user_all();
          $hienthi_user= hien_thi_user($tongso_user, $soluong_user);

          include "view/page-user-list.php";
        }else {
          include "view/home.php";
        }
        break;
      case 'products-list':
        $dsdm=danhmuc_all();
        $kyw="";
        if(!isset($_GET['iddm'])){
          $iddm=0;
        }else{
          $iddm=$_GET['iddm'];
        }

        if (isset($_POST["search"])) {
          $kyw=$_POST["kyw"];
        }
        if(!isset($_GET['page'])){
          $page=1;
        }else{
          $page=$_GET['page'];
        }
        $soluongsp=8;

        $productlist=get_dssp_admin($kyw, $iddm, $page, $soluongsp); 
        $tongsosp=get_dssp_all();
        $hienthisotrang=hien_thi_so_trang($tongsosp, $soluongsp);
        include "view/page-products-list.php";
        break;
      case 'updateproduct':
        $dsdm=danhmuc_all();
        $kyw="";
        $iddm="";
        //kiem tra va lay du lieu
        if(isset($_POST['updateproduct'])){
          //lấy dữ liệu về
          $name = $_POST["name"];
          $price = $_POST["price"];
          $old_price = $_POST["old_price"];
          $describe1 = $_POST["describe1"];
          $describe2 = $_POST["describe2"];
          $iddm = $_POST["iddm"];
          $id = $_POST["id"];
          if(isset($_POST['bestseller'])){
            $bestseller = $_POST["bestseller"];
            if($bestseller='checked') $bestseller=1; else $bestseller=0;
          }else{
            $bestseller=0;
          }
          if(isset($_POST['hot'])){
            $hot = $_POST["hot"];
            if($hot='checked') $hot=1; else $hot=0;
          }else{
            $hot=0;
          }
          if(isset($_POST['new'])){
            $new = $_POST["new"];
            if($new='checked') $new=1; else $new=0;
          }else{
            $new=0;
          }
          $img = $_FILES["img"]['name'];
          if($img!=""){ 
            //upload hình
            $target_file = IMG_PATH_ADMIN.$img;
            move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

            //xóa hình cũ trên host
            $old_img=IMG_PATH_ADMIN.$_POST['old_img'];
            if(file_exists($old_img)) unlink($old_img);

          } else {
            $img="";
          }
          //update
          sanpham_update($name, $img, $price, $old_price, $describe1, $describe2, $bestseller, $hot, $new, $iddm, $id);
        }

        //show dssp
        $soluongsp = 8;
        $productlist = get_dssp_admin($kyw, $iddm, 1, $soluongsp);
        $tongsosp=get_dssp_all();
        $hienthisotrang=hien_thi_so_trang($tongsosp, $soluongsp);
        include "view/page-products-list.php";
        break;
      case 'page-add-product':
        $categorylist = danhmuc_all();
        include "view/page-add-product.php";
        break;
      case 'page-update-product':
        if(isset($_GET['id'])&&($_GET['id']>0)){
          $id=$_GET['id'];
          $sp=get_sp_by_id($id);
        }
        //trở về trang dssp
        $categorylist=danhmuc_all();
        include "view/page-update-product.php";
        break;
      case 'delproduct':
        $dsdm=danhmuc_all();
        $kyw="";
        $iddm="";
        if(isset($_GET['id'])&&($_GET['id']>0)){
          $id=$_GET['id'];
          $img=IMG_PATH_ADMIN.get_img($id);
          if(is_file($img)){
            unlink($img);
          }
          try {
            sanpham_delete($id);
          } catch(\Throwable $th){
            //throw $th;
            echo"<h3 style='color:red; text-align:center' >Sản phẩm đã có trong giỏ hàng! Không được quyền xóa!</h3>";
          }
        }  
        //trở về trang dssp
        $soluongsp = 8;
        $productlist = get_dssp_admin($kyw, $iddm, 1, $soluongsp);
        $tongsosp=get_dssp_all();
        $hienthisotrang=hien_thi_so_trang($tongsosp, $soluongsp);
        include "view/page-products-list.php";
        break;
      case 'addproduct':
        if (isset($_POST['addproduct'])) {
          $dsdm=danhmuc_all();
          $kyw="";
          //lấy dữ liệu về
          $name = $_POST["name"];
          $price = $_POST["price"];
          $old_price = $_POST["old_price"];
          $describe1 = $_POST["describe1"];
          $describe2 = $_POST["describe2"];
          $iddm = $_POST["iddm"];
          if(isset($_POST['bestseller'])){
            $bestseller = $_POST["bestseller"];
            if($bestseller=1) $bestseller=1; else $bestseller=0;
          }else{
            $bestseller=0;
          }
          if(isset($_POST['hot'])){
            $hot = $_POST["hot"];
            if($hot=1) $hot=1; else $hot=0;
          }else{
            $hot=0;
          }
          if(isset($_POST['new'])){
            $new = $_POST["new"];
            if($new=1) $new=1; else $new=0;
          }else{
            $new=0;
          }
          $img = $_FILES["img"]['name'];
          //upload hình
          $target_file = IMG_PATH_ADMIN.$img;
          move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

          //insert into
          sanpham_insert($name, $img, $price, $old_price, $describe1, $describe2, $bestseller, $hot, $new, $iddm);

          //trở về trang dssp
          $soluongsp = 8;
          $productlist = get_dssp_admin($kyw, $iddm, 1, $soluongsp);
          $tongsosp=get_dssp_all();
          $hienthisotrang=hien_thi_so_trang($tongsosp, $soluongsp);
          include "view/page-products-list.php";
        } else {
          $categorylist=danhmuc_all();
          include "view/page-form-product.php";
        }
        break;
      case 'categories':
        $cataloglist = danhmuc_all();  
        if (isset($_POST['btnadd'])) {
          $name = $_POST['name'];
          $img=$_FILES["img"]["name"];
          $target_file = IMG_PATH_ADMIN.basename($img);
          if($img!=""){
            //upload hình
            $target_file = IMG_PATH_ADMIN.$img;
            move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
          } else {
            $img="";
          }
          danhmuc_insert($name, $img);
          header("location: index.php?pg=categories");
        }   
        include "view/page-categories.php";
        break;
      case 'deletedm':
        $cataloglist=danhmuc_all();
        if(isset($_GET['id'])&&($_GET['id']>0)){
          $id=$_GET['id'];
          $img=IMG_PATH_ADMIN.get_img_dm($id);
          if(is_file($img)){
            unlink($img);
          }
          try {
            danhmuc_delete($id);
          } catch(\Throwable $th){
            //throw $th;
            echo"<h3 style='color:red; text-align:center' >Danh mục này là khóa ngoại! Không được quyền xóa!</h3>";
          }
        } 
        //trở về trang dm
        $cataloglist = danhmuc_all();  
        include "view/page-categories.php";
        break;
      case 'updatedm':
        //kiem tra va lay du lieu
        if(isset($_POST['updatedm'])){
          //lấy dữ liệu về
          $id = $_POST["id"];
          $name = $_POST["name"];

          $img = $_FILES["img"]['name'];
          if($img!=""){
            //upload hình
            $target_file = IMG_PATH_ADMIN.$img;
            move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

            //xóa hình cũ trên host
            $old_img=IMG_PATH_ADMIN.$_POST['old_img'];
            if(file_exists($old_img)) unlink($old_img);

          } else {
            $img="";
          }
          //update
          danhmuc_update($name, $img, $id);
        }

        //show dm
        $cataloglist = danhmuc_all();  
        include "view/page-categories.php";
        break;
      case 'page-update-dm':
        if(isset($_GET['id'])&&($_GET['id']>0)){
          $id=$_GET['id'];
          $dm=danhmuc_all();
        } 
        //trở về trang dm
        $cataloglist = danhmuc_all();  
        include "view/page-update-dm.php";
        break;
      case 'orders':
        if(!isset($_GET['status'])){
          $status=0;
        }else{
          $status=$_GET['status'];
        }
        $kyw="";
        if (isset($_POST["search"])) {
          $kyw=$_POST["kyw"];
        }
        if(!isset($_GET['page'])){
          $page=1;
        }else{
          $page=$_GET['page'];
        }
        if($status==1){
          $orderlist=get_order($kyw, $status);
          $hienthiother="";
        } 
        elseif($status==2) {
          $orderlist=get_order($kyw, $status);
          $hienthiother="";
        }
        elseif($status==3){
          $orderlist=get_order($kyw, $status);
          $hienthiother="";
        } 
        elseif($status==4){
          $orderlist=get_order($kyw, $status);
          $hienthiother="";
        } 
        elseif($status==5){
          $orderlist=get_order($kyw, $status);
          $hienthiother="";
        } 
        elseif($status==6){
          $orderlist=get_order($kyw, $status);
          $hienthiother="";
        } 
        else {
          $orderlist=get_order_all($kyw, $page, 8); 
          $tongother= get_other_all();
          $hienthiother= hien_thi_other($tongother, 8);
        }
        include "view/page-orders.php";
        break;
      case 'orders-detail':
        if(isset($_GET['id']) && ($_GET["id"] > 0)) {
          $id = $_GET['id'];
  
          $ordercart = get_cart_by_id($id);
          $orderdetail = get_order_by_id($id);
          include "view/page-orders-detail.php";
        }else {
          include "view/home.php";
        }
        break;  
      case 'order-pending':
        if(isset($_GET['id']) && $_GET['id'] > 0) {
          $id = $_GET['id'];
          // Lấy trạng thái từ cơ sở dữ liệu hoặc bất kỳ nguồn dữ liệu nào khác
          $status = get_status($id);
          update_status($id, 1);
          $kyw="";
          if (isset($_POST["search"])) {
            $kyw=$_POST["kyw"];
          }
          if(!isset($_GET['page'])){
            $page=1;
          }else{
            $page=$_GET['page'];
          }
          $orderlist=get_order_all($kyw, $page, 8); 
          $tongother= get_other_all();
          $hienthiother= hien_thi_other($tongother, 8);
          include "view/page-orders.php";
        }else {
          include "view/home.php";
        }
        break;
      case 'order-confirm':
        if(isset($_GET['id']) && $_GET['id'] > 0) {
          $id = $_GET['id'];
          // Lấy trạng thái từ cơ sở dữ liệu hoặc bất kỳ nguồn dữ liệu nào khác
          $status = get_status($id);
          update_status($id, 2);
          $kyw="";
          if (isset($_POST["search"])) {
            $kyw=$_POST["kyw"];
          }
          if(!isset($_GET['page'])){
            $page=1;
          }else{
            $page=$_GET['page'];
          }
          $orderlist=get_order_all($kyw, $page, 8); 
          $tongother= get_other_all();
          $hienthiother= hien_thi_other($tongother, 8);
          include "view/page-orders.php";
        }else {
          include "view/home.php";
        }
        break;
      case 'order-delivering':
        if(isset($_GET['id']) && $_GET['id'] > 0) {
          $id = $_GET['id'];
          // Lấy trạng thái từ cơ sở dữ liệu hoặc bất kỳ nguồn dữ liệu nào khác
          $status = get_status($id);
          update_status($id, 3);
          $kyw="";
          if (isset($_POST["search"])) {
            $kyw=$_POST["kyw"];
          }
          if(!isset($_GET['page'])){
            $page=1;
          }else{
            $page=$_GET['page'];
          }
          $orderlist=get_order_all($kyw, $page, 8); 
          $tongother= get_other_all();
          $hienthiother= hien_thi_other($tongother, 8);
          include "view/page-orders.php";
        }else {
          include "view/home.php";
        }
        break;
      case 'order-complete':
        if(isset($_GET['id']) && $_GET['id'] > 0) {
          $id = $_GET['id'];
          // Lấy trạng thái từ cơ sở dữ liệu hoặc bất kỳ nguồn dữ liệu nào khác
          $status = get_status($id);
          update_status($id, 4);
          $kyw="";
          if (isset($_POST["search"])) {
            $kyw=$_POST["kyw"];
          }
          if(!isset($_GET['page'])){
            $page=1;
          }else{
            $page=$_GET['page'];
          }
          $orderlist=get_order_all($kyw, $page, 8); 
          $tongother= get_other_all();
          $hienthiother= hien_thi_other($tongother, 8);
          include "view/page-orders.php";
        }else {
          include "view/home.php";
        }
        break;
      case 'order-fail':
        if(isset($_GET['id']) && $_GET['id'] > 0) {
          $id = $_GET['id'];
          // Lấy trạng thái từ cơ sở dữ liệu hoặc bất kỳ nguồn dữ liệu nào khác
          $status = get_status($id);
          update_status($id, 5);
          $kyw="";
          if (isset($_POST["search"])) {
            $kyw=$_POST["kyw"];
          }
          if(!isset($_GET['page'])){
            $page=1;
          }else{
            $page=$_GET['page'];
          }
          $orderlist=get_order_all($kyw, $page, 8); 
          $tongother= get_other_all();
          $hienthiother= hien_thi_other($tongother, 8);
          include "view/page-orders.php";
        }else {
          include "view/home.php";
        }
        break;
      case 'user-list':
        $kyw="";
        if (isset($_POST["search"])) {
          $kyw=$_POST["kyw"];
        }
        if(!isset($_GET['page'])){
          $page=1;
        }else{
          $page=$_GET['page'];
        }
        $soluong_user=6;
        $listuser=loadall_user($kyw, $page, $soluong_user);
        $tongso_user= get_user_all();
        $hienthi_user= hien_thi_user($tongso_user, $soluong_user);
        include "view/page-user-list.php";
        break;
      case 'deluser':
        if(isset($_GET['id'])&&($_GET['id']>0)){
          $id=$_GET['id'];
          try {
            user_delete($id);
          } catch(\Throwable $th){
            //throw $th;
            echo"<h3 style='color:red; text-align:center' >User này là khóa ngoại! Không được quyền xóa!</h3>";
          }
        } 
        //trở về trang user
        $kyw="";
        if (isset($_POST["search"])) {
          $kyw=$_POST["kyw"];
        }
        if(!isset($_GET['page'])){
          $page=1;
        }else{
          $page=$_GET['page'];
        }
        $soluong_user=6;
        $listuser=loadall_user($kyw, $page, $soluong_user);
        $tongso_user= get_user_all();
        $hienthi_user= hien_thi_user($tongso_user, $soluong_user);
        include "view/page-user-list.php";
        break;
      case 'page-blog-list':
        $dsloai = dmuc_all();
        $kyw = "";
        $idloai="";
        if (!isset($_GET['idloai'])) {
          $idloai = 0;
        } else {
          $idloai = $_GET['idloai'];
        }
  
        if (isset($_POST["search"])) {
          $kyw = $_POST["kyw"];
        }
        if(!isset($_GET['page'])){
          $page=1;
        }else{
          $page=$_GET['page'];
        }
        $soluong_tintuc=6;
        $bloglist = get_dsblog_admin($kyw, $idloai, $page, $soluong_tintuc);
        $tong_so_tin_tuc=get_tintuc_all();
        $hien_thi_tin_tuc=hien_thi_tin_tuc($tong_so_tin_tuc, $soluong_tintuc);
        include "view/page-blog-list.php";
        break;
      case 'addblog':
        $tintuclist = dmuc_all();
        include "view/page-add-blog.php";
        break;
      case 'page-add-blog':
        if (isset($_POST['addblog'])) {
          $dsloai = dmuc_all();
          $kyw = "";
          //Lấy dữ liệu về
          $author = $_POST['author'];
          $date = $_POST['date'];
          $title = $_POST['title'];
          $content = $_POST['content'];
          $idloai = $_POST['idloai'];
          $img = $_FILES['img']['name'];
          //upload hình
          $target_file = IMG_PATH_ADMIN . $img;
          move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
  
          //Insert into
          blog_insert($author, $date, $title, $content, $img, $idloai);
          // Chuyển hướng người dùng sau khi thêm tin tức
          header("Location: index.php?pg=page-blog-list");
          exit(); //
        } else {
          $tintuclist = dmuc_all();
          include "view/page-add-blog.php";
        }
        break;
      case 'delblog':
        $dsloai = dmuc_all();
        $kyw = "";
        $idloai = "";
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          $id = $_GET['id'];
          $img = IMG_PATH_ADMIN . get_img($id);
          if (is_file($img)) {
            unlink($img);
          }
          try {
            blog_delete($id);
          } catch (\Throwable $th) {
            //throw $th;
            echo "<h3 style='color:red; text-align:center' >Tin tức đặc biệt! Không được quyền xóa!</h3>";
          }
        }
        //trở về trang dstt
        if(!isset($_GET['page'])){
          $page=1;
        }else{
          $page=$_GET['page'];
        }
        $soluong_tintuc=6;
        $bloglist = get_dsblog_admin($kyw, $idloai, $page, $soluong_tintuc);
        $tong_so_tin_tuc=get_tintuc_all();
        $hien_thi_tin_tuc=hien_thi_tin_tuc($tong_so_tin_tuc, $soluong_tintuc);
        include "view/page-blog-list.php";
        break;
      case 'page-update-blog':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          $id = $_GET['id'];
          $tt = get_tt_by_id($id);
        }
        //trở về trang dstt
        $tintuclist = dmuc_all();
        include "view/page-update-blog.php";
        break;
      case 'updateblog':
        $dsloai = danhmuc_all();
        $kyw = "";
        $idloai = "";
        //kiểm tra và lấy dữ liệu
        if(isset($_POST['updateblog'])){
          $author = $_POST['author'];
          $date = $_POST['date'];
          $title = $_POST['title'];
          $content = $_POST['content'];
          $idloai = $_POST['idloai'];
          $id = $_POST['id'];
          $img = $_FILES['img']['name'];
          if ($img != "") {
            //upload hình
            $target_file = IMG_PATH_ADMIN . $img;
            move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
  
            //xóa hình cũ trên host
            $old_img = IMG_PATH_ADMIN . $_POST['old_img'];
            if (file_exists($old_img))
              unlink($old_img);
          } else {
            $img = "";
          }
          //Insert into
          blog_update($author, $date, $title, $content, $img, $idloai, $id);
        }
        //trở về trang dstt
        if(!isset($_GET['page'])){
          $page=1;
        }else{
          $page=$_GET['page'];
        }
        $soluong_tintuc=6;
        $bloglist = get_dsblog_admin($kyw, $idloai, $page, $soluong_tintuc);
        $tong_so_tin_tuc=get_tintuc_all();
        $hien_thi_tin_tuc=hien_thi_tin_tuc($tong_so_tin_tuc, $soluong_tintuc);
        include "view/page-blog-list.php";
        break;
      case 'page-review':
        if(!isset($_GET['page'])){
          $page=1;
        }else{
          $page=$_GET['page'];
        }
        $soluong_cmt=6;
        $comment_list = comment_select_all($page, $soluong_cmt);
        $tongso_cmt= get_cmt_all();
        $hienthi_cmt= hien_thi_cmt($tongso_cmt, $soluong_cmt);
        include "view/page-review.php";
        break;
      case 'delcomment':
        if(isset($_GET['id']) && ($_GET['id'] > 0)){
          $id = $_GET['id'];
          comment_delete($id);
        } 
        // Redirect back to comments page
        if(!isset($_GET['page'])){
          $page=1;
        }else{
          $page=$_GET['page'];
        }
        $soluong_cmt=6;
        $comment_list = comment_select_all($page, $soluong_cmt);
        $tongso_cmt= get_cmt_all();
        $hienthi_cmt= hien_thi_cmt($tongso_cmt, $soluong_cmt);
        include "view/page-review.php";
        break;
      
      default:
        include "view/home.php";
        break;
    }
  }
  include "view/footer.php";
?>