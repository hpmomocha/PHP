<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>I Have This Sorted Out </title>
</head>
<body>
<?php // 脚本7-7 - list.php
// 将引入的字符串转换为数组:
$words_array = explode(' ' , $_POST ['words']);
// 排序数组:
sort($words_array);

// 将数组转换为字符串:
$string_words = implode('<br/>', $words_array);
// 打印结果:
print "<p>An alphabetized version of your list is: <br/>$string_words</p>";
?>
</body>
</html>