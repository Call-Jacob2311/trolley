<?php
?>
<!--
- Updated website for the Art City Trolley. A restaurant in Springville.
- Author: Jacob Call
- Date: 3/17/2020
- ToDo: Update Website, Make it more manageable, and implement a online order system.
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <!--Tells IE to use the latest rendering engine-->
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!--Set the page width, zoom to the size of the device-->
            <meta name="viewport" content="width = device-width, initial-scale = 1">
            <!--Install bootstrap CSS Libraries (Can download library for faster load speeds)
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            -->
            <link rel="stylesheet" type="text/css" href="/Trolley_Website/css/main_css.css">
            <script src="/Trolley_Website/js/main_js.js"></script>
            <title>Art City Trolley - Restaurant In Springville</title>
    </head>
    
    <body>
        <div id="header" class="header">
            <img src="/Trolley_Website/imgs/Logo.png" alt="The main logo of the Art City Trolley" id="main-logo" class="logo">
            <h1 class="move">Art City Trolley</h1>
                <ul class="link_style_one">
                    <li class="display"><a href="default.asp">Home</a></li>
                    <li class="display"><a href="news.asp">Order Online</a></li>
                    <li class="display"><a href="contact.asp">Menu</a></li>
                    <li class="display"><a href="about.asp">Our Story</a></li>
                    <li class="display"><a href="contact.asp">Contact</a></li>
                    <li class="display_none"><a href="menu.asp">&#9776;</a></li>
                </ul>
        </div>
        
        <div id="photo_carousel" class="photo_carousel">
            
        </div>
    </body>
</html>
