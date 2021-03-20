<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ＰＨＰ課題</title>
</head>
<body>

<?php
$code=$_POST['code'];

$dsn='mysql:dbname=practice;host=localhost';
$user='root';
$password='';
$dbh=new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');

//SQLインジェクション
$sql='SELECT*FROM anketo WHERE code=?';
$stmt = $dbh->prepare($sql);
$data[]=$code;
$stmt->execute($data);


while(1)
{
	$rec = $stmt->fetch(PDO::FETCH_ASSOC);
	if($rec==false)
	{
		break;
	}
	print $rec['code'];
	print $rec['name'];
	print $rec['email'];
	print $rec['age'];
	print $rec['occupation'];
	print $rec['membership'];
	print'<br/>';
}

$dbh = null;

?>

<br/>
<a href="kensaku.html">検索画面に戻る</a>
<br/>
<a href="menu.html">メニューに戻る</a>
</body>
</html>
