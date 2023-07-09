<?php
// ファイルを変数に格納
$file = fopen('data/data.txt', 'r'); // ファイルを開く

// 表のヘッダー行を出力
echo "<table>";
echo "<tr>
        <th>入力日時</th>
        <th>名前</th>        
        <th>E-mail</th>  
        <th>マイナンバー</th>  
        <th>感想①</th>  
        <th>感想②</th>  
        <th>フリーコメント</tr>";

// ファイル内容を1行ずつ読み込んで出力
while (($str = fgets($file)) !== false) {
    $columns = explode(",", $str);

    echo "<tr>";
    foreach ($columns as $column) {
        echo "<td>" . $column . "</td>";
    }
    echo "</tr>";
}

fclose($file); // ファイルを閉じる

echo "</table>";

// スタイルの定義
echo "<style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
      </style>";

?>


