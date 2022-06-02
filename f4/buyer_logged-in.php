<?php include('server2.php') ?>
<?php  

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
  }   
  
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="./css/index3.css"/>
    

    <link rel="stylesheet" href="./css/own_style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

     

     
<style>
   

.search_icon{
float:right;
margin-top:55px;
margin-right:50px;
}
.search_box{
border: 1px solid;
padding: 8px;
width: 350px;
font-size: 16px;
margin-right: 6px;
margin-left: 15px;
border-color: #DC7633;
border-radius: 5px;
}
.search{
background-color:tomato;
padding:8px;
width:80px;
border:none;
border-radius: 10px;
font-size:16px;
color:white;
}



.social_icons{ 
  margin-right: 15px;
  font-size: 24px;
  color: black;
}
.socialmedia{
 text-align: center;
 padding-top: 30px; 
 
}
.timer p{
  font-size: 18px;
  text-align: center;
  color: black;
}  
p{
  margin-bottom: 0;
  font-size: 16px;
} 

.section2{
  background-color: mistyrose;
  padding-top: 20px;
 height: 100%;
 width: 100%;
 
}
 .section{
  margin-top: 30px;  
  text-align: center;
  margin-right: 30px;
 }
 h2{
  text-align: center;
  text-shadow: 2px 2px 5px tomato;
  font-size: 30px;
 }

 
 
 .footer2{
  
  height: 100px;
  width: 100%;
  background-color: tomato;

}


.section4:after{
  
  content: "";
  display: table;
  clear: both; 
  
}
.upper{
  float:  left;
  width: 20%;
margin-bottom: 50px;

}
  
.card {
  height: auto;
  width: 190px;
  margin-top: 90px;
  margin-right: 20px;
  margin-bottom: 50px;
  margin-left: 30px;
  text-align: center;
  font-family: arial;
  transition: transform .2s;
  background-color: mistyrose;
  border: 0;
}

.card img{
  border-radius: 30%;
  width:90%;
}

h2{
  
  padding: 0px;
  font-size: 18px;
  font-weight: bold;
}
h3{
  margin-top: 10px;
  padding: 0px;
  font-size: 19px;
  font-weight: bold;
}
button[type="submit"]{
   background-color:tomato;
padding:8px;
width:190px;
height: 40px;
border:none;
border-radius: 10px;
font-size:17px;
color:white;
cursor: pointer;

}
.price {
  color: black;
  font-size: 16px;
  margin: 5px 0 0 0;
}

.card .product{

  height: 290px;
}


.card .product:hover{
  transform: scale(1.1);
}
}




.card button:hover {
  opacity: 0.7;
}

.card:hover{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 255, 0.3);

}
.product-quantity {
    padding: 5px 20px;
    border-radius: 3px;
    border: #E0E0E0 1px solid;
    background-color: lightsteelblue;
    width: 100%;
    text-align: center;
}
.card .icon{
  margin-left: 25px;
  margin-right: 20px;
  color: tomato;
}
.card a{
  color: black;
  text-shadow: 2px 2px 5px tomato;
  text-decoration: none;
}

.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;

  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 120px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 8px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  background-color: tomato;
  margin-bottom: 0;
  
}
ul.breadcrumb li {
  display: inline;
  font-size: 18px;
  margin-right: 20px;
  
}
ul.breadcrumb li+li:before, ul.breadcrumb div+div:before{
  color: white;
  content: "/\00a0";
}
ul.breadcrumb li a {
  color: white;
  text-decoration: none;
}
ul.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: none;

}
.username{
  color: white;
  font-size: 18px;
  text-decoration: none;
}
.username:hover{
  text-decoration: none;
}
.notify{
  margin-right: 300px;
}
.home{
  margin-left: 30px;
}

</style>    
</head>
<body>
  
  <div class="header">
    <div class="search_icon" >    
    <form method="post" action="search2.php"> 
      
      <input type="text" name="search" class="search_box" placeholder="Search Food Item..">
      <input type="submit" name="submit" class="search" value="Search">
    </form>
  </div>
    <div class="logo">
      <img src="./images/mealbox_logo.PNG" alt="Picture" width="210px" height="150px">
    </div>
    
  </div>


  <ul class="breadcrumb">
  <li><a class="home" href="#home.php"><b> Home</b></a></li>  
  <li><a href="seller_kitchen_list.php"><b> Kitchen</b></a></li>
  <li><a href="order_food2.php"><b> Category</b></a></li>
  <li><a href="users.php"><b> Live Chat</b></a></li>
  <li><a href="cart3.php"><b> Cart</b></a></li>
   <li><a href="buyer_order_track.php"><b> Order Track</b></a></li>
   <li><a class="notify" href="buyer_order_history.php"><b> Order History</b></a></li>
  
   

<?php
$username=$_SESSION['username'];
$sql10 = mysqli_query($db, "SELECT * FROM buyer_data WHERE status=1 AND username='$username'");
$count1=mysqli_num_rows($sql10);

$sql12 = mysqli_query($db, "SELECT * FROM cancel_order WHERE status=1 AND buyer_name='$username'");
$count2=mysqli_num_rows($sql12);

$count = $count1 + $count2;

?>

  <div class="dropdown">
  <a class="username" href="#"><i class="fa fa-bell"></i> <span id="count" class="badge badge-primary"><?php echo $count; ?></span></a>
  <div class="dropdown-content">
    <?php
      $sql11 = mysqli_query($db, "SELECT * FROM buyer_data WHERE status=1 AND username='$username'");

      $sql13 = mysqli_query($db, "SELECT * FROM cancel_order WHERE status=1 AND buyer_name='$username'");
      
       if(mysqli_num_rows($sql11)>0)
        {
              
                while($res=mysqli_fetch_assoc($sql11))
                 {
                   echo '<a class="dropdown-item text-primary" href="buyer_order_track.php?id='.$res['id'].'">Order is Confirmed</a>';
                   //echo '<div class="dropdown-divider"></div>';
                 }
          } 
        if(mysqli_num_rows($sql13)>0)
        {
                while($res2=mysqli_fetch_assoc($sql13))
                 {
                   echo '<a class="dropdown-item text-primary" href="buyer_order_track.php?id2='.$res2['id'].'">Order is Cancelled</a>';
                   //echo '<div class="dropdown-divider"></div>';
                 }
        }
               
      
      if(mysqli_num_rows($sql11)==0 && mysqli_num_rows($sql13)==0) 
      {    
            echo '<a href="#">No Messages Found</a>';             
          }
    ?>
   </div> 
    </div>

    <div class="dropdown">
  <a  class="username" href="#"><b><?php echo $_SESSION['username']; ?></b></a>
  <div class="dropdown-content">
    <a href="buyer_profile.php">Profile</a>
    <a href="buyer_logout.php?logout_id=<?php echo $_SESSION['unique_id']; ?>" class="logout">Log Out</a>  
      </div>
    </div>
</ul>

  
<div class="section2">
  
 <div class="section4">
  
 <?php
      $query="SELECT * FROM food_items WHERE id IN(2,4,6,8,10,12,14,16,18,20, 22, 24, 26, 28, 30, 32, 34, 36, 38, 40, 61);";
     
     $sth = mysqli_query($db, $query);
    if (!empty($query)) { 
     while($row=mysqli_fetch_array($sth)){
             
  ?> 
  <div class="upper">
         
      <div class="card">   
         <form method="post" action="buyer_logged-in.php?action=add&pid=<?php echo $row["id"]; ?>">          
        <div class="product">
        <img src="<?php echo $row["image"]; ?>" alt="<?php echo $row["food_name"]?>" height="180px" >
          <h3><?php echo $row["food_name"]; ?></h3>
          <b><p class="price"><?php echo "Tk. ".$row["price"]; ?></p></b>  
                
        </div>        
        <a href="seller_kitchen.php?seller_name=<?php echo $row['seller_name']; ?>"><i><h2><?php echo $row["seller_name"]; ?></h2></i></a>
        <a class="icon" href="buyer_personal_chat.php?seller_name=<?php echo $row['seller_name']; ?>"><i class="fa fa-comments" style="font-size:28px"></i></a> 
        <a class="icon" href="comment.php?food_name=<?php echo $row["food_name"]; ?>&food_id=<?php echo $row["id"]; ?>"><i class="fa fa-comment-o" style="font-size:24px"></i></a> 
         <p><strong>Quantity</strong></p>
           <div class="cart-action">   
            <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
          </div>
           <button type="submit" class="btnAddAction">Order</button>
         </form>
      </div>  
   
    </div>
<?php 
  }
}

?>
<form action="cart3.php?action=add&pid=<?php echo $row["id"]; ?>">
    <?php
//For electronics
//code for Cart

if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  //code for adding product in cart
  case "add":
    if(!empty($_POST["quantity"])) {
      $pid=$_GET["pid"];
      $result=mysqli_query($db,"SELECT * FROM `food_items` WHERE id='$pid'");
            while($productByCode=mysqli_fetch_array($result)){
      $itemArray = array($productByCode["food_name"]=>array('food_name'=>$productByCode["food_name"], 'quantity'=>$_POST["quantity"], 'seller_name'=>$productByCode["seller_name"], 'price'=>$productByCode["price"], 'image'=>$productByCode["image"]));
      if(!empty($_SESSION["cart_item"])) {
        if(in_array($productByCode["food_name"],array_keys($_SESSION["cart_item"]))) {
          foreach($_SESSION["cart_item"] as $k => $v) {
              if($productByCode["food_name"] == $k) {
                if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                  $_SESSION["cart_item"][$k]["quantity"] = 0;
                }
                $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
              }
          }
        } else {
          $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
        }
      }  else {
        $_SESSION["cart_item"] = $itemArray;
      }
    }
  }
  
}
}
?>
</form>

</div>
</div>

<div class="footer2">
    <div class="socialmedia">  
      <a class="social_icons" href="about.php"><i class="fa fa-fw fa-address-book"></i></a>
      <a class="social_icons" href="#"><i class="fa fa-facebook-square"></i></a>
      <a class="social_icons" href="#"><i class="fa fa-twitter-square"></i></a>
      <a class="social_icons" href="#"><i class="fa fa-linkedin-square"></i></a>
      <a class="social_icons" href="contact.php"><i class="fa fa-fw fa-envelope"></i></a>
    </div>
    <div class="timer">
    <b> <p id="demo"></p></b>
    </div> 
 </div>


 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   

<script>
setInterval(myTimer, 1000);

function myTimer() {
  const d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>



</body>
</html>