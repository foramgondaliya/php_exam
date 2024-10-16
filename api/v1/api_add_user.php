<?php

    include "../../config/user_config.php";

    header("Access-Control-Allow-Methods : POST");
    header("Content-Type : application/json");

    if($_SERVER['REQUEST_METHOD']=="POST"){
        
        $config = new Config();

        $name = $_POST['name'];
        $password = $_POST['password'];

        $res=$config->addUser($name,$password);

        if($res){
            $arr['data'] = "User inserted successfully...";
        }
        else{
            $arr['data'] = "User insertion failed...";
        }

    }
    else{
        $arr['error'] = "only POST http method is allowed...";
    }

    echo json_encode($arr);
?>