<?php
session_start();
if(!$_SESSION['ticket']){
    header('location:homepage.php');
}
$userid = $_SESSION['userid'];
include('database.php');
$query = "select * from user where id='$userid'";
$result = $conn->query($query);
$datauser = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    <?php include('navbar.php') ?>
    <style>
      /* home */
     .home .home-banner-1,
     .home .home-banner-2{
  background-repeat:no-repeat;
  background-size:cover;
  background-position:90% center;
  min-height:650px;
  position:relative;
}
.home .home-banner-1{
  background-image :url("image/slide1.jpg");
  background-position:65% center;
  min-height:550px;
}
.home .home-banner-2{
  background-image :url("image/slide2.jpg");
  background-position:65% center;
  min-height:550px;
}
.home .home-banner .home-banner-text{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-80%, -50%);

}
.home .home-banner .home-banner-text h1{
  font-size:6rem;
}
.home .carousel-indicators [data-bs-target]{
  background-color:red;
  width:2.5rem;
  height:0.313rem;
}
.home .carousel-control-prev-icon,
.home .carousel-control-next-icon{
   background:transparent;

}
.home .slider-icon{
  font-size:3rem;
  font-weight:600;
  color:var(--text-danger);
}

      /* offer */
.offers{
  padding-top:8.75rem;
}
.offers .offer-box .offer-image::before{
  position:absolute;
  content:'';
  top:0;
  left:-100%;
  z-index:2;
  display:block;
  width:50%;
  height:100%;
  background:-webkit-linear-gradient(to right,black 0%, white 100% );
  background:linear-gradient(to right,black 0%, white 100% );
  transform:skewX(-25deg);
}
.offers .offer-box .offer-image img{
  transform:scale(1.02);
  width:100%;
  height:100%;
  object-fit:cover;
}
.offers .offer-box:hover .offer-image::before{
  animation:effect_shine 1s;
}
@keyframe effect_shine{
  100%{
    left:150%;
 }
}
.offers .offer-overlay::before{
  content:'';
  position:absolute;
  top:0;
  left:0;
  right:0;
  bottom:0;
  width:100%;
  height:100%;
  background:rgba(0,0,0,0.4);
  z-index:1;
}
.offers .offer-box .offer-info{
  position:absolute;
  left:0;
  top:0;
  width:100%;
  height:100%;
  display:flex;
  flex-direction:column;
  z-index:1;
  transition:all 250ms ease-out;
  justify-content:center;
  align-items:center;
}
.offers .offer-box .offer-info .heading-bigger{
  font-size:4.375rem;
  line-height:1;
  text-transform:uppercase;
  font-weight:400;
  margin-bottom:0;
  color:white;

}
.offers .offer-box .offer-title-1{
  color:white;
  font-size:1.125rem;
  font-weight:300;
  margin-bottom:0;
  letter-spacing:2px;
}
.offers .offer.box .offer-info .btn-outline-danger{
  color:white;
  border-color: white;
  transition: all 0.3s ease-in-out;
}
.products{
  padding-top:8.75rem;
}
.headline h2::before{
  content:'';
  width:30%;
  height:0.125rem;
  background-color:var(--bg-danger);
  position:absolute;
  bottom:0;
  left:50%;
  transform:translate(-50%,-50%);
  border-radius:0.625rem;
}
.products a{
  text-decoration:none;
  color:black;
}
.product-list .product-image img{
  transition:all 500ms ease-in-out;
}
.product-list .product-image .product-image-secondary{
  opacity:0;
  position:absolute;
  left:0;
  right:0;
  top:0;
  bottom:0;
}
.product-list .product-image:hover .product-image-secondary{
  opacity:1;
}
.product-list .product-image .sale{
  background:red;
  border-radius:0.313rem;
  color:white;
  font-size:0.813rem;
  letter-spacing:0.125rem;
  padding:0.125rem 0.813rem;
  line-height:1.563rem;
  text-transform:uppercase;
  position:absolute;
  left:1rem;
  top:1.188rem;
  z-index:99;
}
.product-list .product-name h3{
  font-size:1.125rem;
  color:black;
  transition:all 0.3s ease 0s;
}
.product-list .product-name h3:hover{
  color:blue;

}
.product-list .product-name .amount{
  color:red;
  font-weight:500;
}
.product-list .product-name del{
  color:grey;
}
.product-list .product-name .ti-star{
  color:grey;
}
.product-list .product-name .ti-star.add_to_card{
  background:transparent;
  border:none;
  font-size:1.2rem;
  font-weight:500;
  transition:all 0.3s ease 0s;
}
.products .up_to_off{
  position:relative;
}
.products .up_to_off::before{
content:'';
position:absolute;
top:0;
left:0;
right:0;
bottom:0;
width:100%;
height:100%;
background:;
transition:0.5s;
}
.products .up_to_off img{
  transition:0.5s;
}
.products .up_to_off:hover img{
  transform:scale(1.1);
}
.products .up_to_content h2{
  color:white;
  font-size:1.625rem;
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%, -50%);
  z-index:3;
}
/*Special*/
.special{
  padding:4rem 0;
  background:lightgrey;
}
.special .countdown-container{
  padding-top:1rem;
  padding-bottom:5rem;
}
.special .countdown-container p{
  color:darkgray;
  font-weight:300;
  line-height:1.875rem;
}
.special .countdown-container .countdown-counter{
  display:block;
  width:100%;
  margin:0;
  margin-bottom:1.875rem;

}
.special .countdown-container .countdown-counter li{
  display:inline-block;
  font-size:0.875rem;
  font-weight:bold;
  text-align:center;
  background:white;
  border-radius: 0.313rem;
  padding:1.5rem 1rem;
  width:15%;
  margin:0 0.313rem;
}
.special .countdown-container .countdown-counter li span{
  font-weight:500;

}
.special .countdown-container .countdown-price del{
   color:gray;
   font-size:1rem;
}
.special .special-img span{
  background:red;
  border-radius:0.313rem;
  color:white;
  font-size:0.813rem;
  letter-spacing:0.125rem;
  line-height:1.863rem;
  padding:0.125rem 0.813rem;
  text-transform:uppercase;
  position:absolute;
  left:1rem;
  top:1.188rem;
  z-index:99;
}
/*Testimonial*/

.testimonial{
  padding:5rem 0 8rem;
}
.testimonial .testimonial-wrapper{
  box-shadow: 0 0 0.563rem 0 rgb(0 0 0 / 5%);
  background:white;
  margin:auto;
  padding:1rem 5rem;
  border:0.063rem solid light-white;
  border-radius:0.625rem;
}
.testimonial .testimonial-wrapper img{
  border-radius:100%;
  width:5rem;
  height:5rem;
  margin:1.25rem;
  object-fit:cover;
  background-color:bg-white;
  border:0.063rem solid bg-white;

}
.testimonial .testimonial-wrapper span{
  color:gray;
  font-size:1rem;
  text-transform:uppercase;
  margin:1rem 0;
  display:block;
}
.testimonial .testimonial-wrapper p{
color:gray;
font-size:0.875rem;
font-weight:300;
}
.testimonial .carousel-indicators [data-bs-target]{
  background-color:red;
  width:2.5rem;
  height:0.313rem;
}
.testimonial .carousel-control-next-icon,
.testimonial .carousel-control-prev-icon{
  background:transparent;
}
.testimonial .carousel-indicators{
  bottom:-3rem;

}
.testimonial .slider-icon{
  font-size:3rem;
  font-weight:600;
  color:red;
}

.testimonial .carousel-control-prev{
  left:-1.75rem;
}
.testimonial .carousel-control-next{
  right:-1.75rem;
}
/*contact*/
.contact{
  padding:4rem 0;
  background-color:lightgrey;
}
.contact .info li p a{
  font-size: 1rem;
  display:inline-block;
  margin:0.75rem 0;
  color:black;
}
.contact .form-group{
  margin-bottom:1.5rem;
}
.contact .form-control{
  height:3.75rem;
  padding:0.375rem 2.875rem;
  border:none;
  font-size:1rem;
  box-shadow:0 0.1875rem 1,25rem 0 rgb(0 0 0 / 12%);
}
.contact .textarea{
  width:100%;
  border-radius:0.25rem;
  padding:0.75rem 1.1875rem;
  border:none;
  font-size:1rem;
  margin-top:0.3125rem;
  box-shadow:0 0.1875rem 1,25rem 0 rgb(0 0 0 / 12%);
}
.contact .textarea:focus{
  outline:none;
  border:none;
}
/* footer*/
.copyright{
  background:red;
}
.copyright p, 
.copyright a{
  color:white;
}
/* Scroll back to top */
#scrollUp{
  position:fixed;
  right:2%;
  bottom:3%;
  height:2.823rem;
  width:2.5rem;
  border-radius:0.25rem;
  text-align:center;
  cursor:pointer;
  z-index:500;
  display:none;
  -webkit-transition:all 0.4s ease-in-out 0s;
  transition:all 0.4s ease-in-out 0s;
  background:re;
}
#scrollUp span{
  line-height:2.625rem;
}
#scrollUp.scrollActive{
  display:block;
}
      </style>
   
    <!-- home:section -->
    <section id="home" class="home pt-5 overflow-hidden">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#" data-bs-slide-to="0" class="active"
    aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#" data-bs-slide-to="1" aria-label="Slide 2"></button>
</div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="home-banner home-banner-1">
        <div class="home-banner-text">
         <h1>Women</h1>
          <h2>52% Discount For This Season</h2>
          <a href="product.php" class="btn btn-danger text-uppercase mt-4">Our Products</a>
       </div>
      </div>
    </div>
      <div class="carousel-item">
        <div class="home-banner home-banner-2">
         <div class="home-banner-text">
           <h1>Pluto-Shop</h1>
           <h2>With working Card & e-sewa</h2>
           <a role="submit-" href="additem.php" class="btn btn-danger text-uppercase mt-4">Add Products</a>  
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true">
            <span class="ti-angle-left slider-icon"></span>
          </span>
            <span class="visually-hidden">Previous</span>
   </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true">
           <span class="ti-angle-right slider-icon"></span>

           </span>
            <span class="visually-hidden">Next</span>
           </button>
  </div>

<!-- Offer section -->
<div class="offers">
  <div class="container">
    <div class="row">
      <!--offer box1-->
      <div class="col-sm-6 col-lg-4 mb-lg-0 mb-4">
        <a href="#">
          <div class="offer-box text-center position-relative">
            <div class="offer-inner">
              <div class="offer-image position-relative overflow-hidden">
                <img src="image/category-1.jpg" alt="Offers" class="img-fluid">
                <div class="offer-overlay"></div>
              </div>
              <div class="offer-info">
                <div class="offer-info-inner">
                  <p class="heading-bigger text-capitalize">Sale 50%</p>
                  <p class="offer-title-1 text-uppercase font-weight-bold">Don't miss This Chance</p>
                  <button type="button" class="btn btn-outline-danger text-uppercase mt-4">Shop Now</button>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <!--offer box2-->
      <div class="col-sm-6 col-lg-4 mb-lg-0 mb-4 d-flex flex-column justify-content-between">
        <a href="#">
          <div class="offer-box text-center position-relative mb-4 mb-sm-0 mb-lg-0">
            <div class="offer-inner">
              <div class="offer-image position-relative overflow-hidden">
                <img src="image/offer2.jpg" alt="Offers" class="img-fluid">
                <div class="offer-overlay"></div>
              </div>
              <div class="offer-info">
                <div class="offer-info-inner">
                  <p class="heading-bigger text-capitalize">Sale 30%</p>
                  <p class="offer-title-1 text-uppercase font-weight-bold">Don't miss This Chance</p>
                  <button type="button" class="btn btn-outline-danger text-uppercase mt-4">Shop Now</button>
                </div>
              </div>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="offer-box text-center position-relative mb-4 mb-sm-0 mb-lg-0">
            <div class="offer-inner">
              <div class="offer-image position-relative overflow-hidden">
                <img src="image/category-2.jpg" alt="Offers" class="img-fluid">
                <div class="offer-overlay"></div>
              </div>
              <div class="offer-info">
                <div class="offer-info-inner">
                  <p class="heading-bigger text-capitalize">Sale 30%</p>
                  <p class="offer-title-1 text-uppercase font-weight-bold">Don't miss This Chance</p>
                  <button type="button" class="btn btn-outline-danger text-uppercase mt-4">Shop Now</button>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <!--offer box3-->
      <div class="col-sm-6 col-lg-4 mb-lg-0 mb-4">
        <a href="#">
          <div class="offer-box text-center position-relative">
            <div class="offer-inner">
              <div class="offer-image position-relative overflow-hidden">
                <img src="image/category-3.jpg" alt="Offers" class="img-fluid">
                <div class="offer-overlay"></div>
              </div>
              <div class="offer-info">
                <div class="offer-info-inner">
                  <p class="heading-bigger text-capitalize">Sale 25%</p>
                  <p class="offer-title-1 text-uppercase font-weight-bold">Don't miss This Chance</p>
                  <button type="button" class="btn btn-outline-danger text-uppercase mt-4">Shop Now</button>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
 </div>

<!--Products section-->
<section id="product" class="products">
 <div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="headline text-center mb-5">
        <h1 class="pb-3 position-relative d-inline-block">FEATURED PRODUCTS</h1> 

      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 col-lg-4">
      <a href="#" class="d-block text-center mb-4">
        <div class="product-list">
          <div class="product-image position-relative">
            <span class="sale">Sale</span>
            <img src="image/p1.jpg" alt="products" class="img-fluid product-image-first">
            <img src="image/p3.jpg" alt="products" class="img-fluid product-image-secondary">
           </div>
              <div class="product-name pt-3">
                <h3 class="text-capitalize">Winter Long Sleeve Black White</h3>
                <p>$400.00 <del>$580.00</del></p>
                <div class="py-1">
                  <span class="ti-star"></span>
                  
                </div>
                <button type="button" class="add_to_Card">ADD TO CARD</button>
              </div>
          </div>
      </a>
    </div>
    <div class="col-sm-6 col-lg-4">
      <a href="#" class="d-block text-center mb-4">
        <div class="product-list">
          <div class="product-image position-relative">
            <img src="image/p2.jpg" alt="products" class="img-fluid product-image-first">
            <img src="image/p4.jpg" alt="products" class="img-fluid product-image-secondary">
           </div>
              <div class="product-name pt-3">
                <h3 class="text-capitalize">Women totes lady handbag</h3>
                <p class="mb-0 amount">$300.00 </p>
                <div class="py-1">
                  <span class="ti-star active"></span>
                  <span class="ti-star active"></span>
                  <span class="ti-star active"></span>
                  <span class="ti-star"></span>
                  <span class="ti-star"></span>
                </div>
                <button type="button" class="add_to_Card">ADD TO CARD</button>
              </div>
          </div>
      </a>
    </div>
    <div class="col-sm-6 col-lg-4">
      <a href="#" class="d-block text-center mb-4">
        <div class="product-list">
          <div class="product-image position-relative">
            <img src="image/p5.jpg" alt="products" class="img-fluid product-image-first">
            <img src="image/p7.jpg" alt="products" class="img-fluid product-image-secondary">
           </div>
              <div class="product-name pt-3">
                <h3 class="text-capitalize">Lace Water Soluble Sexy</h3>
                <p class="mb-0 amount">$300.00 </p>
                <div class="py-1">
                  <span class="ti-star active"></span>
                  <span class="ti-star active"></span>
                  <span class="ti-star active"></span>
                  <span class="ti-star"></span>
                  <span class="ti-star"></span>
                </div>
                <button type="button" class="add_to_Card">ADD TO CARD</button>
              </div>
          </div>
      </a>
    </div>
    <div class="col-sm-6 col-lg-4">
      <a href="#" class="d-block text-center mb-4">
        <div class="product-list">
          <div class="product-image position-relative">
            <img src="image/p2.jpg" alt="products" class="img-fluid product-image-first">
            <img src="image/p4.jpg" alt="products" class="img-fluid product-image-secondary">
           </div>
              <div class="product-name pt-3">
                <h3 class="text-capitalize">Women totes lady handbag</h3>
                <p class="mb-0 amount">$300.00 </p>
                <div class="py-1">
                  <span class="ti-star active"></span>
                  <span class="ti-star active"></span>
                  <span class="ti-star active"></span>
                  <span class="ti-star"></span>
                  <span class="ti-star"></span>
                </div>
                <button type="button" class="add_to_Card">ADD TO CARD</button>
              </div>
          </div>
      </a>
    </div>
    <div class="col-sm-6 col-lg-4">
      <a href="#" class="d-block text-center mb-4">
        <div class="product-list">
          <div class="product-image position-relative">
            <img src="image/p6.jpg" alt="products" class="img-fluid product-image-first">
            <img src="image/p8.jpg" alt="products" class="img-fluid product-image-secondary">
           </div>
              <div class="product-name pt-3">
                <h3 class="text-capitalize">Elegant Formal Party Dress</h3>
                <p class="mb-0 amount">$350.00 </p>
                <div class="py-1">
                  <span class="ti-star active"></span>
                  <span class="ti-star active"></span>
                  <span class="ti-star active"></span>
                  <span class="ti-star"></span>
                  <span class="ti-star"></span>
                </div>
                <button type="button" class="add_to_Card">ADD TO CARD</button>
              </div>
          </div>
      </a>
    </div>
    <div class="col-sm-6 col-lg-4">
      <a href="#" class="d-block text-center mb-4">
        <div class="product-list">
          <div class="product-image position-relative">
            <img src="image/p9.jpg" alt="products" class="img-fluid product-image-first">
            <img src="image/p1.jpg" alt="products" class="img-fluid product-image-secondary">
           </div>
              <div class="product-name pt-3">
                <h3 class="text-capitalize">Mini Dress Ladies Sleeve</h3>
                <p class="mb-0 amount">$380.00 </p>
                <div class="py-1">
                  <span class="ti-star active"></span>
                  <span class="ti-star active"></span>
                  <span class="ti-star active"></span>
                  <span class="ti-star"></span>
                  <span class="ti-star"></span>
                </div>
                <button type="button" class="add_to_Card">ADD TO CARD</button>
              </div>
          </div>
      </a>
    </div>
  </div>

</div>
<!-- Up to 70% oFF-->
<div class="overflow-hidden my-5">
  <div class="row">
    <div class="col-sm-12 up_to_off">
      <img src="image/lg.jpg" alt="offers" class="img-fluid w-100">
      <div class="up_to_content">
        <h2>UP TO 70% SPRINGSALE!</h2>
      </div> 
    </div>
  </div>  
</div>
<section class="special" id="special">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="headline text-center mb-5" >
          <h2 class="pb-3 position-relative d-inline-block">SUMMER SALE</h2>
        </div>
      </div>  
      <div class="col-sm-12 col-lg-7 text-center text-lg-start">
        <div class="countdown-container">
          <h2 class="text-uppercase">Sexy Women Floral Embroidery</h2>
          <p class="my-4">Women from far and near visit online marketplaces to buy and sell goods. 
            The most striking feature in online market is that it is free of large crowd and noise. 
            A person can visit the online shopping site during his free time and place orders to buy an item. !</p>


         <script>
          let daysItem= document.querySelector("days");
          let hoursItem= document.querySelector("hours");
          let minItem= document.querySelector("min");
          let secItem= document.querySelector("sec");

          let countDown = () => {
            let futureDate = new Date("15 July 2022");
            let currentDate = new Date();
            let myDate = futureDate - currentDate;

            let days = Math.floor(myDate / 1000 / 60 / 60 / 24);
            let hours = Math.floor(myDate / 1000 / 60 / 60)% 24;
            let min = Math.floor(myDate / 1000 / 60) % 60;
            let sec = Math.floor(myDate / 1000 ) % 60;

            daysItem.innerHTML = days;
            hoursItem.innerHTML = hours;
            minItem.innerHTML = min;
            secItem.innerHTML = sec;


          }
          countDown();
          setInterval(countDown, 1000);



        </script>
            <ul class="list-unstyled countdown-counter">
              <li><span class="fs-1 d-block" id="days">00</span> Days</li>
              <li><span class="fs-1 d-block" id="hours">00</span> Hr</li>
              <li><span class="fs-1 d-block" id="min">00</span> Min</li>
              <li><span class="fs-1 d-block" id="sec">00</span> Sec</li>
            </ul>
            <span class="countdown-price h3 d-block mb-4">$400.00<del>$600.00</del><span>
              <button type="button" class="btn btn-danger">ADD TO CART</button>
        </div>
      </div>
      <div class="col-sm-12 col-lg-5">
        <div class="special-img position-relative">
          <span class="sale">Sale</span>
          <img src="image/p7.jpg" class="img-fluid">

        </div> 

      </div>
    </div>
  </div>

</section>

<section id="testimonial" class="testimonial">
<div class="container"> 
<div class="row">
  <div class="col-sm-12">
    <div class="headline text-center mb-5">
      <h2 class="pb-3 position-relative d-inline-block"> Testimonials</h2>
    </div>
  </div>
  <div class="col-sm-12 col-lg-8 offset-lg-2 text-center">
  <div id="carouselExampleIndicatorsTwo" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="carouselExampleIndicatorsTwo" data-bs-slide-to="0" class="active"
    aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="carouselExampleIndicatorsTwo" data-bs-slide-to="1" aria-label="Slide 2"></button>
</div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="testimonial-wrapper">
        <div class="row">
          <div class="col-sm-12">
            <img src="image/user.jpg" alt="" class="img-fluid">
          </div>
            <div class="username">
              <h3>Ashish Lamichhane, Founder/CEO</h3>
              <span>pluto.Ltd.</span>
              <p> namste everyone! Find your choices, Thank yOu.</p> 

            </div>
        </div>

      </div>
    </div>
      <div class="carousel-item">
      <div class="testimonial-wrapper">
        <div class="row">
          <div class="col-sm-12">
            <img src="image/user2.png" alt="" class="img-fluid">
          </div>
            <div class="username">
              <h3>Coming Soon, Founder/CEO</h3>
              <span>pluto.Ltd.</span>
              <p> namste everyone! Find your choices, Thank yOu.</p> 

            </div>
        </div>

      </div>
      </div>
    </div>
    <button class="carousel-control-prev button1" type="button" data-bs-target="#carouselExampleIndicatorsTwo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true">
            <span class="ti-angle-left slider-icon"></span>
          </span>
            <span class="visually-hidden">Previous</span>
   </button>
          <button class="carousel-control-next button2" type="button" data-bs-target="#carouselExampleIndicatorsTwo" data-bs-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true">
           <span class="ti-angle-right slider-icon"></span>

           </span>
            <span class="visually-hidden">Next</span>
           </button>
  </div>
  </div>
</div>
</div>

</section>
<!--contact-->
<section id="contact">
  <div class="contact">
      <div class="container">
        <div class="mb-5 text-center">
          <h5>Let's start a conversation!</h5>
          <h2 class="fw-bold">Contact us</h2>
        </div>
          <div class="row">
            <div class="col-lg-5 col-md-5">
              <h4 class="fw-bold">Contact Info</h4>
              <ul class="info list-unstyled">
                <li class="d-flex align-items-center">
                  <span class="pe-3 ti-location-pin fs-5"></span>
                  <p><a href="">imadol, lalitpur</a></p>
                </li>
                <li class="d-flex align-items-center">
                  <span class="pe-3 ti-mobile fs-5"></span>
                  <p><a href="">+977 9867534634</a></p>

                 </li>  
                  <li class="d-flex align-items-center">
                    <span class="pe-3 ti-envelope fs-5"></span>
                    <p><a href="">Info@plutoshop.in</a></p>
                   </li>   
              </ul>       
      </div>
          <div class="col-lg-7 col-md-7 pt-lg-0 pt-md-0 pt-4">
            <form>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your email">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="textarea"  name="message" id="message" cols="30" rows="4" placeholder="Your Messages"></textarea>
                  </div>
                </div>
                 <div class="col-md-12"> 
                  <button class="btn btn-danger"><span class="ti-rocket pe-2 fs-5"></span> Send messages</button>
                </div>
              </div>
            </form>

          </div>
          </div>
      </div>
  </div>
</section>
</div>

</section>
</section>
<!-- Copyright -->
<footer>
  <div class="p-3 copyright">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-lg-6 p-1 p-lg-3 text-center text-lg-start">
          <p class="my-0">Copyright@ 2021 <a href="#">Pluto-shop</a><br>All Rights Reserved</p>
        </div>
          <div class="col-12 col-lg-6 p-1 p-lg-3 text-center text-lg-end">
            <p>Designed by <a href="#" target="_blank">Puto.com</a>.</p> 
             </div>
      </div>
    </div>
  </div>
    </footer>
    </header>
    <!-- Scroll Back to top -->
    <div id="ScrollUp" title="Scroll To Top">
      <a href="#home"><span class="ti-arrow-up fs-4 text-white"></span></a>
           
    </div>
    <script>
              function scrollTopBack(){
                let scrollTopButton = document.querySelector("#scrollUp");
                window.onscroll = function(){
                  var scroll = document.documentElement.scrollTop;
                  if(scroll >= 250){
                    scrollTopButton.classList.add('scrollActive');
                  }else{
                    scrollTopButoon.classLis.remove('scrollActive');
                  }
                }
              }
              scrollTopBack();
            </script>

</body>
</html>