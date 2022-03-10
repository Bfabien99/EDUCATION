<?php
    require "models/usersModel.php";

    class usersController{

        public function add($name,$username,$email,$gender,$birth,$password){
            $callModel = new usersModel();
            $execute = $callModel->save($name,$username,$email,$gender,$birth,$password);
        }

        public function isindb($name,$password){
            $callModel = new usersModel();
            $execute = $callModel->get($name,$password);
            if (!$execute) 
            {
                return false;
            }
            else 
            {
                return $execute;
            }
        }

        public function get_password($username,$email,$birth){
            $callModel = new usersModel();
            $execute = $callModel->recovery($username,$email,$birth);
            if (!$execute) 
            {
                return false;
            }
            else 
            {
                return $execute;
            }
        }

        public function user_exist($username,$email){
            $callModel = new usersModel();
            $execute = $callModel->isexist($username,$email);
            if (!$execute) 
            {
                return false;
            }
            else 
            {
                return $execute;
            }
        }

    }