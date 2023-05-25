<?php 
    //ket thua layout1.php de load vao day
    $this->fileLayout = "Views/Backend/Layout1.php";
 ?>                  
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?area=backend&controller=Category&action=add" class="btn btn-primary">Thêm danh mục sản phẩm</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Danh Mục Sản Phẩm</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <?php foreach($data as $rows): ?>
                <tr>
                    <th><?php echo $rows->name; ?></th>
                    <td style="text-align:center;width:100px;">
                        <a href="index.php?area=backend&controller=Category&action=edit&id=<?php echo $rows->id; ?>">Sửa</a>&nbsp;
                        
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
                    <a href="index.php?area=backend&controller=Category&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>                    
                </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>