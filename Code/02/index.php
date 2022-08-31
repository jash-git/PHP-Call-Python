<?php
$canshu1 = '这是PHP传过来的参数';
$canshu2 = date('Y-m-d');
$re = exec("python ceshi.py $canshu1 $canshu2");
$re = iconv('gbk', 'utf-8', $re);
var_dump($re);
?>