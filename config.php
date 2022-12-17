<?php
$mysqli=new mysqli('localhost','root','','electric');
if($mysqli -> connect_error){
    echo "Kết nối thất bại";
    exit();
}
?>