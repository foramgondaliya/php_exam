<?php

    include "../../config/author_config.php";

    header("Access-Control-Allow-Methods : POST");
    header("Content-Type : application/json");

    if($_SERVER['REQUEST_METHOD']=="DELETE"){
        
        $config = new Config();

        $input = file_get_contents("php://input");

        parse_str("input,$_DELETE");

        $id = $_DELETE['id'];

        $res=$config->deleteAuthor($id);

        if($res){
            $arr['data'] = "author deleted successfully...";
        }
        else{
            $arr['data'] = "author deletion failed...";
        }

    }
    else{
        $arr['error'] = "only DELETE http method is allowed...";
    }

    echo json_encode($arr);
?>