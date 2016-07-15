<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type"content="text/html; charset=utf-8"/>
<title>No Soup for You!</title>
</head>
<body>
<h1>Mmm...soups</h1>
<?php 
// 创建数组：
$soups = array(
    'Monday' => 'Clam Chowder',
    'Tuesday' => 'White Chicken Chili',
    'Wednesday' => 'Vegetarian'
);

// 计算并打印数组中当前元素个数:
$count1 = count ($soups);
print "<p>The soups array originally had $count1 elements.</p>";

// 向数组中添加3个元素:
$soups['Thursday'] = 'Chicken Noodle';
$soups['Friday'] = 'Tomato';
$soups['Saturday'] = 'Cream of Broccoli';

// 再次计算并打印数组中元数个数:
$count2 = count ($soups);
print "<p>After adding 3 more soups, the array now has $count2 elements.</p>";

// 打印数组的内容：
print_r ($soups);
?>
</body>
</html>