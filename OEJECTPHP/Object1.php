<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/18
 * Time: 下午2:22
 */
/*
 * object 面向对象 主要是PHP5后支持
 *
 * 但是由于php弱类型 对面向对象重载支持欠缺
 *
 *
 * 随着硬件的升级支持 程序员们实现了面向对象开发
 *
 * 可扩展性 可重用性
 *
 *
 * 类 抽象概念 具有相同属性和方法的集合 使用具体的类是不可行 的 只能实例化
 *
 * 类名的书写规范 首字母大写
 *
 * */

namespace OBJECTPHP;


class Object1
{
    public  $yianse;
    public  $pinpai;

    function __construct()
    {
        $this->pinpai='adidas';
        $this->yianse='color';
    }
    function  wanYouXi()
    {
        echo  '玩游戏';

    }

    function  shangWang()
    {
        echo  '上网';
    }
    function  liaoTian()
    {
        echo '聊天';
    }
    function  tingGe()
    {
        echo '听歌';
    }
}

$woMen = new Object1();
$woMen->wanYouXi();


/*
 * 注释
 *
 * */
class  ArcChannel{
    public  $arcChannelID;
    function  channelEdit()
    {
        echo '开始编辑';
    }
}