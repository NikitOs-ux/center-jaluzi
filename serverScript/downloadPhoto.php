<?php
    require_once 'connectDB.php';

    function dropTable(){
        global $link;
        $sql = "TRUNCATE TABLE `gallery_photo`;";
        $result=mysqli_query($link, $sql);
    }

    function addPhotoDB($name, $path){
        global $link;
        $sql = "INSERT INTO `gallery_photo` (`id`, `name`, `fullSrc`) VALUES (NULL, '".$name."', '".$path."');";
        $result=mysqli_query($link, $sql);
    }
    $localPath = '/img/gallery_photo/jaluzicentr_2022_3_13_20_22_35';
    $dir = $_SERVER['DOCUMENT_ROOT'].$localPath; // путь к директории на сервере
    $photosInDir = scandir($dir); // получение списка файлов их указанной директории
    $scanned_directory = array_diff($photosInDir, array('..', '.')); //убираем лишние элементы
    dropTable();
    foreach ($scanned_directory as $key => $value) {
        $path = $localPath.'/'.$value;
        addPhotoDB($value, $path);
    }
?>