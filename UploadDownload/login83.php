<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/22
 * Time: 下午2:56
 */

$mysqli = new mysqli('localhost','root','asd1453NMDmysql','test');


$uname =isset($_POST['username'])?$_POST['username']:'';
$upwd = isset($_POST['paswd'])?$_POST['paswd']:'';

if ($uname !=''&$upwd!='')
{
    $sql = "SELECT userid FROM user2 WHERE username = '{$uname}' AND paswd ='{$upwd}'";

    echo $sql.'</br>';
    $result = $mysqli->query($sql);

    if($mysqli->affected_rows>=1)
    {
        session_start();
        $_SESSION['uname']=$uname;
        echo "<a href='./filelists.php'>点此进入文件下载页面</a>";

    }else
    {
        echo '没有此用户';
    }

}else
{
    echo '没有此用户';
}










