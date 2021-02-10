<!DOCTYPE html>
<html>

<head>
    <?php include("inc/head.php");?>
</head>

<body>

    <?php include("inc/header.php");?>


    <div class="container-fluid searchPadding">
        <div class="row pt130cart">
            <div class="col-md-4 col-sm-12 col-12 cartCheckoutpl">
                <p class="cartShoppingTitle">SHOPPING CART</p>
                <a href="checkout.php" class="cartCheckout">CHECKOUT</a>
            </div>
            <div class="col-md-8 col-sm-12 col-12">
                <div class="row">
                    <div class="col-md-5 col-9 leftCol paddingtop40">
                        <div class="row">
                            <div class="col-md-4 col-5">
                                <img class="img-responsive" src="assets/img/product1.jpg" alt="">
                            </div>
                            <div class="col-md-8 col-7">
                                <h5 class="product-name">Echo Skully Knit Cap</h5>
                                <p class="productCheckout-size">SMALL</p>
                                <form class="basket-quantity">
                                    <div class="value-button" id="decrease" onclick="checkCartdecrease('numbercart1')" value="Decrease Value" min="1" max="9" step="1" >-</div>
                                    <input type="number" class="number" id="numbercart1" value="1" />
                                    <div class="value-button" id="increase" onclick="checkCartincrease('numbercart1')" value="Increase Value" min="1" max="9" step="1">+</div>
                                </form>
                                <a href="#" class="removeItem">X REMOVE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-3 rightCol paddingtop40">
                        <span class="productBasketPrice fr">$75.00</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-9 leftCol paddingtop40">
                        <div class="row">
                            <div class="col-md-4 col-5">
                                <img class="img-responsive" src="assets/img/product1.jpg" alt="">
                            </div>
                            <div class="col-md-8 col-7">
                                <h5 class="product-name">Echo Skully Knit Cap</h5>
                                <p class="productCheckout-size">SMALL</p>
                                <form class="basket-quantity">
                                    <div class="value-button" id="decrease" onclick="checkCartdecrease('numbercart2')" value="Decrease Value" min="1" max="9" step="1" >-</div>
                                    <input type="number" class="number" id="numbercart2" value="1" />
                                    <div class="value-button" id="increase" onclick="checkCartincrease('numbercart2')" value="Increase Value" min="1" max="9" step="1">+</div>
                                </form>
                                <a href="#" class="removeItem">X REMOVE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-3 rightCol paddingtop40">
                        <span class="productBasketPrice fr">$75.00</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-9 leftCol paddingtop40">
                        <div class="row">
                            <div class="col-md-4 col-5">
                                <img class="img-responsive" src="assets/img/product1.jpg" alt="">
                            </div>
                            <div class="col-md-8 col-7">
                                <h5 class="product-name">Echo Skully Knit Cap</h5>
                                <p class="productCheckout-size">SMALL</p>
                                <form class="basket-quantity">
                                    <div class="value-button" id="decrease" onclick="checkCartdecrease('numbercart3')" value="Decrease Value" min="1" max="9" step="1" >-</div>
                                    <input type="number" class="number" id="numbercart3" value="1" />
                                    <div class="value-button" id="increase" onclick="checkCartincrease('numbercart3')" value="Increase Value" min="1" max="9" step="1">+</div>
                                </form>
                                <a href="#" class="removeItem">X REMOVE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-3 rightCol paddingtop40">
                        <span class="productBasketPrice fr">$75.00</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-9 leftCol paddingtop40">
                        <div class="row">
                            <div class="col-md-4 col-5">
                                <img class="img-responsive" src="assets/img/product1.jpg" alt="">
                            </div>
                            <div class="col-md-8 col-7">
                                <h5 class="product-name">Echo Skully Knit Cap</h5>
                                <p class="productCheckout-size">SMALL</p>
                                <form class="basket-quantity">
                                    <div class="value-button" id="decrease" onclick="checkCartdecrease('numbercart4')" value="Decrease Value" min="1" max="9" step="1" >-</div>
                                    <input type="number" class="number" id="numbercart4" value="1" />
                                    <div class="value-button" id="increase" onclick="checkCartincrease('numbercart4')" value="Increase Value" min="1" max="9" step="1">+</div>
                                </form>
                                <a href="#" class="removeItem">X REMOVE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-3 rightCol paddingtop40">
                        <span class="productBasketPrice fr">$75.00</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row paddingbottom25">
            <div class="col-md-3 col-12">
                <div class="col-12 nopadding-nomargin">
                    <p class="numberText fl">NUMBER OF ITEMS<span class="basketTotalText">4</span></p>

                </div>
                <div class="col-12 nopadding-nomargin">
                    <p class="subtotalText fl">SUBTOTAL : <span class="basketTotalText">$550</span></p>
                </div>

                <a href="checkout.php" class="basket-checkout fl secondCheckout">CHECKOUT</a>
            </div>
        </div>
    </div>

    <?php include("inc/footer.php");?>

    <script type="text/javascript">
        $(window).scroll(function () {
            if($(this).scrollTop() > 50) {
                $('header').addClass('stick');
            } else {
                $('header').removeClass('stick');
            }
        });
    </script>
</body>

</html>