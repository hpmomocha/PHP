<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Your Feedback</title>
</head>
<body>
<?php
ini_set ('display_errors', 1); // 让我从错误中学到知识!
error_reporting (E_ALL | E_STRICT); // 显示所有可能出现的问题!

// 该页面从feedback.html接收数据。
// 将会接收：标题、姓名、Email、反映、评论并用$_POST提交。
$title = $_POST['title'];
$name = $_POST['name'];
$response = $_POST['response'];
//$comments = stripslashes($_POST['comments']);
$comments = $_POST['comments'];
print "<p>Thank you, $title $name, for your comments.</p>
<p>You stated that you found this example to be '$response' and
added:<br/>$comments</p>";
?>
</body>
</html>