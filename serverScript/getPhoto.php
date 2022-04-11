<?php
    require_once 'connectDB.php';
    
    function getPhoto($min, $max){
        global $link;
        $sql = "SELECT * FROM `gallery_photo` WHERE id BETWEEN '".$min."' and '".$max."';";
        $result=mysqli_query($link, $sql);        
        $response =[];
        while ($row = mysqli_fetch_assoc($result)){
            array_push($response, $row);
        }
        return $response;
    }

    echo json_encode(getPhoto($_GET['min'], $_GET['max']));
?>