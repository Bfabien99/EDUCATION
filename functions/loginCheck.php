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
            if(!empty($_POST["name"]) && !empty($_POST["password"]))
            {
                $name = checkInput(strtolower($_POST["name"]));
                $password = checkInput($_POST["password"]);
                $succes = true;
            }
            else{
                $err = "<span class='red'>Fill all input please!</span>";
            }
            
        }