<?php
    require "vendor/autoload.php";
    $router = new AltoRouter();


    $router->map('GET',"/EDUCATION/",function()
    {   
        require 'views/login.php'; 
    });
    $router->map('GET',"/EDUCATION/forgot",function()
    {   
        require 'views/forgot.php'; 
    });
    $router->map('GET',"/EDUCATION/signup",function()
    {   
        require 'views/signup.php'; 
    });


    $match = $router->match();

    if( is_array($match) && is_callable( $match['target'] ) ) 
    {
        call_user_func_array( $match['target'], $match['params'] ); 
    } 
    else 
    {
    // no route was matched
        header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    }