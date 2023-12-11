<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up Form</title>

    <!-- STYLE LINK -->
    <link rel="stylesheet" href="style_login.css">
    <!-- STYLE LINK -->

    <!-- FONT AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- FONT AWESOME CDN -->
</head>
<body>


    <div class="signup" style="background-image: url(./image/bac.png);">
        <div class="signup-box">
            <div class="image">
                <img src="./image/signup-img.png" alt="">
            </div>

            <form action="" method="post">
                <h3>Fill in here</h3>
               

                <div class="inp">
                    <input type="text" placeholder="Name" class="form-control" name="name" required>
                </div>

                <div class="inp">
                    <input type="submit" class="form-control" name="submit" required>
                </div>
                <p id="p">By clicking on sign up, you agree to our terms and services and privacy policy.</p>
               <h3 id="h3">Sign up With!</h3>

               <div class="icons">
                <i class="fa-brands fa-google"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-solid fa-envelope"></i>
                <i class="fa-brands fa-instagram"></i>
               </div>

               
            </form>

        </div>
        <?php
            
            if (isset($_POST["submit"])) {
                
                $_SESSION["name"] = $_POST["name"] ;
                header('Location: helloo.php');
            }

        ?>

    </div>

    
</body>
</html>