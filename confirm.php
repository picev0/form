<?php

//var_dump($_POST);
$regard = htmlentities($_POST['regard'], ENT_QUOTES, 'UTF-8');
$name = htmlentities($_POST['name'], ENT_QUOTES, 'UTF-8');
$tel = htmlentities($_POST['tel'], ENT_QUOTES, 'UTF-8');
$mail = htmlentities($_POST['mail'], ENT_QUOTES, 'UTF-8');
$sex = htmlentities($_POST['sex'], ENT_QUOTES, 'UTF-8');
$triggerBefore = implode(",", $_POST['trigger']);
$trigger = htmlentities($triggerBefore, ENT_QUOTES, 'UTF-8');
$content = htmlentities($_POST['content'], ENT_QUOTES, 'UTF-8');
//$transitionResult = htmlentities($_POST['transition'], ENT_QUOTES, 'UTF-8');
if(isset($_POST['submit'])){
	//echo "あああああああああああああああああああああああああああああああああああああああ";
	header('HTTP/1.1 307 Temporary Redirect');
	header("Location: complete.php");
}

//submitボタンからは値は取得できない
//$form = htmlentities($_POST['form'], ENT_QUOTES, 'UTF-8');




/* $countとform画面からの遷移か確認して、completeに飛ばそうとしたときの残骸
//
if(!$regard == ""){
	$count=$count+1;
	var_dump($count);
}

// 名前のバリデーション
if(!$name == ""){
	$count=$count+1;
	var_dump($count);
}

//電話番号のバリデーション
if(!$tel == ""){
	$count= $count+1;
	var_dump($count);
}

// Emailアドレスのバリデーション
if(!$mail == ""){
	$count=$count+1;
	var_dump($count);
}

//性別のバリデーション
if(!$sex == ""){
	$count=$count+1;
	var_dump($count);
}

//サイト訪問きっかけのバリデーション
if(!$trigger == ""){
	$count=$count+1;
	var_dump($count);

}

//問い合わせ内容のバリデーション
if(!$content == ""){
	$count=$count+1;
	var_dump($count);
}

*/
//session_start();



?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>確認画面サンプル</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
	<h3>お問い合わせ確認</h3>
	<form method="post" action="">
		
		<table class="table table-striped" border=1 width=100%>
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

		<input type="button" name="form" value="  修正 " onclick="history.back(-1)">
		<button type="submit" name="submit" value="確認">送信する</button>
	</form>
	
	<!--<form>
		<input type="submit" name="form" value="  修正  ">

	</form>-->
</body>
</html>