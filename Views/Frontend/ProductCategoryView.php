<?php
$this->fileLayout = "Views/Frontend/Layout_trangtrong.php";
?>
<div class="special-collection">
    <div class="tabs-container" style="margin-top: 20px">
        <div class="clearfix">
            <h2 style="font-weight: bold; color:red;font-size: 18px">
                <?php
                  $conn = Connection::getInstance();
                  $query = $conn->prepare("select name from tbl_category where id=:id");
                  $query->execute(array("id"=>$id));
                  $category = $query->fetch();
                  echo isset($category->name)?$category->name:"";
                ?>
            </h2>
        </div>
    </div>
    <div class="tabs-content row">
        <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
            <div class="clearfix">

                <?php foreach ($data as $rows): ?>
                    <!-- box product -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-grid" id="product-1168979">
                            <div class="image" style="height: 180px;"> <a href="index.php?controller=ProductDetail&id=<?php echo $rows->id; ?>"><img  src="Assets/upload/product/<?php echo $rows->img; ?>" title="<?php echo $rows->name ?>" alt="<?php echo $rows->name ?>" class="img-responsive" style="max-height: 187px;"></a> </div>
                            <div class="info">
                                <h3 class="name"><a href="index.php?controller=ProductDetail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
                                <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price); ?> </span> </span> </p>
                                <div class="action-btn">
                                    <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
                                        <a href="index.php?controller=ProductDetail&id=<?php echo $rows->id; ?>" class="button">Xem chi tiết</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- end box product -->
                <!-- paging -->
                <div style="clear: both;"></div>
                <ul class="pagination pull-right" style="margin-top: 0px !important; padding-right: 15px;">
                    <li><a href="#">Trang</a></li>
                    <?php for($i = 1;$i<= $numPage; $i++): ?>
                    <li><a href="index.php?controller=ProductCategory&id=<?php echo $id; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php endfor; ?>
                </ul>
                <!-- end paging -->
            </div>
        </div>
    </div>
</div>