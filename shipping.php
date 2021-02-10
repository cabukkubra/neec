<!DOCTYPE html>
<html>

<head>
    <?php include("inc/head.php");?>
</head>

<body>
    <div class="container-fluid pd0">
        <div class="row">
            <div class="col-lg-6 col-md-11 checkoutLogo ">
                <a href="index-2.php">
                    <img class="checkLogo" src="assets/img/neec.png" alt=""></a>
                    <p class="checkoutText">
                        <a href="cart.php"><span class="checkoutNotActive">Cart</span> </a>
                        <i class="fa fa-angle-right checkoutLeftArrow" aria-hidden="true"></i>
                        <a href="checkout.php"><span class="checkoutNotActive">Information</span></a>
                        <i class="fa fa-angle-right checkoutLeftArrow" aria-hidden="true"></i>
                        <span class="checkoutActive">Shipping</span>
                        <i class="fa fa-angle-right checkoutLeftArrow" aria-hidden="true"></i>
                        <a href="payment.php"><span class="checkoutNotActive">Payment</span></a>
                    </p>
                </div>
                <div class="col-lg-6 checkoutBackground"></div>
            </div>
        </div>
        <a class="checkoutShowText" data-toggle="collapse" href="#collapseExample" role="button"
        aria-expanded="false" aria-controls="collapseExample">
        <div class="container-fluid checkoutBox backgroundShow marginbottom20">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 paddinglr0">
                <p class="paddingtop17">
                    <span class="shoppingCheckout-cart-i"></span>
                    Show order summary <i class="fa fa-angle-down" aria-hidden="true"></i>
                    <span class="shoppingPrice">$750.00</span>
                </p>
            </a>
            <div class="collapse" id="collapseExample">
                <div class="card card-body backgroundFa pd0 paddingright0">
                    <div class="col-12 padding0v2">
                        <div class="row marginbottom20">
                            <div class="col-md-2 col-sm-2 col-3">
                                <img src="assets/img/productDetail1.jpg" class="checkoutProductImg" alt="">
                                <span class="productCount">1</span>
                            </div>
                            <div class="col-md-8 col-sm-8 col-6 paddingleft0 ">
                                <p class="checkoutProductTitle">F*** Off Hoodie Black</p>
                                <p class="checkoutProductChoose">S / Black</p>
                            </div>
                            <div class="col-md-2 col-sm-2 col-3 text-right pl320">
                                <p class="checkoutProductPrice">$275.00</p>
                            </div>
                        </div>

                        <div class="row marginbottom20">
                            <div class="col-md-2 col-sm-2 col-3">
                                <img src="assets/img/productDetail1.jpg" class="checkoutProductImg" alt="">
                                <span class="productCount">1</span>
                            </div>
                            <div class="col-md-8 col-sm-8 col-6 paddingleft0">
                                <p class="checkoutProductTitle">F*** Off Hoodie Black</p>
                                <p class="checkoutProductChoose">S / Black</p>
                            </div>
                            <div class="col-md-2 col-sm-2 col-3 text-right pl320">
                                <p class="checkoutProductPrice">$275.00</p>
                            </div>
                        </div>

                        <div class="row marginbottom20">
                            <div class="col-md-2 col-sm-2 col-3">
                                <img src="assets/img/productDetail1.jpg" class="checkoutProductImg" alt="">
                                <span class="productCount">1</span>

                            </div>
                            <div class="col-md-8 col-sm-8 col-6 paddingleft0">
                                <p class="checkoutProductTitle">F*** Off Hoodie Black</p>
                                <p class="checkoutProductChoose">S / Black</p>
                            </div>
                            <div class="col-md-2 col-sm-2 col-3 text-right pl320">
                                <p class="checkoutProductPrice">$275.00</p>
                            </div>

                        </div>

                        <div class="col-12 borderGift">
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10 col-9 paddingleftv0">
                                    <div class="form-contents2">
                                        <div class="fc2">
                                            <input id="gift" type="text" value="" required/>
                                            <label for="gift">Gift card or discount code</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-3 paddingright0 applyPadding0">
                                    <button class="applyBtn ">Apply</button>
                                </div>
                            </div>
                        </div>
                        <div class="row subtotalpadding borderTotal">
                            <div class="col-12 marginbottomtotal">
                                <span class="subtotal">Subtotal</span>
                                <span class="subtotalv2">$645.00</span>
                            </div>
                            <div class="col-12">
                                <span class="subtotal">Shipping</span>
                                <span class="calculatedText">Calculated at next step</span>
                            </div>
                            <div class="col-12">
                                <a class="policyText shippingCosts mr-0" data-toggle="modal" data-target="#exampleModalLong6">
                                    Shipping costs
                                </a>
                                <div class="modal fade" id="exampleModalLong6" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle6" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle6">Shipping costs</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                U.S.
                                                $12 for all orders in the continental U.S.
                                                Free shipping on US orders over $250

                                                CANADA
                                                $20 for shipping to Canada

                                                INTERNATIONAL
                                                $45 for international shipping

                                                *We do not ship to P.O. boxes.
                                                *We do not ship to APO/DPO/FPO addresses.
                                                *We do not ship to Russia.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 paddingtop20">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <span class="checkoutTotal">Total</span>
                                </div>
                                <div class="col-9">
                                    <span class="moneyText">$645.00</span>
                                    <span class="money">USD</span>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>

<div class="container-fluid pd0 padding21 full-height">
    <div class="row full-heightv2">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 paddingright5Shipping">
            <div class="borderShipping">

                <div class="row borderShippingIn">
                    <div class="col-2 shippingLeftText">Contact</div>
                    <div class="col-8 shippingCenterText">deneme@gmail.com</div>
                    <div class="col-2 p-0"><a href="#" class="shippingChangeText">Change</a></div>
                </div>
                <div class="row borderShippingIn">
                    <div class="col-2 shippingLeftText">Ship to</div>
                    <div class="col-8 shippingCenterText"> A asdfdasfasffasfsa, 34522 İstanbul , Turkey</div>
                    <div class="col-2 p-0"><a href="#" class="shippingChangeText">Change</a></div>
                </div>
                <div class="row methodText">
                    <div class="col-2 shippingLeftText">Method</div>
                    <div class="col-7 shippingCenterText">Standard International Shipping </div>
                    <div class="col-3 pr15"><span class="fontweight500">$45.00</span></div>
                </div>

            </div>

            <p class="shippingMethodText">Shipping method</p>

            <div class="borderShipping">
                <div class="row">
                    <div class="col-9 pr15">
                        <input class="sortSelectBtn" id="ship1" type="radio" value="myValue 1" name="radio-group">
                        <label for="ship1" class="input-helper input-helper--radio3 shippingCenterTextv2">Standart International Shipping</label>
                    </div>
                    <div class="col-3 shippingCenterText shippingPriceText mobilpaddingright2">
                        $45.00
                    </div>
                </div>
            </div>
            <div class="row returnRow">
                <div class="col-md-5 col-12">
                    <a href="checkout.php">
                        <p class="returnCart">
                            <i class="fa fa-angle-left returnLeftArrow" aria-hidden="true"></i>
                            Return to information
                        </p>
                    </a>
                </div>
                <div class="col-md-7 col-12">
                    <a href="#">
                        <button class="continueBtn">Continue to payment</button>
                    </a>
                </div>
            </div>

            <div class="row margintop20">
                <div class="col-md-12 checkoutFooter">
                    <!-- Button trigger modal -->
                    <a class="policyText" data-toggle="modal" data-target="#exampleModalLong">
                        Refund policy
                    </a>
                    <a class="policyText" data-toggle="modal" data-target="#exampleModalLong2">
                        Shipping policy
                    </a>
                    <a class="policyText" data-toggle="modal" data-target="#exampleModalLong3">
                        Privacy policy
                    </a>
                    <a class="policyText" data-toggle="modal" data-target="#exampleModalLong4">
                        Terms of service
                    </a>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Refund policy</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="footerText">
                                    RETURNS
                                    The Stampd Select Shop prides itself on the accuracy and turn around time of our
                                    products.

                                    RETURNS AND EXCHANGES
                                    We accept returns within 14 days of delivery for store credit only. The items
                                    must be in new condition, with tags attached, and in original packaging.

                                    Customers will be responsible for return shipping costs. Once we receive your
                                    return a gift card code will be issued via email along with instructions. This
                                    code may be used towards the purchase of any available items.

                                    Note that we do not include shipping fees in the gift card amount.

                                    STORE CREDIT
                                    Please indicate on the included return form that you would like to receive store
                                    credit for the returned item(s). Once we receive your return a gift card code
                                    will be issued via email along with instructions. This code may be used towards
                                    the purchase of any available items.

                                    Note that we do not include shipping fees in the gift card amount.

                                    INTERNATIONAL RETURNS AND EXCHANGES
                                    On your commercial invoice, please mark the return shipment as â€œ9801 - US
                                    GOODS RETURNINGâ€.

                                    DISCOUNTED ITEMS
                                    Items purchased using a promotional discount code may only be returned for store
                                    credit.

                                    FINAL SALE ITEMS
                                    Products marked as final sale cannot be returned or exchanged.

                                    IMPORTANT
                                    Note that returned product must be in new condition, unworn, and with original
                                    packaging to qualify for store credit.

                                    Cornerman Productions, LLC DBA Stampd is not responsible for destination country
                                    tax and/or duty charge if incurred. Buyer will be held accountable for any
                                    restrictions, duties, taxes, and any other fees collected from the destination
                                    country, prior to ordering. Stampd.com will NOT be responsible for any Duties,
                                    Taxes, or Customs fees under any circumstances.

                                    STAMPD RETURNS
                                    130 S. La Brea Ave
                                    La, Ca 90036
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLongTitle2" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle2">Shipping policy</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="footerText">
                                RETURNS
                                The Stampd Select Shop prides itself on the accuracy and turn around time of our
                                products.

                                RETURNS AND EXCHANGES
                                We accept returns within 14 days of delivery for store credit only. The items
                                must be in new condition, with tags attached, and in original packaging.

                                Customers will be responsible for return shipping costs. Once we receive your
                                return a gift card code will be issued via email along with instructions. This
                                code may be used towards the purchase of any available items.

                                Note that we do not include shipping fees in the gift card amount.

                                STORE CREDIT
                                Please indicate on the included return form that you would like to receive store
                                credit for the returned item(s). Once we receive your return a gift card code
                                will be issued via email along with instructions. This code may be used towards
                                the purchase of any available items.

                                Note that we do not include shipping fees in the gift card amount.

                                INTERNATIONAL RETURNS AND EXCHANGES
                                On your commercial invoice, please mark the return shipment as â€œ9801 - US
                                GOODS RETURNINGâ€.

                                DISCOUNTED ITEMS
                                Items purchased using a promotional discount code may only be returned for store
                                credit.

                                FINAL SALE ITEMS
                                Products marked as final sale cannot be returned or exchanged.

                                IMPORTANT
                                Note that returned product must be in new condition, unworn, and with original
                                packaging to qualify for store credit.

                                Cornerman Productions, LLC DBA Stampd is not responsible for destination country
                                tax and/or duty charge if incurred. Buyer will be held accountable for any
                                restrictions, duties, taxes, and any other fees collected from the destination
                                country, prior to ordering. Stampd.com will NOT be responsible for any Duties,
                                Taxes, or Customs fees under any circumstances.

                                STAMPD RETURNS
                                130 S. La Brea Ave
                                La, Ca 90036
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle3" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle3">Privacy policy</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="footerText">
                            RETURNS
                            The Stampd Select Shop prides itself on the accuracy and turn around time of our
                            products.

                            RETURNS AND EXCHANGES
                            We accept returns within 14 days of delivery for store credit only. The items
                            must be in new condition, with tags attached, and in original packaging.

                            Customers will be responsible for return shipping costs. Once we receive your
                            return a gift card code will be issued via email along with instructions. This
                            code may be used towards the purchase of any available items.

                            Note that we do not include shipping fees in the gift card amount.

                            STORE CREDIT
                            Please indicate on the included return form that you would like to receive store
                            credit for the returned item(s). Once we receive your return a gift card code
                            will be issued via email along with instructions. This code may be used towards
                            the purchase of any available items.

                            Note that we do not include shipping fees in the gift card amount.

                            INTERNATIONAL RETURNS AND EXCHANGES
                            On your commercial invoice, please mark the return shipment as â€œ9801 - US
                            GOODS RETURNINGâ€.

                            DISCOUNTED ITEMS
                            Items purchased using a promotional discount code may only be returned for store
                            credit.

                            FINAL SALE ITEMS
                            Products marked as final sale cannot be returned or exchanged.

                            IMPORTANT
                            Note that returned product must be in new condition, unworn, and with original
                            packaging to qualify for store credit.

                            Cornerman Productions, LLC DBA Stampd is not responsible for destination country
                            tax and/or duty charge if incurred. Buyer will be held accountable for any
                            restrictions, duties, taxes, and any other fees collected from the destination
                            country, prior to ordering. Stampd.com will NOT be responsible for any Duties,
                            Taxes, or Customs fees under any circumstances.

                            STAMPD RETURNS
                            130 S. La Brea Ave
                            La, Ca 90036
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModalLong4" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle4" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle4">Terms of service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="footerText">
                        RETURNS
                        The Stampd Select Shop prides itself on the accuracy and turn around time of our
                        products.

                        RETURNS AND EXCHANGES
                        We accept returns within 14 days of delivery for store credit only. The items
                        must be in new condition, with tags attached, and in original packaging.

                        Customers will be responsible for return shipping costs. Once we receive your
                        return a gift card code will be issued via email along with instructions. This
                        code may be used towards the purchase of any available items.

                        Note that we do not include shipping fees in the gift card amount.

                        STORE CREDIT
                        Please indicate on the included return form that you would like to receive store
                        credit for the returned item(s). Once we receive your return a gift card code
                        will be issued via email along with instructions. This code may be used towards
                        the purchase of any available items.

                        Note that we do not include shipping fees in the gift card amount.

                        INTERNATIONAL RETURNS AND EXCHANGES
                        On your commercial invoice, please mark the return shipment as â€œ9801 - US
                        GOODS RETURNINGâ€.

                        DISCOUNTED ITEMS
                        Items purchased using a promotional discount code may only be returned for store
                        credit.

                        FINAL SALE ITEMS
                        Products marked as final sale cannot be returned or exchanged.

                        IMPORTANT
                        Note that returned product must be in new condition, unworn, and with original
                        packaging to qualify for store credit.

                        Cornerman Productions, LLC DBA Stampd is not responsible for destination country
                        tax and/or duty charge if incurred. Buyer will be held accountable for any
                        restrictions, duties, taxes, and any other fees collected from the destination
                        country, prior to ordering. Stampd.com will NOT be responsible for any Duties,
                        Taxes, or Customs fees under any circumstances.

                        STAMPD RETURNS
                        130 S. La Brea Ave
                        La, Ca 90036
                    </p>
                </div>
            </div>
        </div>
    </div>


</div>


</div>
</div>

    <!-- display none -->
    <div class="col-lg-6 checkoutBackground rightAreav2">
        <div class="col-md-11 rightArea">
            <div class="productTotal">
                <div class="row marginbottom20">
                    <div class="col-lg-3 col-3">
                        <img src="assets/img/productDetail1.jpg" class="checkoutProductImg" alt="">
                        <span class="productCount">1</span>
                    </div>
                    <div class="col-lg-6 col-7 paddingleft0">
                        <p class="checkoutProductTitle">F*** Off Hoodie Black</p>
                        <p class="checkoutProductChoose">S / Black</p>
                    </div>
                    <div class="col-lg-3 col-2">
                        <p class="checkoutProductPrice">$275.00</p>
                    </div>
                </div>

                <div class="row marginbottom20">
                    <div class="col-lg-3 col-3">
                        <img src="assets/img/productDetail1.jpg" class="checkoutProductImg" alt="">
                        <span class="productCount">1</span>
                    </div>
                    <div class="col-lg-6 col-7 paddingleft0">
                        <p class="checkoutProductTitle">F*** Off Hoodie Black</p>
                        <p class="checkoutProductChoose">S / Black</p>
                    </div>
                    <div class="col-lg-3 col-2">
                        <p class="checkoutProductPrice">$275.00</p>
                    </div>
                </div>

                <div class="row marginbottom20">
                    <div class="col-lg-3 col-3">
                        <img src="assets/img/productDetail1.jpg" class="checkoutProductImg" alt="">
                        <span class="productCount">1</span>

                    </div>
                    <div class="col-lg-6 col-7">
                        <p class="checkoutProductTitle">F*** Off Hoodie Black</p>
                        <p class="checkoutProductChoose">S / Black</p>
                    </div>
                    <div class="col-lg-3 col-2">
                        <p class="checkoutProductPrice">$275.00</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12 borderGift">
                <div class="row">
                    <div class="col-lg-9 col-md-10 col-sm-10 col-10 paddingleftv0">
                        <div class="form-contents2">
                            <div class="fc2">
                                <input id="asd" type="text" value="" required/>
                                <label for="asd">Gift card or discount code</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-2 col-2 paddingleftv0 paddinglr0">
                        <button class="applyBtn disableBtn" disabled>Apply</button>
                    </div>
                </div>
            </div>
            <div class="row subtotalpadding borderTotal ">
                <div class="col-md-12 marginbottomtotal ">
                    <span class="subtotal">Subtotal</span>
                    <span class="subtotalv2">$645.00</span>
                </div>
                <div class="col-md-12">
                    <span class="subtotal">Shipping</span>
                    <span class="calculatedText">Calculated at next step</span>
                </div>
                <div class="col-md-12">
                    <a class="policyText shippingCosts" data-toggle="modal" data-target="#exampleModalLong5">
                        Shipping costs
                    </a>
                    <div class="modal fade" id="exampleModalLong5" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLongTitle5" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle5">Shipping costs</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="footerText">
                                    U.S.
                                    $12 for all orders in the continental U.S.
                                    Free shipping on US orders over $250

                                    CANADA
                                    $20 for shipping to Canada

                                    INTERNATIONAL
                                    $45 for international shipping

                                    *We do not ship to P.O. boxes.
                                    *We do not ship to APO/DPO/FPO addresses.
                                    *We do not ship to Russia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 paddingtop20">
                <div class="row align-items-center">
                    <div class="col-2">
                        <span class="checkoutTotal">Total</span>
                    </div>
                    <div class="col-10">
                        <span class="moneyText">$645.00</span>
                        <span class="money">USD</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

</div>

</body>

</html>