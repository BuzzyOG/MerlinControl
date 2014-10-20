<?php 
    // include the configs / constants for the database connection
    require_once("config/db.php");
    // Load header
    include './assets/header.php';
    // load the login class
    require_once("classes/Login.php");
    // Process the page loading
    require("classes/ProcessPage.php");

    // Process the page loading
    require("classes/VerifyEmail.php");

    $activeTab = "Login / Register";
    
    // Load navbar
    include './assets/navbar.php';

    // if logged in display content
    if ($login->isUserLoggedIn() == true) {
        include("views/v-verifyemail-signedin.php");
    } else {
        include("views/v-verifyemail.php");
    }


    // Load footer
    include("assets/footer.php");
    echo "<div style='margin-bottom: -500px;'></div>";
?>