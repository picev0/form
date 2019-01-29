<?php var_dump($_POST); ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>お問い合わせサンプル</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
	<h3>お問い合わせサンプル</h3>
	<form method="post" action="confirm.php">
		<table class="table table-striped" border=1 width=100%>
			<tr>
				<th>ご用件</th>
				<td><select name="regard">
					<option value="">選択してください</option>
					<option value="ご質問・お問い合わせ">ご質問・お問い合わせ</option>
					<option value="リンクについて">リンクについて</option>
				</select></td>
			</tr>
			<tr>
				<th>お名前</th>
				<td><input type="text" name="name" value="">※必須</td>
			</tr>
			<tr>
				<th>電話番号（半角）</th>
				<td><input type="text" name="tel"></td>
			</tr>
			<tr>
				<th>Mail（半角）</th>
				<td><input type="text" name="mail">※必須</td>
			</tr>
			<tr>
				<th>性別</th>
				<td><input type="radio" name="sex" value="男">男
				<input type="radio" name="sex" value="女">女</td>
			</tr>
			<tr>
				<th>サイトを知ったきっかけ</th>
				<td><input type="checkbox" name="trigger[]" value="友人・知人">友人・知人
					<input type="checkbox" name="trigger[]" value="検索エンジン">検索エンジン</td>
			</tr>
			<tr>
				<th>お問い合わせ内容</th>
				<td><textarea name="content" cols="50" rows="5"></textarea></td>
			</tr>
			<input type="hidden" name="transition" value="form">
		</table>
		<input type="submit" value="  確認  ">
		<input type="reset" value="リセット">
	</form>
</body>
</html>