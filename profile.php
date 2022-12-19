<?php include 'inc/app.php'; ?>
<!-- Css Link  -->
<link rel="stylesheet" href="css/profile.css">
<link rel="stylesheet" href="css/address.css">
<!-- Css Link  -->
<!-- Banner Sec Start Here -->

<section class="about_banner">
    <div class="img_box">
        <div class="background_overlay2">

        </div>
        <div class="background_overlay">

        </div>

        <div class="banner_heading">
            <h1>Profile</h1>
        </div>
        <div class="banner_breadcrumps ">
            <i class="fa fa-home" aria-hidden="true"></i>
            <a href="index.php"><span>Home</span></a>
            <i class="fa fa-angle-right"></i>
            <span>Profile</span>
        </div>
        <!-- <figure><img src="img/hero-about.jpg" alt="" class="img-fluid"></figure> -->
    </div>
</section>
<!-- Banner Sec End Here -->
<!-- Profile section  -->
<section class="profile-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="img-and-username-wrapper">
                    <div class="profile-img">
                        <figure>
                            <img src="img/profile.webp" class="img-fluid" alt="">
                            <a href="#" class="chnage">Change image</a>
                        </figure>

                    </div>
                    <div class="username mt-4">
                        <h3 class="username">John Doe</h3>
                    </div>
                </div>
                <div class="for-proflie">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-Addresses-tab" data-toggle="pill" href="#pills-Addresses" role="tab" aria-controls="pills-Addresses" aria-selected="false">My Addresses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">My Order</a>
                        </li>
                        <li class="nav-item pl-4">
                            <a class="nav-link" id="pills-Trade-order-tab" data-toggle="pill" href="#pills-Trade-order" role="tab" aria-controls="pills-Trade-order" aria-selected="false">Trade Orders
                            </a>
                        </li>
                        <li class="nav-item pl-4">
                            <a class="nav-link" id="pills-Bulk-order-tab" data-toggle="pill" href="#pills-Bulk-order" role="tab" aria-controls="pills-Bulk-order" aria-selected="false">Bulk Orders
                            </a>
                        </li>
                        <li class="nav-item py-3">
                            <a class="nav-link" href="index.php">Log out
                            </a>
                        </li>
                    </ul>

                    <div class="sign-out">
                        <button class="btn" onclick="location.href='index.php'">SIGN OUT</button>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="Accounts">
                                    <h5>Account</h5>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="first-name">
                                            <h4>First Name</h4>
                                            <h3>James</h3>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="first-name">
                                            <h4>Last Name</h4>
                                            <h3>Anderson</h3>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="first-name">
                                            <h4>Phone</h4>
                                            <h3><a href="tel:+1 (322) 422 654">+1 (322) 422 654</a></h3>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="row">
                                    <div class="col-md-12">
                                        <div class="address">
                                            <h4>Address</h4>
                                            <h3>Georgio State 4128, Lorem ipsum doler simut washington dc</h3>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="row for-allign">
                                    <div class="col-md-6">
                                        <div class="address">
                                            <h4>Primary Email</h4>
                                            <h3>Jamesanderson@gmail.com</h3>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="********">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="password-btn">
                                            <a href="create-password.php">Change Password</a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button class="btn">EDIT PROFILE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-Addresses" role="tabpanel" aria-labelledby="pills-Addresses-tab">
                        <div class="my-profile">
                            <div class="address-form-wrapper">
                                <div class="heading">
                                    <h5>Addresses</h5>
                                </div>
                                <div class="form-wrapper">
                                    <form action="">
                                        <div class="form-group row">
                                            <div class="col-lg-6"><label for="">First Name</label><input type="text" class="form-control"></div>
                                            <div class="col-lg-6"><label for="">Last Name</label><input type="text" class="form-control"></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6"><label for="">Phone</label><input type="text" class="form-control"></div>
                                            <div class="col-lg-6"><label for="">Email</label><input type="text" class="form-control"></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6"><label for="">Address</label><textarea name="" class="form-control" id="" cols="30" rows="5"></textarea></div>
                                            <div class="col-lg-6"><label for="">Suit, Apartment, etc</label><textarea name="" class="form-control" id="" cols="30" rows="5"></textarea></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3"><label for="">City</label><input type="text" class="form-control"></div>
                                            <div class="col-lg-3"><label for="">State</label><input type="text" class="form-control"></div>
                                            <div class="col-lg-3"><label for="">Country/Region</label><input type="text" class="form-control"></div>
                                            <div class="col-lg-3"><label for="">Zip Code</label><input type="text" class="form-control"></div>
                                        </div>
                                        <div class="form-group"><button class="btn" type="submit">Add Address</button></div>
                                    </form>
                                </div>
                            </div>
                            <div class="save-address">
                                <div class="heading">
                                    <h3>Saved Address</h3>
                                </div><label class="container"><input type="radio" name="radio" checked=""><span class="checkmark">
                                        <div class="select-address">
                                            <div class="address-detail">
                                                <div class="actions"><a href="#" class="editAddress edit"><i class="fa-regular fa-pen-to-square"></i></a><a href="#"><i class="fa-solid fa-trash-can"></i></a></div>
                                                <h5><span class="property">Country:</span>
                                                    <div class="spacer"></div><span class="value">United Kingdom</span>
                                                </h5>
                                                <h5><span class="property">Address:</span>
                                                    <div class="spacer"></div><span class="value">36 Victoria Road
                                                        GLASGOW
                                                        G40 6RS</span>
                                                </h5>
                                                <h5><span class="property">Phone:</span>
                                                    <div class="spacer"></div><span class="value">+44-123-456-789</span>
                                                </h5>
                                                <h5><span class="property">State:</span>
                                                    <div class="spacer"></div><span class="value">Texas</span>
                                                </h5>
                                                <div class="deafult">
                                                    <h5>Use as default</h5><span class="dot"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </span></label>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="order-table-wrapper table-responsive">
                                    <!-- <h3 class="form-heading">My Orders</h3> -->
                                    <table>
                                        <tbody>
                                            <tr class="row1">
                                                <th class="order-no">OrderNo</th>
                                                <th class="order-date">Order Date</th>
                                                <th class="order-status">Status</th>
                                                <th class="order-total">Total</th>
                                                <th class="details"></th>
                                            </tr>
                                            <tr class="row2">
                                                <td class="number">#1084598423154</td>
                                                <td class="date">04-12-21</td>
                                                <td class="status">Confirm</td>
                                                <!-- <td class="paid">Paid <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                </td> -->
                                                <td class="total-price">$590.00</td>
                                                <td class="order-details">
                                                    <a class="order-details-btn" data-toggle="modal" data-target="#exampleModalLong">view Details</a>
                                                </td>
                                            </tr>
                                            <tr class="row2">
                                                <td class="number">#1084598423154</td>
                                                <td class="date">04-12-21</td>
                                                <td class="status">Confirm</td>
                                                <!-- <td class="paid">Paid <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                </td> -->
                                                <td class="total-price">$590.00</td>
                                                <td class="order-details">
                                                    <a href="#">view Details</a>
                                                </td>
                                            </tr>
                                            <tr class="row2">
                                                <td class="number">#1084598423154</td>
                                                <td class="date">04-12-21</td>
                                                <td class="status">Confirm</td>
                                                <!-- <td class="paid">Paid <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                </td> -->
                                                <td class="total-price">$590.00</td>
                                                <td class="order-details">
                                                    <a href="#">view Details</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- pagination starts here -->
                                <div class="pagination-wrapper">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li><a class="number active" href="#">1</a></li>
                                        <li><a class="number" href="#">2</a></li>
                                        <li><a class="number" href="#">3</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                                <!-- pagination starts here -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-Trade-order" role="tabpanel" aria-labelledby="pills-Trade-order-tab">
                        <div class="everything">
                            <h3 class="heading">Trade Orders</h3>
                            <div class="wishlist-table-wrapper">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr class="row1">
                                            <th class="wishlist-imgs-col"></th>
                                            <th class="product-name">PRODUCT NAME</th>
                                            <th class="unit-price">UNIT PRICE</th>
                                            <th class="delete-row"></th>
                                        </tr>
                                        <tr class="row2">
                                            <td class="wishlist-images">
                                                <img src="img/product1.jpg" class="img-fluid wishlist-img" alt="">
                                            </td>
                                            <td class="pro-name">
                                                Christian Settipani, Les Ancêtres
                                            </td>
                                            <td class="unitr-pro">
                                                $35.00
                                            </td>
                                            <td class="row-close">
                                                <button><i class="fa fa-close"></i></button>
                                            </td>
                                        </tr>
                                        <tr class="row2">
                                            <td class="wishlist-images">
                                                <img src="img/product2.jpg" class="img-fluid wishlist-img" alt="">
                                            </td>
                                            <td class="pro-name">
                                                Comtes, Vicomtes et noblesse
                                            </td>
                                            <td class="unitr-pro">
                                                $30.00
                                            </td>
                                            <td class="row-close">
                                                <button><i class="fa fa-close"></i></button>
                                            </td>
                                        </tr>
                                        <tr class="row2">
                                            <td class="wishlist-images">
                                                <img src="img/product3.jpg" class="img-fluid wishlist-img" alt="">
                                            </td>
                                            <td class="pro-name">
                                                Continuité gentilice et
                                            </td>
                                            <td class="unitr-pro">
                                                $50.00
                                            </td>
                                            <td class="row-close">
                                                <button><i class="fa fa-close"></i></button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="pagination-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li><a class="number active" href="#">1</a></li>
                                    <li><a class="number" href="#">2</a></li>
                                    <li><a class="number" href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-Bulk-order" role="tabpanel" aria-labelledby="pills-Bulk-order-tab">
                        <div class="everything">
                            <h3 class="heading">Bulk Orders</h3>
                            <div class="wishlist-table-wrapper">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr class="row1">
                                            <th class="wishlist-imgs-col"></th>
                                            <th class="product-name">PRODUCT NAME</th>
                                            <th class="unit-price">UNIT PRICE</th>
                                            <th class="unit-price">Quantity</th>
                                            <!-- <th class="delete-row">Cancel</th> -->
                                        </tr>
                                        <tr class="row2">
                                            <td class="wishlist-images">
                                                <img src="img/product1.jpg" class="img-fluid wishlist-img" alt="">
                                            </td>
                                            <td class="pro-name">
                                                Christian Settipani, Les Ancêtres
                                            </td>
                                            <td class="unitr-pro">
                                                $35.00
                                            </td>
                                            <td class="qty-pro">
                                                1000
                                            </td>
                                            <!-- <td class="row-close">
                                                <button class="btn">proceed</button>
                                            </td> -->
                                        </tr>
                                        <tr class="row2">
                                            <td class="wishlist-images">
                                                <img src="img/product2.jpg" class="img-fluid wishlist-img" alt="">
                                            </td>
                                            <td class="pro-name">
                                                Comtes, Vicomtes et noblesse
                                            </td>
                                            <td class="unitr-pro">
                                                $30.00
                                            </td>
                                            <td class="qty-pro">
                                                1000
                                            </td>
                                            <!-- <td class="row-close">
                                                <button>proceed</button>
                                            </td> -->
                                        </tr>
                                        <tr class="row2">
                                            <td class="wishlist-images">
                                                <img src="img/product3.jpg" class="img-fluid wishlist-img" alt="">
                                            </td>
                                            <td class="pro-name">
                                                Continuité gentilice et
                                            </td>
                                            <td class="unitr-pro">
                                                $50.00
                                            </td>
                                            <td class="qty-pro">
                                                1000
                                            </td>
                                            <!-- <td class="row-close">
                                                <button>proceed</button>
                                            </td> -->
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="pagination-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li><a class="number active" href="#">1</a></li>
                                    <li><a class="number" href="#">2</a></li>
                                    <li><a class="number" href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End of Profile section  -->

<?php include 'inc/footer.php'; ?>