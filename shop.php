<!-- Header Start Here -->
<?php include 'inc/app.php' ?>
<!-- Header End here -->
<!-- Css Link Here  -->
<link rel="stylesheet" href="css/shop.css">
<!-- Css Link End Here Here  -->

<!-- Banner Sec Start Here -->
<section class="about_banner">
    <div class="img_box">
        <div class="background_overlay2">

        </div>
        <div class="background_overlay">

        </div>

        <div class="banner_heading">
            <h1>Shop</h1>
        </div>
        <div class="banner_breadcrumps ">
            <i class="fa fa-home" aria-hidden="true"></i>
            <a href="index.php"><span>Home</span></a>
            <i class="fa fa-angle-right"></i>
            <span>Shop</span>
        </div>
        <!-- <figure><img src="img/hero-about.jpg" alt="" class="img-fluid"></figure> -->
    </div>
</section>
<!-- Banner Sec End Here -->
<!-- Shop Sec Start Here -->
<section class="shop_sec">
    <!-- <section class="section-head">
        <div class="head-page">
            <h3 class="heading-page">Shops</h3>
        </div>
    </section> -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="shop-sidebar">

                    <div class="categoryDv variation-attr">

                        <ul class="categories">
                            <!-- <div class="alltxt">
                                <span class="dot"></span>
                                <p class="green_para">All</p>
                            </div> -->
                            <div class="form-group">
                                <input type="text" class="form-control" id="searchprod" placeholder="Search Products…">
                            </div>
                            <li><a href="#"><span class="property">Category 1 (6)</span> <span class="value"></span></a>
                            </li>
                            <li><a href="#"><span class="property">Category 2 (6) </span> <span class="value"></span></a>
                            </li>
                            <li><a href="#"><span class="property">Category 3 (6) </span> <span class="value"></span></a>
                            </li>

                        </ul>
                        <div slider id="slider-distance">
  <div>
    <div inverse-left style="width:70%;"></div>
    <div inverse-right style="width:70%;"></div>
    <div range style="left:30%;right:40%;"></div>
    <span thumb style="left:30%;"></span>
    <span thumb style="left:60%;"></span>
    <div sign style="left:30%;">
      <span id="value">30</span>
    </div>
    <div sign style="left:60%;">
      <span id="value">60</span>
    </div>
  </div>
  <input type="range" tabindex="0" value="30" max="100" min="0" step="1" oninput="
  this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
  var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
  var children = this.parentNode.childNodes[1].childNodes;
  children[1].style.width=value+'%';
  children[5].style.left=value+'%';
  children[7].style.left=value+'%';children[11].style.left=value+'%';
  children[11].childNodes[1].innerHTML=this.value;" />

  <input type="range" tabindex="0" value="60" max="100" min="0" step="1" oninput="
  this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
  var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
  var children = this.parentNode.childNodes[1].childNodes;
  children[3].style.width=(100-value)+'%';
  children[5].style.right=(100-value)+'%';
  children[9].style.left=value+'%';children[13].style.left=value+'%';
  children[13].childNodes[1].innerHTML=this.value;" />
</div>
<div class="detail-price">
    <div class="detain-btn">
    <a href="">
                            <button type="button" class="btn btn-primary ofer-btn">Filter</button>
                        </a>
    </div>
    <div class="this-price">
        <p>Price: £20 — £75</p>
    </div>
</div>
                        <!-- <div class="filter_Dv variation-attr">

                            <div class="filter_all">

                                <div class="range_slider">
                                    <div class="wrapper">

                                        <div class="">
                                            <div class="slider-track"></div>
                                            <input type="range" min="0" max="100" value="28" id="slider-1" oninput="slideOne()">
                                            <input type="range" min="0" max="100" value="75" id="slider-2" oninput="slideTwo()">
                                        </div>
                                    </div>
                                    <div class="values">
                                        <span id="range1">
                                            £0
                                        </span>
                                        <span> &dash; </span>
                                        <span id="range2">
                                            £100
                                        </span>
                                    </div>
                                </div>
                                <!-- <div class="range-pricing">
                                    <p class="green_para">Price: € 200</p>
                                </div> -->
                    </div>
                </div> 


            </div>

    <div class="col-lg-8">

        <div class="row">
            <div class="col-lg-4">
                <div class="product-sec">
                    <div class="product-img"><a href="cart.php">
                            <img class="img-fluid" src="img/product1.jpg" alt="">
                        </a>
                    </div>
                    <div>

                        <p class="product_name">Christian Settipani, Les Ancêtres de Charlemagne 2e édition
                            revue et corrigée</p>
                    </div>

                    <div class="products-par">
                        <p class="green_para2">
                            £35.00
                        </p>

                    </div>
                    <div class="addtocartbtn ">
                        <a href="cart.php" class="btn"> Add
                            to
                            Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-sec">
                    <div class="product-img"><a href="cart.php">
                            <img class="img-fluid" src="img/product2.jpg" alt="">
                        </a>
                    </div>
                    <div>
                        <p class="product_name">Comtes, Vicomtes et noblesse au Nord de l’Aquitaine aux Xe –
                            XIesiécles: Etudes prosopographiques, historiques et constitutionnelles sure le
                            Poitou, l’Aunis et la Saintonge</p>
                    </div>

                    <div class="products-par">
                        <p class="green_para2">
                            £30.00
                        </p>

                    </div>
                    <div class="addtocartbtn ">
                        <a href="cart.php" class="btn"> Add
                            to
                            Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-sec">
                    <div class="product-img"><a href="cart.php">
                            <img class="img-fluid" src="img/product3.jpg" alt="">
                        </a>
                    </div>
                    <div>

                        <p class="product_name">Continuité gentilice et continuité familiale dans les familles
                            sénatoriales romaines:mythe et réalité</p>
                    </div>

                    <div class="products-par">
                        <p class="green_para2">
                            £50.00
                        </p>

                    </div>
                    <div class="addtocartbtn ">
                        <a href="cart.php" class="btn"> Add
                            to
                            Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-sec">
                    <div class="product-img"><a href="cart.php">
                            <img class="img-fluid" src="img/product4.jpg" alt="">
                        </a>
                    </div>
                    <div>

                        <p class="product_name">Criticism and Critique: Sidelights on the Konradiner</p>
                    </div>

                    <div class="products-par">
                        <p class="green_para2">
                            £24.00
                        </p>

                    </div>
                    <div class="addtocartbtn ">
                        <a href="cart.php" class="btn"> Add
                            to
                            Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-sec">
                    <div class="product-img"><a href="cart.php">
                            <img class="img-fluid" src="img/product5.jpg" alt="">
                        </a>
                    </div>
                    <div>

                        <p class="product_name">Die gens Ausoniana an der Macht. Untersuchungen zu Decimius
                            Magnus Ausonius und seiner Familie</p>
                    </div>

                    <div class="products-par">
                        <p class="green_para2">
                            £24.00
                        </p>

                    </div>
                    <div class="addtocartbtn ">
                        <a href="cart.php" class="btn"> Add
                            to
                            Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-sec">
                    <div class="product-img"><a href="cart.php">
                            <img class="img-fluid" src="img/product6.jpg" alt="">
                        </a>
                    </div>
                    <div>

                        <p class="product_name">English Catholic Nuns in Exile 1600 – 1800 – A Biographical
                            Register</p>
                    </div>

                    <div class="products-par">
                        <p class="green_para2">
                            £75.00
                        </p>

                    </div>
                    <div class="addtocartbtn ">
                        <a href="cart.php" class="btn"> Add
                            to
                            Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-sec">
                    <div class="product-img"><a href="cart.php">
                            <img class="img-fluid" src="img/product7.jpg" alt="">
                        </a>
                    </div>
                    <div>

                        <p class="product_name">Kings, Chronologies and Genealogies: Studies in the Political
                            History of Early Medieval Ireland and Wales</p>
                    </div>

                    <div class="products-par">
                        <p class="green_para2">
                            £30.00
                        </p>

                    </div>
                    <div class="addtocartbtn ">
                        <a href="cart.php" class="btn"> Add
                            to
                            Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-sec">
                    <div class="product-img"><a href="cart.php">
                            <img class="img-fluid" src="img/product8.jpg" alt="">
                        </a>
                    </div>
                    <div>

                        <p class="product_name">La Noblesse du Midi carolingien: Etudes sur quelques grandes
                            familles d’Aquitaine et de Languedoc du IX au XI siècle (Toulousain, Perigord,
                            Limousin, Poitou, Auvergne)</p>
                    </div>

                    <div class="products-par">
                        <p class="green_para2">
                            £50.00
                        </p>

                    </div>
                    <div class="addtocartbtn ">
                        <a href="cart.php" class="btn"> Add
                            to
                            Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-sec">
                    <div class="product-img"><a href="cart.php">
                            <img class="img-fluid" src="img/product9.jpg" alt="">
                        </a>
                    </div>
                    <div>

                        <p class="product_name">Naming Patterns in the Latin Kingdom of Jerusalem</p>
                    </div>

                    <div class="products-par">
                        <p class="green_para2">
                            £24.00

                        </p>

                    </div>
                    <div class="addtocartbtn ">
                        <a href="cart.php" class="btn"> Add
                            to
                            Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-sec">
                    <div class="product-img"><a href="cart.php">
                            <img class="img-fluid" src="img/shop-10.jpg" alt="">
                        </a>
                    </div>
                    <div>

                        <p class="product_name">Onomastique et Parenté dans l’Occident médiéval</p>
                    </div>

                    <div class="products-par">
                        <p class="green_para2">
                            £30.00
                        </p>

                    </div>
                    <div class="addtocartbtn ">
                        <a href="cart.php" class="btn"> Add
                            to
                            Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-sec">
                    <div class="product-img"><a href="cart.php">
                            <img class="img-fluid" src="img/shop-11.jpg" alt="">
                        </a>
                    </div>
                    <div>

                        <p class="product_name">Ou sont les femmes? Prosopographie des femmes des familles princières et ducales en Italie méridionale 774-1100</p>
                    </div>

                    <div class="products-par">
                        <p class="green_para2">
                            £65.00
                        </p>

                    </div>
                    <div class="addtocartbtn ">
                        <a href="cart.php" class="btn"> Add
                            to
                            Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-sec">
                    <div class="product-img"><a href="cart.php">
                            <img class="img-fluid" src="img/shop-12.jpg" alt="">
                        </a>
                    </div>
                    <div>

                        <p class="product_name">Prosopography Approaches and Applications. A Handbook.</p>
                    </div>

                    <div class="products-par">
                        <p class="green_para2">
                            £65.00
                        </p>

                    </div>
                    <div class="addtocartbtn ">
                        <a href="cart.php" class="btn"> Add
                            to
                            Cart</a>
                    </div>
                </div>
            </div>
        </div>

        <ul class="paginations">
            <li class="active">01</li>
            <li>02</li>
            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
        </ul>

    </div>
    </div>
    </div>
</section>
<!-- Shop Sec End Here -->
<!-- Header Footer Here -->
<?php include 'inc/footer.php' ?>
<!-- Header End here -->