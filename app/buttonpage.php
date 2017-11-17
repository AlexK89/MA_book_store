<?php
    session_start();
    if(empty($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
    }
    echo "Our cart: ";
?>
<p  style="text-align: center; margin-top: 200px"><a href="emptypage.php?id=3">Click on me</a></p>
<p  style="text-align: center; margin-top: 200px"><a href="removeBook.php">Checkout</a></p>

