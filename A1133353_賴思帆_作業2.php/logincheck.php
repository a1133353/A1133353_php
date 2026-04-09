<?php
$fID = "fran";
$fPWD = "123456789";

if(isset($_POST["uID"]) && isset($_POST["uPWD"])){

    $uID = $_POST["uID"];
    $uPWD = $_POST["uPWD"];

    if($uID == $fID && $uPWD == $fPWD){
        // 登入成功 → 進入報名表
        header("Location: form.php");
        
    }else{
        echo"帳號或密碼錯誤";
        header("Refresh:2; url=login.php");
    }

}
?>