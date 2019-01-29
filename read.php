<?php
	require_once("connect.php");
	$mysqli = db_connect();
	//var_dump($mysqli);

	//文字化け防止
	$mysqli->set_charset('utf8');

	$query = 'SELECT * from form002';

	//クエリを実行します
	$result = $mysqli->query($query);

	//クエリ失敗
	if(!$result){
		echo $mysqli->error;
		exit();
		
	}

	//1行ずつ結果を配列で取得します
	while($row = $result->fetch_array(MYSQLI_ASSOC)){
		$rows[] = $row;
	}

	//結果セットを解放
	$result->free();

	//データベース切断
	$mysqli->close();
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html:charset=UTF-8">
	<title>お問い合わせ一覧</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
	<a href="updateList1.php">更新一覧はこちら</a>
	<table class="table table-striped" border=1 width=100%>
		<tr>
			<th>ID</th>
			<th>ご用件</th>
			<th>お名前</th>
			<th>電話番号</th>
			<th>Mail</th>
			<th>性別</th>
			<th>サイトを知ったきっかけ</th>
			<th>お問い合わせ内容</th>
			<th>登録日時</th>
			<th>更新日時</th>
			<th>削除フラグ</th>
		</tr>
<?php
	foreach ($rows as $row) {
?>		
	
		<tr>
			<td><?=htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8')?></td>
			<td><?=htmlspecialchars($row['regard'], ENT_QUOTES, 'UTF-8')?></td>
			<td><?=htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8')?></td>
			<td><?=htmlspecialchars($row['tel'], ENT_QUOTES, 'UTF-8')?></td>
			<td><?=htmlspecialchars($row['mail'], ENT_QUOTES, 'UTF-8')?></td>
			<td><?=htmlspecialchars($row['sex'], ENT_QUOTES, 'UTF-8')?></td>
			<td><?=htmlspecialchars($row['trigger'], ENT_QUOTES, 'UTF-8')?></td>
			<td><?=htmlspecialchars($row['content'], ENT_QUOTES, 'UTF-8')?></td>
			<td><?=htmlspecialchars($row['create_time'], ENT_QUOTES, 'UTF-8')?></td>
			<td><?=htmlspecialchars($row['update_time'], ENT_QUOTES, 'UTF-8')?></td>
			<td><?=htmlspecialchars($row['delete_flg'], ENT_QUOTES, 'UTF-8')?></td>
		</tr>

			
<?php
	}
?>

</table>
</body>
</html>