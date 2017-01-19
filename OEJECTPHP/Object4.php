<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/18
 * Time: 下午5:11
 */

namespace OBJECTPHP;


class Object4
{
    //类中的静态属性 不是单独属于某个对象的 而是属于整个类的
    //内存结构中 栈区 实例对象的引用 变量引用 静态属性 们
    //堆区 公有还是私有受保护的 属性 和 方法
    //静态数据区


    static $c;
    public $b;
    function aa()
    {
        echo ++self::$c;
    }






}

$b = new Object4();

$b->aa();
$b->aa();
$b->aa();
$b->aa();
$b->aa();

$b->b=100;
unset($b->b);

/*
 *
 * 静态属性  是不可以被unset的
 *
 * 它只需要存储一份 就被整个类所有实例都可以访问
 *
 * 但是缺点 占用内存 整个脚本
 *
 * */