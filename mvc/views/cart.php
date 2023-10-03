
<div class="col l-7">
                        <div class="text-no-result">
                            Bạn chưa thêm sản phẩm nào vào giỏ hàng!!!
                        </div>
                        <?php if (empty($_SESSION['cart'])) { ?>
                            <div class="no-result">
                                <div class="text">
                                    Bạn chưa thêm sản phẩm nào vào giỏ hàng!!!
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="cart">
                                <div class="cart-i"></div>
                            </div>
                            <table class="cart-list">
                                <tr class="cart-item">
                                    <th class="cart-item__header cart-item__header-large" colspan="3">Sản phẩm</th>
                                    <th class="cart-item__header">Giá</th>
                                    <th class="cart-item__header">Size</th>
                                    <th class="cart-item__header">Số lượng</th>
                                    <th class="cart-item__header">Tạm tính</th>
                                </tr>
                                <?php
                                $cart = $_SESSION['cart'];
                                $total_price = 0;

                                foreach ($cart as $id => $each) { ?>
                                    <tr class="cart-item">
                                        <td>
                                            <a href="./delete_product.php?id=<?php echo $id ?>" class="cart-item__delete"><i class="fa-solid fa-circle-xmark"></i></a>
                                        </td>
                                        <td class="cart-item__img">
                                            <a href="../collection/product_detail.php?id=<?php echo $id ?>" style="display:flex; align-items:center;">
                                                <img height="100" src="../admin/products/img/<?php echo $each['image'] ?>" alt="">
                                            </a>
                                        </td>
                                        <td class="cart-item__name">
                                            <a class="cart-item__name-link" href="../collection/product_detail.php?id=<?php echo $id ?>" style="display:flex; align-items:center;">
                                                <?php echo $each['name'] ?>
                                            </a>
                                        </td>
                                        <td class="cart-item__price text-center">
                                            <?php echo number_format($each['price'], 0, 0, '.') ?>₫
                                        </td>
                                        <td class="cart-item__size text-center">
                                            <?php echo $each['size'] ?>
                                        </td>
                                        <td class="cart-item__quantity text-center">
                                            <a class="cart-item__quantity-link" href="./update_quantity.php?id=<?php echo $id ?>&type=decrease"> - </a>
                                            <span><?php echo $each['quantity'] ?></span>
                                            <a class="cart-item__quantity-link" href="./update_quantity.php?id=<?php echo $id ?>&type=increase"> + </a>
                                        </td>
                                        <td class="cart-item__price text-center">
                                            <?php
                                            $sum = $each['price'] * $each['quantity'];
                                            echo number_format($sum, 0, 0, '.');
                                            $total_price += $sum;
                                            ?>₫
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        <?php } ?>
                        <div class="row">
                            <a class="l-4 btn-cart keep-buying-btn text-center" href="../product/">
                                <i class="fa-solid fa-arrow-left"></i>
                                Tiếp tục mua hàng
                            </a>
                            <?php
                            if (!empty($_SESSION['cart'])) { ?>
                                <div class="l-o-4"></div>
                                <a class="l-4 btn-cart delete-all-products text-center" href="./delete_cart.php">Xoá toàn bộ giỏ hàng</a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col l-5">
                        <div class="checkout-info">
                            <h3 class="checkout-heading">Thông tin giỏ hàng</h3>
                            <div class="checkout-total-price">Thành tiền: 
                                <?php if (!empty($_SESSION['cart'])) { ?>
                                    <span><?php echo number_format($total_price, 0, 0, '.'); ?> ₫</span>
                                <?php } else { ?>
                                    <span>0 ₫</span>
                                <?php } ?>
                            </div>
                            <div class="checkout-discount">
                                <div class="checkout-discount__name">Giảm giá</div>
                                <input type="text" class="checkout-discount__input" placeholder="Nhập mã khuyến mãi">
                                <button class="checkout-discount__btn">Áp dụng</button>
                            </div>
                            <div class="checkout-total-price">Tổng tiền: 
                                <?php if (!empty($_SESSION['cart'])) { ?>
                                    <span><?php echo number_format($total_price, 0, 0, '.'); ?> ₫</span>
                                <?php } else { ?>
                                    <span>0 ₫</span>
                                <?php } ?>
                            </div>
                            <?php
                                if (!empty($_SESSION['cart'])) { ?>
                                <a href="./checkout.php" class="checkout-btn text-center" onclick="showErrorToast()">
                                    Thanh toán
                                </a>
                            <?php } ?>
                        </div>
                    </div>