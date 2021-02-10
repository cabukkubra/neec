<header class="navbar navbar-expand-lg header header-bg indexHeaderbg">
    <form action="#" class="width100v2">
        <input type="text" class="width100v3 mobilSearch" placeholder="Search" />
        <i class="fa fa-times closeSearch" aria-hidden="true"></i>
    </form>

    <div class="row mobilRow headerMobil">
        <!-- 
            <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
            </button> 
            <span>SHOP</span>
            <img class="mobilLogo" src="assets/img/logo.jpg" alt="">
            <input class="searchMobil" type="search" aria-label="Search"> 
        -->

        <nav id="nav" class="height60 navbarWhite">
            <input id="menuToggle" type="checkbox" />
            <label class="mobilLabel" for="menuToggle">
                <span class="burger"></span>
            </label>
            <div class="mobilHeader">
                <a href="index.php"><img class="mobilLogo" src="assets/img/logo.jpg" alt="" /></a>
                <i class="search-i searchClick"></i>
                <a href="account.php"><i class="fa fa-user-o userBtnMobil" aria-hidden="true"></i></a>
                <!--<a class="shopping-cart-i sepetMobil-icon"></a>-->
                <div class="basket-shopping search-basket">
                    <a class="shopping-cart-i sepet-icon"></a>
                    <span class="totalCheckoutMobil">4</span>

                    <div class="basket-active">
                        <i class="shopping-cart-i2 dropicon"></i>
                        <span class="checkoutTotalText">4</span>
                        <a class="closeX fl"></a>
                        <a href="checkout.php" class="basket-checkout fl">CHECKOUT</a>

                        <div class="col-md-12 fl sepet-box-detail nopadding-nomargin">
                            <div class="col-2 fl nopadding-nomargin">
                                <img src="assets/img/product1.jpg" class="img-responsive" />
                            </div>

                            <div class="col-10 fr mobilFr">
                                <h5 class="product-name col-8 fl nopadding-nomargin">Echo Skully Knit Cap</h5>
                                <p class="productBasketPricev2 fr col-4">$75.00</p>
                                <p class="product-size">SMALL</p>
                                <form class="basket-quantity">
                                    <div class="value-button" id="decrease" onclick="checkdecrease('number1','numberm1')" value="Decrease Value" min="1" max="9" step="1">-</div>
                                    <input type="number" class="number" id="numberm1" value="1" />
                                    <div class="value-button" id="increase" onclick="checkincrease('number1','numberm1')" value="Increase Value" min="1" max="9" step="1">+</div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12 fl sepet-box-detail nopadding-nomargin">
                            <div class="col-2 fl nopadding-nomargin">
                                <img src="assets/img/product1.jpg" class="img-responsive" />
                            </div>

                            <div class="col-10 fr mobilFr">
                                <h5 class="product-name col-8 fl nopadding-nomargin">Echo Skully Knit Cap</h5>
                                <p class="productBasketPricev2 fr col-4">$75.00</p>
                                <p class="product-size">SMALL</p>
                                <form class="basket-quantity">
                                    <div class="value-button" id="decrease" onclick="checkdecrease('number2','numberm2')" value="Decrease Value" min="1" max="9" step="1">-</div>
                                    <input type="number" class="number" id="numberm2" value="1" />
                                    <div class="value-button" id="increase" onclick="checkincrease('number2','numberm2')" value="Increase Value" min="1" max="9" step="1">+</div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-12 fl sepet-box-detail nopadding-nomargin">
                            <div class="col-2 fl nopadding-nomargin">
                                <img src="assets/img/product1.jpg" class="img-responsive" />
                            </div>

                            <div class="col-10 fr mobilFr">
                                <h5 class="product-name col-8 fl nopadding-nomargin">Echo Skully Knit Cap</h5>
                                <p class="productBasketPricev2 fr col-4">$75.00</p>
                                <p class="product-size">SMALL</p>
                                <form class="basket-quantity">
                                    <div class="value-button" id="decrease" onclick="checkdecrease('number3','numberm3')" value="Decrease Value" min="1" max="9" step="1">-</div>
                                    <input type="number" class="number" id="numberm3" value="1" />
                                    <div class="value-button" id="increase" onclick="checkincrease('number3','numberm3')" value="Increase Value" min="1" max="9" step="1">+</div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12 fl sepet-box-detail nopadding-nomargin">
                            <div class="col-2 fl nopadding-nomargin">
                                <img src="assets/img/product1.jpg" class="img-responsive" />
                            </div>

                            <div class="col-10 fr mobilFr">
                                <h5 class="product-name col-8 fl nopadding-nomargin">Echo Skully Knit Cap</h5>
                                <p class="productBasketPricev2 fr col-4">$75.00</p>
                                <p class="product-size">SMALL</p>
                                <form class="basket-quantity">
                                    <div class="value-button" id="decrease" onclick="checkdecrease('number4','numberm4')" value="Decrease Value" min="1" max="9" step="1">-</div>
                                    <input type="number" class="number" id="numberm4" value="1" />
                                    <div class="value-button" id="increase" onclick="checkincrease('number4','numberm4')" value="Increase Value" min="1" max="9" step="1">+</div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-12 nopadding-nomargin">
                            <p class="numberText fl">NUMBER OF ITEMS<span class="basketTotalText">4</span></p>
                        </div>

                        <div class="col-md-12 nopadding-nomargin">
                            <p class="subtotalText fl">SUBTOTAL : <span class="basketTotalText">$550</span></p>
                        </div>

                        <a href="checkout.php" class="basket-checkout fl secondCheckout">CHECKOUT</a>
                    </div>
                </div>
            </div>
            <ul class="menu">
                <li class="mobilLi"><a class="mobilA mobilMenuLink1 paddingtop40" href="journal.php">JOURNAL</a></li>
                <li class="mobilLi"><a class="mobilA mobilMenuLink1" href="#">SOCIAL</a></li>
                <li class="mobilLi"><a class="mobilA mobilProductCategory paddingtop40">COLLECTIONS</a></li>
                <li class="mobilLi"><a class="mobilA mobilLink" href="product.php">COMING SOON</a></li>
                <li class="mobilLi"><a class="mobilA mobilLink" href="product.php">SPRING / SUMMER</a></li>
                <li class="mobilLi"><a class="mobilA mobilProductCategory paddingtop40">MENS</a></li>
                <li class="mobilLi"><a class="mobilA mobilLink" href="product.php">ALL</a></li>
                <li class="mobilLi"><a class="mobilA mobilLink" href="product.php">NEW ARRIVALS</a></li>
                <li class="mobilLi"><a class="mobilA mobilLink" href="product.php">T-SHIRTS</a></li>
                <li class="mobilLi"><a class="mobilA mobilLink" href="product.php">DENIM</a></li>
                <li class="mobilLi"><a class="mobilA mobilLink" href="product.php">OUTWEAR</a></li>
                <li class="mobilLi"><a class="mobilA mobilLink" href="product.php">HOODIES</a></li>
                <li class="mobilLi"><a class="mobilA mobilLink" href="product.php">SHIRTS</a></li>
                <li class="mobilLi"><a class="mobilA mobilLink" href="product.php">BOTTOMS</a></li>
                <li class="mobilLi"><a class="mobilA mobilLink" href="product.php">HEADWEAR</a></li>
            </ul>
        </nav>
    </div>

    <div class="collapse navbar-collapse pdtopleft noMobile" id="menu">
        <div class="navbar-nav noMobile">
            <div class="dropdown1">
                <p class="dropbtn1 shopText">SHOP<i class="fa fa-caret-down shopCaret"></i></p>
                <div class="dropdown1-content">
                    <div class="row">
                        <div class="nav-item active">
                            <h4 class="dropTitle">COLLECTIONS</h4>
                            <a href="product.php" class="textDrop">SPRING / SUMMER</a>
                        </div>
                        <div class="nav-item active">
                            <h4 class="dropTitle">MENS</h4>
                            <a href="product.php" class="textDrop">ALL</a>
                            <a href="product.php" class="textDrop">NEW ARRIVALS</a>
                            <a href="product.php" class="textDrop">T-SHIRTS</a>
                            <a href="product.php" class="textDrop">DENIM</a>
                            <a href="product.php" class="textDrop">OUTERWEAR</a>
                            <a href="product.php" class="textDrop">HOODIES</a>
                        </div>
                        <div class="nav-item active">
                            <br />
                            <a href="product.php" class="textDrop">SHIRTS</a>
                            <a href="product.php" class="textDrop">BOTTOMS</a>
                            <a href="product.php" class="textDrop">HEADWEAR</a>
                            <a href="product.php" class="textDrop">FOOTWEAR</a>
                            <a href="product.php" class="textDrop">ACCESSORIES</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="journal.php">JOURNAL</a>
            <a href="https://www.instagram.com/neec/" target="_blank">SOCIAL</a>
        </div>
    </div>
    <div class="col-md-6 fr noMobile">
        <div class="col-md-4 fl">
            <a href="index-2.php">
                <img class="logo" src="assets/img/logo.jpg" />
            </a>
        </div>

        <div class="col-md-8 fr">
            <form class="search col-md-8 fl search-basket" action="#" method="get" role="search">
                <input class="search-top" type="search" aria-label="Search" />
                <button class="btn-icon"><i class="search-i"></i></button>
            </form>
            <div class="col-md-4 fr paddingHeader">
                <div class="basket-shopping search-basket">
                    <a href="account.php"><i class="fa fa-user-o userBtn fl" aria-hidden="true"></i></a>
                    <a class="shopping-cart-i sepet-icon"></a>
                    <span class="totalCheckout">4</span>
                    <div class="basket-active checkoutScrool" id="scroll">
                        <i class="shopping-cart-i2 dropicon"></i>
                        <span class="checkoutTotalText">4</span>
                        <a class="closeX fl"></a>
                        <a href="checkout.php" class="basket-checkout fl">CHECKOUT</a>

                        <div class="col-md-12 fl sepet-box-detail nopadding-nomargin">
                            <div class="col-md-4 fl nopadding-nomargin">
                                <img src="assets/img/product1.jpg" class="img-responsive" />
                            </div>

                            <div class="col-md-8 fr paddingright3">
                                <h5 class="product-name col-md-8 fl nopadding-nomargin">Echo Skully Knit Cap</h5>
                                <p class="product-price fr col-md-4">$75.00</p>
                                <p class="product-color">SMALL</p>
                                <form class="basket-quantity">
                                    <div class="value-button" id="decrease" onclick="checkdecrease('number1','numberm1')" value="Decrease Value" min="1" max="9" step="1">-</div>
                                    <input type="number" class="number" id="number1" value="1" />
                                    <div class="value-button" id="increase" onclick="checkincrease('number1','numberm1')" value="Increase Value" min="1" max="9" step="1">+</div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-12 fl sepet-box-detail nopadding-nomargin">
                            <div class="col-md-4 fl nopadding-nomargin">
                                <img src="assets/img/product1.jpg" class="img-responsive" />
                            </div>

                            <div class="col-md-8 fr paddingright3">
                                <h5 class="product-name col-md-8 fl nopadding-nomargin">Echo Skully Knit Cap</h5>
                                <p class="product-price fr col-md-4">$75.00</p>
                                <p class="product-color">SMALL</p>
                                <form class="basket-quantity">
                                    <div class="value-button" id="decrease" onclick="checkdecrease('number2','numberm2')" value="Decrease Value" min="1" max="9" step="1">-</div>
                                    <input type="number" class="number" id="number2" value="1" />
                                    <div class="value-button" id="increase" onclick="checkincrease('number2','numberm2')" value="Increase Value" min="1" max="9" step="1">+</div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-12 fl sepet-box-detail nopadding-nomargin">
                            <div class="col-md-4 fl nopadding-nomargin">
                                <img src="assets/img/product1.jpg" class="img-responsive" />
                            </div>

                            <div class="col-md-8 fr paddingright3">
                                <h5 class="product-name col-md-8 fl nopadding-nomargin">Echo Skully Knit Cap</h5>
                                <p class="product-price fr col-md-4">$75.00</p>
                                <p class="product-color">SMALL</p>
                                <form class="basket-quantity">
                                    <div class="value-button" id="decrease" onclick="checkdecrease('number3','numberm3')" value="Decrease Value" min="1" max="9" step="1">-</div>
                                    <input type="number" class="number" id="number3" value="1" />
                                    <div class="value-button" id="increase" onclick="checkincrease('number3','numberm3')" value="Increase Value" min="1" max="9" step="1">+</div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-12 fl sepet-box-detail nopadding-nomargin">
                            <div class="col-md-4 fl nopadding-nomargin">
                                <img src="assets/img/product1.jpg" class="img-responsive" />
                            </div>

                            <div class="col-md-8 fr paddingright3">
                                <h5 class="product-name col-md-8 fl nopadding-nomargin">Echo Skully Knit Cap</h5>
                                <p class="product-price fr col-md-4">$75.00</p>
                                <p class="product-color">SMALL</p>
                                <form class="basket-quantity">
                                    <div class="value-button" id="decrease" onclick="checkdecrease('number4','numberm4')" value="Decrease Value" min="1" max="9" step="1">-</div>
                                    <input type="number" class="number" id="number4" value="1" />
                                    <div class="value-button" id="increase" onclick="checkincrease('number4','numberm4')" value="Increase Value" min="1" max="9" step="1">+</div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-12 nopadding-nomargin">
                            <p class="numberText fl">NUMBER OF ITEMS<span class="basketTotalText">4</span></p>
                        </div>
                        <div class="col-md-12 nopadding-nomargin">
                            <p class="subtotalText fl">SUBTOTAL : <span class="basketTotalText">$550</span></p>
                        </div>

                        <a href="checkout.php" class="basket-checkout fl">CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>