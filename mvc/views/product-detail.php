<div class="product-detail">
    <div class="row">
        <div class="col l-6">
            <div class="product-gallery">
                <img class="product-gallery__img" src="../admin/products/img/<?php echo $each['image'] ?>" alt="">
                <div class="product-gallery__list">
                    <div class="product-gallery__item" onclick="changeImage('../admin/products/img/<?php echo $each['image'] ?>')">
                        <img class="product-gallery__item-img" src="../admin/products/img/<?php echo $each['image'] ?>" alt="">
                    </div>
                    <button id="image_prev" class="sub-image__btn prev"><i class="fa-solid fa-chevron-left fa-beat fa-2xs"></i></button>
                    <button id="image_next" class="sub-image__btn next"><i class="fa-solid fa-chevron-right fa-beat fa-2xs"></i></button>
                    <?php foreach ($result_sub_image as $sub_image) { ?>
                        <div class="product-gallery__item" onclick="changeImage('../admin/products/sub_img/<?php echo $sub_image['source'] ?>')">
                            <img class="product-gallery__item-img" src="../admin/products/sub_img/<?php echo $sub_image['source'] ?>" alt="">
                        </div>
                    <?php } ?>
                    <!-- <div class="col l-3">
                                            <div class="product-gallery__item" onclick="changeImage()">
                                                <img class="product-gallery__item-img" src="../admin/products/img/<?php echo $each['image'] ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="col l-3">
                                            <div class="product-gallery__item" onclick="changeImage()">
                                                <img class="product-gallery__item-img" src="../admin/products/img/<?php echo $each['image'] ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="col l-3">
                                            <div class="product-gallery__item" onclick="changeImage()">
                                                <img class="product-gallery__item-img" src="../admin/products/img/<?php echo $each['image'] ?>" alt="">
                                            </div>
                                        </div> -->
                </div>
            </div>
        </div>
        <div class="col l-6">
            <div class="product-info">
                <h1 class="product-info__name"><?php echo $each['name'] ?></h1>
                <div class="product-info__price"><?php echo number_format($each['price'], 0, 0, '.') ?>₫</div>
                <div class="product-info__size">
                    <i class="fa-solid fa-ruler-combined product-info__size-icon"></i>
                    <a href="" class="product-info__size-link">Size chart</a>
                </div>
                <div class="product-installment">
                    <div class="product-installment__price">
                        Hoặc<span> trả trước <?php echo number_format($each['price'] / 3, 0, 0, '.') ?> ₫ x3 kỳ </span> với <a href=""><span>Fundiin</span> Tìm hiểu (?).</a>
                    </div>
                    <div class="product-installment__panel">
                        <i class="fa-solid fa-percent product-installment__panel-icon"></i>
                        Giảm đến <span>70k</span> cho ĐH từ <span>100k</span> khi thanh toán qua <span style="color: #24c3fd">Fundiin</span>
                    </div>
                </div>
                <form action="../cart/add_to_cart.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $each['id'] ?>">
                    <div class="product-size__wrap">
                        <div class="product-size__name">Size:</div>
                        <div class="product-size">
                            <label class="product-size__label">
                                <input type="radio" name="size" class="product-size__input" id="" value="36">
                                <span class="product-size__span">36</span>
                            </label>
                            <label class="product-size__label">
                                <input type="radio" name="size" class="product-size__input" id="" value="37">
                                <span class="product-size__span">37</span>
                            </label>
                            <label class="product-size__label">
                                <input type="radio" name="size" class="product-size__input" id="" value="38">
                                <span class="product-size__span">38</span>
                            </label>
                            <label class="product-size__label">
                                <input type="radio" name="size" class="product-size__input" id="" value="38.5">
                                <span class="product-size__span">38.5</span>
                            </label>
                            <label class="product-size__label">
                                <input type="radio" name="size" class="product-size__input" id="" value="39">
                                <span class="product-size__span">39</span>
                            </label>
                            <label class="product-size__label">
                                <input type="radio" name="size" class="product-size__input" id="" value="40">
                                <span class="product-size__span">40</span>
                            </label>
                            <label class="product-size__label">
                                <input type="radio" name="size" class="product-size__input" id="" value="40.5">
                                <span class="product-size__span">40.5</span>
                            </label>
                            <label class="product-size__label">
                                <input type="radio" name="size" class="product-size__input" id="" value="40.5">
                                <span class="product-size__span">40.5</span>
                            </label>
                            <label class="product-size__label">
                                <input type="radio" name="size" class="product-size__input" id="" value="41">
                                <span class="product-size__span">41</span>
                            </label>
                            <label class="product-size__label">
                                <input type="radio" name="size" class="product-size__input" id="" value="41.5">
                                <span class="product-size__span">41.5</span>
                            </label>
                            <label class="product-size__label">
                                <input type="radio" name="size" class="product-size__input" id="" value="42">
                                <span class="product-size__span">42</span>
                            </label>
                            <label class="product-size__label">
                                <input type="radio" name="size" class="product-size__input" id="" value="43">
                                <span class="product-size__span">43</span>
                            </label>
                            <label class="product-size__label">
                                <input type="radio" name="size" class="product-size__input" id="" value="44">
                                <span class="product-size__span">44</span>
                            </label>
                        </div>
                    </div>
                    <button class="product-size__btn">Thêm vào giỏ hàng</button>
                </form>
            </div>
        </div>
    </div>
</div>