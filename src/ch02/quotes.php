<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Quotes</title>
</head>
<body>
<?php // 脚本2-4 - quotes.php
$first_name = 'Larry';
$last_name = "Ullman";
$name1 = '$first_name $last_name'; // $name1 = $first_name $last_name
$name2 = "$first_name $last_name"; // $name2 = Larry Ullman
print "<h1>Double Quotes</h1> <p>name1 is $name1 <br/> name2 is $name2</p>";
print '<h1>Single Quotes</h1> <p>name1 is $name1 <br/> name2 is $name2</p>';
?>
</body>
</html>