<?php
//DB一覧表示文字化け対策
//header("Content-type: text/html; charset=utf-8");

//DBConnection
require_once "connect.php";
//文字化け防止
$mysqli = db_connect();

//文字化け防止
$mysqli->set_charset('utf8');

$sql = "SELECT * FROM form002";

$result = $mysqli->query($sql);

//クエリ失敗
if(!$result){
	echo 'クエリ失敗';
}

//連想配列で取得
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
	<title>更新一覧</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
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
			<th>更新ボタン</th>
		</tr>
<?php
foreach($rows as $row){
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
			<td>
				<form method="POST" action="updateConfirm.php">
				<input type="submit" value="更新" >
				<input type="hidden" name="id" value="<?=htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8')?>">
				</form>
			</td>
		</tr>

<?php
	}
?>
</table>
</body>
</html>