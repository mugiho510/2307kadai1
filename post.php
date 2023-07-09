<html>
<head>
<meta charset="utf-8">
<title>POST練習</title>
<style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        ul {
            margin-top: 20px;
        }
        ul li {
            list-style-type: none;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<form action="write.php" method="post">
	お名前: <input type="text" name="name">
	EMAIL: <input type="text" name="mail">
	マイナンバー：<input type="password" name="password">
	マイナンバーカードを持っていますか: <label><input type="radio" name="name_radio" value="1">持っていない</label>
			<label><input type="radio" name="name_radio" value="2" checked>持っていないが申請予定</label>
			<label><input type="radio" name="name_radio" value="3">持っているが使っていない</label>
			<label><input type="radio" name="name_radio" value="4">持っており使っている</label>
			<label><input type="radio" name="name_radio" value="5">持っているが返納したい</label>
	マイナンバーカードの満足度<select name="name_select1">
 		 <option value=""></option>
  		<option value="1">1</option>
  		<option value="2">2</option>
  		<option value selected="3">3</option>
  		<option value="4">4</option>
  		<option value="5">5</option>
		</select>
	マイナンバーについての意見を教えてください：<input type="text" name="kanso">

	<input type="submit" value="送信">
</form>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>