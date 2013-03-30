<?php
require_once 'connect/mysql_connect.php';
require_once 'fragments/functions.php';

?> 
<!DOCTYPE html>
<html lang="eng">
    <head>
        <title><?php echo $title ?></title> <!-- Title set by a php echo, this allows me to set the variable on each page thus making it more dynamic. --> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> <!-- Set the charset for the broswer -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- This works with the bootstrap to dynamically change the site depending on the device size. -->
        
        <link href="css/bootstrap.min.css"  rel="stylesheet" media="screen"> <!-- Bootstrap css --> 
        <link href="css/bootstrap.responsive.min.css"  rel="stylesheet" media="screen">
        <link href="css/custom-style.css"  rel="stylesheet" media="screen">
        <script src="js/bootstrap.min.js"></script> <!-- Bootstrap javascript -->
        <script src="js/formjs.js"></script>
        <script src="js/sha512.js"></script>
    </head>
    
    <body>
  
        <!-- Head container --> 
        <div class="container">
            <div class="row">
                <div class="span10" id="head"></div>
                <div class="span2"  id="head_navigation">
                    <nav>
                    <?php
                    // Include database connection and functions here.
                    sec_session_start();
                    if(login_check($mysqli) == true) {
                    echo 'nav href="login.php">Control Panel</a>' ;
 
                    } else {
                        echo '<a href="login.php">Login </a>';
                    } ?>    
                    </nav>
                </div>
            </div>

