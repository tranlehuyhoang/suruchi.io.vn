<?php
    $html_userlist="";
    $html_role="";
    foreach($listuser as $users){
    extract($users);
    if($role==1){
        $html_role='<a class="dropdown-item" href="index.php?pg=abort-role&id='.$id.'">Hủy quyền Admin</a>';
    }
    if($role==0){
        $html_role='<a class="dropdown-item" href="index.php?pg=update-role&id='.$id.'">Cấp quyền Admin</a>';
    }
    $html_userlist.='<tr>
                        <td width="23%">
                            <a href="#" class="itemside">
                                <div class="left">
                                    <img src="../uploads/'.$img.'" class="img-sm img-avatar" alt="Userpic">
                                </div>
                                <div class="info pl-3">
                                    <h6 class="mb-0 title">'.$username.'</h6>
                                    <small class="text-muted" style="font-size: 12px;">'.$name.'</small> <br>
                                    <small class="text-muted">Mã khách hàng: #'.$id.'</small>
                                </div>
                            </a>
                        </td>
                        <td>
                            <a href="mailto:'.$email.'" class="__cf_email__">'.$email.'</a>
                        </td>
                        <td><span class="badge rounded-pill alert-success">'.$sdt.'</span></td>
                        <td width="30%">'.$address.'</td>
                        <td class="text-end">
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                <div class="dropdown-menu">
                                    '.$html_role.'
                                    <a class="dropdown-item text-danger" href="index.php?pg=deluser&id='.$id.'">Xóa</a>
                                </div>
                            </div>
                        </td>
                    </tr>';
    }
?>

<section class="content-main">
    <div class="content-header">
        <h2 class="content-title">Danh Sách Khách Hàng</h2>
    </div>
    <div class="card mb-4">
        <header class="card-header">
            <div class="row gx-3">
                <div class="col-lg-4 col-md-6 me-auto">
                    <form action="index.php?pg=user-list" method="post">
                        <input type="text" name="kyw" placeholder="Tìm..." class="form-control">
                        <button hidden class="btn btn-light bg btn-fix" type="submit" name="search"> <i class="material-icons md-search"></i></button>
                    </form>
                </div>
            </div>
        </header>
        <!-- card-header end// -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Tài Khoản</th>
                            <th>Email</th>
                            <th>SDT</th>
                            <th>Địa Chỉ</th>
                            <th class="text-end"> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?=$html_userlist;?>
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
                <?php echo $hienthi_user; ?>
            </ul>
        </nav>
    </div>
</section>