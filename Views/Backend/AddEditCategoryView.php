<?php
//ke thua Layout1.php de load vao day
$this->fileLayout = "Views/Backend/Layout1.php";
?>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">Thêm/Sửa danh mục sản phẩm</div>
        <div class="panel-body">
            <form method="post" action="<?php echo $formAction; ?>">
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Tên danh mục</div>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->name)?$record->name:''; ?>" name="name" class="form-control" required>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
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