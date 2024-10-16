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
        function addCategory($name){
            $this->initConnection();

            $query = "INSERT INTO book_category(name) VALUES('$name');";

            $res = mysqli_query($this->con,$query);

            return $res;

        }
        function fetchAllCategory(){
            $this->initConnection();

            $query = "SELECT * FROM book_category;";

            $res = mysqli_query($this_con,$query);

            return $res;
        }
        function updateCategory($id,$name){
            $this->initConnection();

            $query = "UPDATE book_category SET id='$id, name='$name' WHERE id=$id";

            $res = mysqli_query($this->con,$query);

            return $res;
        }
        function deleteCategory($id){
            $this->initConnection();

            $query = "DELETE FROM book_category WHERE id=$id";

            $res = mysqli_query($this->con,$query);

            return $res;
        }
        function fetchSingleCategory($id){
            $this->initConnection();

            $query="SELECT * FROM book_category WHERE id=$id;";

            $res = mysqli_query($this->con,$query);

            return $res;
        }
    }
?>