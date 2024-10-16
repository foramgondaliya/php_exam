<?php

    include "../../config/author_config.php";

    header("Access-Control-Allow-Methods : POST");
    header("Content-Type : application/json");

    if($_SERVER['REQUEST_METHOD']=="POST"){
        
        $config = new Config();

        $name = $_POST['name'];
        $des = $_POST['des'];

        $res=$config->addAuthor($name,$des);

        if($res){
            $arr['data'] = "Author inserted successfully...";
        }
        else{
            $arr['data'] = "Author insertion failed...";
        }

    }
    else{
        $arr['error'] = "only POST http method is allowed...";
    }

    echo json_encode($arr);
?>