<?php
    $err = "";
    $succes = false;
    function checkInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

        if(isset($_POST))
        {   
            if(!empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["birth"])){
                $username = checkInput(strtolower($_POST["username"]));
                $email = checkInput(strtolower($_POST["email"]));
                $birth = checkInput($_POST["birth"]);
                $succes = true;
            }
            else{
                $err = "<span class='red'>Fill all input please!</span>";
            }
            
        }