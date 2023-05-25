<?php 
    //ket thua layout1.php de load vao day
    $this->fileLayout = "Views/Backend/Layout1.php";
 ?>                  
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?area=backend&controller=Storage&action=add" class="btn btn-primary">Thêm kho</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Danh sách kho</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>No.</th>
                    <th>Tên kho</th>
                    <th>Địa chỉ</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php $cnt=1;foreach($data as $rows): ?>
                <tr>
                    <td><?php echo $cnt;$cnt++; ?></td>
                    <td><?php echo $rows->TenKho; ?></td>
                    <td><?php echo $rows->DiaChi; ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?area=backend&controller=Storage&action=detail&kid=<?php echo $rows->MaKho; ?>">Chi tiết</a>&nbsp;
                        <a href="index.php?area=backend&controller=Storage&action=delete&id=<?php echo $rows->MaKho; ?>" onclick="return window.confirm('Are you sure?');">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>