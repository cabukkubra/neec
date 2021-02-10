<!DOCTYPE html>
<html>

<head>
    <?php include("inc/head.php");?>
</head>
<body>

<?php include("inc/header.php");?>

<div class="container-fluid searchPadding">
    <div class="row pt130">
        <div class="col-lg-12">
            <p class="productTitle">SS19</p>
        </div>
    </div>

        <div class="row sticky">
        <!-- SORT-->
        <div class="col-lg-3 bWhite"><span class="productTitleSmall">SS19</span></div>
        <div class="col-lg-3">
            <a class="btn sortBtn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                SORT<i class="fa fa-caret-down textright" aria-hidden="true"></i>
            </a>
        </div>
        <!--FILTER BY-->
        <div class="col-lg-3">
            <a class="btn sortBtn" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                FILTER BY<i class="fa fa-caret-down textright" aria-hidden="true"></i>
            </a>
        </div>
        <!-- SORT ACILIR MENU-->
        <div class="col-lg-3 bWhite"></div>
        <div class="offset-lg-3 col-lg-3 sortDiv">
            <div class="collapse" id="collapseExample">
                <div class="card card-body pr0">
                    <ul class="listSort sortUl">
                        <li class="sortLi paddingleft0">
                            <input class="sortSelectBtn" id="radio-input-1" type="radio" value="myValue 1" name="radio-group">
                            <label for="radio-input-1" class="input-helper input-helper--radio radioLabelText">NEWEST</label>
                        </li>
                        <li class="sortLi paddingleft0">
                            <input class="sortSelectBtn" id="radio-input-2" type="radio" value="myValue 2" name="radio-group">
                            <label for="radio-input-2" class="input-helper input-helper--radio radioLabelText">NAME: A - Z</label>
                        </li>
                        <li class="sortLi paddingleft0">
                            <input class="sortSelectBtn" id="radio-input-3" type="radio" value="myValue 2" name="radio-group">
                            <label for="radio-input-3" class="input-helper input-helper--radio radioLabelText">NAME: Z - A</label>
                        </li>
                        <li class="sortLi paddingleft0">
                            <input class="sortSelectBtn" id="radio-input-4" type="radio" value="myValue 2" name="radio-group">
                            <label for="radio-input-4" class="input-helper input-helper--radio radioLabelText">PRICE:LOW TO HIGH</label>
                        </li>
                        <li class="sortLi paddingleft0">
                            <input class="sortSelectBtn" id="radio-input-5" type="radio" value="myValue 2" name="radio-group">
                            <label for="radio-input-5" class="input-helper input-helper--radio radioLabelText">PRICE:HIGH TO LOW</label>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!--SORT KAPANIS-->
        <!-- FILTER BY MENU ACILIS -->
        <div class="offset-lg-6 col-lg-3 filterDiv">
            <div class="collapse" id="collapseExample2">
                <div class="card card-body pr0">
                    <ul class="listSort filterSizeSortUl">
                        <!--SIZE ACILIR MENU-->
                        <a class="btn filterSizeBtn" data-toggle="collapse" href="#size" role="button" aria-expanded="false" aria-controls="size">
                            SIZE<i class="fa fa-caret-down textright" aria-hidden="true"></i>
                        </a>
                        <div class="col-md-12 padding0">
                            <div class="collapsing" id="size">
                                <div class="card card-body pr0">
                                    <ul class="listSort sortUl border-top-0">

                                        <li class="sortLi paddingleft0">
                                            <input id="checkbox1" type="checkbox">
                                            <label for="checkbox1" class="input-helper input-helper--checkbox labelText">28</label>
                                        </li>
                                        <li class="sortLi paddingleft0">
                                            <input id="checkbox2" type="checkbox" value="myValue 2">
                                            <label for="checkbox2" class="input-helper input-helper--checkbox labelText">30</label>
                                        </li>

                                        <li class="sortLi paddingleft0">
                                            <input id="checkbox3" type="checkbox">
                                            <label for="checkbox3" class="input-helper input-helper--checkbox labelText">32</label>
                                        </li>

                                        <li class="sortLi paddingleft0">
                                            <input id="checkbox4" type="checkbox" value="myValue 2">
                                            <label for="checkbox4" class="input-helper input-helper--checkbox labelText">34</label>
                                        </li>

                                        <li class="sortLi paddingleft0">
                                            <input id="checkbox5" type="checkbox">
                                            <label for="checkbox5" class="input-helper input-helper--checkbox labelText">36</label>
                                        </li>

                                        <li class="sortLi paddingleft0">
                                            <input id="checkbox6" type="checkbox" value="myValue 2">
                                            <label for="checkbox6" class="input-helper input-helper--checkbox labelText">38</label>
                                        </li>

                                        <li class="sortLi paddingleft0">
                                            <input id="checkbox7" type="checkbox">
                                            <label for="checkbox7" class="input-helper input-helper--checkbox labelText">40</label>
                                        </li>

                                        <li class="sortLi paddingleft0">
                                            <input id="checkbox8" type="checkbox" value="myValue 2">
                                            <label for="checkbox8" class="input-helper input-helper--checkbox labelText">42</label>
                                        </li>

                                        <li class="sortLi paddingleft0">
                                            <input id="checkbox9" type="checkbox">
                                            <label for="checkbox9" class="input-helper input-helper--checkbox labelText">S</label>
                                        </li>

                                        <li class="sortLi paddingleft0">
                                            <input id="checkbox10" type="checkbox" value="myValue 2">
                                            <label for="checkbox10" class="input-helper input-helper--checkbox labelText">M</label>
                                        </li>

                                        <li class="sortLi paddingleft0">
                                            <input id="checkbox11" type="checkbox">
                                            <label for="checkbox11" class="input-helper input-helper--checkbox labelText">L</label>
                                        </li>

                                        <li class="sortLi paddingleft0">
                                            <input id="checkbox12" type="checkbox" value="myValue 2">
                                            <label for="checkbox12" class="input-helper input-helper--checkbox labelText">XL</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <!-- COLOR ACILIR MENU -->
                        <a class="btn colorBtn" data-toggle="collapse" href="#color" role="button" aria-expanded="false" aria-controls="color">
                            COLOR<i class="fa fa-caret-down textright" aria-hidden="true"></i>
                        </a>

                        <div class="collapse in" id="color">
                            <div class="card card-body pr0">
                                <ul class="listSort sortUl bordertop">

                                    <li class="sortLi paddingleft0">
                                        <input id="checkColor1" type="checkbox">
                                        <label for="checkColor1" class="input-helper input-helper--checkbox labelText">BLACK</label>
                                    </li>
                                    <li class="sortLi paddingleft0">
                                        <input id="checkColor2" type="checkbox" value="myValue 2">
                                        <label for="checkColor2" class="input-helper input-helper--checkbox labelText">WHITE</label>
                                    </li>

                                    <li class="sortLi paddingleft0">
                                        <input id="checkColor3" type="checkbox">
                                        <label for="checkColor3" class="input-helper input-helper--checkbox labelText">YELLOW</label>
                                    </li>

                                    <li class="sortLi paddingleft0">
                                        <input id="checkColor4" type="checkbox" value="myValue 2">
                                        <label for="checkColor4" class="input-helper input-helper--checkbox labelText">PURPLE</label>
                                    </li>

                                    <li class="sortLi paddingleft0">
                                        <input id="checkbox5" type="checkbox">
                                        <label for="checkbox5" class="input-helper input-helper--checkbox labelText">RED</label>
                                    </li>

                                    <li class="sortLi paddingleft0">
                                        <input id="checkbox6" type="checkbox" value="myValue 2">
                                        <label for="checkbox6" class="input-helper input-helper--checkbox labelText">BLUE</label>
                                    </li>

                                </ul>
                            </div>
                        </div>



                        <!-- PRICE ACILIR MENU -->
                        <div class="col-md-12 padding0">
                            <a class="btn priceBtn" data-toggle="collapse" href="#price" role="button" aria-expanded="false" aria-controls="price">
                                PRICE<i class="fa fa-caret-down textright" aria-hidden="true"></i>
                            </a>
                            <div class="collapse in" id="price">
                                <div class="card card-body pr0">

                                    <ul class="listSort sortUl bordertop">
                                        <li class="sortLi paddingleft0">
                                            <input id="checkPrice1" type="checkbox">
                                            <label for="checkPrice1" class="input-helper input-helper--checkbox labelText">85</label>
                                        </li>
                                        <li class="sortLi paddingleft0">
                                            <input id="checkPrice2" type="checkbox" value="myValue 2">
                                            <label for="checkPrice2" class="input-helper input-helper--checkbox labelText">105</label>
                                        </li>

                                        <li class="sortLi paddingleft0">
                                            <input id="checkPrice3" type="checkbox">
                                            <label for="checkPrice3" class="input-helper input-helper--checkbox labelText">135</label>
                                        </li>

                                        <li class="sortLi paddingleft0">
                                            <input id="checkPrice4" type="checkbox" value="myValue 2">
                                            <label for="checkPrice4" class="input-helper input-helper--checkbox labelText">155</label>
                                        </li>

                                        <li class="sortLi paddingleft0">
                                            <input id="checkPrice5" type="checkbox">
                                            <label for="checkPrice5" class="input-helper input-helper--checkbox labelText">185</label>
                                        </li>

                                        <li class="sortLi paddingleft0">
                                            <input id="checkPrice6" type="checkbox" value="myValue 2">
                                            <label for="checkPrice6" class="input-helper input-helper--checkbox labelText">210</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <a href="productdetail.php" class="col-md-3 col-sm-4 col-6">
            <div class="card">
                <img src="assets/img/product1.jpg" class="card-img-top" alt="">
                <img src="assets/img/product2.jpg" class="card-img-top hover-img" alt="">

                <div class="card-body">
                    <h5 class="product-name">Echo Skully Knit Cap</h5>
                    <p class="product-pricev2">$75.00</p>
                </div>
            </div>
        </a>
        <a href="productdetail.php" class="col-md-3 col-sm-4 col-6">
            <div class="card">
                <img src="assets/img/product1.jpg" class="card-img-top" alt="">
                <img src="assets/img/product2.jpg" class="card-img-top hover-img" alt="">
                <div class="card-body">
                    <h5 class="product-name">Echo Skully Knit Cap</h5>
                    <p class="product-pricev2">$75.00</p>
                </div>
            </div>
        </a>
        <a href="productdetail.php" class="col-md-3 col-sm-4 col-6">
            <div class="card">
                <img src="assets/img/product1.jpg" class="card-img-top" alt="">
                <img src="assets/img/product2.jpg" class="card-img-top hover-img" alt="">
                <div class="card-body">
                    <h5 class="product-name">Echo Skully Knit Cap</h5>
                    <p class="product-pricev2">$75.00</p>
                </div>
            </div>
        </a>
        <a href="productdetail.php" class="col-md-3 col-sm-4 col-6">
            <div class="card">
                <img src="assets/img/product1.jpg" class="card-img-top" alt="">
                <img src="assets/img/product2.jpg" class="card-img-top hover-img" alt="">
                <div class="card-body">
                    <h5 class="product-name">Echo Skully Knit Cap</h5>
                    <p class="product-pricev2">$75.00</p>
                </div>
            </div>
        </a>
        <a href="productdetail.php" class="col-md-3 col-sm-4 col-6">
            <div class="card">
                <img src="assets/img/product1.jpg" class="card-img-top" alt="">
                <img src="assets/img/product2.jpg" class="card-img-top hover-img" alt="">
                <div class="card-body">
                    <h5 class="product-name">Echo Skully Knit Cap</h5>
                    <p class="product-pricev2">$75.00</p>
                </div>
            </div>
        </a>
        <a href="productdetail.php" class="col-md-3 col-sm-4 col-6">
            <div class="card">
                <img src="assets/img/product1.jpg" class="card-img-top" alt="">
                <img src="assets/img/product2.jpg" class="card-img-top hover-img" alt="">
                <div class="card-body">
                    <h5 class="product-name">Echo Skully Knit Cap</h5>
                    <p class="product-pricev2">$75.00</p>
                </div>
            </div>
        </a>
        <a href="productdetail.php" class="col-md-3 col-sm-4 col-6">
            <div class="card">
                <img src="assets/img/product1.jpg" class="card-img-top" alt="">
                <img src="assets/img/product2.jpg" class="card-img-top hover-img" alt="">
                <div class="card-body">
                    <h5 class="product-name">Echo Skully Knit Cap</h5>
                    <p class="product-pricev2">$75.00</p>
                </div>
            </div>
        </a>
        <a href="productdetail.php" class="col-md-3 col-sm-4 col-6">
            <div class="card">
                <img src="assets/img/product1.jpg" class="card-img-top" alt="">
                <img src="assets/img/product2.jpg" class="card-img-top hover-img" alt="">
                <div class="card-body">
                    <h5 class="product-name">Echo Skully Knit Cap</h5>
                    <p class="product-pricev2">$75.00</p>
                </div>
            </div>
        </a>
        <a href="productdetail.php" class="col-md-3 col-sm-4 col-6">
            <div class="card">
                <img src="assets/img/product1.jpg" class="card-img-top" alt="">
                <img src="assets/img/product2.jpg" class="card-img-top hover-img" alt="">
                <div class="card-body">
                    <h5 class="product-name">Echo Skully Knit Cap</h5>
                    <p class="product-pricev2">$75.00</p>
                </div>
            </div>
        </a>
        <a href="productdetail.php" class="col-md-3 col-sm-4 col-6">
            <div class="card">
                <img src="assets/img/product1.jpg" class="card-img-top" alt="">
                <img src="assets/img/product2.jpg" class="card-img-top hover-img" alt="">
                <div class="card-body">
                    <h5 class="product-name">Echo Skully Knit Cap</h5>
                    <p class="product-pricev2">$75.00</p>
                </div>
            </div>
        </a>

        <a href="productdetail.php" class="col-md-3 col-sm-4 col-6">
            <div class="card">
                <img src="assets/img/product1.jpg" class="card-img-top" alt="">
                <img src="assets/img/product2.jpg" class="card-img-top hover-img" alt="">
                <div class="card-body">
                    <h5 class="product-name">Echo Skully Knit Cap</h5>
                    <p class="product-pricev2">$75.00</p>
                </div>
            </div>
        </a>

        <a href="productdetail.php" class="col-md-3 col-sm-4 col-6">
            <div class="card">
                <img src="assets/img/product1.jpg" class="card-img-top" alt="">
                <img src="assets/img/product2.jpg" class="card-img-top hover-img" alt="">
                <div class="card-body">
                    <h5 class="product-name">Echo Skully Knit Cap</h5>
                    <p class="product-pricev2">$75.00</p>
                </div>
            </div>
        </a>
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