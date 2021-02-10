<!DOCTYPE html>
<html>
    <head>
        <?php include("inc/head.php");?>
    </head>

    <body>
        <?php include("inc/header.php");?>

        <div class="container-fluid pagesHeight searchPadding">
            <div class="row pagesPaddingTop20 pagesHeightv2">
                <div class="col-md-12 marginAccount marginFaq">
                    <div class="row pagesHeight">
                        <div class="col-12">
                            <p class="pagesAccountTitle">My Account</p>
                        </div>

                        <div class="col-12 col-lg-4 col-sm-12 col-md-12 mobilFaq borderAccountRight">
                            <div class="nav flex-column nav-pills" id="account" role="tablist" aria-orientation="vertical">
                                <a href="account.php" class="accountLeftTitle">My Info</a>
                                <a href="orderhistory.php" class="active accountLeftTitle">Order History</a>
                                <a href="addressbook.php" class="accountLeftTitle">Address Book</a>
                                <a href="#" class="accountLeftTitle">Log out</a>
                            </div>
                        </div>

                        <div class="col-12 col-lg-8 col-sm-12 col-md-12">
                            <a class="btn shipBtn" data-toggle="collapse" href="#order1" role="button" aria-expanded="false" aria-controls="order1">
                                <div class="row">
                                    <div class="col-sm-1 col-2">
                                        <img class="orderimg" src="assets/img/product1.jpg" alt="" />
                                    </div>
                                    <div class="col-sm-4 col-5">
                                        <p class="orderText">Order Number : <span class="fontweight600">#1465987</span></p>
                                        <p class="orderDateText">21.02.2019</p>
                                    </div>
                                    <div class="col-sm-4 col-4">
                                        <p class="orderCompletedText"><i class="fa fa-check-circle" aria-hidden="true"></i> <span class="orderDetailNone">Order Completed</span></p>
                                    </div>
                                    <div class="col-sm-2 orderDetailNone">
                                        <p class="orderText fontweight600 orderDetailNone">$ 2250</p>
                                        <p class="orderCreditText orderDetailNone">Credit Card</p>
                                    </div>
                                    <div class="col-sm-1 col-1 orderDetailNone">
                                        <i class="fa fa-caret-down textright" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </a>

                            <div class="collapse" id="order1">
                                <div class="card card-body pr0">
                                    <div class="row paddingtop8">
                                        <div class="col-2">
                                            <img class="orderimgDetail" src="assets/img/product1.jpg" alt="" />
                                        </div>
                                        <div class="col-5">
                                            <p class="orderCategoryText">Product Category</p>
                                            <p class="orderText">101 DENIM SULLEN LIGHT</p>
                                        </div>
                                        <div class="col-2 paddingzero">
                                            <p class="orderText">1 Count</p>
                                        </div>
                                        <div class="col-3">
                                            <p class="orderDetailText">$ 2250</p>
                                        </div>
                                    </div>
                                    <div class="row paddingtop8">
                                        <div class="col-2">
                                            <img class="orderimgDetail" src="assets/img/product1.jpg" alt="" />
                                        </div>
                                        <div class="col-5">
                                            <p class="orderCategoryText">Product Category</p>
                                            <p class="orderText">101 DENIM SULLEN LIGHT</p>
                                        </div>
                                        <div class="col-2 paddingzero">
                                            <p class="orderText">1 Count</p>
                                        </div>
                                        <div class="col-3">
                                            <p class="orderDetailText">$ 2250</p>
                                        </div>
                                    </div>
                                    <div class="row paddingtop8 orderDetailBorder">
                                        <div class="col-7 paddingzero">
                                            <p class="orderTextv4">Total of Products</p>
                                            <p class="orderTextv4">Shipping Cost</p>
                                            <p class="orderTextv4">Total Costs</p>
                                        </div>
                                        <div class="col-2 paddingzero">
                                            <p class="orderText">2 Count</p>
                                        </div>
                                        <div class="col-3 paddingzero">
                                            <p class="orderTextv3">$ 3000</p>
                                            <p class="orderTextv3">$ 6.80</p>
                                            <p class="orderTextv3">$ 3200</p>
                                        </div>
                                    </div>
                                    <div class="row paddingtopbot10">
                                        <div class="col-4">
                                            <p class="orderTextv2">Chris Johnson</p>
                                            <p class="orderTextPhone">05341657946</p>
                                            <p class="orderTextv2">Cargo Tracking</p>
                                            <p class="orderTextPhone">Code : 1326541321</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="orderTextv2">Delivery Address</p>
                                            <p class="orderTextPhone">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="orderTextv2">Billing Address</p>
                                            <p class="orderTextPhone">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class="btn shipBtn" data-toggle="collapse" href="#order2" role="button" aria-expanded="false" aria-controls="order2">
                                <div class="row">
                                    <div class="col-sm-1 col-2">
                                        <img class="orderimg" src="assets/img/product1.jpg" alt="" />
                                    </div>
                                    <div class="col-sm-4 col-5">
                                        <p class="orderText">Order Number : <span class="fontweight600">#1465987</span></p>
                                        <p class="orderDateText">21.02.2019</p>
                                    </div>
                                    <div class="col-sm-4 col-4">
                                        <p class="orderCompletedText"><i class="fa fa-check-circle" aria-hidden="true"></i> <span class="orderDetailNone">Order Completed</span></p>
                                    </div>
                                    <div class="col-sm-2 orderDetailNone">
                                        <p class="orderText fontweight600 orderDetailNone">$ 2250</p>
                                        <p class="orderCreditText orderDetailNone">Credit Card</p>
                                    </div>
                                    <div class="col-sm-1 col-1 orderDetailNone">
                                        <i class="fa fa-caret-down textright" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </a>

                            <div class="collapse" id="order2">
                                <div class="card card-body pr0">
                                    <div class="row paddingtop8">
                                        <div class="col-2">
                                            <img class="orderimgDetail" src="assets/img/product1.jpg" alt="" />
                                        </div>
                                        <div class="col-5">
                                            <p class="orderCategoryText">Product Category</p>
                                            <p class="orderText">101 DENIM SULLEN LIGHT</p>
                                        </div>
                                        <div class="col-2 paddingzero">
                                            <p class="orderText">1 Count</p>
                                        </div>
                                        <div class="col-3">
                                            <p class="orderDetailText">$ 2250</p>
                                        </div>
                                    </div>
                                    <div class="row paddingtop8">
                                        <div class="col-2">
                                            <img class="orderimgDetail" src="assets/img/product1.jpg" alt="" />
                                        </div>
                                        <div class="col-5">
                                            <p class="orderCategoryText">Product Category</p>
                                            <p class="orderText">101 DENIM SULLEN LIGHT</p>
                                        </div>
                                        <div class="col-2 paddingzero">
                                            <p class="orderText">1 Count</p>
                                        </div>
                                        <div class="col-3">
                                            <p class="orderDetailText">$ 2250</p>
                                        </div>
                                    </div>
                                    <div class="row paddingtop8 orderDetailBorder">
                                        <div class="col-7 paddingzero">
                                            <p class="orderTextv4">Total of Products</p>
                                            <p class="orderTextv4">Shipping Cost</p>
                                            <p class="orderTextv4">Total Costs</p>
                                        </div>
                                        <div class="col-2 paddingzero">
                                            <p class="orderText">2 Count</p>
                                        </div>
                                        <div class="col-3 paddingzero">
                                            <p class="orderTextv3">$ 3000</p>
                                            <p class="orderTextv3">$ 6.80</p>
                                            <p class="orderTextv3">$ 3200</p>
                                        </div>
                                    </div>
                                    <div class="row paddingtopbot10">
                                        <div class="col-4">
                                            <p class="orderTextv2">Chris Johnson</p>
                                            <p class="orderTextPhone">05341657946</p>
                                            <p class="orderTextv2">Cargo Tracking</p>
                                            <p class="orderTextPhone">Code : 1326541321</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="orderTextv2">Delivery Address</p>
                                            <p class="orderTextPhone">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="orderTextv2">Billing Address</p>
                                            <p class="orderTextPhone">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include("inc/footer.php");?>
    </body>
</html>
