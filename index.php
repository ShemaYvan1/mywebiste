<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding:0;
            margin:0;
            font-family: sans-serif;
        }
        html{
            scroll-behavior: smooth;
        }
        body{
            background:url(images/background4.jpg);
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
        }
        #navbar{
            width:100%;
            height:80px;
            background-color:ghostwhite;
            box-shadow:0px 0px 10px 1px;
            position: fixed;
            z-index: 2;
        }
        #navbar ul{
            display: flex;
            float: right;
            margin-right: 30px;
            list-style: none;
        }
        #navbar ul li{
            padding: 30px;
        }
        #navbar ul li a{
            color: rgb(311, 103, 15);
            text-decoration: none;
            font-size: 18px;
            transition-property: transform;
            transition-delay: 1s;
        }
        #navbar ul li button{
            background-color: transparent;
            padding-right: 10px;
            padding-left: 10px;
            border: 1px solid rgb(311, 103, 15);
        }
        #menubar{
            float:right;
            margin-right:20px;
            display:none;
        }
        #menubar h1 {
            margin-top:10px;
            font-size:44px;
        }
        #menubar h1 a:hover{
            color:hotpink;
        }
        #menubar h1 a{
            text-decoration:none;
            color:black;
            margin-top:20px;
        }
        #search{
            width: 100%;
            height: 320px;
            background-image: url(images/background.jpg);
            background-size: cover;
            background-position: center;
        }
        #search #forms{
            display: flex;
            justify-content: space-evenly;
            flex-wrap: wrap;   
        }
        #search input{
            margin-top: 140px;
            width:200px;
            height: 30px;
            filter: brightness(120%);
        }
        #search button{
            width: 70px;
            height: 33px;
            background-color: white;
            color: rgb(311, 103, 15);
            border: 0;
        }
        #content{
            background-color: aliceblue;

        }
        #content h1{
            text-align: center;
            animation-name:headings;
            animation-duration: 2s;
        }
        @keyframes headings{
            0%{opacity: 0;
               transform: translateY(-40PX);}
        }
        #menu{
            background-color: antiquewhite;
        }
        #menu h1{
            text-align: center;
        }
        #menu #flexed{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }
        #menu #flexed #box{
            margin: 20px;
            background-color:lightcyan;
            border: 1px solid black;
            border-radius: 10px;
            height: auto;
        }
        #menu #flexed #box h2{
            text-align: center;
            animation-name: heading2;
            animation-duration: 1s;
        }
        #explore{
            margin: 200px;
        }
        #explore h1{
            color: gold;
            font-size: 40px;
            float: left;
            text-align: center;
        }
        #explore button{
            background-color: white;
            color: gold;
            border: 0px;
            height: 40px;
            width: 120px;
            transition-property: background;
            transition-duration: 1s;
            margin: auto;
        }
        #explore button:hover{
           background-color: gold;
           color: white;
        }
        #about{
            background-color: white;
            height: auto;
            align-items: center;
        }
        #about h1{
            font-size: 50px;
            color: rgb(311, 103, 15);
            text-align: center;
            animation-name: about;
            animation-duration: 3s;
        }
        @keyframes about{
           0%{opacity: 0;
           transform: translateY(-100px);}
        }
        #about p{
            text-align: center;
            font-size: 16px;
            letter-spacing: 2px;
        }
        @keyframes headings2{
            0%{opacity: 0;
               transform: translateX(100PX);}
        }
        #content #flexed #box p{
            text-align: center;
        }
        @media screen and (max-width:	712px){
           #navbar ul{
            display:none;
           } 
           #menubar{
            display:flex;
           }
        }
    </style>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
  <div id="menubar">
    <h1><a href="" onclick="reveal()" >=</a></h1>
  </div>
    <section id="navbar">
     <a href="index.php"><img src="images/logo.png" width="80" height="80"  style="margin-left: 40px;"></a>     
     <ul>
         <li><a href="#">Home</a></li>
         <li><a href="#menu">Our menu</a></li>
         <li><a href="#">special offers</a></li>
         <li><button><a href="login.php">order now</a></button></li>
     </ul>   
    </section>
    <section id="search">
       <div id="forms">
        <form action="" method="post">
            <input type="text" placeholder="search any food to order here..." name="search">
            <button>search</button>
        </form>
       </div>
    </section>
    <section id="about">
        <br>
        <h1>about us</h1>
        <br>
        <p style="padding-bottom: 60px;">Hello burger is a restaurant that has a casual and <br> welcoming atmosphere, with bright colors and fun decor. The menu offers <br>a variety of options, including classic cheeseburgers, gourmet<br> pizzas, and delicious hot dogs. Customers can customize their burgers <br>or hot dogs with a variety of toppings, from classic condiments to more <br>creative options like avocado or sriracha sauce. T<br>he pizzas come in a range of flavors, from classic Margherita to more <br>exotic combinations like BBQ chicken or veggie-loaded options.
        </p>
    </section>
    <section id="explore">
        <h1>Get you order now! with a free delivery</h1>&nbsp;&nbsp;&nbsp;
         <button><a style="color: black; text-decoration: none;  font-size: 15px;" href="#">order now</a></button>
     </section>
    <section id="menu"  >
       <br>
      <h1 style="color:orangered;">Our menu</h1>
      <br>
    <div class="boxes" style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">   
      <div class="box" >
          <a href="#"><img  src="images/background4.jpg" width="300" height="360" style="background-size: cover;"></a>
           <h3>burgers</h3>
       </div>
             <div class="box" >
          <a href="#"><img  src="images/milk.jpg" width="300" height="360" style="background-size: cover;"></a>
           <h3>milk shakes</h3>
       </div>
             <div class="box" >
          <a href="#"><img  src="images/hotdog.jpg" width="300" height="360" style="background-size: cover;"></a>
           <h3>hot dogs</h3>
       </div>
       </div>
        <div class="boxes" style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">   
      <div class="box" >
          <a href="#"><img  src="images/soup.jpg" width="300" height="360" style="background-size: cover;"></a>
           <h3>soup</h3>
       </div>
             <div class="box" >
          <a href="#"><img  src="images/vegan.jpg" width="300" height="360" style="background-size: cover;"></a>
           <h3>vegan</h3>
       </div>
             <div class="box" >
          <a href="#"><img  src="images/hotdog.jpg" width="300" height="360" style="background-size: cover;"></a>
           <h3>hot dogs</h3>
       </div>
       </div>
        <div class="boxes" style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">   
      <div class="box" >
          <a href="#"><img  src="images/rice.jpg" width="300" height="360" style="background-size: cover;"></a>
           <h3>burgers</h3>
       </div>
             <div class="box" >
          <a href="#"><img  src="images/milk.jpg" width="300" height="360" style="background-size: cover;"></a>
           <h3>milk shakes</h3>
       </div>
             <div class="box" >
          <a href="#"><img  src="images/hotdog.jpg" width="300" height="360" style="background-size: cover;"></a>
           <h3>hot dogs</h3>
       </div>
       </div>
     </section>
     <footer style="width: 100%; background-color:#333; color:white;">
         <p style="text-align: center; padding:30px 0px 30px 0px;">Copyright &copy;<a style="color: orange;" href="http://www.instagram.com/yvan__shema/" target="_blank">  Yvanshema</a> <?php echo date('Y');?></p>
     </footer>
</body>
</html>