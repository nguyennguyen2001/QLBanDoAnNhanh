<?php
//ket thua layout1.php de load vao day
$this->fileLayout = "Views/Backend/Layout1.php";
?>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">Danh sách đặt hàng</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>No.</th>
                    <th>Họ tên</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Ngày tạo</th>
                    <th>Trạng thái</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php $cnt=1;foreach($data as $rows): ?>
                    <tr>
                        <td><?php echo $cnt;$cnt++; ?></td>
                        <td><?php echo $rows->fullname; ?></td>
                        <td><?php echo $rows->email; ?></td>
                        <td><?php echo $rows->phone; ?></td>
                        <td><?php echo $rows->address; ?></td>
                        <td><?php echo $rows->create_at; ?></td>
                        <td>
                            <?php
                              if($rows->status==0)
                                  echo "chưa giao hàng";
                              if($rows->status==1)
                                  echo "đã giao hàng thành công";
                              if($rows->status==2)
                                    {
                                        echo "Giao hàng thất bại";
                                    }

                            ?>
                        </td>
                        <td><a href="index.php?area=backend&controller=Cart&action=orderDetail&id=<?php echo $rows->order_id; ?>">Chi tiết</a> </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item disabled">
                    <a href="#" class="page-link">Trang</a>
                </li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <li class="page-item">
                        <a href="index.php?area=backend&controller=Cart&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>