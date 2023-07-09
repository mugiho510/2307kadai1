<?php

// 下の関数はエラー表示の詳細を表示させるための関数。
// ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
// \error_reporting(E_ALL); // 全てのレベルのエラーを表示してください

ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>
<?php
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
}
$name = h($_POST["name"]);
$mail = h($_POST["mail"]);
$password = h($_POST["password"]);
$name_radio = h($_POST["name_radio"]);
$name_select1 = h($_POST["name_select1"]);
$kanso = h($_POST["kanso"]);

//文字作成
// $str　= date("Y-m-d H:i:s");はDATA取得時刻を取得する関数

$str = date("Y-m-d H:i:s").",".$name.",".$mail.",".$password
        .",".$name_radio.",".$name_select1.",".$kanso;

// この関数を使うとfileにDATAを$file = fopen("data/data.txt","a"); // ファイル読み込み
// fwrite($file, $str."\n");
// fclose($file);でDATAをぶち込む関数 aというのはaddの略で追記して、という意味。
// 　　fopen(開く対象, DATAの追記方法)


//File書き込み
$file = fopen("data/data.txt","a"); // ファイル読み込み
fwrite($file, $str."\n");
fclose($file);

?>
​
​
<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
​
<h1>ご協力ありがとうございました。
    アンケート結果を真摯に受け止め、鋭意活動してまいります。
</h1>

<ul>
<li><a href="input.php">戻る</a></li>
</ul>
</body>
</html>