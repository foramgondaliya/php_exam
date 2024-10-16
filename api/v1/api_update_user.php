<?php

    include "../../config/user_config.php";

    header("Access-Control-Allow-Methods : POST");
    header("Content-Type : application/json");

    if($_SERVER['REQUEST_METHOD']=="PUT" || $_SERVER['REQUEST_METHOD'] == "PATCH"){
        
        $config = new Config();

        $input = file_get_contents("php://input");

        parse_str("input,$_UPDATE");

        $id = $_UPDATE['id'];
        $name = $_UPDATE['name'];
        $amount = $_UPDATE['password'];

        $res=$config->updateUser($id,$name,$password);

        if($res){
            $arr['data'] = "user updated successfully...";
        }
        else{
            $arr['data'] = "user updation failed...";
        }

    }
    else{
        $arr['error'] = "only PUT and PATCH http method is allowed...";
    }

    echo json_encode($arr);
?>