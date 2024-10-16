<?php

    include "../../config/member_config.php";

    header("Access-Control-Allow-Methods : POST");
    header("Content-Type : application/json");

    if($_SERVER['REQUEST_METHOD']=="PUT" || $_SERVER['REQUEST_METHOD'] == "PATCH"){
        
        $config = new Config();

        $input = file_get_contents("php://input");

        parse_str("input,$_UPDATE");

        $id = $_UPDATE['id'];
        $name = $_UPDATE['name'];
        $amount = $_UPDATE['amount'];

        $res=$config->updateCategory($id,$name,$amount);

        if($res){
            $arr['data'] = "member updated successfully...";
        }
        else{
            $arr['data'] = "member updation failed...";
        }

    }
    else{
        $arr['error'] = "only PUT and PATCH http method is allowed...";
    }

    echo json_encode($arr);
?>