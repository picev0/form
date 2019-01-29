<?php
//DB一覧表示文字化け対策
header("Content-type: text/html; charset=utf-8");
require_once "connect.php";

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
	<form method="POST" action="updateConfirm.php">
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
	require_once "connect.php";

	//文字化け防止
	mysqli_set_charset($db, 'utf8');

	$query = 'SELECT * from form002';

	//クエリを実行します
	$result = mysqli_query($db, $query);

	//1行ずつ結果を配列で取得します
	while($row = mysqli_fetch_array($result)){
		echo "<tr><td>".$row['id']."</td>";
		echo "<td>".$row['regard']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['tel']."</td>";
		echo "<td>".$row['mail']."</td>";
		echo "<td>".$row['sex']."</td>";
		echo "<td>".$row['trigger']."</td>";
		echo "<td>".$row['content']."</td>";
		echo "<td>".$row['create_time']."</td>";
		echo "<td>".$row['update_time']."</td>";
		echo "<td>".$row['delete_flg']."</td>";
		echo '<td><input type="submit" value="更新" >';
		echo '<input type="hidden" name="id" value="'.$row['id'].'"></td></tr>';

	}
?>
</form>
</table>
</body>
</html>