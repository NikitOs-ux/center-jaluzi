<? 
require_once 'connectDB.php';
   function getCliets(){
    global $link;
    $sql = "SELECT * FROM `callmaster`";
    $result=mysqli_query($link, $sql);
    $result =mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
}
 echo json_encode(getCliets());