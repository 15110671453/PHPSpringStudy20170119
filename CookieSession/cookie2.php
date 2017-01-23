<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/23
 * Time: 上午9:11
 */

/*
 * cookie是在响应头之间进行信息传递
 * 响应头 服务器发送过来
 * 浏览器 再通过 请求头 发送回服务器
 *
 *
 * */
/*
 * 服务器 php 配置文件 开启了 自动开启session会话 会有 sessionid
 * 自动存入到cookie中  session.auto_start由1改为0
 *session.auto_start=0
 *
 * */

$name = 'sina.com';


//第三个参数 为 cookie 的生命周期  如果不填写 默认为这个脚本的会话周期
//第三个参数 传入0 代表 会话cookie 和不填一样
//延长66秒 60*60*24 一天时间
//第四个参数 作用路径    '/'  cookie的作用路径是向下继承的
//第五个参数 为作用的域
//浏览器 支持cookie存储 最多40-50条
// 相同cookie 键名 键值（或不同的值） 不同的作用路径 会各保存一条 那取值的时候是那个值呢
//  就近原则 （如果cookie名是相同的 cookie值不同 作用路径不同 是就近原则）


//http 协议 https 协议
//支付宝 就是 https 基于安全的
//第五个参数 可以传false
// 第六个参数 1 指明该cookie 只对https有效
//php 5.2 还有第7个参数 true

/*
 * .baidu.com
 * 以上是百度的作用域 竟然在baidu.com之前有一个点 代表是泛域名
 *
 * */


//在 setcookie 之前 不要输出内容 和 header 用法一样
//但如果非要输出  可以在配置文件进行配置实现 可以在前面输出
//output_buffering 打开 就可以在setcookie 之前实现输出 但是最好别这样吧
//ob_start 与 php 配置文件中的output_buffering 的配置区别
//ob_start 只缓存 该代码执行以下的内容 但是若在配置文件中 配置output_buffering则会缓存整个页面
//ob_start()会把页面响应主体缓存 所以不会报错 最好别这么干
//ob_start();

//

//setcookie('web',$name,time()+66);

/*
 * 设置完cookie之后并不能立即就去读取cookie
 *
 * 因为 cookie 是 响应头 与 请求头之间的交互
 *
 * 如果是同一个页面 写读cookie必须先访问一次 第二次刷新 才能获取到
 *
 *
 *
 * */

//cookie 不可以保存数组 第二参数 必须是字符串
//两种方式 一个一个循环存
$arr = array('数组1','array2');

//setcookie('webarr',$arr,time()+66);

//第一种方式
//setcookie('webarr[0]',$arr[0],time()+66);
//setcookie('webarr[1]',$arr[1],time()+66);
//
//var_dump($_COOKIE);


//第二种方式 序列化

setcookie('webarr2',serialize($arr));



var_dump(unserialize($_COOKIE['webarr2']));


//time() 代表当前时间

//for ($i=0;$i<30;$i++)
//{
//    echo str_pad('   ',8888);
//
//    echo $i;
//
//    sleep(1);
//
//}

/*
 * 检查浏览器是否开启cookie
 *
 * */























































































































































































