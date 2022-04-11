<?php
    require_once 'connectDB.php';
    
    function countPhoto(){
        global $link;
        $sql = "SELECT COUNT(*) FROM `gallery_photo`";
        $result=mysqli_query($link, $sql);
        $response =[];
        while ($row = mysqli_fetch_assoc($result)){
            array_push($response, $row);
        }        
        return $response[0]['COUNT(*)'];
    }

    echo countPhoto();
?>