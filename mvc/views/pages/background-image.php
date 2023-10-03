<a href="http://localhost/23sneakerstore-mvc/product/" class="container-background__link">
    <div class="container-background__img" id="background__img"></div>
</a>
<div class="grid wide">

    <div class="row">
        <div class="section-title col l-12">
            <b></b>
            <h2>Sản Phẩm Mới</h2>
            <b></b>
        </div>
    </div>
    <div class="row">
        <?php foreach ($data['products'] as $product) { ?>
            <div class="col l-4">
                <div class="product-item">
                    <a class="product-item__link" href="http://localhost/23sneakerstore-mvc/product/<?php echo ($product['id']) ?>">
                        <img class="product-item__img" src="http://localhost/23_shoe_store/admin/products/img/<?php echo ($product['image']) ?>" alt="">
                        <h3 class="product-item__name"><?php echo($product['name']) ?></h3>
                        <span class="product-item__price"><?php echo number_format($product['price'], 0, 0, '.') . '₫' ?></span>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>