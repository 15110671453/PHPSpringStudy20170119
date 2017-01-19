
<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/19
 * Time: 下午3:25
 */



function __autoload($classname){
    //自动载入函数
    //传入参数 类名 从后边 取六个字符
    echo '</br>'.$classname.'自动载入函数';
    if (substr($classname,-6)=='Action')
    {
        echo '</br>'.'自动载入函数2';

        $str ='./'.str_replace('\\','/',$classname).'.php';
        echo '</br>'.$str;
        require_once($str);

//        include './OEJECTPHP/'.$classname.'.php';
    }elseif ($classname=='DBCore')
    {
        require_once './Common/'.$classname.'.php';

    }else
    {
        echo '</br>'.'自动载入函数3';

        $str ='./'.str_replace('\\','/',$classname).'.php';
        echo '</br>'.$str;
        require_once($str);
    }

}


$a = isset($_GET['a'])?$_GET['a']:'index';

echo '</br>'.$a.'NULLLLL';

$c = new \ActionModule\ArcModuleAction();

echo 111;

var_dump($c);

//$c = new ArcModuleAction();

$c->del();
































































