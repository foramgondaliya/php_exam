<?php

    include "../../config/book_config.php";

    header("Access-Control-Allow-Methods : POST");
    header("Content-Type : application/json");

    if($_SERVER['REQUEST_METHOD']=="DELETE"){
        
        $config = new Config();

        $input = file_get_contents("php://input");

        parse_str("input,$_DELETE");

        $id = $_DELETE['id'];

        $res=$config->deleteCategory($id);

        if($res){
            $arr['data'] = "category deleted successfully...";
        }
        else{
            $arr['data'] = "category deletion failed...";
        }

    }
    else{
        $arr['error'] = "only DELETE http method is allowed...";
    }

    echo json_encode($arr);
?>