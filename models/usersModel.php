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

        public function get($name,$password){
            $db = $this->dbconnect();
            $query = $db->prepare("SELECT * FROM users WHERE password = :password  AND (email = :email OR username = :username)");
            $query->execute([
                'email'=>$name,
                'username'=>$name,
                'password'=>$password
            ]);
            $result = $query->fetch();
            if (!$result) 
            {
                return false;
            }
            else 
            {
                return $result;
            }
        }

        public function recovery($username,$email,$birth){
            $db = $this->dbconnect();
            $query = $db->prepare("SELECT * FROM users WHERE username = :username  AND email = :email AND birth = :birth");
            $query->execute([
                'username'=>$username,
                'email'=>$email,
                'birth'=>$birth
            ]);
            $result = $query->fetch();
            if (!$result) 
            {
                return false;
            }
            else 
            {
                return $result;
            }
        }

        public function isexist($username,$email){
            $db = $this->dbconnect();
            $query = $db->prepare("SELECT * FROM users WHERE username LIKE '%$username%' OR email LIKE '%$email%'");
            $query->execute();
            $result = $query->fetch();
            if (!$result) 
            {
                return false;
            }
            else 
            {
                return $result;
            }
        }

    }