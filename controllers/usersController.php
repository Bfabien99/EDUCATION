<?php
    require "models/usersModel.php";

    class usersController{

        public function add($name,$username,$email,$gender,$birth,$password){
            $callModel = new usersModel();
            $execute = $callModel->save($name,$username,$email,$gender,$birth,$password);
        }
    }