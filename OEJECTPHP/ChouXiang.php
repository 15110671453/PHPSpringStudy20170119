<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/19
 * Time: 上午11:35
 */

namespace OBJECTPHP;




/*
*抽象方法 必须定义在 抽象类中
父类 某个方法 在构建时 就已经明确 任何子类在继承时
肯定要继承该方法 就定义该方法为抽象方法 并且该类为
抽象类
以后继承的类一定要继承并重写该方法 （抽象类抽象方法的特点）
、

在父类中 抽象方法在定义时 没有后面的大花括号；
但是子类继承时 有
抽象方法的特点 与 使用方式
*/
abstract class ChouXiang
{
    abstract function chouXiang();

}

class Second extends ChouXiang
{
    function chouXiang()
    {
        // TODO: Implement chouXiang() method.
        echo '必须继承重写的抽象类的抽象方法'.'</br>';
    }
}