<?php
// add-to-cart.php
session_start(); // Bắt đầu session nếu chưa có

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header("Content-type: application/javascript");
    // Xử lý thêm sản phẩm vào giỏ hàng ở đây
    $id = $_POST['id'];
    $amount = $_POST['amount'];
    $price = $_POST['price']; // Thêm thông tin về giá

    // Thêm sản phẩm vào giỏ hàng
    $sp = array(
        "id" => $id,
        // Thêm các thông tin khác của sản phẩm vào đây
        "amount" => $amount,
        "price" => $price, // Thêm thông tin về giá
    );
    // array_push($_SESSION['giohang'], $sp);

    // Trả về dữ liệu JSON hoặc thông báo thành công nếu cần thiết
    echo json_encode(array("status" => "success"));
} else {
    // Xử lý khi có yêu cầu khác (GET, ...)
    echo json_encode(array("status" => "error"));
}
?>




