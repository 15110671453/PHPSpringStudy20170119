<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/20
 * Time: 下午3:22
 */

/*
 * 读写 可执行 权限
 * is_executable(); 判断文件是否可执行权限
 * is_readable();判断文件是否可读权限
 * is_writable();判断文件是否可写权限
 *  is_file 判断当前路径是否为一个文件
 *在文件中写 情景 ：
 * 1、将原文件清空再写内容
 * 2、将内容写在文件头部
 * 3、将内容写在文件尾部
 * 4、将内容写在文件指定位置
 * php中删除目录 前需要 先删除目录中所有文件 并且关闭句柄 然后删除目录
 *
 *
 * */
//70 71 file

if (file_exists('../Uploads')){
    echo '检测文件或文件夹存在'.'</br>';
    if(is_file('../Uploads')){
        echo '文件'.'</br>';
    }else
    {
        echo '不是文件'.'</br>';
    };
}

$a = fopen('./a.text','r');

$b = fopen('./b.text','r');

//第一个参数为文件句柄 类比文件夹句柄
// 第二个参数为 要读到的文件的指针位置指明
$content=fread($b,'10');
echo $content.'</br>';
//操作完文件后释放资源
fclose($b);
fclose($a);

//以读写模式打开文件 获取文件句柄
$a = fopen('./a.text','r+');
//这样的r+ 续写模式 是以改写的模式进行写入的 会将文件头部内容改为
//这是改写模式

fwrite($a,'明天我们');

fwrite($a,'明天我们');

fclose($a);

//文件操作 指针 指定位置 进行 读写

//w模式 写入 如果文件不存在 会自动创建 ；如果存在 会清空
//当前文件 然后才写入



$a = fopen('./a.text','w');

fwrite($a,'w模式写入1');



fclose($a);

//w+模式 写入 如果文件不存在 会自动创建 ；如果存在 会清空
//当前文件 然后才写入  会写读模式

$a = fopen('./a.text','w+');

fwrite($a,'w模式写入');

//这里写完毕要想读取 必须将文件指针移回头部
//如果不移 因为此时文件指针在文件尾部 无法读取到内容

fwrite($a,'w+模式写入');
rewind($a);
echo fread($a,filesize('./a.text')).'</br>';



fclose($a);

//a模式 如果文件不会清空 文件 并且可写 并且会将文件指针移到文件末尾
//适合向文件追加内容
$a = fopen('./a.text','a');

fwrite($a,'追加内容');

rewind($a);

echo fread($a,filesize('./a.text')).'</br>';

fclose($a);
//a+模式
$a = fopen('./a.text','a+');

fwrite($a,'追加内容');

rewind($a);

fclose($a);

$a = fopen('./a.text','r');
echo fread($a,filesize('./a.text')).'</br>';

fclose($a);

//x模式操作文件 保守派  如果指定的文件存在 就不执行改变 如果不存在 创建 并可以写入

//fopen 可以读取远程内容  但是会报错 需要 修改php的配置文件 allow_url_fopen = on
//$baidu=fopen('http://www.baidu.com','r');
//
//while ($row = fgets($baidu))
//{
//    echo $row;
//}
//读取二进制文件
//$image = fopen('./images/zhangtianai12.jpg','rb');
//
//header('Content-type:image\jpg');
//
//echo fread($logo,filesize('./images/zhangtianai12.jpg'));



////纯文本 编辑器打开文件看不到换行符 wt模式
//
//$a = fopen('./a.text','wt');
//
//fwrite($a,'w模式写入1');
//
//
//
//fclose($a);

























