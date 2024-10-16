<?php

    include "../../config/author_config.php";

    header("Access-Control-Allow-Methods : GET");
    header("Content-Type : application/json");

    if($_SERVER['REQUEST_METHOD']=="GET"){
        
        $config = new Config();

        $res=$config->fetchSingleAuthor();

        $all_record=[];

        while($record=mysqli_fetch_assoc($res)){
            array_push($all_record,$record);
        }

        echo json_encode($all_record);

    }
    else{
        $arr['error'] = "only POST http method is allowed...";
        echo json_encode($arr);
    }
?>