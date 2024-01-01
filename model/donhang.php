<?php
require_once 'pdo.php';
function order_insert_id($mahd, $iduser, $nguoidat_ten, $nguoidat_email, $nguoidat_tel, $nguoidat_diachi, $note, $total, $ship, $voucher, $tongthanhtoan, $pttt, $date, $time){
    $sql = "INSERT INTO orders (mahd, iduser, nguoidat_ten, nguoidat_email, nguoidat_tel, nguoidat_diachi, note, total, ship, voucher, tongthanhtoan, pttt, date, time) VALUES (?, ?, ?, ?, ?, ? ,?, ?, ?, ?, ?, ?, ?, ?)";   
    return pdo_execute_id($sql, $mahd, $iduser, $nguoidat_ten, $nguoidat_email, $nguoidat_tel, $nguoidat_diachi, $note, $total, $ship, $voucher, $tongthanhtoan, $pttt, $date, $time);
}

function get_order_limi($limi){
    $sql = "SELECT * FROM orders ORDER BY id DESC limit ".$limi;
    return pdo_query($sql);
}

function get_order_home(){
    $sql = "SELECT * FROM orders ORDER BY id";
    return pdo_query($sql);
}

function hien_thi_other($orderlist, $soluongother){
    $tong_other= count($orderlist);
    $so_trang_other = ceil($tong_other/$soluongother);
    $html_stother="";
    for ($i=1; $i <= $so_trang_other ; $i++){
        $html_stother .='<li class="page-item active">
                            <a class="page-link" href="index.php?pg=orders&page='.$i.'">'.$i.'</a>
                        </li>';
    }
    return $html_stother;
}

function get_order_all($kyw, $page, $soluongother) {
    $batdau = ($page - 1) * $soluongother;
    $sql = "SELECT * FROM orders WHERE 1";

    if ($kyw != "") {
        $sql .= " AND mahd LIKE '%" . $kyw . "%'";
    }

    $sql .= " ORDER BY id ASC LIMIT " . $batdau . "," . $soluongother;

    return pdo_query($sql);
}

function get_other_all(){
    $sql = " SELECT * FROM orders ORDER BY id ASC ";
    return pdo_query($sql);
}

function get_order($kyw, $status) {
    $sql = "SELECT * FROM orders WHERE 1";

    if ($kyw != "") {
        $sql .= " AND mahd LIKE '%" . $kyw . "%'";
    }

    if ($status !== null) {
        $sql .= " AND status = " . $status;
    }

    $sql .= " ORDER BY id";

    return pdo_query($sql);
}


function get_orders_by_user($iduser) {
    $sql = "SELECT * FROM orders WHERE iduser = $iduser ORDER BY id DESC";
    return pdo_query($sql);
}

function get_order_by_id($id){
    $sql = "SELECT * FROM orders WHERE id=?";
    return pdo_query_one($sql, $id);
}


function get_status($id){
    $sql = "SELECT status FROM orders WHERE id=".$id;
    $kq = pdo_query_one($sql);
    return $kq["status"];
}

function update_status($id, $status) {
    $sql = "UPDATE orders SET status = ? WHERE id = ?";
    pdo_execute($sql, $status, $id);
}   