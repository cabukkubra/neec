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
                            <a href="account.php" class="active accountLeftTitle">My Info</a>
                            <a href="orderhistory.php" class="accountLeftTitle">Order History</a>
                            <a href="addressbook.php" class="accountLeftTitle">Address Book</a>
                            <a href="#" class="nav-link accountLeftTitle">Log out</a>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 col-sm-12 col-md-12 infoArea">

                        <p class="myInfoTitle">My Info</p>
                        <p class="myInfoNameText">Ahmet Mehmet</p>
                        <p class="pagesLeftTitle3">ahmetmehmet@gmail.com</p>
                        <p class="passwordText">Password</p>
                        <span class="passwordTextv2">••••••••••<a href="#" class="resetBtn">RESET</a></span>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("inc/footer.php");?>


</body>

</html>