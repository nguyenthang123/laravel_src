<?php
$name=$_GET['name'];
$rewrite=str_replace('\\','+',$name);
$rewrite=str_replace('/','+',$rewrite);
$rewrite=str_replace('http:++','',$rewrite);
echo $rewrite;