<?php 
    //ket thua layout1.php de load vao day
    $this->fileLayout = "Views/Backend/Layout1.php";
 ?> 
<div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">Thêm/Sửa nguyên liệu</div>
        <div class="panel-body">
        <form method="post" action="<?php echo $formAction; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Tên kho</div>
                <div class="col-md-10">
                    <select name="MaKho">
                        <?php
                            $conn = Connection::getInstance();
                            $stmt = $conn->prepare("select MaKho,TenKho from tbl_storage");
                            $stmt->execute();
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                echo "<option value=".$row['MaKho'].">".$row['TenKho']."</option>";
                            }
                        ?>
                    </select><br>
                </div>
                </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Tên NCC</div>
                <div class="col-md-10">
                    <select name="MaNCC">
                        <?php
                            $conn = Connection::getInstance();
                            $stmt = $conn->prepare("select MaNCC,TenNCC from tbl_supplier");
                            $stmt->execute();
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                echo "<option value=".$row['MaNCC'].">".$row['TenNCC']."</option>";
                            }
                        ?>
                    </select><br>
                </div>
                </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Sản Phẩm</div>
                <div class="col-md-10">
                    <select name="product_id" class="form-control" style="width: 300px;">
                        <?php 
                            $conn = Connection::getInstance();
                            $query = $conn->query("select * from tbl_product order by id desc");
                            //lay tat ca ket qua tra ve
                            $product = $query->fetchAll();
                            foreach($product as $rows):
                         ?>
<option <?php if(isset($record->product_id)&&$record->product_id==$rows->id): ?> selected <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Tên nguyên liệu</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->TenNL)?$record->TenNL:''; ?>" name="TenNL" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Giá tiền</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->GiaTien)?$record->GiaTien:''; ?>" name="GiaTien" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Ngày nhập</div>
                <div class="col-md-10">
                    <input type="date" value="<?php echo isset($record->NgayNhap)?$record->NgayNhap:''; ?>" name="NgayNhap" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Hạn sử dụng</div>
                <div class="col-md-10">
                    <input type="date" value="<?php echo isset($record->HanSuDung)?$record->HanSuDung:''; ?>" name="HanSuDung" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
              <!-- rows -->
              <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Trạng Thái</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->TrangThai)?$record->TrangThai:''; ?>" name="TrangThai" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="Xác nhận" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>
        </div>
    </div>
</div>