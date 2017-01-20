<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/20
 * Time: 下午5:24
 */
/*
 * fread
 * fgetc 传入文件句柄 获得字符
 * fgets 传入文件句柄 每次读取一行
 * fgetss 每次读取一行内容 过滤掉html php 标签 第三个参数指定保留的标签
 * */

$file = fopen('./a.text','r');

echo  fgetc($file);//每次仅读取一个字节 并且移动文件指针

echo '</br>';
//第二个参数可以指定 每次读取的字节数 默认1024
$str=fgets($file);//每次读取一行 默认一次读取1024字节

echo $str;
//怎样判断字符 是中文 英文 截取字符 不乱码

fclose($file);


$c = fopen('./a.text','r');
$content = fread($c);

while (!feof($c))
{
    $str2 = fgetss($c,filesize('./a.text'));
    echo $str2;

}


fclose($c);
