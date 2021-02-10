<!DOCTYPE html>
<html>

<head>
    <?php include("inc/head.php");?>
</head>

<body>

    <?php include("inc/header.php");?>


    <div class="container-fluid pagesHeight searchPadding">
        <div class="row pagesPaddingTop20">
            <div class="col-md-12 marginAccount marginFaq">
                <div class="row">
                    <div class="col-12">
                        <p class="pagesAccountTitle">My Account</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-4 col-sm-12 col-md-12 mobilFaq borderAccountRight">
                        <div class="nav flex-column nav-pills" id="account" role="tablist" aria-orientation="vertical">
                            <a href="account.php" class="accountLeftTitle">My Info</a>
                            <a href="orderhistory.php" class="accountLeftTitle">Order History</a>
                            <a href="addressbook.php" class="active accountLeftTitle">Address Book</a>
                            <a href="#" class="accountLeftTitle">Log out</a>
                        </div>
                    </div>

                    <div class="col-12 col-lg-8 col-sm-12 col-md-12 addresArea">
                        <div class="row">
                            <div class="col-sm-6 col-5 mobilpaddingright">
                                <p class="pagesLeftTitle2">ADDRESS 1 (DEFAULT)</p>
                                <p class="pagesLeftTitle3">Deneme Caddesi.
                                    121. Şiir Sokak No:21 D/2 Istanbul/Turkey
                                </p>
                            </div>
                            <div class="col-sm-6 col-7 text-right">
                                <a href="#" class="editBtn">EDIT</a>
                                <a href="#" class="editBtn">DELETE</a>
                            </div>

                            <div class="col-12">
                                <p class="newAddressText">NEW ADDRESS</p>
                            </div>

                            <div class="col-6 paddingbottom10 paddingright7">
                                <input type="text" class="newAddress" placeholder="First name *" required>

                            </div>
                            <div class="col-6 paddingbottom10 paddingleft7">
                                <input type="text" class="newAddress" placeholder="Last name *" required>
                            </div>

                            <div class="col-6 paddingbottom10 paddingright7">
                                <input type="text" class="newAddress" placeholder="Company">
                            </div>

                            <div class="col-6 paddingbottom10 paddingleft7">
                                <input type="text" class="newAddress" placeholder="Phone *" required>
                            </div>

                            <div class="col-6 paddingbottom10 paddingright7">
                                <input type="text" class="newAddress" placeholder="Address 1 *" required>
                            </div>

                            <div class="col-6 paddingbottom10 paddingleft7">
                                <input type="text" class="newAddress" placeholder="Postal/Zip Code *">
                            </div>

                            <div class="col-6 paddingbottom10 paddingright7">
                                <select class="newAddress" id="Iller">
                                    <option value="">Choose City</option>
                                </select>
                            </div>
                            <div class="col-6 paddingbottom10 paddingleft7">
                                <select class="newAddress" id="Ilceler" disabled="disabled">
                                    <option value="">Choose Town</option>
                                </select>
                            </div>
                            <div class="col-12 paddingbottom10">
                                <input id="setAs" type="checkbox">
                                <label for="setAs" class="input-helper input-helper--checkbox4 setAsText">Set as default address</label>
                            </div>

                            <div class="offset-md-4 col-md-4 col-12">
                                <a href="#" class="addAddressBtn">ADD ADDRESS</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("inc/header.php");?>


</body>

</html>