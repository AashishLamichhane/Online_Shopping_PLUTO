<?php
session_start();
if (isset($_SESSION['ticket'])){
  header("location:dashboard.php");
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <title>Homepage</title>
</head>
<body>
    <?php include("navbar.php") ?>
    
<style>    
.himal {
          background-image: url('image/header-bg.jpg');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
          height:50vh;
          width:100%;
          padding:50px;
      
        }
        .nav25{
          background:url("suit1.jpg");

        }
        .nav25{
          background:#E2e6F3;
        }
        </style>
    <div class="himal">
                <div class="text-white text-center">

                  <h1 class="mb-3">Welcom to Pluto's Family</h1>
                  <h5 class="mb-4">You wear Your Choice!</h5>
                  <a
                    class="btn btn-outline-light btn-lg m-2"
                    href="placeorder.php"
                    role="button"
                    rel="nofollow"
                    target="_blank"
                    >TELL ME MORE</a>
                </div>
              </div>
           
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5"> 
      <div class="container">
              <!--Section: Content-->
        
      <section>
          <div class="row nav25">
            <div class="col-md-6 gx-5 mb-4 ">
              <div class="bg-image hover-overlay ripple shadow-2-strong nav24" data-mdb-ripple-color="">
                <img src="image/all.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
            </div>
            

            <div class="col-md-6 gx-5 mb-4 nav25">
              <h4><strong>OFFER</strong></h4>
              <p class="text-muted">
              Fashion is a playground up until a certain age. 
              But then you have to find your own signature and your own style.
              <p><strong>NEW ATTIRE</strong></p>
              <p class="text-muted">
              Baby love colors and clothing is nothing without colors.
              </p>
            </div>
          </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5" />

        <!--Section: Content-->
        <section class="text-center">
          <h4 class="mb-5"><strong>Trending photos</strong></h4>

          <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img
                    src="image/baby.jpg"
                    class="img-fluid"
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Baby Shop</h5>
                  <p class="card-text">
                    You can find all the items of baby's garments.<p>
                    Give your child a smile with amazing attire.</p>
                  </p>
                  <a href="baby_item.php" class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img
                    src="image/suit1.jpg"
                    class="img-fluid"
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Gents Item</h5>
                  <p class="card-text">
                  Designers present you with fashion four times a year.
                  And it's up to you to decide on a style.
                  </p>
                  <a href="gents_item.php" class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img
                    src="image/bunu.jpg"
                    class="img-fluid"
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Ladies Items</h5>
                  <p class="card-text">
                    
                 Don't dress to kill. Dress to survive.

                  </p>
                  <a href="ladies_item.php" class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5" />

       

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        ?? 2022 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">Pluto's.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>



</body>
</html>