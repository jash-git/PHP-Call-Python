<?php
echo '这是运行直接输出：';
$re = system('python ceshi.py');
// $re = iconv('gbk', 'utf-8', $re);
echo '<br/>';
echo '这是赋值输出：';
var_dump($re);
?>