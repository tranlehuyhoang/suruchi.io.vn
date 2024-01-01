<?php
require_once 'pdo.php';

function comment_insert($iduser, $idpro, $content, $date, $time, $rating) {
    $sql = "INSERT INTO comment (iduser, idpro, content, date, time, rating) VALUES (?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $iduser, $idpro, $content, $date, $time, $rating);
}

function comment_delete($id){
    $sql = "DELETE FROM comment WHERE id=?";
    if(is_array($id)){
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}

function comment_select_by_idpro($idpro){
    $sql = "SELECT c.*, u.name, u.img
            FROM comment c
            JOIN users u ON c.iduser = u.id
            WHERE c.idpro = ?
            ORDER BY c.id DESC";
    return pdo_query($sql, $idpro);
}

function hien_thi_cmt($comment_list, $soluong_cmt){
    $tong_cmt=count($comment_list);
    $sotrang_cmt= ceil($tong_cmt/$soluong_cmt);
    $html_st_cmt="";

    for ($i=1; $i <= $sotrang_cmt ; $i++){
        $html_st_cmt .='<li class="page-item active">
                            <a class="page-link" href="index.php?pg=page-review&page='.$i.'">'.$i.'</a>
                        </li>';
    }
    return $html_st_cmt;
}

function comment_select_all_home(){
    $sql = "SELECT comment.*, users.id AS user_id, users.name AS user_name, users.img AS user_img, product.name AS product_name
            FROM comment
            INNER JOIN users ON comment.iduser = users.id
            INNER JOIN product ON comment.idpro = product.id
            WHERE comment.rating = 5
            ORDER BY comment.id DESC";

    return pdo_query($sql);
}

function comment_select_all($page, $soluong_cmt) {
    $batdau = ($page - 1) * $soluong_cmt;
    $sql = "SELECT comment.*, users.id AS user_id, users.name AS user_name, users.img AS user_img, product.name AS product_name
            FROM comment
            INNER JOIN users ON comment.iduser = users.id
            INNER JOIN product ON comment.idpro = product.id
            ORDER BY comment.id DESC
            LIMIT ".$batdau.",".$soluong_cmt;

    return pdo_query($sql);
}


function get_cmt_all(){
    $sql = " SELECT * FROM comment ORDER BY id ASC ";
    return pdo_query($sql);
}

function binh_luan_exist($ma_bl){
    $sql = "SELECT count(*) FROM binh_luan WHERE ma_bl=?";
    return pdo_query_value($sql, $ma_bl) > 0;
}
function count_comments_by_idpro($idpro) {
    $sql = "SELECT COUNT(*) as total_comments FROM comment WHERE idpro = ?";
    $result = pdo_query_one($sql, $idpro);
    // Trả về số lượng bình luận hoặc 0 nếu có lỗi
    return ($result && isset($result['total_comments'])) ? $result['total_comments'] : 0;
}