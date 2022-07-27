<?php
session_start();
include("database.php");
//for registercode
if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5( $_POST['password']);
    $repeatpassword = $_POST['repeatpassword'];
   

$query = "insert into user (id,name,email,password,repeatpassword) 
values (NULL,'$name', '$email','$password','$repeatpassword')";

$conn->query($query);
header("location:login.php");
//admin login
$admin_login=mysqli_insert_id($db);
$_SESSION['admin_name']=getUserById($admin_login);
$_SESSION['success']="YOu are now loggrd in";
header("location:dashboard.php");

}
//login code
if(isset($_POST['login']))
{
$email = $_POST['email'];
$password = md5($_POST['password']);
$query = "select * from user where email ='$email' and password ='$password'";
$result = $conn->query($query);

// fetches data from database;
$userdata = $result->fetch_assoc();
$count = $result->num_rows; //counts the number of row selected

if($count==0) {
    echo "invalid";
}
else{ 
    $_SESSION['ticket']='correct';  
    $_SESSION['userid']=$userdata['id'];
    $_SESSION['admin'] =$userdata['admin'];
    if($userdata['admin']==1){
        header('location:dashboard.php');
    } else{
    header('location:homepage.php');
    }
}
}
//add product
if(isset($_POST['add']))
{
    $name=$_POST['addname'];
    $price=$_POST['addprice'];
    $type=$_POST['addtype'];
    $details=$_POST['adddetails'];
    $picture=$_FILES['addimage']['name'];
    $ext=pathinfo($_FILES['addimage']['name'], PATHINFO_EXTENSION);
    $random=rand(1,10000000000);
    $newpicname=$random. "_myitem_.".$ext;
    
    if($ext=='jpg' || $ext=='JPG' || $ext=='PNG' ||$ext == 'png'||  $ext=='JPEG' || $ext=='jpeg' || $ext=='raw' ||$ext=='RAW'|| $ext=='eps'||$ext=='EPS')
    {
        move_uploaded_file($_FILES['addimage']['tmp_name'], "itemimages/$newpicname");
        $query = "insert into products( name, type, price, detail, picture )
        values ('$name', '$type', '$price', '$details', '$newpicname')";
        $conn->query($query);
    }
    else{
        echo "...invalid image format or type please check before upload";
    }
    }
    
    if(isset($_POST['update']))
    {
        $name=$_POST['upname'];
        $price=$_POST['upprice'];
        $type=$_POST['uptype'];
        $details=$_POST['updetails'];
        $id = $_POST['prid'];
        
        $query = "update products set name='$name', type='$type', price='$price', detail='$details' where id = '$id'";
        $conn->query($query);
        header("location:product.php");
    }
    if(isset($_GET['pdid'])){
        echo $id = $_GET['pdid'];
        echo $query = "delete from products where id='$id'";
        $conn->query($query);
    }
    

?>

