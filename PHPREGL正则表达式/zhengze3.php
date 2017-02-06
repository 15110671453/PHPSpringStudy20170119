<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/2/6
 * Time: 下午3:31
 */

/*
 * 之前的无论是 元字符 还是 原子表 我们操作的都是 单个字符
 *
 *
 * 但是很多情况下  我们需要操作的是多个字符
 *
 * 上一届课 为 元子表
 *
 * 这次为 元子组 元组
 *
 *圆括号 中的内容 要完全匹配
 *
 * 同时 元子组 分块 缓存 使用缓存
 *
 * 正则匹配 使用 元子组 将目标字符串 分组 匹配 ，每个元子组匹配到会在一定时间内缓存起来，以提供以后的调用
 *
 *
 *
 *
 * */


$str = "<html> <body> <h1>新浪网</h1> <h2>阿里巴巴</h2></body></html>";

echo $str;

echo '\1';
echo "\\1";

$preg = "/<(h1|h2)>(.*)<\\/(h1|h2)>/is";

$preg2 = '/<(h1|h2)>(.*)<\/(h1|h2)>/is';
//问号 禁止贪婪
$preg3 = "/<(h1|h2)>(.*?)<\\/(\\1)>/is";
preg_match($preg3,$str,$arr);

var_dump($arr);

echo '<br/>';
echo 'all 模式  ------';

preg_match_all($preg3,$str,$arr2,PREG_SET_ORDER);

var_dump($arr2);


$preg4 = "/<(h\\d{1})>(.*?)<\\/(\\1)>/is";


$str2 = preg_replace($preg4,"<strong>\\2</strong>",$str);

echo $str2;
echo '<br/>';

$str2 = preg_replace($preg4,"<\\1>http://sina.com</\\1>",$str);

echo $str2;

echo '<br/>';
echo '问号 禁止 贪婪<br/>';
//问号 禁止贪婪 当模式中 有多个一样的h1 时 要禁止贪婪
$str3 = "<html> <body> <h1>新浪网</h1> <h2>阿里巴巴</h2> <h1>新浪网2</h1> <h2>阿里巴巴</h2></body></html>";


$preg5 = "/<(h1|h2)>(.*?)<\\/(\\1)>/is";
preg_match($preg5,$str3,$arr5);

var_dump($arr5);

