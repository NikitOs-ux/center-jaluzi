<?php 
$link = mysqli_connect('localhost','vh512721_center-jaluzi','yXtTQNxsmKT7','vh512721_center-jaluzi');
mysqli_set_charset($link, "utf8mb4");
if(mysqli_connect_errno()){
	echo 'Ошибка подключения к БД ('.mysqli_connect_errno().'): '.mysqli_connect_error();
	exit();
}
?> 