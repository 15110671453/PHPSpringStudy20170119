<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/22
 * Time: 下午2:38
 */

session_start();
//session 有效期多久可以取消 如何控制
if (!empty($_SESSION['uname']))
{
    echo '授权成功'.$_SESSION['uname'].'</br>';
    $mysql = new  mysqli('localhost','root','asd1453NMDmysql','test');


    $sql ='SELECT * FROM file';


    $result = $mysql->query($sql);


    echo "<table border='1px'>";
    echo "<tr><td>文件ID</td><td>文件名</td><td>文件大小</td><td>文件地址</td></tr>";
    while ($row=$result->fetch_assoc())
    {
        echo "<tr><td>{$row['userid']}</td><td>{$row['fileName']}</td><td>{$row['fileSize']}</td><td><a href=\"{$row['filePath']}/{$row['fileName']}\">{$row['filePath']}</a></td></tr>";
    }
    echo "</table>";
}else
{
    echo '您没有登陆';
}





















