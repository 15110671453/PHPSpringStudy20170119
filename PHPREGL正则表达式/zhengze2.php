<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/2/6
 * Time: 下午2:58
 */

/*
 *
 * 正则表达式 原子表
 *{}花括号 来指定 元字符 需要匹配的次数 {n} 需要匹配n次
 *
 * {n,}至少匹配n次  {n,m}最少匹配n次  最多 m次
 *
 *正则表达式 使用 原子表
 *
 *使用中括号 只要 中括号中的元字符 匹配到 任意一个独立单元 都会匹配成功
 *
 * 如果不使用中括号 则会将\d\s整体匹配 导致匹配上漏洞
 *
 *

 *
 * */





$str = 'http://w2www1232ww.sina.com';

echo preg_match('/w{2,3}/is',$str)?'OK':'NO';

echo '<br/>';


echo preg_match('/\d\s/is',$str,$arr)?'非法':'合法继续';
echo '<br/>';
echo preg_match('/[\d\s]/is',$str,$arr)?'非法':'合法继续';


$str2 = 'http://w2www123 2ww.sina.com';
echo '<br/>';
echo preg_match('/\d\s/is',$str2,$arr)?'str2非法':'str2合法继续';
echo '<br/>';


$str3 = 'http://w2www123 2ww.sinabcdewfg.com';
echo '<br/>';
echo preg_match('/abcdefg/is',$str3,$arr)?'找到abcdefg':'未找到abcdefg';
echo '<br/>';
echo '<br/>';
echo preg_match('/[a-z]/is',$str3,$arr)?'找到abcdefg 但是可能不连续':'未找到abcdefg';
echo '<br/>';


$str4 = 'abcdA';

echo preg_match('/[A-C]/',$str4,$arr)?'没有加修饰符的正则表达式，找到大写字母A-C':'没有加修饰符的正则表达式，未找到大写字母A-C';

echo '<br/>';
$str5 = 'sina.com';

echo  preg_match('/\.com[^\d]/is',$str5,$arr)?'.com没有非法内容':'匹配到非法内容 不能在com后加数字';

















































