<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/19
 * Time: 下午5:18
 */

namespace UploadDownload;


class FileHandler
{

        /*
         * php文件处理
         * ..代表上一级目录
         * .代表当前目录
         * disk_total_space 获得磁盘总空间
         * disk_free_space 获得磁盘自由空间
         * basename 返回路径中的文件名部分
         * file_exsits 判断文件是否存在 也可以判断文件目录是否存在
         *
         * filetype 检测文件类型
         * pow 乘积函数
         *
         * round 函数
         *
         * substr stripos  trim strrchr
         * */

  function showSpace()
  {
      echo pow(2,4); //2的4次方

      $space = disk_total_space('.')/1024 ; //转换磁盘空间大小

      $spaceG = round(disk_total_space('.')/pow(1024,3),3) ; //转换磁盘空间大小

      $spaceFree = round(disk_free_space('.')/pow(1024,3),3) ; //转换磁盘空间大小

      echo $space.'KB</br>';
      echo $spaceG.'G</br>';
      echo $spaceFree.'G</br>';

      echo '已用空间:'.($spaceG-$spaceFree).'G</br>';

      echo __FILE__;
      echo '<pre>';
      print_r($_SERVER);
      $str = strrchr(__FILE__,'\\');
      var_dump($str);

      echo trim(strrchr(__FILE__,'\\'),'\\').'</br>';
      echo trim(strrchr(__FILE__,DIRECTORY_SEPARATOR),DIRECTORY_SEPARATOR).'</br>';

      echo basename(__FILE__,'.php').'</br>';

       $str2 =  substr(__FILE__,0,strpos(__FILE__,basename(__FILE__))-1);//不减一会带斜线
      echo $str2.'</br>';
      echo dirname(__FILE__).'得到路径中的目录部分';

        if(!file_exists('config.php'))
        {
//            die('配置文件不存在，程序无法运行');
            echo  '配置文件不存在，程序无法运行';
        }
        if (!file_exists('Uploads'))
        {
//            die('上传目录不存在 无法保存文件');
            echo  '上传目录不存在 无法保存文件';
        }
        echo filetype('Uploads');

      //dir file 这个函数除了 检测目录 符号链接 link block 块 光驱 fifo 管道符 输入输出设备


  }













}



$a = new FileHandler();


$a->showSpace();






































