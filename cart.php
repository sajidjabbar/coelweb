<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/cart.css">
<!-- Stylesheet -->

<!-- Cart Start Here -->
<section class="cart_products">
    <div class="container">
        <div class="row">
            <div class="col-md-11 mx-auto">
                <div class="banner_heading">
                    <h1>Cart</h1>
                </div>
                <div class="cart-table">
                    <table class="table mt-3 car-tabt">
                        <thead>
                            <th class="small_row"></th>
                            <th class="small_row"></th>
                            <th class="Product">Product</th>
                            <th class="Price">Price</th>
                            <th class="Quantity">Quantity</th>
                            <th class="Subtotal">Subtotal</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="" class="remove">x</a></td>
                                <td><img src="img/product11.jpg" alt=""></td>
                                <td class="heavy_font">Comtes, Vicomtes et noblesse au Nord de l'Aquitaine aux Xe -
                                    XIesiécles: Etudes prosopographiques, historiques et constitutionnelles sure le
                                    Poitou,
                                    l'Aunis et la Saintonge</td>
                                <td>£30.00</td>
                                <td class="text-center"><input type="number" class="quantity" value="1"></td>
                                <td>£30.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table_footer">
                    <div class="for_form">
                        <input type="text" placeholder="Coupon code">
                        <button>Apply coupon</button>
                    </div>
                    <div class="for_update_card">
                        <button>Update cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-5 ml-auto mt-5">
                <div class="for_heading">
                    <h1>Cart totals</h1>
                    <div class="for_totals mt-3">
                        <div class="col-lg-4">
                            <span class="dark_text">Subtotal</span>
                        </div>
                        <div class="col-lg-8">
                            <span>£30.00</span>
                        </div>
                    </div>
                    <div class="for_totals">
                        <div class="col-lg-4">
                            <span class="dark_text">Total</span>
                        </div>
                        <div class="col-lg-8">
                            <span class="dark_text">£30.00</span>
                        </div>
                    </div>
                    <a href="checkout.php" class="checkout_btn mt-4">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cart End here Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->