<?php

if(isset($_COOKIE['nName'])){
    echo $_COOKIE['nName']."歡迎回來";
    echo "<a href='cookiedel.php'>刪除cookie</a>";
}
?>
<form action="logincheck.php" method="POST">
    帳號：<input type="text" name="uID"><br/><br/>
    密碼：<input type="password" name="uPWD"><br/><br/>

    <input type="submit" value="登入">
</form>

<?php
echo time();
?>
