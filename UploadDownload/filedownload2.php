<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/22
 * Time: 下午3:24
 */

/*
 *
 * 发送 header 文件头信息 实现文件的下载
 *
 * */

/*
 *
 * */
$f = isset($_GET['file'])?$_GET['file']:'';
if ($f!='')
{
    $file = $_GET['file'];
    if (!empty($file))
    {
        if (file_exists($file))
        {
            header('content-type:application/octet-stream');//通用的 仅告诉浏览器这个为二进制数据 浏览器根据文件的格式来处理吧
//header('content-type:image/png')
//header('content-type:image/png');//这里服务器 告诉浏览器 要操作文件的类型 默认超文本
//添加文件描述 下载时存储的文件名
            header('Content-Disposition:attachment;filename=xin.png');
//
            header('Accept-length:'.filesize('../Uploads/2017/1closeright.png'));
// 现在定义的是 图片类型 application/word header('content-type:video/mpeg') header('content-type:video/pdf')
            $file = fopen('../Uploads/2017/1closeright.png','r');

            echo  fread($file,filesize('../Uploads/2017/1closeright.png'));

            /*
             *
             *
             * 特殊的其他类型 必须指定 文件类型
             *
             * 术语 mime 类型  最早处理邮件的 让客户端的邮件处理程序 知道
             *
             * 后来http协议中 引入了mime 类型
             *
             * 发送文件头信息之前 不要有任何输出  引起问题
             *
             * */
        }else
        {
            echo '没有该文件';
        }

    }else
    {
        echo '没有该文件' ;
    }
}else
{
    echo '缺少参数' ;
}







































































