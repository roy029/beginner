<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ＰＨＰ課題</title>
</head>
<body>
<a><img src = "check_font.png"></a>
<br>

<?php

$name=$_POST['name'];
$email=$_POST['email'];
$age=$_POST['age'];
$occupation=$_POST['occupation'];


//消毒
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$age = htmlspecialchars($age);
$occupation = htmlspecialchars($occupation);


if($age<20)
{
	print'20歳未満の方は登録できません。';
	print'<form>';
	print'<input type = "button" onclick = "history.back()" value = "戻る">';
	print'</form>';

}
else if($occupation=='学生')
{
	print'OKボタンを押すと以下の内容で登録されます。※まだ登録は完了しておりません';
	
	print'<br/>';
	print'氏名:';
	print $name;
	print'<br/>';
	print'メールアドレス:';
	print $email;
	print'<br/>';
	print'年齢:';
	print $age;
	print'<br/>';
	print'職業:';
	print $occupation;
	print'<br/>';
	print'称号:';
	print'学生会員';


	print'<form method = "post" action = "gakuseithx.php">';
//thanksに値を渡す
	print'<input name = "name" type = "hidden" value = "'.$name.'">';
	print'<input name = "email" type = "hidden" value = "'.$email.'">';
	print'<input name = "age" type = "hidden" value = "'.$age.'">';
	print'<input name = "occupation" type = "hidden" value = "'.$occupation.'">';
	print'<input name = "membership" type = "hidden" value = "学生会員">';

	print'<input type = "button" onclick = "history.back()" value = "戻る">';
	print'<input type = "submit" value = "OK">';
	print'</form>';
}
else
{
	print'OKボタンを押すと以下の内容で登録されます。※まだ登録は完了しておりません';
	
	print'<br/>';
	print'氏名:';
	print $name;
	print'<br/>';
	print'メールアドレス:';
	print $email;
	print'<br/>';
	print'年齢:';
	print $age;
	print'<br/>';
	print'職業:';
	print $occupation;
	print'<br/>';
	print'称号:';
	print'正会員';

	print'<form method = "post" action = "thanks.php">';
//thanksに値を渡す
	print'<input name = "name" type = "hidden" value = "'.$name.'">';
	print'<input name = "email" type = "hidden" value = "'.$email.'">';
	print'<input name = "age" type = "hidden" value = "'.$age.'">';
	print'<input name = "occupation" type = "hidden" value = "'.$occupation.'">';
	print'<input name = "membership" type = "hidden" value = "正会員">';


	print'<input type = "button" onclick = "history.back()" value = "戻る">';
	print'<input type = "submit" value = "OK">';
	print'</form>';
}


?>

</body>
</html>
