<?php include 'inc/app.php'; ?>
<link rel="stylesheet" href="css/blog-detail.css">

<!--  Heading pricing Start Here -->
<section class="other-pages-banner">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <img src="img/hero-blog.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block banner_heading">
                    <h1 class="wow animate__animated animate__fadeInUp animate__slow 2s">Blog</h1>
                    <p><a href=""><i class="fa fa-home"></i><span>Home</span></a>
                        <span><i class="fa fa-angle-right"></i></span><span><a href="">
                                Blog
                            </a></span>
                    </p>
                </div>
                <div class="for-the-text">
                </div>
            </div>
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button> -->
    </div>
</section>
<section class="blog-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-detail-text">
                    <h2>Lorem Ipsum3</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    <p class="parablogs">Your email address will not be published. Required fields are marked *</p>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="forminput">
                    <form action="">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Comment * </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name * </label>
                            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email * </label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Website </label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Save my name, email, and website in this browser for the next time I comment.
                                </label>
                            </div>
                        </div>
                        <button class="btn1" type="submit" class="btn btn-primary">post comment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'inc/footer.php'; ?>