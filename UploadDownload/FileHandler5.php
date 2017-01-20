<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/20
 * Time: 下午1:53
 */

echo '<pre>';

print_r(get_declared_classes());

$dir = dir('.');
while (($file = $dir->read())!==FALSE)
{
    echo $file.'</br>';

}

//$dir->close();//文件夹关闭操作 句柄就没有了 下面再遍历就失败了

$dir->rewind();

echo '=============='.'</br>';


while (($file = $dir->read())!==FALSE)
{
    echo $file.'</br>';

}


$size = filesize('b.php');//这里返回的还是字节 一个字节一位 字母位
$size=$size/1024;
echo $size.'KB'.'</br>';


//对于某一些没用的文件 进行删除

//unlink 删除没用的文件 删除耗时呀  只需要传入正确的文件路径即可
//unlink('1.php');
//
////删除文件是删除文件unlink 删除目录有专门删除目录的函数 批量删除文件夹下的文件
//array_map('unlink',glob('./60/*.text'));


function dirSize($dirname)
{
    $dir = opendir($dirname);

    $count = 0;
    while ($file = readdir($dir))
    {
        if (is_dir($file)) {


        }else
        {


        $count+=filesize($file);


        }

    }
    return $count;

}


$size2 = dirSize('.')/1024;


echo $size2.'KB'.'</br>';


function dirSize_glob($dirname)
{

  $dirInfo =  glob($dirname.'/*');

    $count=0;
    foreach ($dirInfo as $v)
    {
        if (is_dir($v))
        {
            $count += dirSize_glob($v);
        }else
        {
            $count += filesize($v);
        }
    }
    return $count;
}
$size3 = dirSize_glob('.')/1024;


echo $size3.'KB'.'</br>';

function dirSize_scandir($dirname)
{
    $dirArr = scandir($dirname);
    $count=0;
    /*由于该函数只是返回目录中的文件名 不返回路径 因此处理时 还要加上*/
    foreach ($dirArr as $v)
    {
        $fileName = $dirname.'/'.$v;

        if ($v!='.'&&$v!='..')
        {
            if (is_dir($fileName))
            {
                $count += dirSize_scandir($fileName);
            }else
            {
                $count += filesize($fileName);
            }
        }

    }

    return $count;
}

$size3 = dirSize_scandir('.')/1024;


echo $size3.'KB'.'</br>';

























































