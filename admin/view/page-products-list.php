<?php
    $html_dm='';
    foreach ($dsdm as $dm) {
        extract($dm);
        if($id==$iddm){
            $se="selected";
        } else{
            $se="";
        }
        $link='index.php?pg=products-list&iddm='.$id;
        $html_dm.='<option value="'.$link.'" '.$se.'>'.$name.'</option>';
    } 
    $html_productlist=showsp_admin($productlist);
?>

<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Danh sách sản phẩm</h2>
        </div>
        <div>
            <a href="index.php?pg=page-add-product" class="btn btn-primary btn-sm rounded">Thêm sản phẩm</a>
        </div>
    </div>
    <div class="card mb-4">
        <header class="card-header">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 me-auto">
                    <form action="index.php?pg=products-list" method="post">
                        <input type="text" name="kyw" placeholder="Tìm kiếm..." class="form-control">
                        <button hidden class="btn btn-light bg btn-fix" type="submit" name="search"> <i class="material-icons md-search"></i></button>
                    </form>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <select class="form-select" id="mySelect">
                        <option value="index.php?pg=products-list" selected>Tất cả danh mục</option>
                        <?=$html_dm;?>
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
                            <th>Sản phẩm</th>
                            <th style="padding-left: 165px;">Giá</th>
                            <th style="padding-right: 40px;">Giá gốc</th>
                            <th style="padding-right: 280px;">Mô tả</th>
                            <th class="text-end"> Action </th>
                        </tr>
                    </thead>
                </table>
            </div>
            <?=$html_productlist;?>
        </div>
        <!-- card-body end// -->
    </div>
    <!-- card en    d// -->
    <div class="pagination-area mt-30 mb-50">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-start">                
                <?php echo $hienthisotrang;?>
            </ul>
        </nav>
    </div>
</section>