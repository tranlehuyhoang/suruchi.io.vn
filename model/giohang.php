<?php
    require_once 'pdo.php';

function cart_insert($idpro, $price, $name, $img, $soluong, $thanhtien, $idbill ){
    $sql = "INSERT INTO cart(idpro, price, name, img, soluong, thanhtien, idbill) VALUES (?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql,$idpro, $price, $name, $img, $soluong, $thanhtien, $idbill);
}

function update_quantity_product($idpro, $soluong){
    $sql = "UPDATE cart SET soluong=? WHERE id=?";
    pdo_execute($sql, $soluong, $idpro);
}

function get_tongdonhang() {
    // Ghi code để tính tổng đơn hàng của bạn ở đây
    // Ví dụ:
    $total = 0;

    // Lặp qua từng sản phẩm trong giỏ hàng
    foreach ($_SESSION['giohang'] as $sp) {
        $amount = $sp['amount'];
        $gia = $sp['price'];
        $thanhtien = $amount * $gia;

        $total += $thanhtien;
    }

    return $total;
}

function get_cart_by_id($id){
    // Sử dụng prepared statement để tránh SQL injection
    $sql = "SELECT c.*, p.name FROM cart c JOIN product p ON c.idpro = p.id WHERE c.idbill = ?";
    $result = pdo_query($sql, $id);
    return $result;
}


?>  