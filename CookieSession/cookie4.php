<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/23
 * Time: 上午10:45
 */
/*
 * 检查浏览器是否开启cookie
 *
 * */
//

if (isset($_GET['checkcookie']))
{
    setcookie('cookiecheck','1');
    $url = 'http://localhost/CookieSession/cookie3.php';
    header('location',$url);
}


//
if (isset($_COOKIE['cookiecheck']))
{
    echo 'cookie可以使用'.'<br/>';
}else
{
    echo '请打开cookie'.'<br/>';
}