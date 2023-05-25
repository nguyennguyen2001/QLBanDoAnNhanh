<?php
  $this->fileLayout = "Views/Frontend/layout_trangtrong.php";
?>
<!-- main -->
<div class="template-cart">
    <form action="index.php?controller=Cart&action=update" method="post">
        <div class="table-responsive">
            <table class="table table-cart">
                <thead>
                <tr>
                    <th class="image">Ảnh sản phẩm</th>
                    <th class="name">Tên sản phẩm</th>
                    <th class="price">Giá bán lẻ</th>
                    <th class="quantity">Số lượng</th>
                    <th class="price">Thành tiền</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($_SESSION["cart"] as $product): ?>
                    <tr>
                        <td><img src="Assets/upload/product/<?php echo $product['img']; ?>" class="img-responsive" /></td>
                        <td><a href="index.php?controller=ProductDetail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></td>
                        <td> <?php echo number_format($product['price']); ?>₫ </td>
                        <td><input type="number" id="qty" min="1" max="20" class="input-control" value="<?php echo $product['number']; ?>" name="product_<?php echo $product['id']; ?>" required="Không thể để trống"></td>
                        <td><p><b><?php echo number_format($product['number']*$product['price']); ?>₫</b></p></td>
                        <td><a href="index.php?controller=Cart&action=delete&id=<?php echo $product['id']; ?>" data-id="2479395"><i class="fa fa-trash"></i></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                <?php if($this->cartNumber() > 0): ?>
                <tr>
                    <td colspan="6">
                        <a href="index.php?controller=Cart&action=destroy" class="button pull-left">Xóa toàn bộ</a> 
                        <a href="index.php" class="button pull-right black">Tiếp tục mua hàng</a>
                        <input type="submit" class="button pull-right" value="Cập nhật">
                    </td>
                </tr>
                </tfoot>
                <?php endif; ?>
            </table>
        </div>
    </form>
    <?php if($this->cartNumber() > 0): ?>
        <div class="total-cart">Phí ship: 20,000₫</div>
        <hr/>
        <div class="total-cart"> Tổng tiền thanh toán:
            <?php echo number_format($this->cartTotal()+20000); ?>₫ <br>
            <?php if(isset($_SESSION["acid"])):?>
                <a href="index.php?controller=Cart&action=checkOut" class="button black" onclick="return window.confirm('Bạn đã chắc chắn? Khi đã đặt đơn nếu muốn hủy bạn phải liên hệ trực tiếp với nhân viên tư vấn để hủy! Hãy chắc chắn trước khi đặt!');">Thanh toán</a> </div>
            <?php else:?>
                <a href="index.php?area=Backend&controller=Login" class="button black">Thanh toán</a> </div>
            <?php endif;?>
    <?php endif; ?>
    <?php if($this->cartNumber() == 0): ?>
        <div class="alert alert-info">
            Không có sản phẩm nào!
        </div>
    <?php endif;?>
</div>
<!-- end main -->
