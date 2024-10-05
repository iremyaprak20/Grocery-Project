<?php include("controls/doLogin.php"); ?>
<?php include("controls/doRegister.php"); ?>
<?php if(!isset($_SESSION['id']) && !isset($_SESSION['mail'])) {
 ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

     <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!--Css-->
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <section class="login" id="login">
    <form method="post" action=""> 
    <div class="container">
        <div class="form-box">
            <h1 id="title">Sign Up</h1>
            <form method ="post" action="controls/doLogin.php">
                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name = "Name" id="Name" placeholder="Name" required>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input name = "email" type="email" placeholder="Email" required>
                    </div>
                    <div class="input-field" id="phoneField">
                        <i class="fa-solid fa-phone"></i>
                        <input type="text" name = "phone" id="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name = "password" placeholder="Password" required>
                    </div>
                </div>
                <div class="btn-field">
                    <button type="button" name = "register" id="signupBtn">Sign Up</button>
                    <button type="button" name = "login" id="signinBtn" class="disable">Log In</button>
                </div>
            </form>
        </div>
    </div>
    </form>
    </section>

<!--JavaScript-->
<script src="login.js"></script>
</body>
</html>
<?php } else {
    header("Location: main.php");
    exit();
} ?>

