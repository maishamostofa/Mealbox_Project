<?php include('server2.php') ?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
  <!--  <link rel="icon" type="image/x-icon" href="/mealbox_logo.png">   -->
    <link rel="stylesheet" href="./css/index.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Css -->
 <style>
 .navbar {
  overflow: hidden;
  height: 70px;
  background-color: tomato;
  font-family: Arial;
  text-align: center; 
}
 .search_icon{
float:left;
margin-top:55px;
margin-right:50px;
margin-bottom: 10px;
}
.search_box{
border: 1px solid;
padding: 8px;
width: 800px;
font-size: 16px;
margin-right: 6px;
margin-left: 250px;
border-color: #DC7633;
border-radius: 10px;
height: 45px;
}
.search{
background-color:tomato;
padding:8px;
width:80px;
border:none;
border-radius: 10px;
height: 45px;
font-size:17px;
color:white;

}

.section{
  

margin-top: 140px;
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
  color: forestgreen;
}  

.section2{ 
 background-color: mistyrose; 
 height: 100%;
 width: 100%;
}
.ball {
  position: fixed;
  border-radius: 100%;
  opacity: 0.7;

}
.column1 {
  float: left;
  width: 25%;
  
  
}
.avatar{
  overflow: hidden;
  border-radius: 50%;
  transform: translatey(0px);
  animation: float 1.5s ease-in-out infinite;
  
}
@keyframes float {
  0% {
    
    transform: translatey(0px);
  }
  50% {
    
    transform: translatey(-20px);
  }
  100% {
    
    transform: translatey(0px);
  }
}
.column2 {
  margin-top: 100px;
  
  float: right;
  width: 25%;

}
.buyer_icon{
  margin-left: 10px;
}
.seller_icon{
  margin-right: 10px;
}
.buyer_icon:after {
  content: "";
  display: table;
  clear: both;
}
.seller_icon:after {
  content: "";
  display: table;
  clear: both;
}

.section3{
  margin-top: 40px;
  padding-bottom: 40px;
} 

.get_started{
 margin-top: 30px;
margin-bottom: 30px;

margin-left: 1200px;
}

button[type="button"]{
   background-color:tomato;
padding:8px;
width:110px;
height: 40px;
border:none;
border-radius: 10px;
font-size:17px;
color:white;
cursor: pointer;

}

.tab{
 /* height: 30px;
  border-radius: 5px;
  border: 1px solid grey;
  width: 100px;
  background-color: #04AA6D;
  color: white;   */
  text-decoration: none;
  color: forestgreen;
  text-shadow: 2px 2px 5px grey;
}

.intro{
  margin-top: 60px;
  margin-right: 50px;
  margin-left: 50px;
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
h3{
  color: black;
  margin-top: 10px;
  text-shadow: 2px 2px 5px tomato;
  font-size: 19px;
  text-align: center;
  margin-bottom: 20px;
  font-weight: bold;
  padding: 0px;
  
}
h2{  
  padding: 0px;
  font-size: 18px;
  font-weight: bold;
  margin-top: 20px;
}
h1{
  margin-top: 70px;
  margin-left: 30px;
  font-size: 32px;
  text-shadow: 2px 2px 5px tomato;
  text-align: left;
}
h4{
  margin-top: 70px;
  margin-left: 30px;
  font-size: 32px;
  text-shadow: 2px 2px 5px tomato;
  text-align: center;
  color: black;
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




.price {
  color: black;
  font-size: 16px;
  margin-top: 5px;

}

.card .product{

  height: 290px;
}


.card .product:hover{
  transform: scale(1.1);
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
.column1 a, .column2 a{
  text-decoration: none;
}
.navbar .note h3{
  margin-left: 290px;
}

.footer2{
  height: 100px;
  width: 100%;
  background-color: tomato;
  margin-bottom: 0;
}
</style>   
</head>
<body>
  
  
  <div class="navbar">
    <div class="note">
 <h3>Wanna eat homemade food? OR  Do you need a business account?</h3>
</div>
</div>
<div class="section2">
  
<div class="tab2">

<div class="logo">
      <img src="./images/mealbox_logo.PNG" alt="Picture" width="210px" height="150px">
    </div>
  </div>

<div class="search_icon" >    
    <form method="post" action="search5.php"> 
      
      <input type="text" name="search" id="search" class="search_box" placeholder="Search Food Item..">
     <input type="submit" name="submit" class="search" value="Search">
    </form>
</div>



<div class="section">

<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="./images/slideshow1.PNG" alt="Picture" width="100%" height="400px">
  
</div>

<div class="mySlides fade">
  
  <img src="./images/slideshow4.PNG" alt="Picture" width="100%" height="400px">
  
</div>

<div class="mySlides fade">
  
  <img src="./images/slideshow5.PNG" alt="Picture" width="100%" height="400px">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 1500); // Change image every 2 seconds
}
</script>
</div>




<div class="section4">
 <?php
      $query="SELECT * FROM food_items WHERE id IN(2,4,6,8,10,12,14,16,18,20, 22, 24, 26, 28, 30, 32, 34, 36, 38, 40);";
     
     $sth = mysqli_query($db, $query);
    if (mysqli_num_rows($sth) > 0) { 
     while($row=mysqli_fetch_array($sth)){
     
  ?> 
  <div class="upper">
         
      <div class="card">   
                   
        <div class="product">
        <img src="<?php echo $row["image"]; ?>" alt="<?php echo $row["food_name"]?>" height="180px" >
          <h3><?php echo $row["food_name"]; ?></h3>
          <b><p class="price"><?php echo "Tk. ".$row["price"]; ?></p></b>                
        </div>        
        <h2><?php echo $row["seller_name"]; ?></h2> 
         <p><strong>Quantity</strong></p>
           <div class="cart-action">   
            <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
          </div>
           <button type="submit" onclick="account()" class="btnAddAction">Order</button>
         
      </div>  
   
    </div>
<?php 
 
      }
}   
?>
</div>



<div class="section3">
<div class="buyer_icon">
<div class="column1"><div class="avatar"> <img src="./images/48.PNG" alt="Picture" width="320px" height="300px"></div></div>
 <div class="column1">
  <a href="seller.php"><h3><b>Seller</b></h3>
  <b><p>Where are the cooks? Many of us can cook many type of local, foreign and regional food. Mealbox is trying to get people from all over the country to taste your hand-made food.This Mealbox can be another platform to start your own career.This is a platform that allows you to easily sell your best hand-made food. In this way, the buyers will be satisfied by eating your hand-made food and also can be a way for you to earn extra income.</p></b></div>
</div>
<div class="seller_icon">
  <div class="column2"><div class="avatar"><img src="./images/49.PNG" alt="Picture" width="320px" height="300px"></div></div>
<div class="column2">
 <a href="buyer.php"> <h3><b>Buyer</b></h3>
  <b><p>Where are the food-loving people? The Mealbox is searching for you.If you favor to get a handful of fresh local, foreign, regional meals in a time to calm your stomach, visit this mealbox.For those of us who are out of the house at work, we all miss our mother's hand-made food. You can relate to Mealbox to get back the taste of handmade food.
  </p></b></a></div>
</div>
<div class="intro">
<b><p>Are you hungry? Did you have a long and demanding day? Interested in getting a cheesy pizza delivered to your workplace or looking to avoid the weekly shop? Then "Mealbox" is the right destination for you! Mealbox affords you a long and targeted list of the fantastic eating places and shops and sparkling home made food near you to assist make your daily easier. Our on line food shipping provider has it all, whether  you want fresh home made fancy a juicy burger, sparkling sushi or peri peri poultry , Mealbox has over many cloud kitchen handy from Dhaka to Chittagong.</p>
<p>Are you struggling from unemployment problem? Do you want your handmade food to attain all parts of the country? Mealbox is opening you up to all these opportunities and possibilities. With our platform you can promote your handmade food by means of uploading picture from anywhere in the country.
Sit lower back and relax – let Mealbox take the pressure off your shoulders.
</p></b>
</div>
<div class="get_started">
  <button type="button" onclick="getstarted()">Get Started</button>
  </div>
</div>

<script>
  function getstarted(){
    window.location.href = "account.php";
  }
</script>
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

<script>
// Some random colors
const colors = ["#3CC157", "#2AA7FF", "#1B1B1B", "#FCBC0F", "#F85F36"];

const numBalls = 50;
const balls = [];

for (let i = 0; i < numBalls; i++) {
  let ball = document.createElement("div");
  ball.classList.add("ball");
  ball.style.background = colors[Math.floor(Math.random() * colors.length)];
  ball.style.left = `${Math.floor(Math.random() * 100)}vw`;
  ball.style.top = `${Math.floor(Math.random() * 100)}vh`;
  ball.style.transform = `scale(${Math.random()})`;
  ball.style.width = `${Math.random()}em`;
  ball.style.height = ball.style.width;
  
  balls.push(ball);
  document.body.append(ball);
}

// Keyframes
balls.forEach((el, i, ra) => {
  let to = {
    x: Math.random() * (i % 2 === 0 ? -11 : 11),
    y: Math.random() * 12
  };

  let anim = el.animate(
    [
      { transform: "translate(0, 0)" },
      { transform: `translate(${to.x}rem, ${to.y}rem)` }
    ],
    {
      duration: (Math.random() + 1) * 2000, // random duration
      direction: "alternate",
      fill: "both",
      iterations: Infinity,
      easing: "ease-in-out"
    }
  );
});
</script>

<script>
setInterval(myTimer, 1000);

function myTimer() {
  const d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>


<script>
  function account(){
    window.location.href = "buyerlogin.php";
  }
</script>




<script type="text/javascript">
  $(function() {
     $( "#search" ).autocomplete({
       source: 'ajax_db_search.php',
     });
  });
</script>
</body>
</html>

