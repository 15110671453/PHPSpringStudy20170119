<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/2/6
 * Time: 下午5:06
 */


$email = 'ouryoung.admin@date.com';

//加control符号 表示必须以什么开头
//加美元符必须以什么结尾
$preg = '/^(\\w+)(\\.\\w+)*@(\\w+)\\.(com|net|cc|info|so|org)$/is';

$preg2 = '/^(\\w+)@(\\w+)\\.(com|net|cc|info|so|org)$/is';

if (preg_match($preg,$email,$arr))
{
    var_dump($arr);
}else
{
    echo '匹配失败';
}
$str = 'baidu.com';

//问号的意义 零次 或者1次 ； 加号 至少一次 然后多个 ；星号 零次或者多次
$preg = '/bai?/is';

try{
    if (preg_match($preg,$str,$arr2)){

        var_dump($arr2);
        echo $arr2[0];

    }else
    {
        throw  new Exception('ERROR!');
    }
}catch (Exception $e)
{
    $e->getMessage();
}



//验证一个整数 -222 666

// control^符号 决定是否正数 或 负数
$str3 = '-87666.123';

$str3 = '87666.123';
//大括号控制小数点后位数

$preg ='/^-?\d+\.?\d{0,3}$/is';

if (preg_match($preg,$str3,$arr3))
{
    var_dump($arr3);
}else
{
    echo '<br/>'.'失败';
}



















