<?php

    class Config{
        private $HOST_NAME = "localhost";
        private $USER_NAME = "root";
        private $PASSWORD = "";
        private $DB_Name = "my_db";

        public $con;

        function initConnection(){
            $this->con = mysqli_connect($this->HOST_NAME,$this->USER_NAME,$this->PASSWORD,$this->DB_Name);

            if(!$this->con){
                die("Connection failled...");
            }
        }
        function addUser($name,$password){
            $this->initConnection();

            $query = "INSERT INTO book_user(name,password) VALUES('$name','$password');";

            $res = mysqli_query($this->con,$query);

            return $res;

        }
        function fetchAllUser(){
            $this->initConnection();

            $query = "SELECT * FROM book_user;";

            $res = mysqli_query($this_con,$query);

            return $res;
        }
        function updateUser($id,$name,$password){
            $this->initConnection();

            $query = "UPDATE book_user SET id='$id, name='$name',des='$password' WHERE id=$id";

            $res = mysqli_query($this->con,$query);

            return $res;
        }
        function deleteUser($id){
            $this->initConnection();

            $query = "DELETE FROM book_user WHERE id=$id";

            $res = mysqli_query($this->con,$query);

            return $res;
        }
        function fetchSingleUser($id){
            $this->initConnection();

            $query="SELECT * FROM book_user WHERE id=$id;";

            $res = mysqli_query($this->con,$query);

            return $res;
        }
    }
?>