<?php
$title = $_GET['title'];
$content = $_GET['content'];
$str = 'OK';
if(isset($title)) 
{
	$str .= $title;
} 
else 
{
	$str .= 'title';
}

if (isset($content)) 
{
	$str .= $content;
}
else 
{
	$str .= 'content';
}
echo $str;
//echo $str.'<a href="test.html">继续添加</a>'
?>