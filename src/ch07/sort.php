<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8"/>
<title>My Little Gradebook
</title>
</head>
<body>
<?php 
// 创建数组:
$grades = array(
    'Richard' => 95,
    'Sherwood' => 82,
    'Toni' => 98,
    'Franz' => 87,
    'Melissa' => 75,
    'Roddy' => 85
    );
    
// 以原始顺序打印数组:
print '<p>Originally the array looks like this: <br/>';
foreach ($grades as $student => $grade) {
    print "$student: $grade<br/>\n";
}
print '</p>';

// 倒序数组并打印。
arsort ($grades);
print '<p>After sorting the array by value using arsort(), the array looks like this: <br/>';
foreach ($grades as $student => $grade) {
    print "$student: $grade<br/>\n";
}
print '</p>';

// 以键排序数组并打印。
ksort ($grades);
print '<p>After sorting the array by key using ksort(), the array looks like this: <br/>';
foreach ($grades as $student => $grade) {
    print "$student: $grade<br/>\n";
}
print '</p>';
?>
</body>
</html>