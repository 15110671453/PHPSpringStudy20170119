<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/22
 * Time: 上午9:49
 */

//获取文件的相关属性信息


$path = pathinfo('./a.text');



echo '<pre>';
/*
 *
 *   [dirname] => .
 * [basename] => a.text
 *  [extension] => text
 *  [filename] => a
 *
 *
 *  */
print_r($path);

//将相对路径的信息 转为 绝对路径
$pathAbsolute =realpath('./');

echo '</br>'.$pathAbsolute.'</br>';

//文件锁   控制当当前脚本在操作文件时 其他脚本没有权限处理


$file = fopen('./c.text','w');

//lock_sh 锁 写栈锁
//LOCK_NB 防止文件多次锁定
//LOCK_EX 锁定 文件执行权限
//防止锁 多次 锁死
//flock($file,LOCK_EX+LOCK_NB);

//flock($file,LOCK_SH);
//
//fwrite($file,'正常写入内通');
//
//sleep(3);//延迟脚本执行3秒
//
//flock($file,LOCK_UN);

fclose($file);



//
$fileTemp=tempnam('./','test');//这个文件永久存在 除非自己写代码删除 或者手动删除
//上面这个函数返回的是临时文件的路径

print_r($fileTemp);


//下面这个 是真的临时文件 返回文件的句柄 在这个脚本使用完毕后
$fileT=tmpfile();

fwrite($fileT,'写入临时文件  生命周期 为 fclose 结束 或者脚本结束后 该临时文件会被自动删除');//xie

rewind($fileT);

$content = fread($fileT,20);
echo '</br>'.$content."</br>";

fclose($fileT);







































