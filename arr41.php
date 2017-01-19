<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/18
 * Time: 上午9:37
 */

/*
 * 数组的入栈
 * array_pop 在数组中删除一个 出栈 底部
 * array_push 在数组中增加一个或多个元素 入栈
 * array_rand 随机数取数组元素
 * 反转数组 array_reverse
 * 反转数组 对于关联数组 对于索引数组反转后 如果希望反转后键值反转 键名反转后索引对应的不变 加第二个参数 true
 *
 * */

$array = array('webname'=>'谷歌','weburl'=>'sina.com','webcontent'=>'哪里去');


$array2 =  array('webname2'=>'谷歌2','weburl2'=>'sina.com2','webcontent2'=>'哪里去2');



$define = array_merge($array,$array2);


$array2[]='索引喽';

$array2['关联入栈']='关联入栈';

echo '<pre>';

print_r($define);


print_r($array2);

//这里这个函数操作的是原数组  原数组有改变 像引用 和 指针操作
array_pop($array2);

print_r($array2);

array_push($array2,'梦里啦');


print_r($array2);

$array3 = array('新浪','天猫','谷歌');


print_r($array3);



$kaoti =array(
    array('name'=>'输入你的名字','reason'=>'天猫2','answer'=>'谷歌3','type'=>'input'),
    array('name'=>'那一年生日','reason'=>'天猫5','answer'=>'谷歌6','type'=>'radio','select'=>'1708,1990,2009'),
    array('name'=>'输入您的心情','reason'=>'天猫8','answer'=>'谷歌9','type'=>'textarea')
);

$key = array_rand($kaoti,1);

print_r($key);


print_r($kaoti[$key]);


function timu($arr,$num='')
{
    $num2 =empty($num)?1:$num;

    $tiArray=array_rand($arr,$num2);

    $tinum=is_array($tiArray)?count($tiArray):$tiArray;

    $i=0;
    while ($i<$num2)
    {
        $keyK = is_array($tiArray)?$tiArray[$i]:$tiArray;
        echo  '别这么想'.$arr[$keyK]['type'].'</br>';
        $i++;
    }


    if (!empty($arr))

    {
        $key = array_rand($arr,1);
        switch ($arr[$key]['type'])
        {
            case 'input':
            {
                echo "{$arr[$key]['name']}:<input type='text' name='dn'/>";
                break;
            }
            case 'radio':
            {
                $select =explode(",",$arr[$key]['select']);
                foreach ($select as $k=>$v)
                {
                    echo "{$arr[$key]['name']}:<input type='radio' name='dn'/>&nbsp&nbsp{$v} &nbsp&nbsp&nbsp&nbsp";
                }

                break;
            }
            case 'textarea':
            {
                echo "{$arr[$key]['name']}:</br><textarea row=40 col=50 name='dn'></textarea>";
                break;
            }
        }
    }


    echo "</br><input type='submit' value='提交答案'/>";
}


timu($kaoti,2);




//反转数组 对于关联数组 对于索引数组反转后 如果希望反转后键值反转 键名反转后索引对应的不变 加第二个参数 true

$array4 = array('webname'=>'第一个','weburl'=>'第二个');

$array5 = array('a','b','c',1,2,3,4,5,6);


print_r($array4);

print_r($array5);



print_r(array_reverse($array4));

print_r(array_reverse($array5));























