<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/checkout.css">
<!-- Stylesheet -->

<section class="checkout_top">
    <div class="container">
        <div class="start_here">
            <div class="banner_heading">
                <h1>Checkout</h1>
            </div>
            <div class="for_coupan mt-3">
                <span><img src="img/icon.png" class="pl-5 pr-3" alt=""> Have a coupon? <a href="">Click here to enter your code</a></span>
            </div>
        </div>
    </div>
</section>
<!-- form start -->
<section class="checkout_form">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="apply-form-start">
                    <div class="for-form-in-center">
                        <form action="">
                            <div class="card-body for-vox-shadow">
                                <div class="heading pl-3 my-5">
                                    <h1>Billing details</h1>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">First Name*</label>
                                        <input type="text" class="form-control for-normal-form-input" id="inputEmail4">
                                    </div>
                                    <div class=" form-group col-md-6">
                                        <label for="inputPassword4">Last Name*</label>
                                        <input type="text" class="form-control for-normal-form-input" id="inputPassword4">
                                    </div>
                                </div>
                                <div class=" form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4">Company name (optional)*</label>
                                        <input type="text" class="form-control for-normal-form-input" id="inputEmail4" ">
                                    </div>
                                </div>
                                <div class=" form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputPassword4">Country / Region *</label>
                                            <!-- <select class="js-example-basic-single" name="state">
                                                <option value="AL">Alabama</option>
                                                ...
                                                <option value="WY">Wyoming</option>
                                            </select> -->
                                            <select class="js-example-basic-single form-control for-normal-form-input" name="state">
                                                <option>Afghanistan</option>
                                                <option>Åland Islands</option>
                                                <option>Albania</option>
                                                <option>Algeria</option>
                                                <option>American Samoa</option>
                                                <option>Andorra</option>
                                                <option>Angola</option>
                                                <option>Anguilla</option>
                                                <option>Antarctica</option>
                                                <option>Antigua and Barbuda</option>
                                                <option>Argentina</option>
                                                <option>Armenia</option>
                                                <option>Aruba</option>
                                                <option>Australia</option>
                                                <option>Austria</option>
                                                <option>Azerbaijan</option>
                                                <option>Bahamas</option>
                                                <option>Bahrain</option>
                                                <option>Bangladesh</option>
                                                <option>Barbados</option>
                                                <option>Belarus</option>
                                                <option>Belau</option>
                                                <option>Belgium</option>
                                                <option>Belize</option>
                                                <option>Benin</option>
                                                <option>Bermuda</option>
                                                <option>Bhutan</option>
                                                <option>Bolivia</option>
                                                <option>Bonaire, Saint Eustatius and Saba</option>
                                                <option>Bosnia and Herzegovina</option>
                                                <option>Botswana</option>
                                                <option>Bouvet Island</option>
                                                <option>Brazil</option>
                                                <option>British Indian Ocean Territory</option>
                                                <option>Brunei</option>
                                                <option>Bulgaria</option>
                                                <option>Burkina Faso</option>
                                                <option>Burundi</option>
                                                <option>Cambodia</option>
                                                <option>Cameroon</option>
                                                <option>Canada</option>
                                                <option>Cape Verde</option>
                                                <option>Cayman Islands</option>
                                                <option>Central African Republic</option>
                                                <option>Chad</option>
                                                <option>Chile</option>
                                                <option>China</option>
                                                <option>Christmas Island</option>
                                                <option>Cocos (Keeling) Islands</option>
                                                <option>Colombia</option>
                                                <option>Comoros</option>
                                                <option>Congo (Brazzaville)</option>
                                                <option>Congo (Kinshasa)</option>
                                                <option>Cook Islands</option>
                                                <option>Costa Rica</option>
                                                <option>Croatia</option>
                                                <option>Cuba</option>
                                                <option>Curaçao</option>
                                                <option>Cyprus</option>
                                                <option>Czech Republic</option>
                                                <option>Denmark</option>
                                                <option>Djibouti</option>
                                                <option>Dominica</option>
                                                <option>Dominican Republic</option>
                                                <option>Ecuador</option>
                                                <option>Egypt</option>
                                                <option>El Salvador</option>
                                                <option>Equatorial Guinea</option>
                                                <option>Eritrea</option>
                                                <option>Estonia</option>
                                                <option>Eswatini</option>
                                                <option>Ethiopia</option>
                                                <option>Falkland Islands</option>
                                                <option>Faroe Islands</option>
                                                <option>Fiji</option>
                                                <option>Finland</option>
                                                <option>France</option>
                                                <option>French Guiana</option>
                                                <option>French Polynesia</option>
                                                <option>French Southern Territories</option>
                                                <option>Gabon</option>
                                                <option>Gambia</option>
                                                <option>Georgia</option>
                                                <option>Germany</option>
                                                <option>Ghana</option>
                                                <option>Gibraltar</option>
                                                <option>Greece</option>
                                                <option>Greenland</option>
                                                <option>Grenada</option>
                                                <option>Guadeloupe</option>
                                                <option>Guam</option>
                                                <option>Guatemala</option>
                                                <option>Guernsey</option>
                                                <option>Guinea</option>
                                                <option>Guinea-Bissau</option>
                                                <option>Guyana</option>
                                                <option>Haiti</option>
                                                <option>Heard Island and McDonald Islands</option>
                                                <option>Honduras</option>
                                                <option>Hong Kong</option>
                                                <option>Hungary</option>
                                                <option>Iceland</option>
                                                <option>India</option>
                                                <option>Indonesia</option>
                                                <option>Iran</option>
                                                <option>Iraq</option>
                                                <option>Ireland</option>
                                                <option>Isle of Man</option>
                                                <option>Israel</option>
                                                <option>Italy</option>
                                                <option>Ivory Coast</option>
                                                <option>Jamaica</option>
                                                <option>Japan</option>
                                                <option>Jersey</option>
                                                <option>Jordan</option>
                                                <option>Kazakhstan</option>
                                                <option>Kenya</option>
                                                <option>Kiribati</option>
                                                <option>Kuwait</option>
                                                <option>Kyrgyzstan</option>
                                                <option>Laos</option>
                                                <option>Latvia</option>
                                                <option>Lebanon</option>
                                                <option>Lesotho</option>
                                                <option>Liberia</option>
                                                <option>Libya</option>
                                                <option>Liechtenstein</option>
                                                <option>Lithuania</option>
                                                <option>Luxembourg</option>
                                                <option>Macao</option>
                                                <option>Madagascar</option>
                                                <option>Malawi</option>
                                                <option>Malaysia</option>
                                                <option>Maldives</option>
                                                <option>Mali</option>
                                                <option>Malta</option>
                                                <option>Marshall Islands</option>
                                                <option>Martinique</option>
                                                <option>Mauritania</option>
                                                <option>Mauritius</option>
                                                <option>Mayotte</option>
                                                <option>Mexico</option>
                                                <option>Micronesia</option>
                                                <option>Moldova</option>
                                                <option>Monaco</option>
                                                <option>Mongolia</option>
                                                <option>Montenegro</option>
                                                <option>Montserrat</option>
                                                <option>Morocco</option>
                                                <option>Mozambique</option>
                                                <option>Myanmar</option>
                                                <option>Namibia</option>
                                                <option>Nauru</option>
                                                <option>Nepal</option>
                                                <option>Netherlands</option>
                                                <option>New Caledonia</option>
                                                <option>New Zealand</option>
                                                <option>Nicaragua</option>
                                                <option>Niger</option>
                                                <option>Nigeria</option>
                                                <option>Niue</option>
                                                <option>Norfolk Island</option>
                                                <option>North Korea</option>
                                                <option>North Macedonia</option>
                                                <option>Northern Mariana Islands</option>
                                                <option>Norway</option>
                                                <option>Oman</option>
                                                <option>Pakistan</option>
                                                <option>Palestinian Territory</option>
                                                <option>Panama</option>
                                                <option>Papua New Guinea</option>
                                                <option>Paraguay</option>
                                                <option>Peru</option>
                                                <option>Philippines</option>
                                                <option>Pitcairn</option>
                                                <option>Poland</option>
                                                <option>Portugal</option>
                                                <option>Puerto Rico</option>
                                                <option>Qatar</option>
                                                <option>Reunion</option>
                                                <option>Romania</option>
                                                <option>Russia</option>
                                                <option>Rwanda</option>
                                                <option>São Tomé and Príncipe</option>
                                                <option>Saint Barthélemy</option>
                                                <option>Saint Helena</option>
                                                <option>Saint Kitts and Nevis</option>
                                                <option>Saint Lucia</option>
                                                <option>Saint Martin (Dutch part)</option>
                                                <option>Saint Martin (French part)</option>
                                                <option>Saint Pierre and Miquelon</option>
                                                <option>Saint Vincent and the Grenadines</option>
                                                <option>Samoa</option>
                                                <option>San Marino</option>
                                                <option>Saudi Arabia</option>
                                                <option>Senegal</option>
                                                <option>Serbia</option>
                                                <option>Seychelles</option>
                                                <option>Sierra Leone</option>
                                                <option>Singapore</option>
                                                <option>Slovakia</option>
                                                <option>Slovenia</option>
                                                <option>Solomon Islands</option>
                                                <option>Somalia</option>
                                                <option>South Africa</option>
                                                <option>South Georgia/Sandwich Islands</option>
                                                <option>South Korea</option>
                                                <option>South Sudan</option>
                                                <option>Spain</option>
                                                <option>Sri Lanka</option>
                                                <option>Sudan</option>
                                                <option>Suriname</option>
                                                <option>Svalbard and Jan Mayen</option>
                                                <option>Sweden</option>
                                                <option>Switzerland</option>
                                                <option>Syria</option>
                                                <option>Taiwan</option>
                                                <option>Tajikistan</option>
                                                <option>Tanzania</option>
                                                <option>Thailand</option>
                                                <option>Timor-Leste</option>
                                                <option>Togo</option>
                                                <option>Tokelau</option>
                                                <option>Tonga</option>
                                                <option>Trinidad and Tobago</option>
                                                <option>Tunisia</option>
                                                <option>Turkey</option>
                                                <option>Turkmenistan</option>
                                                <option>Turks and Caicos Islands</option>
                                                <option>Tuvalu</option>
                                                <option>Uganda</option>
                                                <option>Ukraine</option>
                                                <option>United Kingdom (UK)</option>
                                                <option selected>United States (US)</option>
                                                <option>United States (US) Minor Outlying Islands</option>
                                                <option>Uruguay</option>
                                                <option>Uzbekistan</option>
                                                <option>Vanuatu</option>
                                                <option>Vatican</option>
                                                <option>Venezuela</option>
                                                <option>Vietnam</option>
                                                <option>Virgin Islands (British)</option>
                                                <option>Virgin Islands (US)</option>
                                                <option>Wallis and Futuna</option>
                                                <option>Western Sahara</option>
                                                <option>Yemen</option>
                                                <option>Zambia</option>
                                                <option>Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Street address</label>
                                            <input type="text" class="form-control for-normal-form-input" placeholder="Postcode / ZIP *Postcode / ZIP *" id="inputEmail4">
                                            <input type=" text" class="form-control for-normal-form-input mt-3" placeholder="Apartment, suite, unit, etc. (optional)" id="inputEmail4">

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Town / City *</label>
                                            <input type="text" class="form-control for-normal-form-input" placeholder="Postcode / ZIP *Postcode / ZIP *" id="inputEmail4">
                                          

                                        </div>
                                    </div>
                                    <div class=" form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">State *</label>
                                            <input type="text" class="form-control for-normal-form-input" id="inputEmail4">
                                        </div>
                                    </div>
                                    <div class=" form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">ZIP Code *</label>
                                            <input type="text" class="form-control for-normal-form-input" id="inputEmail4">
                                        </div>
                                    </div>
                                    <div class=" form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Phone *</label>
                                            <input type="text" class="form-control for-normal-form-input" id="inputEmail4">
                                        </div>
                                    </div>
                                    <div class=" form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Email address *</label>
                                            <input type="text" class="form-control for-normal-form-input" id="inputEmail4">
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=" col-md-6">
                <div class="form-row">
                    <div class="form-group col-md-12 mt-4">
                        <div class="heading  my-5">
                            <h1>Additional information</h1>
                        </div>
                        <label for="inputEmail4">Order notes (optional)</label>
                        <textarea type="text" class="form-control for-normal-form-input" placeholder="Notes about your order, e.g. special notes for delivery." id="inputEmail4"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Form End Here -->
<!-- your Orders Start Here -->
<section class=" your_orders">
    <div class="container">
        <div class="heading">
            <h1>Your order</h1>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Comtes, Vicomtes et noblesse au Nord de l'Aquitaine aux Xe - XIesiécles: Etudes prosopographiques, historiques et constitutionnelles sure le Poitou, l'Aunis et la Saintonge × 2 </td>
                    <td>£60.00</td>
                </tr>
                <tr>
                    <th>Subtotal</th>
                    <th>£60.00</th>
                </tr>
                <tr>
                    <th>Total</th>
                    <th>£60.00</th>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<!-- End Here -->

<!-- Place Order -->
<section class="place_order">
    <div class="container">
        <div class="start_here">
            <div class="placing_error">
                <div class="error_box">
                    <div class="icon"><img src="img/icon.png" alt=""></div>
                    <div class="text">
                        <p>Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.</p>
                    </div>
                </div>
            </div>
            <div class="final_place_order">
                <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                <div class="place_order_btn">
                   <a href="thankyou.php"> <button>Place order</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->