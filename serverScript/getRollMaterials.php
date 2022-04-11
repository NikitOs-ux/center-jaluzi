<? require_once 'connectDB.php';
   function getRolls(){
    global $link;
    $sql = "SELECT * FROM `rollmaterials`";
    $result=mysqli_query($link, $sql);
    $response =[];
    while ($row = mysqli_fetch_assoc($result)){
        array_push($response, $row);
    }
    return $response;
}
 echo json_encode(getRolls());