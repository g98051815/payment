<?php
namespace xq\lib;
use xq\lib\Config;
use xq\interfacelib\Params;
use xq\exception\GenerateOrderException;
class GenerateOrder{

    protected static $generateStock = [

        Config::LianLian=>\xq\lianlian\GenerateOtherOrder::CLASS

    ];



    /**
     * @description 通用下单接口
     * @author chhy 才华横溢
     * @param $driver [驱动名称]
     * @param $params [参数名称]
     * @throws GenerateOrderException [创建订单的错误信息]
     * @return  array
    */
    public static function generate(  $driver , $config , Params $params ){


            $generateStock = (object)self::$generateStock;


            if( ! array_key_exists( $driver , $generateStock ) ){


                throw new GenerateOrderException('指定的驱动不存在',111);


            }

            //调用对应的支付驱动的创建订单的内容
            return ( new $generateStock->$driver )->generate( $config ,  $params );


    }


}