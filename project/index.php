<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> E-Commerce Website Design </title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- bootstrap cdn link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- bx slider cdn link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <!-- Icon -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <!-- icon -->
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-store"></i></i>Shopify </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#features">features</a>
            <a href="#products">products</a>
            <a href="#categories">categories</a>
            <a href="#review">review</a>
            <a href="#blogs">blogs</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <a href="cart.php" ><div class="fas fa-shopping-cart" id="cart-btn"></div></a>
            <div class="fas fa-user" id="login-btn"></div>
        </div>

        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="shopping-cart">
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="image/cart-img-1.png" alt="">
                <div class="content">
                    <h3>watermelon</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="image/cart-img-2.png" alt="">
                <div class="content">
                    <h3>onion</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="image/cart-img-3.png" alt="">
                <div class="content">
                    <h3>chicken</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="total"> total : $19.69/- </div>
            <a href="#" class="btn">checkout</a>
        </div>

        <form action="" class="login-form">
            <h3>login now</h3>
            <input type="email" placeholder="your email" class="box">
            <input type="password" placeholder="your password" class="box">
            <p>forget your password <a href="#">click here</a></p>
            <p>don't have an account <a href="#">create now</a></p>
            <input type="submit" value="login now" class="btn">
        </form>

    </header>

    <!-- header section ends -->

    <!-- slider section starts -->

    <section class="slider">
        <div class="one">

        </div>

        <div class="one okk">

        </div>



    </section>



    <!-- slider section ends -->




    <!-- features section starts  -->

    <section class="features" id="features">

        <h1 class="heading"> our <span>features</span> </h1>

        <div class="box-card">

            <div class="box">
                <img src="images/193-1936884_ecommerce-websites-ecommerce-icon-hd-png-download-removebg-preview.png"
                    alt="">
                <h3>24/7 Support</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="box">
                <img src="images/feature-img-2.png" alt="">
                <h3>free delivery</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="box">
                <img src="images/feature-img-3.png" alt="">
                <h3>easy payments</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
                <a href="#" class="btn">read more</a>
            </div>

        </div>

    </section>

    <!-- features section ends -->

    

    <!-- colorfull section starts  -->
    <section class="color-section">
        <div class="main-part bg-dark">
            <div>
                <h3 class="text-white">
                    Enjoy With Headphone
                </h3>
                <center><button class="prdduct-btn large-btn text-white bg-red fs-montserrat">
                        Browse
                    </button></center>
            </div>
            <div class="product-img1">
                <img src="/images/h.png" alt="" />
            </div>
        </div>

        <div class="main-part second ">
            <div>
                <h3 class="text-white">
                    New Smart Watch
                </h3>
                <center><button class="prdduct-btn large-btn text-white bg-red fs-montserrat">
                        Browse
                    </button></center>
            </div>
            <div class="product-img2">
                <img src="/images/w.png" alt="" />
            </div>
        </div>
        <div class="main-part third  ">
            <div>
                <h3 class="text-white">
                    Trend Devices 
                <center><button class="prdduct-btn large-btn text-bg-dark bg-red fs-montserrat">
                        Browse
                    </button></center>
            </div>
            <div class="product-img2">
                <img src="/images/Laptop.png" alt="" />
            </div>
        </div>



    </section>


    <!-- colorfull section ends  -->






    <!-- product category section starts  -->
    <section class="categories" id="categories">

        <h1 class="heading"> product <span>categories</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/cat-1.png" alt="">
                <h3>vegitables</h3>
                <p>upto 45% off</p>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="box">
                <img src="images/cat-2.png" alt="">
                <h3>fresh fruits</h3>
                <p>upto 45% off</p>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="box">
                <img src="images/cat-3.png" alt="">
                <h3>dairy products</h3>
                <p>upto 45% off</p>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="box">
                <img src="images/cat-4.png" alt="">
                <h3>fresh meat</h3>
                <p>upto 45% off</p>
                <a href="#" class="btn">shop now</a>
            </div>

        </div>

    </section>

    <!-- product category section ends  -->

    <!-- banner section starts  -->

<section class="banner">
    <div class="banner-width">
        <div class="item d-flex">
            <div class="text">
                <p class="text-danger">Fresh Fruits</p>
                <h2>Healthy Food</h2>
                <p>Get 20% Off Selected Product</p>
                <a href="" class="order-now">Order Now</a>
            </div>
            <img src="images/f3.png" alt="">
        </div>
        <div class="item extra d-flex ">
            <div class="text">
                <p class="text-danger">Fresh Fruits</p>
                <h2>Fresh Vegetables</h2>
                <p>Get 20% Off Selected Product</p>
                <a href="" class="order-now">Order Now</a>
            </div>
            <img src="images/product27.png" alt="">
        </div>
    </div>


</section>



<!-- banner section ends  -->

<?php

$con=mysqli_connect("localhost","root","","shop");
$query="select * from product";
$data=mysqli_query($con,$query);




?>



    <!-- product section starts -->

    <div class="part_size">
        <h1 class="heading"> Related <span>Products</span> </h1>
        <?php 
        
        while($result= mysqli_fetch_assoc($data)){

        
        
        
        
        ?>
        <div class="card" style="width:23%;">
            <img src="./admin/pic/<?php echo $result["p_img"];?>" class="card-img-top" alt="...">
            <div class="card-body">
               <a href="shop.php?p_id=<?php echo $result["p_id"];?>"><p class="card-text"><b><?php echo $result["p_name"];?></b></p></a> 
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                
                <p class="price"><span style="text-decoration:line-through;">$<?php echo $result["p_price"];?></span>&nbsp </p>
                <button style="border-radius:5px ;color:white; padding: 10px 33px;
          background-color: #FF7800;
          font-size: 13px;">Buy Now</button>
            </div>
        </div>

        <?php } ?>
        <div class="card" style="width:23%;">
            <img src="images/product-image-12-346x310.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><b>Gooseberry</b></p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                
                <p class="price"><span style="text-decoration:line-through;">$20</span>&nbsp $15</p>
                <button style="border-radius:5px ;color:white; padding: 10px 33px;
          background-color: #FF7800;
          font-size: 13px;">Buy Now</button>
            </div>
        </div>
        <div class="card" style="width:23%;">
            <img src="images/product-image-31-346x310.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><b>Texas Rio Red Grapefruit</b></p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                
                <p class="price"><span style="text-decoration:line-through;">$20</span>&nbsp $15</p>
                <button style="border-radius:5px ;color:white; padding: 10px 33px;
                background-color: #FF7800;
                font-size: 13px;">Buy Now</button>
            </div>
        </div>
        <div class="card" style="width:23%;">
            <img src="images/product-image-45-346x310.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><b>Fresh Organic Strawberry</b></p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                
                <p class="price"><span style="text-decoration:line-through;">$20</span>&nbsp $15</p>
                <button style="border-radius:5px ;color:white; padding: 10px 33px;
          background-color: #FF7800;
          font-size: 13px;">Buy Now</button>
            </div>
        </div>
    </div>


    <!-- product section ends  -->






    <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

    <div class="full">

        <div class="container">

            <div class="testimonials-box">

                <!--
              - TESTIMONIALS
            -->

                <div class="testimonial">

                    <h2 class="title">testimonial</h2>

                    <div class="testimonial-card">

                        <img src="images/testimonial-1.jpg" alt="alan doe" class="testimonial-banner" width="80"
                            height="80">

                        <p class="testimonial-name">Alan Doe</p>

                        <p class="testimonial-title">CEO & Founder Invision</p>

                        <img src="images/quotes.svg" alt="quotation" class="quotation-img" width="26">

                        <p class="testimonial-desc">
                            Lorem ipsum dolor sit amet consectetur Lorem ipsum
                            dolor dolor sit amet.
                        </p>

                    </div>

                </div>



                <!--
              - CTA
            -->

                <div class="review">

                    <img src="images/cta-banner.jpg" alt="summer collection" class="cta-banner">

                    <a href="#" class="review-content">

                        <p>25% Discount</p>

                        <h2 class="review-title">Summer collection</h2>

                        <h3>Starting @ $10</h3>

                        <button class="review-btn">Shop now</button>

                    </a>

                </div>



                <!--
              - SERVICE
            -->

                <div class="service">
                    <div class="service-container">

                        <a href="#" class="service-item">

                            <div class="service-icon">
                                <ion-icon name="boat-outline"></ion-icon>
                            </div>

                            <div class="service-content">

                                <h3 class="service-title">Worldwide Delivery</h3>
                                <p class="service-desc">For Order Over $100</p>

                            </div>

                        </a>

                        <a href="#" class="service-item">

                            <div class="service-icon">
                                <ion-icon name="rocket-outline"></ion-icon>
                            </div>

                            <div class="service-content">

                                <h3 class="service-title">Next Day delivery</h3>
                                <p class="service-desc">UK Orders Only</p>

                            </div>

                        </a>

                        <a href="#" class="service-item">

                            <div class="service-icon">
                                <ion-icon name="call-outline"></ion-icon>
                            </div>

                            <div class="service-content">

                                <h3 class="service-title">Best Online Support</h3>
                                <p class="service-desc">Hours: 8AM - 11PM</p>

                            </div>

                        </a>

                        <a href="#" class="service-item">

                            <div class="service-icon">
                                <ion-icon name="arrow-undo-outline"></ion-icon>
                            </div>

                            <div class="service-content">

                                <h3 class="service-title">Return Policy</h3>
                                <p class="service-desc">Easy & Free Return</p>

                            </div>

                        </a>

                        <a href="#" class="service-item">

                            <div class="service-icon">
                                <ion-icon name="ticket-outline"></ion-icon>
                            </div>

                            <div class="service-content">

                                <h3 class="service-title">30% money back</h3>
                                <p class="service-desc">For Order Over $100</p>

                            </div>

                        </a>

                    </div>
                </div>

            </div>

        </div>

    </div>

    <!--
              - SERVICE ENDS
            -->


    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"> our <span>blogs</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/blog-1.jpg" alt="">
                <div class="content">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by user </a>
                        <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                    </div>
                    <h3>fresh and organic vegitables and fruits</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <img src="images/blog-2.jpg" alt="">
                <div class="content">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by user </a>
                        <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                    </div>
                    <h3>fresh and organic vegitables and fruits</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <img src="images/blog-3.jpg" alt="">
                <div class="content">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by user </a>
                        <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                    </div>
                    <h3>fresh and organic vegitables and fruits</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

    </section>

    <!-- blogs section ends -->

    <!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> Shopify <i class="fas fa-store"></i> </h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, saepe.</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i>arafatnahid20@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i>Kaliakoir, Gazipur </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> products </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> review </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <input type="email" placeholder="your email" class="email">
            <input type="submit" value="subscribe" class="btn">
            <img src="images/payment.png" class="payment-img" alt="">
        </div>

    </div>

    <div class="credit"> created by <span> Arafat Nahid </span> | all rights reserved </div>

</section>

<!-- footer section ends -->
    




    <!-- script section starts  -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.slider').bxSlider({
                auto: true,
            });
        });
    </script>
    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <!-- bootstrap script section starts  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>



</body>