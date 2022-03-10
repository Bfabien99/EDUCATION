<?php
    session_start();
    require "vendor/autoload.php";
    require "controllers/usersController.php";


    $router = new AltoRouter();


    $router->map('GET',"/EDUCATION/",function()
    {   
        unset($_SESSION["user_learn_email"]);
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
    $router->map('GET',"/EDUCATION/home",function()
    {   
        if (isset($_SESSION["user_learn_email"])) {
            require 'views/user/home.php'; 
        }else{
            header("location:/EDUCATION/"); 
        }
        
    });
    
////////////////* ROUTER POST PART *///////////////////

//PAGE LOGIN
    $router->map('POST',"/EDUCATION/",function()
    {   
        include 'functions/loginCheck.php';
        $request = new usersController();
        if (!empty($succes)) {
            $execute = $request->isindb($name,md5($password));
            if (!empty($execute)) {
                $_SESSION["user_learn_email"] = $name;
                header("location:home");
            }
            else {
                $msg = "<span class='red'>Password or username/email wrong</span>";
            }
            
        }
        
        require 'views/login.php'; 
        
    });

//PAGE FORGOT
    $router->map('POST',"/EDUCATION/forgot",function()
    {   
        include 'functions/recoveryClean.php';
        $request = new usersController();
        if (!empty($succes)) {
            $execute = $request->get_password($username,$email,$birth);
            if (!empty($execute)) {
                $msg = "<span class='red'>User exist</span>";
            }
            else {
                $msg = "<span class='red'>Sorry, we don't you</span>";
            }
            
        }
        require 'views/forgot.php'; 
    });

//PAGE SIGN UP
    $router->map('POST',"/EDUCATION/signup",function()
    {   
        include 'functions/cleanInput.php';
        $request = new usersController();
        if (!empty($succes)) {
            $exist = $request->user_exist($username,$email);
            if (!empty($exist)) {
                $msg = "<span class='red'>Username or email already exist</span>";
            }else{
                $request->add($name,$username,$email,$gender,$birth,md5($password));
                $name=$username=$email=$gender=$birth=$password="";
                $msg = "<span class='green'>account created succesfuly. You can login now</span>";
            }
            
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