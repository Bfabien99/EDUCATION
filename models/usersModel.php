<?php

    class usersModel{

        public function dbconnect(){
            $bdd= new PDO("mysql:host=localhost;dbname=dotlearn;charset=UTF8", "root", "");
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

            if (!$bdd) {
                echo "ERROR";
                die();
            }
            else {
                return $bdd;
            }
        }

        public function save($name,$username,$email,$gender,$birth,$password){
            $db = $this->dbconnect();
            $query = $db->prepare("INSERT INTO users (name,username,email,gender,birth,password,created_at) VALUES (:name,:username,:email,:gender,:birth,:password,:created_at)");
            $query->execute([
                ':name'=>$name,
                ':username'=>$username,
                ':email'=>$email,
                ':gender'=>$gender,
                ':birth'=>$birth,
                ':password'=>$password,
                ':created_at'=>date("Y-m-d H:i:s")
            ]);
        }

    }