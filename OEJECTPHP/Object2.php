<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/18
 * Time: 下午4:35
 */


/*
 * final 关键字 const 关键字
 * 生命一个 类
 *
 * 该类 决定 使用后
 *
 * 不允许 别人再来继承 扩展 我们父类的方法
 *
 *
 * */

class shouji {
    public  $pinpai;

    final function  chongDian()
    {
        return $this->pinpai.'手机充电用10v电压';

    }
    function kaijidonghua()
    {
        echo '开机动画'.'</br>';
    }
}
class  Moto extends  shouji
{
    function __construct()
    {
        $this->pinpai='摩托罗拉';
    }
    function kaijidonghua()
    {
        echo '摩托罗拉的开机动画'.'</br>';
    }
}

class  SanSung extends shouji
{
    function __construct()
    {
        $this->pinpai='三星';
    }
    function kaijidonghua()
    {
        echo '三星的开机动画'.'</br>';
    }
}

class  Ren {
    private $xingMing;

    function __construct($ming)
    {
        $this->xingMing=$ming;
    }

    function  yongShouJi($souji)
    {
        $souji2 = new $souji();

        echo $this->xingMing."在用".$souji2->pinpai."&nbsp &nbsp:".$souji2->chongDian().'</br>';
        echo $souji2->kaijidonghua();
    }
}

$li = new Ren('李四');

$li->yongShouJi('SanSung');

$li->yongShouJi('Moto');


/*
 * 如果类中有一个方法 它的所有子类肯定都会继承 搞个抽象方法
 *
 * 以上是禁止一个方法被继承
 *
 * 还有一种情况是 禁止整个类被继承
 *
 * */


final  class  BangGong
{
    private $dianNao;

    function play()
    {
        echo '我在玩游戏'.'</br>';
    }
}

/*
 * final 类禁止被继承
 * */




/*
 *
 * 常量 一定义就不能修改
 *
 * 网站目录结构 常量 定义
 *
 *
 *
 * */

//常量 在整个脚本都可以访问
define('webname','naline');


//
class gongZi
{
    //类常量 与整个脚本 define 常量
    const  shuiLv=0.5;

    function __construct()
    {

    }


}


















