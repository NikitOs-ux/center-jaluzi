<?
    // ini_set('display_errors','On');
    // error_reporting(E_ALL | E_STRICT);
    
    require_once 'connectDB.php';
    
$status = 0;

$inData = [
    $_POST['name'],
    $_POST['family'],
    $_POST['addres'],
    $_POST['telephone'],
    $_POST['type'],
    $_POST['date'],
    $_POST['time'],
    $_POST['comment']
];
    function writeInDataBase($name, $family, $addres, $telephone, $type, $date, $time, $comment, $status=0){
        global $link;

        $sql = "INSERT INTO `callmaster` (`id`, `name`, `family`, `adress`, `telephone`, `typeCurtains`, `date`, `time`, `comment`,`createDate` ,`status`) VALUES (NULL, '".$name."', '".$family."', '".$addres."', '".$telephone."', '".$type."', '".$date."', '".$time."', '".$comment."','".date("Y-m-d H:i:s")."', '".$status."');";
        $result=mysqli_query($link, $sql);
    }
    if($inData[0]=='' || $inData[1]=='' || $inData[2] == '' || $inData[3]=='' || $inData[4]=='' ){
        echo 'некорректно введены данны ';
    }
    else{
        for($i=0; $i<count($inData); $i++){
            $inData[$i] = mb_convert_case($inData[$i], MB_CASE_LOWER, "UTF-8");
            $inData[$i] = mb_convert_case($inData[$i], MB_CASE_TITLE, "UTF-8");
            $inData[$i] = trim($inData[$i]); 
            if($inData[$i]==''){
                $inData[$i] = 'NULL';
            }
        }        
        writeInDataBase($inData[0],$inData[1],$inData[2],$inData[3],$inData[4],$inData[5],$inData[6],$inData[7], $status);
    }
?>