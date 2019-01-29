<?php
	
	require_once "connect.php";
	$mysqli = db_connect();
	$mysqli->set_charset('utf8');
	//UTF-8じゃなく、utf8

	//var_dump($_POST);
	$regard = htmlentities($_POST['regard'], ENT_QUOTES, 'UTF-8');
	$name = htmlentities($_POST['name'], ENT_QUOTES, 'UTF-8');
	$tel = htmlentities($_POST['tel'], ENT_QUOTES, 'UTF-8');
	$mail = htmlentities($_POST['mail'], ENT_QUOTES, 'UTF-8');
	$sex = htmlentities($_POST['sex'], ENT_QUOTES, 'UTF-8');
	//$triggerBefore = implode(",", $_POST['trigger']);
	$trigger = htmlentities($_POST['trigger'], ENT_QUOTES, 'UTF-8');
	$content = htmlentities($_POST['content'], ENT_QUOTES, 'UTF-8');
	$sql = "SELECT * FROM form002";

	$result = $mysqli->query($sql);
	$count = $result->num_rows;
	$count= $count+1;
	date_default_timezone_set('Asia/Tokyo');
	$date = date("Y-m-d H:i:s");
	//var_dump($count);

	//$mysqli = db_connect();
	//$mysqli->set_charset('UTF-8');
	$query = "INSERT INTO form001 (`id`, `regard`, `name`, `tel`, `mail`, `sex`, `trigger`, `content`, `delete_flg`) VALUES ('$count', '$regard', '$name', '$tel', '$mail', '$sex', '$trigger', '$content', 'false')";
	//var_dump($query);
	$mysqli->real_escape_string($query);
	if($result = $mysqli-> query($query)){
		echo 'INSERT成功';
	}else{
		echo "INSERT失敗";
	}
	$mysqli->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>完了しました</h2>
</body>
</html>