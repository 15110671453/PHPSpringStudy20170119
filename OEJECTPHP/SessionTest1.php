<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/19
 * Time: 下午2:24
 */

echo '<pre>';
session_start();

/*
 * session是一种 会话  定义一个session 后 php会存储一个文件存储
 *
 * php临时存储一些信息
 *
 *
 * */



$arr2=$_SESSION['array1'];

$arr3 = unserialize($arr2);

print_r($arr3);

$arr4 = $_SESSION['channel'];

$obj = unserialize($arr4);

var_dump($obj);

















