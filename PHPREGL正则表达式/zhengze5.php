<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/2/6
 * Time: 下午4:26
 *
 */

$str = "新浪网 http://www.sina.com 百度  http://baidu.com 淘宝 http://www.taobao.com";

//这里\w只代表一个字符  我们需要用到重复 代表0到多个 星号
$preg = "/\\.(\\w*)\\./is";

$static = preg_match_all($preg,$str,$arr,PREG_SET_ORDER);

var_dump($arr);

echo $static?'匹配成功':'ERROR:匹配失败';


$preg2 = "/(\\/*+)(.*?)(\\*\\/)/is";


$str2 = file_get_contents('./zhengze.php');

echo $str2.'<br/>';

preg_replace($preg2,"\\1\r\n* 新浪网 http://sina.com \\2 \\3",$str2);























































