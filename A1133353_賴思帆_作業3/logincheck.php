<?php
session_start();

$uID=$_POST["uID"];
$uPWD=$_POST["uPWD"];

$fID = "student";
$fPWD = "123456789";

$aID='admin';
$aPWD='123456';

$tID='teacher';
$tPWD='123456';

$date=strtotime("+5 days",time());

    if($uID == $fID && $uPWD == $fPWD){
        // 登入成功 → 進入報名表
        header("Refresh:1;url=success.php");
        setcookie("uName",$uID,$date);
        $_SESSION['login']='student';
    }elseif($uID == $aID && $uPWD==$aPWD){
        header("Refresh:1;url=admin.php");
        setcookie("uName",$uID,$date);
        $_SESSION['login']='admin';
    }elseif($uID==$tID && $uPWD==$tPWD){
        header("Refresh:1;url=teacher.php");
        setcookie("uName",$uID,$date);
        $_SESSION['login']='teacher';
    }
    else{
        echo"帳號或密碼錯誤";
        header("Refresh:2; url=login.php");
    }


?>