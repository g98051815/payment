<?php
namespace xq\example;
use xq\lianlian\GenerateOrder;
use xq\lianlian\GenerateParam;
class Appinstance{



    public  function index(){

        $s = \xq\interfacelib\LianLianGoodsCategory::hello();

        var_dump( $s );

    }


}