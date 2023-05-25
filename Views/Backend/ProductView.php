<!-- load file layout vao day -->
<?php 
    $this->fileLayout = "Views/Backend/Layout1.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?area=backend&controller=Product&action=add" class="btn btn-primary">Thêm sản phẩm</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Danh sách sản phẩm</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>STT</th>
                    <th style="width:100px;">Ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th style="width: 150px;">Danh mục</th>
                    <th style="width: 100px;">Giá</th>
                    <th style="width: 50px;">Số lượng</th>
                    <th style="width: 150px;"></th>
                </tr>
                <?php $cnt=1;foreach($data as $rows): ?>
                <tr>
                    <td><?php echo $cnt;$cnt++;?></td>
                    <td>
                        <?php if($rows->img != "" && file_exists("Assets/upload/product/".$rows->img)): ?>
                            <img src="Assets/upload/product/<?php echo $rows->img; ?>" style="width: 100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $rows->name; ?></td>
                    <td>
                        <?php 
                            //tu day co the goi thang ham trong model, ham getCategory nam trong model
                            $category = $this->getCategory($rows->category_id);
                            echo isset($category->name)?$category->name:"";
                        ?>
                    </td>
                    <td style="text-align: center;">
                        <?php echo number_format($rows->price); ?>
                    </td>
                    <td style="text-align: center;">
                        <?php echo number_format($rows->SL); ?>
                    </td>
                    <td style="text-align:center;">
                        <a href="index.php?area=backend&controller=Product&action=detail&id=<?php echo $rows->id; ?>">Chi tiết</a>&nbsp;
                        <a href="index.php?area=backend&controller=Product&action=edit&id=<?php echo $rows->id; ?>">Sửa</a>&nbsp;
                        <a href="index.php?area=backend&controller=Product&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Xóa</a>
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
                    <a href="index.php?area=backend&controller=Product&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>                    
                </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>
<link href='https://css.gg/check.css' rel='stylesheet'>
