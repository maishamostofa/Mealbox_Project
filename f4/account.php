<?php include('server2.php') ?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Account</title>
  <!--  <link rel="icon" type="image/x-icon" href="/mealbox_logo.png">   -->
    <link rel="stylesheet" href="./css/index2.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
 /* Navbar container */
.navbar {
  overflow: hidden;
  height: 130px;
  background-color: seagreen;
  font-family: Arial;
  text-align: left;
  
}

 .search_icon{
float:left;
margin-top:55px;
margin-right:50px;
margin-bottom: 20px;
}
.search_box{
border: 1px solid;
padding: 8px;
width: 800px;
font-size: 16px;
margin-right: 6px;
margin-left: 250px;
border-color: #DC7633;
border-radius: 5px;
}
.search{
background-color:#04AA6D;
padding:8px;
width:80px;
border:none;
border-radius: 10px;
font-size:16px;
color:white;
}

.section{
  background-color: blue;
background-color: #C9EE82;
margin-top: 0;
 } 
.ball {
  position: fixed;
  border-radius: 100%;
  opacity: 0.7;

}
.socialmedia{
  margin-left: 500px;
 padding-top: 30px; 
 
}

.social_icons{ 
  margin-right: 15px;
  font-size: 24px;
  color: black;
}

.timer{
  margin-left: 600px;
  margin-right: 50px;
}  

p{
  margin-bottom: 0;
}  

.section2{
  background-color: mistyrose;
  
 height: 100%;
 width: 100%;
}

.column1 {
  float: left;
  margin-right: 50px;
  margin-left: 70px;
}

h3{
  color: forestgreen;
  text-align: center;
  margin-right: 20px;
  margin-left: 20px;
}
.buyer_icon:after {
  content: "";
  display: table;
  clear: both;
}


.section3{
  padding-top: 40px;
  padding-bottom: 40px;
} 

.get_started{
 margin-top: 30px;
margin-bottom: 30px;

margin-left: 1200px;
}

button[type="submit"]{
   background-color:tomato;
padding:8px;
width:110px;
height: 40px;
border:none;
border-radius: 10px;
font-size:16px;
color:white;
cursor: pointer;
margin-left: 30px;
}

.logo2{
  padding-top: 20px;
  
  text-align: center;
  
}
.avatar{
  overflow: hidden;
  
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

.intro{
  margin-top: 60px;
  margin-right: 50px;
  margin-left: 50px;
}
.mealbox{
  font-family: "Archivo Black", sans-serif;
  display: flex;
  flex-direction: column;
  
  justify-content: center;
  align-items: center;
}
.words {
  color: forestgreen;
  font-size: 0;
  line-height: 1.5;
}

.words span {
  font-size: 4rem;
  display: inline-block;
  animation: move 3s ease-in-out infinite;
}

@keyframes move {
  0% {
    transform: translate(-30%, 0);
  }
  50% {
    text-shadow: 0 25px 50px rgba(0, 0, 0, 0.75);
  }
  100% {
    transform: translate(30%, 0);
  }
}


.words span:nth-child(2) {
  animation-delay: 0.5s;
}

.words span:nth-child(3) {
  animation-delay: 1s;
}

.words span:nth-child(4) {
  animation-delay: 1.5s;
}

.words span:nth-child(5) {
  animation-delay: 2s;
}

.words span:nth-child(6) {
  animation-delay: 2.5s;
}

.words span:nth-child(7) {
  animation-delay: 3s;
}

</style>   
</head>
<body>
  
  
  
<div class="section2">
  <div class="logo2">
      <a href="index.php"><img src="./images/mealbox_logo.PNG" alt="Picture" width="230px" height="200px"></a>
    </div>
  <div class="section3">
    <div class="buyer_icon">
      <div class="column1"><div class="avatar"> <img src="./images/48.PNG" alt="Picture" width="320px" height="300px"></div>
        <h3>Seller</h3>
        <button type="submit" onclick="signupseller()">Sign Up</button>
        <button type="submit" onclick="loginseller()">Log In</button>
        </div>
        <div class="column1">
        <div class="mealbox">
        <div class="words word-1">
  <span>W</span>
  <span>E</span>
  <span>L</span>
  <span>C</span>
  <span>O</span>
  <span>M</span>
  <span>E</span>
</div>

<div class="words word-2">
  <span>T</span>
  <span>O</span>
</div>

<div class="words word-3">
  <span>M</span>
  <span>E</span>
  <span>A</span>
  <span>L</span>
  <span>B</span>
  <span>O</span>
  <span>X</span>
</div></div></div>
        <div class="column1"><div class="avatar"> <img src="./images/49.PNG" alt="Picture" width="320px" height="300px"></div>
        <h3>Buyer</h3>
        <button type="submit" onclick="signupbuyer()">Sign Up</button>
        <button type="submit" onclick="loginbuyer()">Log In</button>
      </div>
    </div>
  </div>
</div> 

<script>
  function signupbuyer(){
    window.location.href = "buyersignup.php";
  }
  function loginbuyer(){
    window.location.href = "buyerlogin.php";
  }
  function signupseller(){
    window.location.href = "sellersignup.php";
  }
  function loginseller(){
    window.location.href = "sellerlogin.php";
  }
</script>
<div class="footer2"> 
    <div class="socialmedia">  
      <a class="social_icons" href="deliverylogin.php"><i class="fa fa-motorcycle" ></i></a>
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


setInterval(myTimer, 1000);

function myTimer() {
  const d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>
</body>
</html>