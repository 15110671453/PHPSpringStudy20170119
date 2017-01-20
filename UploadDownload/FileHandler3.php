<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/20
 * Time: 上午10:50
 */
/*
 *
 *glob模式匹配 对目录进行遍历操作
 *
 *
 *
 * */
echo '<pre>';
$dirarr = glob('../*.php');

print_r($dirarr);

$dirarr = glob('../*');

print_r($dirarr);




/*
 * php中 打开资源 连接句柄
 * */

$dirOpen = opendir('../') or die('打开目录失败');

//打开文件后 获取到文件句柄 打开不是目的 关键是如何读写

var_dump($dirOpen);
echo '</br>';
$dirRead = readdir($dirOpen);
$dirRead2 = readdir($dirOpen);
$dirRead3 = readdir($dirOpen);
$dirRead4 = readdir($dirOpen);

//var_dump($dirRead);
//var_dump($dirRead2);
//var_dump($dirRead3);
//var_dump($dirRead4);
/*
 * opendir readdir 来遍历一个文件夹
 *
 * readdir 读取成功 为真 失败 为假
 * */

while ($file = readdir($dirOpen))
{
    echo $file.'</br>';
}

//执行完操作后 记得关闭文件句柄
//删除文件夹 第一点 没有文件句柄操作文件夹
//第二点 文件夹 必须是空的 才可以删除


closedir($dirOpen);



//














