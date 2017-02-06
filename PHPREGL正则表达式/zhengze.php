<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/2/6
 * Time: 下午2:16
 */
//js中正则表达式 mysql正则表达式 php中正则表达式 ios中正则表达式

/*
 * php中正则表达式 第一种posix模式
 * 第二种 perl兼容的pcre模式
 * 第一个概念 定界符 即在这个表达式中放置正则的规则
 * 定界符 反斜杠 也可以是 尖括号 也可以是大括号
 * 元字符 代表最小的匹配的单位
 *\d 只能代表一个字符 0-9中任何一个数都可以找到 但只能找出1个 不能12 123 等找
 *\D 代表任意一个不是 0-9 中任何一个字符 但也是只能找回一个
 * \w 匹配一个英文字母 数字 或者下划线 [0-9a-zA-Z_]
 *\s 匹配一个空字符 空格 \f分页 \n 换行 \r 回车 \t 制表符 \v 垂直制表
 *\S 匹配所有的非空格字符 也是只返回一个
 *
 *
 *
 *
 *
 *
 * */

$str = "asi12\tna.com";

$preg = '/\s/is';

if (preg_match($preg,$str,$arr))
{
    echo '找到了';
    var_dump($arr);
}else
{
    echo '没找到';
}

































