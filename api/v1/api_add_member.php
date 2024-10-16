<?php

    include "../../config/member_config.php";

    header("Access-Control-Allow-Methods : POST");
    header("Content-Type : application/json");

    if($_SERVER['REQUEST_METHOD']=="POST"){
        
        $config = new Config();

        $name = $_POST['name'];

        $res=$config->addMember($name);

        if($res){
            $arr['data'] = "member inserted successfully...";
        }
        else{
            $arr['data'] = "member insertion failed...";
        }

    }
    else{
        $arr['error'] = "only POST http method is allowed...";
    }

    echo json_encode($arr);
?>