<!DOCTYPE html>
<html>
<head>
    <?php include("inc/head.php");?>
</head>
<body>
    <div class="container-fluid pd0">
        <div class="row">
            <div class="col-lg-6 col-md-11 checkoutLogo">
                <a href="index-2.php">
                    <img class="checkLogo" src="assets/img/neec.png" alt="">
                </a>
                <p class="checkoutText">
                    <a href="cart.php">
                        <span class="checkoutNotActive">Cart</span>
                    </a>
                    <i class="fa fa-angle-right checkoutLeftArrow" aria-hidden="true"></i>
                    <a href="checkout.php">
                        <span class="checkoutNotActive">Information</span>
                    </a>
                    <i class="fa fa-angle-right checkoutLeftArrow" aria-hidden="true"></i>
                    <a href="shipping.php">
                        <span class="checkoutNotActive">Shipping</span>
                    </a>
                    <i class="fa fa-angle-right checkoutLeftArrow" aria-hidden="true"></i>
                    <span class="checkoutActive">Payment</span>
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
                Show order summary 
                <i class="fa fa-angle-down" aria-hidden="true"></i>
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
                    <div class="col-2 p-0">
                        <a href="#" class="shippingChangeText">Change</a>
                    </div>
                </div>
                <div class="row borderShippingIn">
                    <div class="col-2 shippingLeftText">Ship to</div>
                    <div class="col-8 shippingCenterText"> A asdfdasfasffasfsa, 34522 İstanbul , Turkey</div>
                    <div class="col-2 p-0">
                        <a href="#" class="shippingChangeText">Change</a>
                    </div>
                </div>
                <div class="row methodText">
                    <div class="col-2 shippingLeftText">Method</div>
                    <div class="col-7 shippingCenterText">Standard International Shipping </div>
                    <div class="col-3 pr15">
                        <span class="fontweight500">$45.00</span>
                    </div>
                </div>
            </div>
            <p class="paymentText">Payment</p>
            <p class="allPaymentText">All transactions are secure and encrypted.</p>
            <section id="paymentCard">
                <div class="borderShipping grayBackground">
                    <div class="row creditBorder bWhitev2">
                        <div class="col-5 paddingmobilright0">
                            <input class="sortSelectBtn" id="creditCard" type="radio" value="myValue 1" name="radio-group" checked>
                            <label for="creditCard" class="input-helper input-helper--radio3 creditCard ">Credit Card</label>
                        </div>
                        <div class="col-7 text-right">
                            <i class="visa"></i>
                            <i class="master"></i>
                            <span class="andmoreText">and more...</span>
                        </div>
                    </div>
                    <div class="row paddingtop6">
                        <div class="col-12 paymentPadding">
                            <div class="form-contents">
                                <div class="fc">
                                    <input id="cardnumber"class="bWhitev3" type="text"
                                    
                                    <input type="number" onkeypress="return checkNumber(event)"
                                    value="" maxlength="16" required/>
                                    <label for="cardnumber" class="zindex0">Card number</label>
                                    <i class="fa fa-lock paymentLock" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 paymentPadding">
                            <div class="form-contents">
                                <div class="fc">
                                    <input id="nameoncard" class="bWhitev3" type="text" value="" required/>
                                    <label for="nameoncard" class="zindex0">Name on card</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 paymentPadding paddingright0 paddingright7">
                            <div class="form-contents">
                                <div class="fc">
                                    <input id="dateMMYY" class="bWhitev3 dateMask" type="text" value="" required/>
                                    <label for="dateMMYY" class="zindex0">Date (MM / YY)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 paymentPadding paddingleft7">
                            <div class="form-contents">
                                <div class="fc">
                                    <input id="securityCode" class="bWhitev3" type="text" value="" onkeypress="return checkNumber(event)" maxlength="3" required />
                                    <label for="securityCode" class="zindex0">CCV</label>
                                    <i class="fa fa-question-circle paymentLock" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="billingAddress">
                <div class="row">
                    <div class="col-md-12">
                        <p class="billingText">Billing address</p>
                    </div>
                </div>
                <div class="billingShipping">
                    <div class="row billingBorder">
                        <div class="col-12 closeForm">
                            <input class="sortSelectBtn" id="sameAs" type="radio" value="myValue 1" name="radio-group2" checked>
                            <label for="sameAs" class="input-helper input-helper--radio3 billingAddressText">Same as shipping address</label>
                        </div>
                    </div>
                    <div class="row paddingtop13">
                        <div class="col-12 openForm">
                            <input class="sortSelectBtn" id="useDiff" type="radio" value="myValue 1" name="radio-group2">
                            <label for="useDiff" class="input-helper input-helper--radio3 billingAddressTextv2">Use a different billing address</label>
                        </div>
                    </div>
                    <div class="row diffAddress">
                        <div class="col-12">
                            <form action="#">
                                <div class="row marginbottom10">
                                    <div class="col-md-6 paddingright0">
                                        <div class="form-contents">
                                            <div class="fc">
                                                <input id="firstName" class="marginbottom10v2 bWhitev3" type="text" value="" required/>
                                                <label for="firstName" class="zindex0">First name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-contents">
                                            <div class="fc">
                                                <input id="lastName" class="bWhitev3" type="text" value="" required/>
                                                <label for="lastName" class="zindex0">Last name</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-contents marginbottom10">
                                    <div class="fc">
                                        <input id="company" class="bWhitev3" type="text" value="" required/>
                                        <label for="company" class="zindex0">Company</label>
                                    </div>
                                </div>
                                <div class="form-contents marginbottom10">
                                    <div class="fc">
                                        <input id="address" class="bWhitev3" type="text" value="" required/>
                                        <label for="address" class="zindex0">Address</label>
                                    </div>
                                </div>
                                <div class="form-contents marginbottom10">
                                    <div class="fc">
                                        <input id="apartment" class="bWhitev3" type="text" value="" required/>
                                        <label for="apartment" class="zindex0">Apartment, suite, etc.</label>
                                    </div>
                                </div>
                                <div class="form-contents marginbottom10">
                                    <div class="fc">
                                        <input id="city" class="bWhitev3" type="text" value="" required/>
                                        <label for="city" class="zindex0">City</label>
                                    </div>
                                </div>
                                <div class="row marginbottom10">
                                    <div class="col-6 paddingright0 paddingright7">
                                        <label class="country">Country/Region</label>
                                        <select id="country" name="country" class="form-control national marginbottom10">
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Ã…land Islands">Ã…land Islands</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of
                                                The
                                            </option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guernsey">Guernsey</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic
                                                of
                                            </option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav
                                                Republic of
                                            </option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South
                                                Sandwich Islands
                                            </option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-leste">Timor-leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey" selected>Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands
                                            </option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                    <div class="col-6 paddingleft7">
                                        <div class="form-contents">
                                            <div class="fc">
                                                <input id="postal" class="bWhitev3" type="text" value="" required/>
                                                <label for="postal" class="zindex0">Postal code</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-contents marginbottom10">
                                    <div class="fc">
                                        <input id="phone" class="bWhitev3" type="text" value="" required/>
                                        <label for="phone" class="zindex0">Phone</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row returnRow">
                <div class="col-md-5 col-12">
                    <a href="shipping.php">
                        <p class="returnCart">
                            <i class="fa fa-angle-left returnLeftArrow" aria-hidden="true"></i>
                            Return to shipping
                            
                        </p>
                    </a>
                </div>
                <div class="col-md-7 col-12">
                    <a href="#">
                        <button class="continueBtn">Complete order</button>
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