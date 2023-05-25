<?php 
    //ket thua layout1.php de load vao day
    $this->fileLayout = "Views/Backend/Layout1.php";
 ?> 
<div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">
            Detail storage
        </div>
        <div class="panel-body">
        <form method="post" action="<?php echo $formAction; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Name</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->TenKho)?$record->TenKho:''; ?>" name="TenKho" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Address</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->DiaChi)?$record->DiaChi:''; ?>" name="DiaChi" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="Process" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>
        </div>
    </div>
    <div style="margin-bottom:5px;">
        <a href="index.php?area=backend&controller=Material&action=add" class="btn btn-primary">Thêm nguyên liệu</a>
    </div>
    <div class="panel panel-primary">
    <div class="panel-heading">Danh sách Nguyên Liệu</u></div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>STT</th>
                    <th>Tên nguyên liệu</th>
                    <th>Giá</th>
                    <th>Ngày Nhập</th>
                    <th>Hạn Sử Dụng</th>
                    <th>Trạng Thái</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php
                    $conn = Connection::getInstance();
                    $id = isset($_GET["kid"])&&is_numeric($_GET["kid"]) ? $_GET["kid"] : 0;
                    $query = $conn->prepare("select * from tbl_material where MaKho=:id");
                    $query->execute(array("id"=>$id));
                ?>
                <?php $cnt=1;while($rows = $query->fetch(PDO::FETCH_ASSOC)){ ?>
                <tr>
                    <td><?php echo $cnt;$cnt++; ?></td>
                        
                    <td><?php echo $rows["TenNL"]; ?></td>
                    <td><?php echo $rows["GiaTien"]; ?></td>
                    <td><?php echo $rows["NgayNhap"]; ?></td>
                    <td><?php echo $rows["HanSuDung"]; ?></td>
                    <td><?php echo $rows["TrangThai"]; ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?area=backend&controller=Material&action=edit&id=<?php echo $rows["MaNL"]; ?>">Sửa</a>&nbsp;
                        <a href="index.php?area=backend&controller=Material&action=delete&id=<?php echo $rows["MaNL"]; ?>" onclick="return window.confirm('Are you sure?');">Xóa</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>