<!DOCTYPE html>
<html lang="ja">
 <head>
 <meta charaset="UTF-8">
 <title>4eachblog 掲示板</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
      
<body>
 
<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","mysql");
$stmt = $pdo->query("select * from 4each_keijiban");

?>


    <div class="gazo">
    <img src="4eachblog_logo.jpg">
    </div>

<header>
 		<div class="logo"></div>
 		<ul>
 			<li>トップ</li>
 			<li>プロフィール</li>			
 			<li>4eachについて</li>
 			<li>登録フォーム</li>
 			<li>問い合わせ</li>
 			<li>その他</li>
 		</ul>
</header>
 	
<main class ="main">
	<div class="main-container">
        <div class="right">
            <h1>プログラミングに役立つ掲示板</h1> 
           
            <div class="A">
                  		
        <form method="post" action="insert.php">
       
		<h3>入力フォーム</h3>
		
		<div>
		   <label>ハンドルネーム</label>
           <br>
           <input type="text" class="text" size="35"name="handlename">
        </div>
				
		<div>
           <label>タイトル</label>
           <br>
           <input type="text" class="text" size="35"name="title">
        </div>
		
		<div>
            <label>コメント</label>
            <br>
            <textarea cols="70" rows="10" name="comments"></textarea>
        </div>
		
		<div>
            <input type="submit" class="submit" value="投稿する">
        </div>
    </form>
		
            </div>
           
        </div>
    


        <div class="left">
            <h1>人気の記事</h1>
            <ul> 
                <li>PHPオススメ本</li>
                <li>PHP MYAdminの使い方</li>
                <li>今人気にエディタTop5</li>
                <li>HTMLの基礎</li>
            </ul>
        
            <h2>オススメリンク</h2>
            <ul> 
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ul>
        
            <h2>カテゴリ</h2>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
        </div>
    </div>
</main>
	
<?php

while($row = $stmt->fetch()) {

echo "<div class='box2'>";
    
echo "<form>";   
echo "<h4>".$row['title']."</h4>";    
echo $row['comments'];
echo "<div class='handlename'>posted by".$row['handlename']."</div>";
echo "</form>";
echo "</div> ";
}

?>


<footer>
    copyright internous l 4each blog is the one which provides A to Z about programming.
</footer>
  
</body>
</html>