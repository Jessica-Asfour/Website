<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once("../Filebase/Filebase/BistroOttoDatabase.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../CommonStyling/BistroOttoCommon.css" />
</head>
<!--------Navigation Bar------->
<nav>
    <div class="topnav" id="myTopnav">

        <div class="topnav-centered">
            <a href="../HomePage/Homepage.php" class="active" id="Logo"><img src="../CommonStyling/BistroOtto.png" alt="logo" id="BOLogo"></a>
        </div>

        <a href="../MenuPage/menu.php">menu</a>
        <a href="../DeliveryPage/delivery.php">take-out</a>
        <a href="../ReservationsPage/reservation.php">reservations</a>
        <a href="../ReviewsPage/reviews.php">reviews</a>

        <div class="topnav-right">
            <a href="../ContactPage/Contact.php">contact</a>
            <a href="../AboutPage/about.php">about</a>
            <a href="../PressPage/PressPage.php">press</a>
            <a href="../LoginPage/LoginPage.php" <?php echo isset($_SESSION["isLoggedIn"]) ? "id=\"logoutlink\"" : ""?>>
                    <?php
                    if (isset($_SESSION["isLoggedIn"])) 
                    {
                        if(isset($_SESSION["username"]))
                        {
                            $navbarUser = $_SESSION["username"];
                            $firstname = getFirstName($database, $navbarUser);
                                
                                echo "Hello, ".$firstname;
                        }
                    }
                    else
                    {
                        echo "log in";
                    } 
                    ?>
            </a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
</nav>

<div class="icon-bar">
    <a href="https://www.facebook.com/BistroOtto.Montreal" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
    <a href="https://www.instagram.com/otto.bistro/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
</div>

</html>