<?php
    // Create or access a local session.
    session_start();
    
    // Get the database connection file if it is required.
    require_once 'library/connections.php';
    
    // Access the functions located in the library.
    require_once 'library/functions.php';
    
    // Setting $action to NULL
    $action = filter_input(INPUT_POST, 'action');
    
    // Basically just sending the user straight the the homepage. 
    // If there are anny errors, throw 404 error.
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
        
         if ($action == NULL) {
            $action = 'home';
        }
    }
    
    // Check if the firstname cookie exists, get its value.
    // In this case since my main website will not deal with sessions or user logging in, this step is not necessary.
    /*
    if (isset($_COOKIE['firstname'])) {
        $cookieFirstname = filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_STRING);
    }
    */
    
    switch ($action) {
        case 'home':
            include 'views/home_page.php';
            break;
        case 'shop':
            include '';
            break;
        case 'admin':
            include '';
            break;
        default :
            include 'views/home_page.php';
    }