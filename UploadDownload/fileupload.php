<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/22
 * Time: 上午10:27
 */

//文件上传 需要考虑的因素

//第一 网站 配置好上传功能

//第二 上传文件的存储位置指定

//第三 指定文件上传大小 限制

//考虑脚本运行的最大时间 如果脚本长时间运行 会对服务器资源消耗

//脚本执行的内存占用

// 在php ini 的配置文件 中 配置 上传功能 File Uploads

// file_uploads = on

//upload_tmp_dir = 'root/tmp' 上传的文件的临时存储文件夹
//uoload_max_filesize =24 上传的文件大小限定

//这里 指定的upload 时 临时存储目录 在当前上传的脚本 执行区间内
// 该临时文件夹 存在 生命周期  因此 要在脚本执行周期内 对文件进行处理
//转移存储 或者怎样

//Resource Limits

//max_execution_time =30 秒单位 对脚本运行时间进行控制  视频上传 需要更大的运行时间

 //set_time_limit() 函数 只影响当前的脚本的可以执行运行的时间
//但是该函数需要注意 从脚本运行到 该函数起 到指定的时间
//因此如果在还没有运行到该函数 前 已经到了 配置文件中的最大运行时间
//会停止


//脚本运行占用的内存大小  memory_limit 128M 决定脚本文件执行占用的内存最大消耗


// 上传文件 通过表单



$file = $_FILES['file1'];
echo '<pre>';
print_r($file);
/*
 *  [name] => closeright.png
    [type] => image/png
    [tmp_name] =>
/private/var/folders/4l/txqq5wz92psbpzvj4wq9tnnm0000gq/T/phpLvkWmF
    [error] => 0
    [size] => 3860
返回的是一个数组 包含上传文件的信息
name 上传时指定的文件名
type 上传的文件类型
tmp_name 存储的临时文件
error 上传错误码 0 代表成功
size 单位字节 上传的文件大小
 * */
echo '</br>';

/*
 * 对上传的文件  进行 处理
 * MAX_FILE_SIZE 当上传的文件大小超过该值 错误码2
 *
 *错误码 0 代表上传成功  1 代表 上传的文件 超过了phpini 指定的文件大小
 * 2 超过了前台表单 设置的文件大小
 * 3 只上传了文件的一部分
 *  4
 * 代表没有收到任何东西
 * */

if (!empty($_FILES['file1']['name']))
{
    if ($_FILES['file1']['error']>0)
    {
        switch ($_FILES['file1']['error'])
        {
            case 1: {
                $errormessage = '上传文件的大小超过了php配置文件中规定的大小';
                echo $errormessage . '</br>';
            }
            case 2:
            {
                $errormessage = '上传文件的大小超过了表单中规定的大小';
                echo $errormessage . '</br>';
            }
            case 3:
            {
                $errormessage = '只上传了部分文件';
                echo $errormessage . '</br>';
            }
            case 4:
            {
                $errormessage = '没有上传文件';
                echo $errormessage . '</br>';
            }


        }
    }else
    {
        echo '文件上传成功'.'</br>';

        //文件上传类型的控制
        $type = array('.png');

        $fileType = strrchr($_FILES['file1']['name'],'.');

        $fileLower = strtolower($fileType);

        if (!in_array($fileLower,$type))
        {
            echo "<script> alert('上传类型不合法')</script>";
            exit;

        }
        $dirname = '../uploads/'.date('ymd');
        if (!is_dir($dirname))
        {
            mkdir($dirname);
        }
        if (is_uploaded_file($_FILES['file1']['tmp_name']))
        {
            $tofile = $dirname.'/'.$_FILES['file1']['name'];
          $up =  move_uploaded_file($_FILES['file1']['tmp_name'],$tofile);
            if ($up)
            {
                echo "<script> alert('上传文件成功')</script>";
            }else
            {
                echo "<script> alert('上传文件失败')</script>";
            }
        }else
        {
            echo "<script> alert('非法上传')</script>";
        }

    }

}else
{
    echo "<script> alert('请选择上传文件')</script>";
}










































































































