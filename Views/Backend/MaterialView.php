<!-- load file layout vao day -->
<?php 
    $this->fileLayout = "Views/Backend/Layout1.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?area=backend&controller=Material&action=add" class="btn btn-primary">Thêm nguyên liệu</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Danh sách nguyên liệu</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width: 50px;text-align: center;">STT</th>
                    <th style="width: 150px;text-align: center;">Tên nguyên liệu</th>
                    <th style="width: 100px;text-align: center;">Giá tiền (VNĐ)</th>
                    <th style="width: 100px;text-align: center;">Kho</th>
                    <th style="width: 100px;text-align: center;">Nhà Cung Cấp</th>
                    <th style="width: 200px;text-align: center;">Ngày nhập</th>
                    <th style="width: 200px;text-align: center;">Hạn sử dụng</th>
                    <th style="width: 100px;text-align: center;">Trạng thái</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php $cnt=1;foreach($data as $rows): ?>
                <tr>
                    <td><?php echo $cnt;$cnt++;?></td>
                    <td><?php echo $rows->TenNL; ?></td>
                    <td><?php echo $rows->GiaTien; ?></td>
                    <td>
                        <?php 
                            //tu day co the goi thang ham trong model, ham getCategory nam trong model
                            $MaKho = $this->getMaKho($rows->MaKho);
                            echo isset($MaKho->TenKho)?$MaKho->TenKho:"";
                        ?>
                    </td>
                    <td>
                        <?php 
                            //tu day co the goi thang ham trong model, ham getCategory nam trong model
                            $MaNCC = $this->getMaNCC($rows->MaNCC);
                            echo isset($MaNCC->TenNCC)?$MaNCC->TenNCC:"";
                        ?>
                    </td>
                    <td style="text-align: center;">
                        <?php echo date($rows->NgayNhap); ?>
                    </td>
                    <td style="text-align: center;">
                        <?php echo date($rows->HanSuDung); ?>
                    </td>
                    <td style="text-align: center;" >
                        <?php echo $rows->TrangThai; ?>
                    </td>
                    <td style="text-align:center;">
                        <a href="index.php?area=backend&controller=Material&action=edit&id=<?php echo $rows->MaNL; ?>">Sửa</a>&nbsp;
                        <a href="index.php?area=backend&controller=Material&action=delete&id=<?php echo $rows->MaNL; ?>" onclick="return window.confirm('Are you sure?');">Xóa</a>
                    </td>
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
                    <a href="index.php?area=backend&controller=Material&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>                    
                </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>
<link href='https://css.gg/check.css' rel='stylesheet'>