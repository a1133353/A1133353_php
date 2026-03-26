<html>
<head>
    <title>暑假夏令營報名表</title>
</head>

<body style="background-color: lightblue;">

<center>
    <img src="https://tse3.mm.bing.net/th/id/OIP.H9phl2wi3vTl3vM9yAnKfgHaFj?rs=1&pid=ImgDetMain&o=7&rm=3
         width="450" style="border-radius:10px;">
    
    <h2 style="color:#0077b6;">🌊 2026 夏日冒險夏令營 🌴</h2>
    
    <hr><hr/>
    <p style="width:450px;">
    <b>
        這個夏天，一起離開日常，投入陽光與海風的懷抱！
        我們準備了豐富的戶外活動、團隊挑戰與趣味課程，
        讓你在歡樂中認識新朋友，留下難忘的回憶。
    </b>
    </p>
    <hr><hr/>
</center>

<br/>
<form action="" method="">
    <center><h1>暑假夏令營報名表</h1></center><br/>
<!-- 基本資料 -->
<h3>一、基本資料</h3>
姓名：<input type="text" name="name" placeholder="請輸入姓名" required><br/><br/>
學號: <input type="stuid" name="stuid" placeholder="請輸入學號" require><br/><br/>
年齡：<input type="number" name="age" min="10" max="25"><br/><br/>

性別：
男 <input type="radio" name="gender" value="male">
女 <input type="radio" name="gender" value="female">
其他 <input type="radio" name="gender" value="other"><br/><br/>

出生日期：<input type="date" name="birthday"><br/><br/>

<!-- 聯絡資訊 -->
<h3>二、聯絡資訊</h3>
Email：<input type="email" name="email" required><br/><br/>
電話：<input type="tel" name="phone"><br/><br/>
個人臉書網址:：<input type="url" name="website"><br/><br/>

居住地：
<select name="city">
    <option>基隆</option>
    <option>宜蘭</option>
    <option>台北</option>
    <option>新北</option>
    <option>桃園</option>
    <option>新竹</option>
    <option>苗栗</option>
    <option>台中</option>
    <option>彰化</option>
    <option>南投</option>
    <option>雲林</option>
    <option>嘉義</option>
    <option>台南</option>
    <option>高雄</option>
    <option>屏東</option>
    <option>台東</option>
    <option>花蓮</option>
</select>
<br/><br/>

<!-- 活動選項 -->
<h3>三、活動選項</h3>

興趣：
游泳 <input type="checkbox" name="interest[]" value="swim">
音樂 <input type="checkbox" name="interest[]" value="music">
遊戲 <input type="checkbox" name="interest[]" value="game">
閱讀 <input type="checkbox" name="interest[]" value="reading">
<br/><br/>

最期待的活動類型：
<input type="range" name="funlevel" min="1" max="10">
（1=靜態 10=超刺激）
<br/><br/>

喜歡的顏色：
<input type="color" name="color"><br/><br/>

報到時間：
<input type="time" name="time"><br/><br/>

<!-- 檔案上傳 -->
<h3>四、資料上傳</h3>
上傳學生證：
<input type="file" name="file"><br/><br/>

<!-- 健康狀況 -->
<h3>五、健康狀況</h3>
是否有過敏：
有 <input type="radio" name="allergy" value="yes">
沒有 <input type="radio" name="allergy" value="no"><br/><br/>

<!-- 隱藏欄位 -->
<input type="hidden" name="camp" value="summer2026">

<!-- 備註 -->
備註：<br/>
<textarea name="comment" rows="4" cols="50"></textarea>

<br/><br/>

<!-- 按鈕 -->
<center>
<input type="submit" value="送出報名" style="background-color:#00b4d8; color:white; padding:8px; border:none;">
<input type="reset" value="清除資料">
</center>

</form>

</div>

</body>
</html>