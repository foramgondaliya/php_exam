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
        function addAuthor($name,$des){
            $this->initConnection();

            $query = "INSERT INTO book_author(name,des) VALUES('$name','$des');";

            $res = mysqli_query($this->con,$query);

            return $res;

        }
        function fetchAllAuthor(){
            $this->initConnection();

            $query = "SELECT * FROM book_author;";

            $res = mysqli_query($this_con,$query);

            return $res;
        }
        function updateAuthor($id,$name,$des){
            $this->initConnection();

            $query = "UPDATE book_category SET id='$id, name='$name',des='$des' WHERE id=$id";

            $res = mysqli_query($this->con,$query);

            return $res;
        }
        function deleteAuthor($id){
            $this->initConnection();

            $query = "DELETE FROM book_author WHERE id=$id";

            $res = mysqli_query($this->con,$query);

            return $res;
        }
        function fetchSingleAuthor($id){
            $this->initConnection();

            $query="SELECT * FROM book_author WHERE id=$id;";

            $res = mysqli_query($this->con,$query);

            return $res;
        }
    }
?>