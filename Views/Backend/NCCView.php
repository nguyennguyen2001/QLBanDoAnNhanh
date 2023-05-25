<?php 
    //ket thua layout1.php de load vao day
    $this->fileLayout = "Views/Backend/Layout1.php";
 ?>                  
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?area=backend&controller=NCC&action=add" class="btn btn-primary">Thêm Nhà cung cấp</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Danh sách Nhà cung cấp</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>STT</th>
                    <th>Tên nhà cung cấp</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php $cnt=1;foreach($data as $rows): ?>
                <tr>
                    <td><?php echo $cnt;$cnt++; ?></td>
                    <td><?php echo $rows->TenNCC; ?></td>
                    <td><?php echo $rows->MailNCC; ?></td>
                    <td><?php echo $rows->SĐT; ?></td>
                    <td><?php echo $rows->DiaChi; ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?area=backend&controller=NCC&action=edit&id=<?php echo $rows->MaNCC; ?>">Sửa</a>&nbsp;
                        <a href="index.php?area=backend&controller=NCC&action=delete&id=<?php echo $rows->MaNCC; ?>" onclick="return window.confirm('Are you sure?');">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>