<?php
session_start();
include('database.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Products</title>
</head>
<body>
    <?php include('navbar.php');
    ?>
    
    <div class="container">
        <div class="row">
            <?php 
            $qq = "select * from products";
            $result = $conn->query($qq);
            while($data = $result->fetch_assoc()){
                ?>
            <div class="col-md-4">
            <?php 
            if(isset($_SESSION['ticket'])){ ?>
            <style>
                .picture{
                    height: 400px;
                    width:350px;
                    object-fit: contain;
                    object-fit: contain;
                    border-radius: 25px;
                }
                </style>
            
            <p><img src="itemimages/<?php echo $data['picture'] ?>" class="img-thumbnail picture" /></p>
            <?php }
            else { ?>
            <p><img src="itemimages/<?php echo $data['picture'] ?>" class="img-thumbnail picture" /></p><?php } ?>
            <h3><?php echo $data['name'] ?></h3>
            <p>Type : <?php echo $data['type'] ?> </p>
            <p>Description : <?php echo $data['detail'] ?></p>
            <p>Price : $<?php echo $data['price'] ?></p>
            
            <?php 
            if(isset($_SESSION['ticket'])){ ?>
            <form action="action.php" method="post">
            <a href="action.php?pdid=<?php echo $data ['id']?>">delete</a><br>
            <a href="update.php?productid=<?php echo $data ['id']?>" name="update">Update</a>
            </form>


            <?php } ?>
            </div>
            <?php } ?>
            
