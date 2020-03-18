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
            <link rel="stylesheet" type="text/css" href="/css/main_css.css">
            <title>Art City Trolley - Restaurant In Springville</title>
    </head>
    
    <body>  
        <div id="photo_carousel" class="photo_carousel">
            <div class="mySlides fade">
              <img src="/imgs/test2.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
              <img src="/imgs/test3.jpg" style="width:100%">
            </div>
            
            <div class="mySlides fade">
              <img src="/imgs/test3.jpg" style="width:100%">
            </div>
            
        </div> 
        
        <div id="message" class="message">
            <div id="message_text" class="message_text">
                <h3>Try our new online ordering!</h3>
                <h4>Don't have to leave the house, no extra charges!</h4>
                <a href="" class='big_link'>Click here!</a>
            </div>
            
            <br>
            
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
            </div>
        </div>
        
        
        
        <div id="header" class="header">
            <img src="/imgs/Logo.png" alt="The main logo of the Art City Trolley" id="main-logo" class="logo">
            <h1 class="move" id="move">Art City Trolley</h1>
                <ul class="link_style_one">
                    <li class="display"><a href="default.asp">Home</a></li>
                    <li class="display"><a href="news.asp">Order Online</a></li>
                    <li class="display"><a href="contact.asp">Menu</a></li>
                    <li class="display"><a href="about.asp">Our Story</a></li>
                    <li class="display"><a href="contact.asp">Contact</a></li>
                    <li class="display_none" id="z4"><a href="menu.asp">&#9776;</a></li>
                </ul>
        </div>
        
        <div id="footer" class="footer">
            <div>
                <p class="title">Partners</p>
                <div class="flex">
                <img src="/imgs/partner.png" alt="hippodrome logo" class="small_icon">
                <img src="/imgs/partner2.png" alt="Kelly logo" class="small_icon">
                <img src="/imgs/partner3.png" alt="Legends logo" class="small_icon">
                </div>
            </div>
            
            <br>
            
            <div>
                <p class="title">Social Media</p>
                <div class="flex">
                    <img src="/imgs/social1.png" alt="twitter logo" class="social_media_icons">
                    <img src="/imgs/social2.png" alt="insta logo" class="social_media_icons">
                    <img src="/imgs/social3.png" alt="Facebook logo" class="social_media_icons">
                </div>
            </div>
            
            <br>
            
            <div>
                <p>2020 Art City Trolley All Rights Reserved</p>
                <p>Site by Jacob Call</p>
            </div>
        </div>
        
        
        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
              showSlides(slideIndex += n);
            }

            function currentSlide(n) {
              showSlides(slideIndex = n);
            }

            function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              
              
            }  
            
        </script>
    </body>
</html>
    