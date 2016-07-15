<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Registration</title>
    <style type="text/css" media="screen">
        .error { color: red; }
    </style>
</head>
<body>
<h1>Registration Results</h1>
<?php 
/* 脚本从register.html接收8个值:
email, password, confirm, year, terms, color, submit */

// 创建标记变量，标记表单状态:
$okay = TRUE;

// 验证Email地址:
if (empty($_POST['email'])) {
    print '<p class="error">Please enter your email address.</p>';
    $okay = FALSE;
}

// 验证密码：
if (empty($_POST['password'])) {
    print '<p class="error">Please enter your password.</p>';
    $okay = FALSE;
}

// 检查两个密码是否相等:
if ($_POST['password'] != $_POST['confirm']) {
    print '<p class="error">Your confirmed password does not match the original password.</p>';
    $okay = FALSE;
}

// 验证年:
if (is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4)) {
    // 检查出生年是否在2011年之前。
    if ($_POST['year'] < 2016) {
        $age = 2016 - $_POST['year']; // 计算年龄
    } else {
        print '<p class="error">Either you entered your birth year wrong or you come from the future!</p>';
        $okay = FALSE;
    }
} else {
    print '<p class="error">Please enter the year you were born as four digits.</p>';
    $okay = FALSE;
}

// 验证用户是否选中条款:
if (!isset($_POST['terms'])) {
    print '<p class="error">You must accept the terms.</p>';
    $okay = FALSE;
}

// 验证颜色：
/*
if ($_POST['color'] == 'red') {
    $color_type = 'primary';
} elseif ($_POST['color'] == 'yellow') {
    $color_type = 'primary';
} elseif ($_POST['color'] == 'green') {
    $color_type = 'secondary';
} elseif ($_POST['color'] == 'blue') {
    $color_type = 'primary';
} else { // 有问题
    print '<p class="error">Please select your favorite color.</p>';
    $okay = FALSE;
}
*/
switch ($_POST['color']) {
    case 'red':
        $color_type = 'primary';
        break;
    case 'yellow':
        $color_type = 'primary';
        break;
    case 'green':
        $color_type = 'secondary';
        break;
    case 'blue':
        $color_type = 'primary';
        break;
    default:
        print '<p class="error">Please select your favorite color.</p>';
        $okay = FALSE;
        break;
}

// 如果没有错误，打印一条正确消息:
if ($okay) {
    print '<p>You have been successfully registered (but not really).</p>';
    print "<p>You will turn $age this year.</p>";
    print "<p>Your favorite color is a $color_type color.</p>";
}
?>
</body>
</html>