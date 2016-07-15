<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;
→charset=utf-8" />
<title>Larry Ullman's Books and Chapters</title>
</head>
<body>
	<h1>Some of Larry Ullman's Books</h1>
<?php
// 创建第1个数组:
$phpvqs = array(
    1 => 'Getting Started with PHP',
    'Variables',
    'HTML Forms and PHP',
    'Using Numbers'
);
// 创建第2个数组:
$phpadv = array(
    1 => 'Advanced PHP Techniques',
    'Developing Web Applications',
    'Advanced Database Concepts',
    'Security Techniques'
);
// 创建第3个数组:
$phpmysql = array(
    1 => 'Introduction to PHP',
    'Programming with PHP',
    'Creating Dynamic Web Sites',
    'Introduction to MySQL'
);
// 创建多维数组:
$books = array(
    'PHP VQS' => $phpvqs,
    'PHP Advanced VQP' => $phpadv,
    'PHP and MySQL VQP' => $phpmysql
);
// 打印出一些值:
print "<p>The third chapter of my first book is <i>{$books['PHP VQS'][3]}</i>.</p>";
print "<p>The first chapter of my second book is <i>{$books['PHP Advanced VQP'][1]}</i>.</p>";
print "<p>The fourth chapter of my fourth book is <i>{$books['PHP and MySQL VQP'][4]}</i>.</p>";

// 使用foreach遍历数组:
foreach ($books as $title => $chapters) {
    print "<p>$title";
    foreach ($chapters as $number => $chapter) {
        print "<br/>Chapter $number is $chapter";
    }
    print '</p>';
}

// 使用foreach遍历数组:
foreach ($books as $title => $chapters) {
    print "<p>$title<br/>";
    var_dump($chapters);
    print '</p>';
}
print "<pre>";
print_r($books);
print "</pre>";
?>
</body>
</html>