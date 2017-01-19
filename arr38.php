<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/16
 * Time: 下午4:18
 */

$webname = 'houdun';

$weburl = 'bbs.com';

//$arr = compact($webname,$weburl);

//compact 将变量拼接为数组 这里传入的是对应的变量的变量名
$arr = compact("webname","weburl");

print_r($arr);





















