<?php
$re = exec('python ceshi.py', $out);
// $re = iconv('gbk', 'utf-8', $re);
var_dump($out);
echo '<br/>';
var_dump($re);
?>