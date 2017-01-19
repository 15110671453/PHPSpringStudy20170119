<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/16
 * Time: 下午2:26
 */

/*
 *
 * insert into db_user (fields) values (values);
 * */

$arr1= array('apple','梨','peach','orange','apple','peach');


$shop =  array_unique($arr1);

print_r($shop);

$newarray = array_unshift($shop,'葡萄');

echo $newarray.'向数组的顶部追加元素';


foreach ($shop as $k=>$v)
{





    echo  "<h1>请选择数量</h1></br> <b>{$v}</b> &nbsp;&nbsp; 数量:<input type='text' name='shop_num'/></br>";






}

//删除数组元素的值 并返回删除的元素的值
echo array_shift($shop).'删除的元素的值';


$shop[]='0';
array_unshift($shop,'0');
//
if (array_shift($shop))
{
    echo '成功';
}else
{
    echo '失败';

}
echo '</br>';
if (!is_null(array_shift($shop)))
{
    echo '删除成功';
}
echo '<pre>';
print_r($shop);

//出栈 移除数组中最后一个元素 函数返回删除的那个元素的值

echo array_pop($shop).'底部删除最后一个元素的键值</br>';


print_r($shop);



$user36 = array('uname'=>'lihai','age'=>'12','sex'=>'男','qq'=>'1211','email'=>'.com');

$keys=array_keys($user36);

$values=array_values($user36);


print_r($keys);

$fields = implode(',',$keys);

echo $fields.'</br>';

print_r($values);

$vals='';

foreach ($values as $v)
{

    $vals.="'".$v."'".",";
}


echo $vals;



$sql_insert="INSERT INTO db_user({$fields} ) VALUES ({$vals})";

echo  $sql_insert;






















































