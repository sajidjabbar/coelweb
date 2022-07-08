<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/checkout.css">
<!-- Stylesheet -->

<section class="checkout_top">
    <div class="container">
        <div class="start_here">
            <div class="main_heading">
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
                                            <select name="" id="" class="form-control for-normal-form-input">
                                                <option value="France" >France </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Street address *</label>
                                            <input type="text" class="form-control for-normal-form-input" placeholder="Postcode / ZIP *Postcode / ZIP *" id="inputEmail4">
                                            <input type=" text" class="form-control for-normal-form-input mt-3" placeholder="Apartment, suite, unit, etc. (optional)" id="inputEmail4">

                                        </div>
                                    </div>
                                    <div class=" form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Postcode / ZIP *</label>
                                            <input type="text" class="form-control for-normal-form-input" id="inputEmail4">
                                        </div>
                                    </div>
                                    <div class=" form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Town / City *</label>
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
                            <h1>Billing details</h1>
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
                    <button>Place order</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->