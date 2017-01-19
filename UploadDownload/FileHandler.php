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



  }













}



$a = new FileHandler();


$a->showSpace();






