<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/18
 * Time: 下午3:31
 */

namespace OBJECTPHP;


class YaoKongQi
{
    //只用在当前类的内部可以调用 在类的外部 包括子类都不可以调用
    private  $shengYin;

    function __construct()
    {
        $this->shengYin='20';
    }

    /**
     * @param $action
     * @param $yinLing
     */
    public function yaoKonfqi($action2, $yinLing='')
    {

      switch ($action2)
      {
          case 'shengYin':
          {
              $this->shengYin2();

              break;
          }

          case  'guanDianShi':
              $this->guanDianShi();

              break;
          case 'huanTai':
              $this->huanTai('少儿');
              break;
      }

    }

    private function  shengYin2($daXiao='')
    {
        echo '</br>'.'当前声音'.$this->shengYin;
    }
    private  function  guanDianShi($close='')
    {
        echo '</br>'.'关闭电视-close-频道';
    }

    private  function huanTai($pindao)
    {
        echo '</br>'.'现在是第'.$pindao.'频道';
    }
}

$tv = new YaoKongQi();

$tv->yaoKonfqi('shengYin','sss');












