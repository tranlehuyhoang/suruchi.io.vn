<?php
    $html_cmt="";
    foreach($comment_list as $item) {
        extract($item);
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
        $html_cmt.=' <tr>
        <td>
            <a href="#" class="itemside">
                <div class="left">
                    <img src="../uploads/'.$user_img.'" class="img-sm img-avatar" alt="Userpic">
                </div>
                <div class="info pl-3">
                    <h6 class="mb-0 title">'.$user_name.'</h6>
                    <small class="text-muted">Seller ID: '.$user_id.'</small>
                </div>
            </a>
        </td>
        <td>'.$product_name.'</td>
        <td width="24%">
          '.$content.'
        </td>
        <td width="15%">'.$html_rating.'</td>
        <td>    
            '.$date.' <br>
            <span style="font-weight: bold;">'.$time.'</span>
        </td>
        <td class="text-end">
            <a class="btn btn-sm btn-brand rounded font-sm mt-14" href="index.php?pg=delcomment&id='.$id.'">Xóa</a>
        </td>
    </tr>';
    }
?>
<section class="content-main">
    <div class="content-header">
        <h2 class="content-title">Bình luận từ khách hàng</h2>
    </div>
    <div class="card mb-4">
        <header class="card-header">
            
        </header>
        <!-- card-header end// -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Tài Khoản</th>
                            <th>Sản Phẩm</th>
                            <th>Bình Luận</th>
                            <th>Đánh giá</th>
                            <th>Ngày</th>
                            <th class="text-end"> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                       <?=$html_cmt;?>
                    </tbody>
                </table>
                <!-- table-responsive.// -->
            </div>
        </div>
        <!-- card-body end// -->
    </div>
    <!-- card end// -->
    <div class="pagination-area mt-15 mb-50">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-start">
                <?php echo $hienthi_cmt; ?>
            </ul>
        </nav>
    </div>
</section>