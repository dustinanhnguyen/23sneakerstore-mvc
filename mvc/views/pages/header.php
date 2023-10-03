<div class="header" id="header">
    <div class="header-top col l-12">
        <div class="grid wide">
            <div class="row">
                <div class="l-o-4"></div>
                <div class="col l-4">
                    <a class="header-logo__link" href="./Home">
                        <img class="header-logo__img" src="http://localhost/23sneakerstore-mvc/public/image/23sneaker.png" alt="">
                    </a>
                </div>
                <div class="col l-4">
                    <div class="header-wrap">
                        <div class="wrap-item">
                            <a class="header-wrap-item-link" href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                        </div>
                        <div class="wrap-item">
                            <a class="header-wrap-item-link" href="./account"><i class="fa-regular fa-user"></i></a>
                        </div>
                        <div class="wrap-item">
                            <a class="header-wrap-item-link" href="./cart">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <div class="cart-quantity">
                                    <?php
                                    $quantity = 0;
                                    if (isset($_SESSION['cart'])) {
                                        $cart = $_SESSION['cart'];
                                        foreach ($cart as $id => $each) {
                                            $quantity_item = (int)$each['quantity'];
                                            $quantity += $quantity_item;
                                        }
                                        echo $quantity;
                                    } else {
                                        echo $quantity;
                                    }
                                    ?>
                                </div>
                            </a>
                        </div>
                        <div class="wrap-item"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom" id="myHeader">
        <div class="grid wide">
            <ul class="header-bottom__list">
                <li class="header-bottom__item"><a href="http://localhost/23sneakerstore-mvc/product/Air Jordan" class="header-bottom__item-link">Air Jordan</a></li>
                <li class="header-bottom__item"><a href="http://localhost/23sneakerstore-mvc/product/Nike" class="header-bottom__item-link">Nike</a></li>
                <li class="header-bottom__item"><a href="http://localhost/23sneakerstore-mvc/product/Adidas" class="header-bottom__item-link">Adidas</a></li>
                <li class="header-bottom__item"><a href="http://localhost/23sneakerstore-mvc/product/" class="header-bottom__item-link">MBL</a></li>
                <li class="header-bottom__item"><a href="http://localhost/23sneakerstore-mvc/product/New Balance" class="header-bottom__item-link">New Balance</a></li>
                <li class="header-bottom__item"><a href="http://localhost/23sneakerstore-mvc/product/search=puma" class="header-bottom__item-link">Puma</a></li>
                <li class="header-bottom__item">
                    <a href="#" class="header-bottom__item-link">Other <i class="fa-solid fa-chevron-down"></i></a>
                    <div class="dropdown">
                        <ul class="header-bottom__wrap">
                            <li class="header-bottom__sub-item">
                                <a href="http://localhost/23sneakerstore-mvc/product/Vans">Vans</a>
                            </li>
                            <li class="header-bottom__sub-item">
                                <a href="http://localhost/23sneakerstore-mvc/product/Converse">Converse</a>
                            </li>
                            <li class="header-bottom__sub-item">
                                <a href="http://localhost/23sneakerstore-mvc/product/Louis Vuitton">Louis Vuitton</a>
                            </li>
                            <li class="header-bottom__sub-item">
                                <a href="http://localhost/23sneakerstore-mvc/product/Saint Laurent">Saint Laurent</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    window.onscroll = function() {
        myFunction()
    };

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>