<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ＰＨＰ課題</title>
</head>
<body>
<a><img src = "thx_font.png"></a>
<br>
<?php

//エラートラップtry-catch
try
{

//DBに接続
$dsn='mysql:dbname=practice;host=localhost';
$user='root';
$password='';
$dbh=new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');

$name=$_POST['name'];
$email=$_POST['email'];
$age=$_POST['age'];
$occupation=$_POST['occupation'];
$memberchip="正会員";


//消毒
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$age = htmlspecialchars($age);
$occupation = htmlspecialchars($occupation);

print$name;
print'様<br/>';
print'正会員登録が完了しました。<br/>';

print$email;
print'に会員登録完了メールを送りましたのでご確認ください。<br/>';

$mail_sub = '会員登録を完了しました。';
$mail_body = $name."様へ\n登録ありがとうございました。";
$mail_body = html_entity_decode($mail_body,ENT_QUOTES, "UTF-8");
$mail_head = 'From:xxx@xxx.co.jp';
mb_language('Japanese');
mb_internal_encoding("UTF-8");
mb_send_mail($email, $mail_sub, $mail_body, $mail_head);



//DBに指令を出す
$sql ='INSERT INTO anketo(name,email,age,occupation,membership)VALUES("'.$name.'", "'.$email.'","'.$age.'","'.$occupation.'","正会員")';
$stmt = $dbh->prepare($sql);
$stmt->execute();


//DBを切断
$dbh = null;


//エラートラップ
}
catch(Exception $e)
{

	print'ただいま障害により大変ご迷惑をお掛けしております。';

}
?>

</body>
</html>
