<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Shop</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Css-->
    <link rel="stylesheet" href="main.css">

</head>
<body>

<!--Header Section-->

<header>

<div class="header-1">

<a href="#" class="logo"><i class="fas fa-shopping-basket"></i>Grocery</a>

<form action="" class="search-box-container" method="post">
    <input type="search" id="search-box" placeholder="Search here...">
    <label for="search-box" class="fas fa-search"></label>
    </form>
</div>

<div class="header-2" id="navbar-header">

   <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#category">category</a>
        <a href="#product">product</a>
        <a href="#deal">deal</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="icons">
        <a href="#"  class="fas fa-user-circle" onmouseover="seticonstate(true)" onmouseout="seticonstate(false)" id="user-items"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-heart"></a>
    </div>
    <?php if(isset($_SESSION['id']) && isset($_SESSION['mail'])) {

    ?>
    <div id="user-menu" onmouseover="setpanelstate(true)" onmouseout="setpanelstate(false)" class="dropdown-menu menu-item">
        <text class="menu-item">Welcome back, <?php echo $_SESSION['full_name']; ?>!</text>
        <a class="menu-item" href="#">Profile</a>
        <a class="menu-item" href="#">My Orders</a>
        <a class="menu-item" href="controls/logout.php">Logout</a>
    </div>
    <?php  } else {?>
        <div id="user-menu" onmouseover="setpanelstate(true)" onmouseout="setpanelstate(false)" class="dropdown-menu menu-item">
            <text class="menu-item">Welcome!</text>
            <a class="menu-item" href="login.php#login">Log In</a>
            <a class="menu-item" href="login.php#signup">Sign Up</a>
        </div>
    <?php }?>
</div>

</header>

<!--Home Section-->

<section class="home" id="home">

<div class="image">
    <img src="images/fresh.png" alt="">
</div>

<div class="content">
    <span>Fresh And Organic</span>
    <h3>Your Daily Need Products</h3>
    <a href="#" class="btn">Get Started</a>
</div>

</section>


<!--Banner Section-->

<section class="banner-container">

<div class="banner">
    <img src="images/vegetable.jpg" alt="">
    <div class="content">
        <h3>Special Offer</h3>
        <p>Up to 45% Off</p>
        <a href="#" class="btn">Check Out</a>
    </div>
</div>

<div class="banner">
    <img src="images/vegetable2.jpg" alt="">
    <div class="content">
        <h3>Limited Offer</h3>
        <p>Up to 50% Off</p>
        <a href="#" class="btn">Check Out</a>
    </div>
</div>

</section>


<!--Category Section-->

<section class="category" id="category">

<h1 class="heading">Shop By <span>category</span></h1>

<div class="box-container">
    <div class="box">
        <h3>Vegetable</h3>
        <p>Up to 50% Off</p>
        <img src="images/catveg.png" alt="">
        <a href="#" class="btn">Shop Now!</a>
    </div>


    <div class="box">
        <h3>Fruit</h3>
        <p>Up to 50% Off</p>
        <img src="images/catfruit.png" alt="">
        <a href="#" class="btn">Shop Now!</a>
    </div>

        
    <div class="box">
        <h3>Drink</h3>
        <p>Up to 50% Off</p>
        <img src="images/catdrink.png" alt="">
        <a href="#" class="btn">Shop Now!</a>
    </div>


    <div class="box">
        <h3>Detergant</h3>
        <p>Up to 50% Off</p>
        <img src="images/catdetergant.png" alt="">
        <a href="#" class="btn">Shop Now!</a>
    </div>

</div>

</section>


<!--Product Section-->

<section class="product" id="product">

<h1 class="heading">Latest <span>Products</span></h1>

<div class="box-container">

<div class="box">
    <span class="discount">-33%</span>
    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
    </div>
    <img src="images/banana.png" alt="">
    <h3>Organic Banana</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
    </div>
    <div class="price"> $10.50 <span>$13.20</span></div>
    <div class="quantity">
        <span>Quantity:</span>
        <!--suppress HtmlFormInputWithoutLabel -->
        <input type="number" min="1" max="1000" value="1">
        <span> /kg </span>
    </div>
    <a href="#" class="btn">Add to Cart</a>
</div>


<div class="box">
    <span class="discount">-33%</span>
    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
    </div>
    <img src="images/strawberry.png" alt="">
    <h3>Strawberry</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
    </div>
    <div class="price"> $10.50 <span>$13.20</span></div>
    <div class="quantity">
        <span>Quantity:</span>
        <input type="number" min="1" max="1000" value="1">
        <span> /kg </span>
    </div>
    <a href="#" class="btn">Add to Cart</a>
</div>


<div class="box">
    <span class="discount">-33%</span>
    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
    </div>
    <img src="images/banana.png" alt="">
    <h3>Organic Banana</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
    </div>
    <div class="price"> $10.50 <span>$13.20</span></div>
    <div class="quantity">
        <span>Quantity:</span>
        <input type="number" min="1" max="1000" value="1">
        <span> /kg </span>
    </div>
    <a href="#" class="btn">Add to Cart</a>
</div>


<div class="box">
    <span class="discount">-33%</span>
    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
    </div>
    <img src="images/strawberry.png" alt="">
    <h3>Strawberry</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
    </div>
    <div class="price"> $10.50 <span>$13.20</span></div>
    <div class="quantity">
        <span>Quantity:</span>
        <input type="number" min="1" max="1000" value="1">
        <span> /kg </span>
    </div>
    <a href="#" class="btn">Add to Cart</a>
</div>


<div class="box">
    <span class="discount">-33%</span>
    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
    </div>
    <img src="images/banana.png" alt="">
    <h3>Organic Banana</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
    </div>
    <div class="price"> $10.50 <span>$13.20</span></div>
    <div class="quantity">
        <span>Quantity:</span>
        <input type="number" min="1" max="1000" value="1">
        <span> /kg </span>
    </div>
    <a href="#" class="btn">Add to Cart</a>
</div>


<div class="box">
    <span class="discount">-33%</span>
    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
    </div>
    <img src="images/strawberry.png" alt="">
    <h3>Strawberry</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
    </div>
    <div class="price"> $10.50 <span>$13.20</span></div>
    <div class="quantity">
        <span>Quantity:</span>
        <input type="number" min="1" max="1000" value="1">
        <span> /kg </span>
    </div>
    <a href="#" class="btn">Add to Cart</a>
</div>

<div class="box">
    <span class="discount">-33%</span>
    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
    </div>
    <img src="images/banana.png" alt="">
    <h3>Organic Banana</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
    </div>
    <div class="price"> $10.50 <span>$13.20</span></div>
    <div class="quantity">
        <span>Quantity:</span>
        <input type="number" min="1" max="1000" value="1">
        <span> /kg </span>
    </div>
    <a href="#" class="btn">Add to Cart</a>
</div>

<div class="box">
    <span class="discount">-33%</span>
    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
    </div>
    <img src="images/strawberry.png" alt="">
    <h3>Strawberry</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
    </div>
    <div class="price"> $10.50 <span>$13.20</span></div>
    <div class="quantity">
        <span>Quantity:</span>
        <input type="number" min="1" max="1000" value="1">
        <span> /kg </span>
    </div>
    <a href="#" class="btn">Add to Cart</a>
</div>

</div>

</section>

<!--Deal Section-->

<section class="deal" id="deal">

    <div class="content">

        <h3 class="title">Deal of the Day</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ea animi praesentium deserunt omnis placeat consequatur officia vel atque commodi facere eius, sed aspernatur nesciunt ab libero sit! Ad, esse.</p>

        <div class="count-down">
            <div class="box">
                <h3 id="day">00</h3>
                <span>Day</span>
            </div>

            <div class="box">
                <h3 id="hour">00</h3>
                <span>Hour</span>
            </div>

            <div class="box">
                <h3 id="minute">00</h3>
                <span>Minute</span>
            </div>

            <div class="box">
                <h3 id="second">00</h3>
                <span>Second</span>
            </div>

        </div>

        <a href="#" class="btn">Check the Deal</a>

    </div>

</section>


<!--Contact Section-->

<section class="contact" id="contact">

    <h1 class="heading"> <span>Contact</span>Us</h1>

    <form action="">

        <div class="inputBox">
            <input type="text" placeholder="Name">
            <input type="email" placeholder="E-mail">
        </div>

        <div class="inputBox">
            <input type="text" placeholder="Number">
            <input type="text" placeholder="Subject">
        </div>

        <textarea placeholder="Message" name="" id="" cols="30" rows="10"></textarea>

        <input type="submit" value="send message" class="btn">

    </form>

</section>


<!--Newsletter Section-->

<section class="newsletter">

<h3>Subscribe Us For Latest Updates</h3>

<form action="">
    <input class="box" type="email" placeholder="Enter Your E-Mail">
    <input type="submit" value="subscribe" class="btn">
</form>

</section>


<!--Footer-->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>Grocery</a>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil enim dicta voluptatem velit doloribus, iure aperiam mollitia doloremque nulla quaerat provident ex at similique, molestias ipsa quia? Commodi, laboriosam ad!</p>
            <div class="share">
                <a href="#" class="btn fab fa-facebook-f"></a>
                <a href="#" class="btn fab fa-twitter"></a>
                <a href="#" class="btn fab fa-instagram"></a>
                <a href="#" class="btn fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>Our Location</h3>
            <div class="links">
                <a href="#">Turkey</a>
                <a href="#">Cyprus</a>
            </div>
        </div>

        <div class="box">
            <h3>Quick Links</h3>
            <div class="links">
                <a href="#">Home</a>
                <a href="#">Category</a>
                <a href="#">Product</a>
                <a href="#">Deal</a>
                <a href="#">Contact</a>
            </div>
        </div>

        
        <div class="box">
            <h3>Download App</h3>
            <div class="links">
                <a href="#">Google Play</a>
                <a href="#">Apple Store</a>
            </div>
        </div>

    </div>

</section>


<!--JavaScript-->
<script src="main.js"></script>
</body>
</html>