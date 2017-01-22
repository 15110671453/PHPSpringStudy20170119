<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/22
 * Time: 上午9:21
 */


$file = fopen('./a.text','r');

//$file2 = fread($file,filesize('./a.text'));

//$file2 = fread($file,filesize('./a.text')+1);

//feof 判断文件是否结束 没有结束返回假 结束为真
//var_dump(feof($file));


//$arr = array();
//
//while (!feof($file))
//{
//    $arr[] = fgets($file);//读取行
//}
//echo '<pre>';
//print_r($arr);

//$content = fgets($file);
//
//echo  $content;



echo fseek($file,20,SEEK_CUR).'</br>';

echo ftell($file).'</br>';//得到当前指针在什么位置

//如果不指定第三个参数 seek_cur  每次读取 指针都是从文件头开始的
//第二个参数指定移动的指针步长
echo fseek($file,50,SEEK_CUR).'</br>';

echo ftell($file).'</br>';//得到当前指针在什么位置

//把指针直接归位到文件头 0

rewind($file);

//从文档的末尾开始算

echo  filesize('./a.text').'</br>';

echo fseek($file,-2,SEEK_END).'</br>';

echo ftell($file).'</br>';//得到当前指针在什么位置

$wfile = fopen('./a.text','w');

fwrite($wfile,'写进去了1 2写进去了2  新浪');

//这里写完后 直接读取 无法读到内容 因为 指针 还未归位
rewind($file);
echo $content =  fread($file,12).'</br>';

echo fpassthru($file).'</br>';//将当前指针后面的内容 直接输出到缓存区



fclose($file);










