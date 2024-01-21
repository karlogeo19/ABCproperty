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
        <h1 class="violetWhiteShadow"><a class ="home-button" href="../ABCproperty/index.php"> REAL ESTATE</a></h1>

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

    
    <div class="div2property">
        
      

            <?php
            
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "abcproperty";
            
        
            $conn = new mysqli($servername, $username, $password, $database);
            
        
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
        
            $sql = "SELECT * FROM property";
            $result = $conn->query($sql);

        
            if ($result->num_rows > 0) {
                $propertyData = $result->fetch_all(MYSQLI_ASSOC);

                foreach ($propertyData as $property) {
                    echo '<div class="image-container">';
                    echo '<img src="' . $property['Images'] . '">';
                    echo '<h2 class="price2">$' . $property['Price'] . ' AUD</h2>';
                    echo '<h2 class="description">' . $property['Description'] . '</h2>';
                    echo '</div>';
                }
            } else {
                echo '<p>No properties found.</p>';
            }

            $conn->close();

            ?>
            
    </div>


    <div class="footer">
        <p>Copyright © 2024 Karlo Geo Abesamis</p>    
    </div>

   

</body>


</html>