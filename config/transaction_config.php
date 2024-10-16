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
        function addMember($name,$amount){
            $this->initConnection();

            $query = "INSERT INTO book_members(name,amount) VALUES('$name','$amount');";

            $res = mysqli_query($this->con,$query);

            return $res;

        }
        function fetchAllMember(){
            $this->initConnection();

            $query = "SELECT * FROM book_members;";

            $res = mysqli_query($this_con,$query);

            return $res;
        }
        function updateMember($id,$name,$amount){
            $this->initConnection();

            $query = "UPDATE book_members SET id='$id, name='$name',amount='$amount' WHERE id=$id";

            $res = mysqli_query($this->con,$query);

            return $res;
        }
        function deleteMember($id){
            $this->initConnection();

            $query = "DELETE FROM book_members WHERE id=$id";

            $res = mysqli_query($this->con,$query);

            return $res;
        }
        function fetchSingleMember($id){
            $this->initConnection();

            $query="SELECT * FROM book_members WHERE id=$id;";

            $res = mysqli_query($this->con,$query);

            return $res;
        }
    }
?>