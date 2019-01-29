<?php
//DB一覧表示文字化け対策
header("Content-type: text/html; charset=utf-8");
var_dump($_POST);

//DBConnection
require_once "connect.php";

//文字化け防止
mysqli_set_charset($db, 'utf8');
if(empty($_POST)){
	echo '<a href="updateList1.php">updateList1.php</a>←更新一覧画面へ';
}else{
	if(!isset($_POST['id'])|| !is_numeric($_POST['id'])){
		echo "IDエラー";
		exit();
	}else{
		$stmt = mysqli_prepare($db, "SELECT * FROM form WHERE id=?");
		var_dump($stmt);

		if($stmt){

			//プレースホルダーへ実際の値を設定する
			$id = $_POST['id'];
			var_dump($id);
			mysqli_stmt_bind_param($stmt, 'i', $id);
			
			//ステートメントの準備
			mysqli_stmt_execute($stmt);

			//
			$name = $_POST['name'];
			mysqli_stmt_bind_result($stmt, $id, $name);

			mysqli_stmt_fetch($stmt);

			mysqli_stmt_close($stmt);


		}
		/*if($stmt){

		}*/
	}
	
}

//$sql = "SELECT * FROM form002";

//$result = mysqli_query($db, $sql);
/*
//クエリ失敗
if(!$result){
	echo 'クエリ失敗';
}*/

var_dump($_POST);

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>更新確認画面</title>
</head>
<body>
	<h2>変更画面</h2>

	<form action="updateComplete.php" method="POST">
		<input type="text" name="name" value="<?php //echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
		?>">
		<input type="hidden" name="id" value="<?=$id?>">
		<input type="submit" value="変更する">
	</form>
</body>
</html>