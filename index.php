<?php
    require "vendor/autoload.php";
    require "controllers/usersController.php";

    function crypt_steph($string)
    {
        $string = md5($string);
        $string = crypt($string, '$5$rounds=50$charteuse$');
        $string = sha1($string);
        $string = hash('gost', $string);
        return $string;
    }

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



    $router->map('POST',"/EDUCATION/signup",function()
    {   
        include 'functions/cleanInput.php';
        $request = new usersController();
        if (!empty($succes)) {
            $request->add($name,$username,$email,$gender,$birth,crypt_steph($password));
            $name=$username=$email=$gender=$birth=$password="";
        }
        
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