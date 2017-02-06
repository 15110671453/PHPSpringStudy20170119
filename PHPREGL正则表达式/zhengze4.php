<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/2/6
 * Time: 下午4:10
 */



$str = "<html> <body> <h1>新浪网www.sina.com</h1> 
<h2>阿里巴巴alibaba.sina.com</h2> <h3>阿里巴巴alibaba.sina.net</h3>
<h1>新浪网young.sina.com</h1> <h2>阿里巴巴young.sina.com</h2> 
<h3>阿里巴巴young.sina.net</h3></body></html>";


/*
 * 在某些元组中 使用 ?: 将该元组匹配时生成的缓存禁用 因为我们可能不需要改元组匹配到的缓存
 * */
$preg = "/(www|alibaba|young)\\.sina.(com|net)/is";

$preg2 = "/(?:www|alibaba|young)\\.sina.(com|net)/is";

preg_match_all($preg2,$str,$arr,PREG_SET_ORDER);

var_dump($arr);

echo '<br/>';
echo '正则表达式注释' ;

$preg3 = "/<(h\\d{1})>(?#匹配html标签的头)(.*?)(?#匹配html标签的正文)<\\/(\\1)>(?#匹配html标签尾)/is";


preg_match_all($preg3,$str,$arr2,PREG_SET_ORDER);

var_dump($arr2);





















































