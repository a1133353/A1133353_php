<?php
session_start();
$display_id = isset($_COOKIE['uName']);
$display_id = $_COOKIE['uName'] ?? "未知";

if(isset($_SESSION['login'])){
    if($_SESSION['login']=='student'){
    echo"<h1>welcom!login success</h1></br>";
    echo"your id is ".$display_id."</br>"; 
    echo "<a href='logout.php'>Logout<a>";
    }
}else{
    echo"<h1>非法進入</h1>";
    header("Refresh:3;url=login.php");
    }


?>