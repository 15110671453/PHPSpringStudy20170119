<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/20
 * Time: 上午9:29
 */
/*
 * is_dir 判断是否为一个目录
 * mkdir 创建目录 第一个参数为指定的目录名 第二个参数目录权限  第三个参数为是否递归操作
 *
 * file_exsits 判断目录或者文件是否存在
 *
 * getcwd() 获取当前操作的脚本 所在的目录路径
 *
 * rename 改变文件夹 或者文件的名称
 *
 * scandir 扫描目录 返回的是数组 显示文件夹内所有内容 包括. 与..
 *
 *
 *
 *
 *
 * */
echo  '<pre>';

var_dump(is_dir('../UploadDownload'));
echo '</br>';

var_dump(is_dir('UploadDownload'));

//mkdir('../MKDIR');

//递归方式建立文件夹 第一个参数目录路径
//第二个参数 目录权限 第三个参数 递归方式创建
//
//mkdir('../MKDIR',0777,true);

$dir = array('../image2','../html2','../cache2','../js2');
//批量创建文件夹
//array_map('mkdir',$dir);

//创建文件夹时 需要检测是否存在 不存在再创建


//uploads/date('md',time());
//html/zhongguo
//html/meiguo


//mkdir('uploads2/'.date('ymd'.time()),0777,true);


//$dirname= 'uploads2/'.date('ymd'.time());
//if (!file_exists($dirname))
//{
//    mkdir($dirname);
//}
//获取当前操作的脚本 所在的目录路径
echo getcwd();

echo '</br>';

//chdir() 切换当前目录 到指定工作目录
$arr = include 'b.php';


print_r($arr);

echo '</br>';

$dir = '../js2';
if (file_exists($dir))
{
    rmdir($dir);
    echo '删除目录:'.$dir.'</br>';
}else
{
    echo '不存在指定目录'.'</br>';
}

//修改目录名 修改文件名

//rename('./image','images');


$dirs = scandir('../');

foreach ($dirs as $v)
{
    $base = strrchr($v,'.');

    if (is_dir($v))
    {
        $type = 'dir'.'</br>';
        echo $v.'</br>';
        echo $type.'</br>';

    }elseif($base == '.jpg'||$base == '.gif'||$base == '.bmp'||$base=='.png')
    {
        $type = '图片'.'</br>';
        echo $v.'</br>';
        echo $type.'</br>';

    }elseif ($base == '.rar'||$base=='.zip')
    {
        $type = '压缩包'.'</br>';
        echo $v.'</br>';
        echo $type.'</br>';

    }elseif($base=='.swf'||$base=='.wmv'||$base=='.flv'||$base=='.avi')
    {
        $type = '视频'.'</br>';
        echo $v.'</br>';
        echo $type.'</br>';
    }else
    {
        echo '-----';
        $type = '文本文件'.'</br>';
        echo '</br>'.$v.'</br>';
        echo $type.'</br>';
    }
}


$basename = 'sdfsdfds.jpg';

echo strstr($basename,'.');





































