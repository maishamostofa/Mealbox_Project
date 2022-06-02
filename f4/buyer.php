<?php include('server2.php') ?>
<?php  

  
  
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="./css/index.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.navbar {
  overflow: hidden;
  height: 70px;
  background-color: tomato;
  font-family: Arial;
  text-align: center; 
}
    .dropdown-content3 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 90px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content3 a {
  float: none;
  color: black;
  padding: 12px 13px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content3 a:hover {
  background-color: #DC7633;
  color: black;
}

.dropdown:hover .dropdown-content3 {
  display: block;
}

.dropdown-content4 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 95px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content4 a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content4 a:hover {
  background-color: #DC7633;
  color: black;
}

.dropdown:hover .dropdown-content4 {
  display: block;
}

.search_icon{
float:left;
margin-top:55px;
margin-right:50px;
margin-bottom: 80px;
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
.avatar{
  
  transition: 0.3s;
  
  
}
.ball {
  position: fixed;
  border-radius: 100%;
  opacity: 0.7;

}
.avatar:hover {
  transform: scale(1.1);
}

.section2{
  background-color: mistyrose;
  padding-top: 20px;
 height: 100%;
 width: 100%;
 padding-bottom: 50px;
}
.column1 {
  float: left;
  width: 20%; 
  margin-right: 10px; 
}
.column2 {
  float: right;
  width: 20%;
  margin-left: 15px;
}

.buyer_icon{
  margin-left: 70px;
}

.buyer_icon:after {
  content: "";
  display: table;
  clear: both;
}
.seller_icon{
  margin-right: 50px;
}
.seller_icon:after {
  content: "";
  display: table;
  clear: both;
}
.footer2{
  height: 100px;
  width: 100%;
  background-color: tomato;

}
.logo2{
  margin-top: 10px;
  margin-left: 15px;
  margin-bottom: 80px;
}
h3{
  text-shadow: 2px 2px 5px grey;
}
p{
  
}
</style>    
</head>
<body>
  
  <div class="navbar">
 <h3>Wanna eat homemade food? OR  Do you need a business account?</h3>
</div>

<div class="section2">
<div class="logo2">
     <a href="index2.php"> <img src="./images/mealbox_logo.PNG" alt="Picture" width="210px" height="150px"></a>
  </div>
  


<div class="buyer_icon">
<div class="avatar"><div class="column1"> <img src="./images/52.PNG" alt="Picture" width="200px" height="180px"></div>
 <div class="column1">
  <h3>Category</h3>
  <p>Here are the options for different categories. There are options like appetizers, desserts, mine courses, snacks and many more. They will be able to instantly order the food of their choice from any of the options inside.</p></div></div>
</div>
<div class="seller_icon">
 <div class="avatar"> <div class="column2"><img src="./images/50.PNG" alt="Picture" width="200px" height="180px"></div>
<div class="column2">
  <h3>Cart</h3>
  <p>Through this system buyers will be able to purchase their food. Here buyers can add the food of their choice to their own cart and order it anytime later.</p></div></div>
</div>
<div class="buyer_icon">
<div class="avatar">  <div class="column1"><img src="./images/51.PNG" alt="Picture" width="180px" height="160px"></div>
<div class="column1">
  <h3>Order</h3>
  <p>If a person is hungry or has a craving for food then it is important to have instant food in front of him. With this system people can easily order the food of their choice.</p></div></div>
</div>
<div class="seller_icon">
<div class="avatar"><div class="column2"> <img src="./images/53.PNG" alt="Picture" width="200px" height="180px"></div>
 <div class="column2">
  <h3>Live Chat</h3>
  <p>With the help of this system the buyer will be able to contact the seller immediately when they order food from the seller's kitchen. Before ordering, the buyer can chat with the seller in person to get an idea about the food prepared by the seller.</p></div></div>
</div>
<div class="buyer_icon">
<div class="avatar">  <div class="column1"><img src="./images/58.jpg" alt="Picture" width="200px" height="180px"></div>
<div class="column1">
  <h3>About</h3>
  <p>This system allows all users to get an idea of this mealbox.</p></div></div>
</div>
<div class="seller_icon">
<div class="avatar"> <div class="column2"><img src="./images/56.PNG" alt="Picture" width="200px" height="180px"></div>
 <div class="column2">
  <h3>Review</h3>
  <p>Here buyers can express their opinion with other buyers about the food they have chosen or the food they have bought. Be able to share their all over experience. It’s like a comment section.</p></div></div>
</div>
</div>

<div class="footer2">
    <div class="socialmedia">  
      <a class="social_icons" href="#"><i class="fa fa-facebook-square"></i></a>
      <a class="social_icons" href="#"><i class="fa fa-twitter-square"></i></a>
      <a class="social_icons" href="#"><i class="fa fa-linkedin-square"></i></a>
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
<script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>
</body>
</html>