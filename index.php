<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "abcproperty";


$conn = new mysqli($servername, $username, $password);

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../ABCproperty/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Home</title>
</head>


<body>
 
    <div class="heading">
        <h1 class="violetWhiteShadow">REAL ESTATE</h1>

        <div class="signup-login-button">

           <a href="../ABCproperty/signup.html"><button class="signup">SIGN UP</button></a>
           <a href="../ABCproperty/login.html"><button class="login">LOG IN</button></a>

        </div>

    </div>

    <ul>
        <li><a href="#">BUY</a></li>
            
        <li><a href="#">SELL</a></li>
          
        <li><a href="#">RENT</a></li>

        <li><a href="#">MORTGAGE</a></li>

        <li><a href="#">FIND AN AGENT</a></li>

        <li><a href="#">TOOLS</a></li>

        <li><a href="#">ABOUT</a></li>

        <li><a href="#">BLOG</a></li>

        <li><a href="#">CONTACT</a></li>

        <li class="search-container">
            <input type="text" placeholder="Search...">
            <button type="submit">Search</button>
        </li>
    </ul>


    <div class="maindivContainer">
        <div class="div1">
            <h1 class="div1logo2">WE HELP OUR CLIENTS MAKE</h2>
            <h1 class="div1logo">BETTER DECISION IN REAL ESTATE</h1>
            <button class="explore-button" onclick="window.location.href='../ABCproperty/property_catalogue.php'">LET'S GO</button>
            
        </div>
        

    </div>

    
    <div class="div2">

        <div class="image-container">

            <img src="./images/house1.jpg">
            <h2 class="price">$1,500,000 AUD</h2>
            <h2>Sydney, New South Wales</h2>

        </div>

        <div class="image-container">

            <img src="./images/house2.jpg">
            <h2 class="price">$1,800,000 AUD</h2>
            <h2>Sydney, New South Wales</h2>

        </div>

        <div class="image-container">

            <img src="./images/house3.jpg">
            <h2 class="price">$1,450,000 AUD</h2>
            <h2>Sydney, New South Wales</h2>

        </div>

    </div>

    <div class="div3">

        <h1 class ="h1div3">LET YOUR DREAMS COME TRUE</h1>
        <h2 class = "h2div3">BUILDING HAPPY HOMES, CREATING HEALTHY LIVING SPACES</h2>
        <p class ="pdiv3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button class="explore-button2" onclick="window.location.href='#'">SEE OUR STORY</button>
    </div>


    <div class="footer">
        <p>Copyright © 2024 Karlo Geo Abesamis</p>    
    </div>

   

</body>


</html>