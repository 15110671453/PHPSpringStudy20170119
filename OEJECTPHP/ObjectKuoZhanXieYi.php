<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/19
 * Time: 上午11:46
 */

namespace OBJECTPHP;


class ObjectKuoZhanXieYi
{


/*
 * 抽象方法
 *
 * 这里 类的接口使用
 *
 * */






}


abstract class Bing
{

    abstract function shenGao();

    abstract  function  shiLi();

    abstract  function zhengShenHe();

    abstract  function ganYan();
    /*
     * 对于这样的抽象类 只定义抽象方法 没有属性的
     *
     * 其实可以写为接口
     * */

}
/*
 * 定义接口
 * 注意 定义时不需要class关键字 只需要interface
 * */

interface BingInterface
{
     function shenGao();

      function  shiLi();

     function zhengShenHe();

     function ganYan();
}

/*
 *
 * 类 实现接口时 可以 一次实现多个接口
 *
 * implements 接口名 逗号 接口名
 *
 * */
class KongJun implements BingInterface
{
    function shenGao()
    {
        // TODO: Implement shenGao() method.
    }
    function shiLi()
    {
        // TODO: Implement shiLi() method.
    }
    function zhengShenHe()
    {
        // TODO: Implement zhengShenHe() method.
    }
    function ganYan()
    {
        // TODO: Implement ganYan() method.
    }
}



















