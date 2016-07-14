<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Forum Posting</title>
</head>
<body>
<?php 
/* 脚本从posting.html接收5个值: first_name, last_name, email, posting, submit */
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$posting = nl2br($_POST['posting']);

// 使用PHP函数来处理PHP字符串变量中的HTML标签
// htmlspecialchars()将特定的HTML标签转换为实体版本。
// htmlentities()将所有的HTML标签转换为实体版本。
// strip_tags()移除所有的HTML和PHP标签。
// html_entity_decode()函数同htmlentities()函数正好相反，它将HTML实体转换为相应的HTML代码。
// $html_post = htmlentities($_POST ['posting']);
// $strip_post = strip_tags($_POST ['posting']);

$name = $first_name . ' ' . $last_name;

// 计算单词数量:
$words = str_word_count($posting);

// 将发送的内容截断一部分:
$posting = substr($posting, 0, 50);

print "<div>Thank you, $name, for your posting:
<p>$posting...</p>
<p>($words words)</p></div>";

// 创建连接另一页面的链接:
// $name = urlencode($name);
// $email = urlencode($_POST['email']);
// print 'Click <a href="thanks.php? name=' . $name . '&email=' . $email . '">here</a> to continue.';
?>
</body>
</html>