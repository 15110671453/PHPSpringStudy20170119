<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/22
 * Time: 上午9:56
 */



$file = fopen('./c.text','w');


fwrite($file,'我也在写入 还有一个脚本在写入内容 要锁定写入 我可以写 其他脚本暂时不可以写 但是可以读');


fclose($file);






















