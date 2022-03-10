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
            if(!empty($_POST["name"]) && !empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["gender"]) && !empty($_POST["birth"]) && !empty($_POST["password"]) && !empty($_POST["cpassword"]))
            {
                $name = checkInput(strtolower($_POST["name"]));
                $username = checkInput(strtolower($_POST["username"]));
                $email = checkInput(strtolower($_POST["email"]));
                $gender = checkInput(strtolower($_POST["gender"]));
                $birth = $_POST["birth"];
                $password = checkInput($_POST["password"]);
                $cpassword = checkInput($_POST["cpassword"]);

                if (strlen($username)<5){
                    $err = "<span class='red'>username should be at least 5 characters</span>";
                }
                elseif (strlen($password)<6){
                    $err = "<span class='red'>password should be at least 6 characters</span>";
                }
                elseif($password !== $cpassword){
                    $err = "<span class='red'>password are different</span>";
                }
                else{
                    $succes = true;
                }
            }
            else{
                $err = "<span class='red'>Fill all input please!</span>";
            }
            
        }
    