<?php
    $html_loai='';
    foreach ($dsloai as $loai) {
        extract($loai);
        if($id==$idloai){
            $se="selected";
        } else{
            $se="";
        }
        $link='index.php?pg=page-blog-list&idloai='.$id;
        $html_loai.='<li class="widget__categories--menu__list">
                        <option value="'.$link.'" '.$se.'>'.$name.'</option>
                    </li>';
    } 
    $html_bloglist=showblog_admin($bloglist);
?>
<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Danh sách tin tức</h2>
        </div>
        <div>
            <a href="index.php?pg=page-add-blog" class="btn btn-primary btn-sm rounded">Thêm tin tức</a>
        </div>
    </div>
    <div class="card mb-4">
        <header class="card-header">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3 col-6">
                    <select class="form-select" id="mySelect">
                        <option value="index.php?pg=page-blog-list" selected>Tất cả tin tức</option>
                        <?=$html_loai;?>
                    </select>
                </div>
            </div>
        </header>
        <!-- card-header end// -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="9%">STT</th>
                            <th>Tác giả</th>
                            <th style="padding-left: 55px;">Ngày đăng</th>
                            <th style="padding-right: 40px;">Tiêu đề</th>
                            <th class="text-end"> Action </th>
                        </tr>
                    </thead>
                </table>
            </div>
            <?=$html_bloglist;?>
        </div>
        <!-- card-body end// -->
    </div>
    <!-- card end// -->
    <div class="pagination-area mt-30 mb-50">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-start">
                <?php echo $hien_thi_tin_tuc; ?>
            </ul>
        </nav>
    </div>
</section>