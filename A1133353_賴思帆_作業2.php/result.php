<?php

echo "<h2>報名成功！以下是你的資料：</h2>";

echo "姓名：" . $_POST["name"] . "<br>";
echo "年齡：" . $_POST["age"] . "<br>";
echo "性別：" . $_POST["gender"] . "<br>";
echo "Email：" . $_POST["email"] . "<br>";
echo "電話：" . $_POST["phone"] . "<br>";
echo "城市：" . $_POST["city"] . "<br>";

// checkbox（要用迴圈）
if(isset($_POST["interest"])){
    echo "興趣：";
    foreach($_POST["interest"] as $i){
        echo $i . " ";
    }
    echo "<br>";
}

echo "備註：" . $_POST["comment"] . "<br>";

?>