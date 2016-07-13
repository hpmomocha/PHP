<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Product Cost Calculator</title>
    <style type="text/css" media="screen">
        .number { font-weight: bold; }
    </style>
</head>
<body>
<?php 
/* 脚本calculator.html获取数值并计算总成本和月付款数。*/
// 可以在此进行错误处理。

// 从$_POST数组获取数值:
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$discount = $_POST['discount'];
$tax = $_POST['tax'];
$shipping = $_POST['shipping'];
$payments = $_POST['payments'];

// 计算总额：
$total = (($price * $quantity) + $shipping) - $discount;

// 定义税率:
$taxrate = $tax/100 + 1;

// 纳入税率后的总成本:
$total = $total * $taxrate;
$total = number_format($total, 2);

// 计算月付款数:
$monthly = $total / $payments;
$monthly = number_format($monthly, 2);

// 打印结果:
print "<p>You have selected to purchase:<br/>
<span class=\"number\">$quantity </span> widget(s) at <br/>
$<span class=\"number\">$price</span>
price each plus a <br/>
$<span class=\"number\">$shipping </span> shipping cost and a <br/>
<span class=\"number\">$tax</span> percent tax rate.<br/>
After your $<span class=\"number\"> $discount</span> discount, the total cost is
$<span class=\"number\">$total </span>.<br/>
Divided over <span class=\"number\"> $payments</span> monthly payments,
that would be $<span class=\"number\"> $monthly</span> each.</p>";
?>
</body>
</html>