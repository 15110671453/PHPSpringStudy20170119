<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/22
 * Time: 上午11:39
 */


/*
 * 过滤空的内容
 * */

function delEmpty($v)
{
    return $v!='';//不等于空的时候为真 返回 则会保留下来 得到新的数组
}

$arr2=array_filter($_FILES['file']['name'],'delEmpty');

echo '<pre>';
print_r($_FILES['file']['name']);

print_r($arr2);


$dirName='../Uploads/'.date('ymd');

if (!is_dir($dirName))
{
    mkdir($dirName);
}

foreach ($arr2 as $k=>$v)
{
    $filePath = $dirName.'/'.date('ymd h:m').$v;

    $names=$_FILES['file']['name'];

    print_r($arr2);
    print_r($names);
    $tmp=$_FILES['file']['tmp_name'];
    print_r($tmp);

    if (is_uploaded_file($_FILES['file']['tmp_name'][$k]))
    {
        if (!move_uploaded_file($_FILES['file']['tmp_name'][$k],$filePath))
        {
            echo "<script> alert('上传文件失败')</script>";
            /*
             * 上传完成 将上传的文件大小 文件路径  存储到数据库 方便用户查询
             * */
        }else
        {
            echo "<script> alert('上传文件成功')</script>";
        }
    }else
    {
        echo "<script> alert('上传文件非法')</script>";

    }
}



















