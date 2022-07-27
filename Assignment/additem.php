<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <title>Add Product</title>
</head>
<body>
    
<header>
    <style>
      #intro {
        background-image: url(https://mdbootstrap.com/img/new/fluid/city/008.jpg);
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link" target="_blank" href="https://mdbootstrap.com/docs/standard/">
          <strong>Pluto</strong>
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="homepage.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php" rel="nofollow"
                target="_blank">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact_us.php" target="_blank">Contact us</a>
            </li>
          </ul>
          <form method="post" action="action.php" enctype="multipart/form-data">


          <ul class="navbar-nav d-flex flex-row">
            
            <!-- Icons -->
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow"
                target="_blank">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://github.com/mdbootstrap/mdb-ui-kit" rel="nofollow" target="_blank">
                <i class="fab fa-github"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
    <form method="post" action="action.php" enctype="multipart/form-data">

    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">
              <form class="bg-white  rounded-5 shadow-5-strong p-5">
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" name="addname" placeholder="Product's Name"  class="form-control" required/>
                  <label class="form-label" for="form1Example1"></label>
                </div>
                <div class="form-outline mb-4">
                  <input type="price" name="addprice" placeholder="Determin Price"  class="form-control" required />
                  <label class="form-label" for="form1Example1"></label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" name="addtype" placeholder="Determine the type of product" class="form-control" />
                  <label class="form-label" for="form1Example1"></label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" name="adddetails" placeholder="Details about the product" class="form-control" />
                  <label class="form-label" for="form1Example1"></label>
                </div>
                <label class="form-label" for="customFile"></label>
                <input type="file" class="form-control" id="formFileLG" name="addimage" />
                <br>

                
                
                <!-- Submit button -->
                
    <div class="py-4 text-center">
    <button type="submit" class="btn btn-primary btn-lg m-2"  name="add">
        ADD PRODUCT
    </button><br>
      <a role="button" class="btn btn-primary btn-lg m-2"
        href="dashboard.php" rel="nofollow" target="_blank">
        CANCEL
      </a>
      <a role="button" class="btn btn-primary btn-lg m-2" href="product.php" target="_blank">
        SEE YOUR ADDED PRODUCT
      </a>
    </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
  <!--Main Navigation-->



    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">Pluto's.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!--Footer-->
    </form>
</body>
</html>