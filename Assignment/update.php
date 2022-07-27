<?php
session_start();
include('database.php') ?>
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

    <title> Update</title>
</head>
<body>
    <section class="vh-100" style="background-color: #2779e2;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">

        <h1 class="text-white mb-4"><center><b>Update</center></b></h1>

        <div class="card" style="border-radius: 15px;">
          <div class="card-body">

            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">
<?php 
$id = $_GET['productid'];
$qq = "select * from products where id='$id'";
$result = $conn->query($qq);
$data = $result->fetch_assoc()?>
                <h6 class="mb-0">Product Full Name</h6>
                
              </div>
              <div class="col-md-9 pe-5">
                <form action='action.php' method='post'>
                <input hidden name='prid' value='<?php echo $data['id'] ?>' />
                
                <input type="text"  name="upname" placeholder="Product's Name" class="form-control form-control-lg" value='<?php echo $data['name'] ?>' required/>

              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Price</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="upprice" class="form-control form-control-lg" value='<?php echo $data['price'] ?>' placeholder="Determine the Product" required />

              </div>
            </div>
            <hr class="mx-n3">

<div class="row align-items-center py-3">
  <div class="col-md-3 ps-5">

    <h6 class="mb-0">Type</h6>

  </div>
  <div class="col-md-9 pe-5">

    <input  name="uptype" class="form-control form-control-lg" placeholder="Determine the  type"  value='<?php echo $data['type'] ?>' required />

  </div>
</div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Details</h6>

              </div>
              <div class="col-md-9 pe-5">

                <textarea class="form-control" name="updetails" rows="3" placeholder="Message sent to the employer"  value='<?php echo $data['Details'] ?>'></textarea>

              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Upload Images</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input class="form-control form-control-lg" name="upimage" id="formFileLg" type="file"  value='<?php echo $data['upload image'] ?>' />
                <div class="small text-muted mt-2">Upload your Products that you want to update.
                    
                </div>

              </div>
            </div>

            <hr class="mx-n3">

            <div class="px-5 py-4">
              <input type="submit" name="update" value="Update"/>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</section>
</body>
</html>