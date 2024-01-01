<?php
    // Hàm ánh xạ giá trị 'status' sang trạng thái tương ứng
    function getStatusText($status){
        switch ($status) {
            case 1:
                return 'Pending';
            case 2:
                return 'Confirm';
            case 3:
                return 'Delivering';
            case 4:
                return 'Complete';
            case 5:
                return 'Delivery failed';
            case 6:
                return 'Cancelled';
            default:
                return 'Unknown status';
        }
    }
    $html_orderlist = '';
    foreach ($orderlist as $order) {
        $orderId = $order['id'];
        $orderStatus = $order['status']; 
        if($orderStatus==1){
            $tt='<span class="badge rounded-pill alert-warning">Pending</span>';
        } 
        if($orderStatus==2){
            $tt='<span class="badge rounded-pill alert-success">Confirm</span>';
        } 
        if($orderStatus==3){
            $tt='<span class="badge rounded-pill alert-success">Delivering</span>';
        } 
        if($orderStatus==4){
            $tt='<span class="badge rounded-pill alert-success">Complete</span>';
        } 
        if($orderStatus==5){
            $tt='<span class="badge rounded-pill alert-warning">Delivery failed</span>';
        } 
        if($orderStatus==6){
            $tt='<span class="badge rounded-pill alert-danger">Cancelled</span>';
        }
        $select="";
        // Mảng chứa các trạng thái và đường link tương ứng
        $statusOptions = [
            1 => 'index.php?pg=orders&status=1',
            2 => 'index.php?pg=orders&status=2',
            3 => 'index.php?pg=orders&status=3',
            4 => 'index.php?pg=orders&status=4',
            5 => 'index.php?pg=orders&status=5',
            6 => 'index.php?pg=orders&status=6',
        ];
        // Tạo tùy chọn cho mỗi trạng thái
        foreach ($statusOptions as $value => $link) {
            $select .= '<option value="' . $link . '">' . getStatusText($value) . '</option>';
        }
        $html_orderlist.='<tr>
                            <td>#'.$order['mahd'].'</td>
                            <td><b>'.$order['nguoidat_ten'].'</b></td>
                            <td>'.number_format($order['tongthanhtoan'],0,",",".").'VNĐ</td>
                            <td>'.$tt.'</td>
                            <td>'.$order['date'].'</td>
                            <td class="text-end">
                                <a href="index.php?pg=orders-detail&id='.$order['id'].'" class="btn btn-md rounded font-sm">Chi tiết</a>
                            </td>
                        </tr>'; 
    }
?>


<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Danh sách đơn đặt hàng</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <header class="card-header">
                    <div class="row gx-3">
                        <div class="col-lg-4 col-md-6 me-auto">
                            <form action="index.php?pg=orders" method="post">
                                <input type="text" name="kyw" placeholder="Tìm kiếm..." class="form-control">
                                <button hidden class="btn btn-light bg btn-fix" type="submit" name="search"><i class="material-icons md-search"></i></button>
                            </form>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <select class="form-select" id="mySelect">
                                <option value="index.php?pg=orders" selected></option>
                                <?=$select;?>
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
                                    <th>ID</th>
                                    <th>Tên Khách Hàng</th>
                                    <th>Tổng Tiền</th>
                                    <th>Trạng Thái</th>
                                    <th>Ngày Đặt Hàng</th>
                                    <th class="text-end"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?=$html_orderlist;?>
                            </tbody>
                        </table>
                    </div>
                    <!-- table-responsive //end -->
                </div>
                <!-- card-body end// -->
            </div>
            <!-- card end// -->
        </div>
    </div>
    <div class="pagination-area mt-15 mb-50">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-start">
                <?php echo $hienthiother; ?>
            </ul>
        </nav>
    </div>
</section>