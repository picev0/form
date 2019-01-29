<?php

var_dump($_POST);
$regard = htmlentities($_POST['regard'], ENT_QUOTES, 'UTF-8');
$name = htmlentities($_POST['name'], ENT_QUOTES, 'UTF-8');
$tel = htmlentities($_POST['tel'], ENT_QUOTES, 'UTF-8');
$mail = htmlentities($_POST['mail'], ENT_QUOTES, 'UTF-8');
$sex = htmlentities($_POST['sex'], ENT_QUOTES, 'UTF-8');
$trigger = htmlentities($_POST['trigger'], ENT_QUOTES, 'UTF-8');
$content = htmlentities($_POST['content'], ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>確認画面サンプル</title>
</head>
<body>
	<h3>お問い合わせ確認</h3>
	<form method="post" action="mail.php">
		<table>
			<tr>
				<th>ご用件</th>
				<td><?=$regard?><input type="hidden" name="regard" value="<?=$regard?>"></td>
			</tr>
			<tr>
				<th>お名前</th>
				<td><?=$name?><input type="hidden" name="name" value="<?=$name?>">※必須</td>
			</tr>
			<tr>
				<th>電話番号（半角）</th>
				<td><?=$tel?><input type="hidden" name="tel" value="<?=$tel?>"></td>
			</tr>
			<tr>
				<th>Mail（半角）</th>
				<td><?=$mail?><input type="hidden" name="mail" value="<?=$mail?>">※必須</td>
			</tr>
			<tr>
				<th>性別</th>
				<td><?=$sex?><input type="hidden" name="sex" value="<?=$sex?>"></td>
			</tr>
			<tr>
				<th>サイトを知ったきっかけ</th>
				<td><?=$trigger?><input type="hidden" name="trigger" value="<?=$trigger?>"></td>
			</tr>
			<tr>
				<th>お問い合わせ内容</th>
				<td><?=$content?><input type="hidden" name="content" value="<?=$content?>"></td>
			</tr>
		</table>
		<input type="submit" value="  修正  ">
		<input type="submit" value="確認">
	</form>
</body>
</html>