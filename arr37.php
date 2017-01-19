<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/16
 * Time: 下午3:21
 */

/*
 * each() 将数组拆分为新数组 每个新数组中的元素 就是原数组中的某一项元素
 * 如果指针结束 返回布尔值假false
 *
 * list 将索引数组的值赋给变量
 *
 * array_map 数组中的每一个元素都经过回调函数处理 返回值是处理过的元素组成的新数组
 * */

$array1 = array('webname'=>'houdunwang','mysql'=>'mysql');

$arrnew = each($array1);

echo '<pre>';

print_r($arrnew);



echo '</br>';


var_dump($arrnew);

$arrnew = each($array1);

echo '<pre>';

print_r($arrnew);



echo '</br>';


var_dump($arrnew);



$arrnew = each($array1);

echo '<pre>';

print_r($arrnew);



echo '</br>';


var_dump($arrnew);



$array4 = array('webname'=>'houdunwang','mysql'=>'mysql','PHP'=>'PHP');

//如果传关联数组就报错
$array5 = array('houdunwang','mysql','PHP');
list($vals)=$array5;


echo  $vals.'list函数只对索引数组的值'.'</br>';


while (list($k,$v)=each($array4))
{
    echo "键名:".$k."=>"."键值:".$v;
}



$array8 = array(12,33,22,44,66,77,99,324,22,175,170);


function func_map($v){
    if ($v>100)
    {
        return $v;
    }
}

$arrNew1=array_map('func_map',$array8);

print_r($arrNew1);

$arrayMap = array("<h1>考试标题</h1>","<div style='margin:10px;color: chocolate'>css练习</div>");



print_r($arrayMap);





function func_map1($v){
   //对每一个数组元素 中html标签 进行实体化 避免浏览器解析
    return htmlspecialchars($v);
}



$arrNew2=array_map('func_map1',$arrayMap);


print_r($arrNew2);





//数组的漫游
$arrC = array('money'=>222,'money1'=>3333,'money2'=>223,'money3'=>2222,);

function func_walk(&$v,$k,$c='')
{
    if ($v<1000)
    {
        $v += 1000;
    }
    echo '</br>';
    echo $k.':key</br>';
    echo  $c.':val+</br>';
}


//array_walk($arrC,'func_walk');

if (array_walk($arrC,'func_walk',10000))
{
    echo '加工资成功.</br>';

    print_r($arrC);

}



//


































