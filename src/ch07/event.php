<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Add an Event</title>
</head>
<body>
<?php 
// 打印文本:
print "<p>You want to add an event called <b>{$_POST['name']}</b> which takes place on: <br/>";
// 条件语句，检验是否选中选项:
if (isset($_POST['days']) AND is_array($_POST['days'])) {
    foreach ($_POST['days'] as $day) {
        print "$day<br/>\n";
    }
}
// 完成这个段落:
print '</p>';
?>