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

  <title>navbar

  </title>
</head>
<body >
 <style>
.nav23{
display:flex;
align-items:center;
justify-content:space-betweeen;
padding:20px 80px;
background:#E2e6F3;
box-shadow:0 5px 15px rgba(0,0,0,0.06);
}
.nav23 a{
  text-decoration:none;
  font-size:16px;
  font-weight:600;
  color:#1a1a1a;
}
.nav23 .navbar-brand{
  font-size:20px;
}
.nav23 .nav-item .active:hover,
.nav23 .nav-item .li.active{
  color:#088178;
}
  </style>

<nav class="navbar navbar-expand-lg nav23">

    <a class="navbar-brand" href="#">PLUTO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon ti-align-justify"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fas fa-plane" aria-current="page" href="homepage.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  href="contact_us.php">Contact Us</a>
        </li> 
        <?php 
        if(isset($_SESSION['ticket'])){?>
          <li class="nav-item">
          <a class="nav-link active"  href="product.php">Products</a>
          <li class="nav-item">
          <a class="nav-link active" href="#">Settings</a></li>
          <li class="nav-item">
          <a class="nav-link active"  href="logout.php">Logout</a></li>
         
  
        </li>
        <?php }
        else {
        ?>
         <li class="nav-item">
          <a class="nav-link active"  href="login.php">Log In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  href="newregister.php">Sigh Up</a>
        </li>
       <?php } ?>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
       
    </div>
  </div>
</nav>
</body>
</html>