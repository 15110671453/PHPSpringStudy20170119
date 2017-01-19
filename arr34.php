<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/16
 * Time: 上午11:40
 */

/*
 * array_filter() 数组过滤函数 通过回调函数的方式返回新数组 如果回调函数返回true 数组元素返回到新数组中
 * array_fill() 通过指定的索引顺序及个数生成数组
 * array_flip 将数组中的键名与键值进行交换
 * */

function dump ($arr)
{
    echo "<pre>";
    print_r($arr);
}

//通过指定的索引顺序及个数生成数组

$arr0 = array_fill(30,2,'nali');

dump($arr0);


$arr1 = array('class1'=>'php课程','class2'=>'mysql课程','webname'=>'sina.com','url'=>'sssss');

function callBack1 ($v)
{
    if (strpos($v,"课程"))
    {
        return true;
    }else
    {
        return false;
    }

}



$arr3 = array_filter($arr1,callBack1);



dump($arr3);

$user1 = array('uname'=>'厉害','msg'=>'大家好我叫厉害');

$arr4 = array_filter($user1,callBack1);

dump($arr4);





    echo 'zhen</br>';

    if (is_array($arr4))
    {
        print_r($arr4);
    }else
    {
        echo $arr4;
    }

$user2 = array('uname'=>'厉害','msg'=>'大家好我叫厉害');

//键名 与 键值 反转 但是 如果反转前 多个键名 对应 相同键值 那么会怎样呢 覆盖策略
$arr34 = array_flip($user2);

dump($arr34);


if (array_key_exists('uname',$user2))
{
    echo "键名 存在 该数组</br>";
}else
{
    echo "键名 不存在 该数组</br>";

}

$test = array('class1'=>'PHP','class2'=>'HTML','class3'=>'div');

//默认返回数组的所有keys 加参数 返回 键值内容为php的所有键名
//加参数 true 是否比对数据类型
$arr340 = array_keys($test);

dump($arr340);

$arr341 = array_keys($test,'PHP',true);

dump($arr341);








