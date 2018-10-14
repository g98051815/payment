<?php
namespace xq\interfacelib;

interface Generate
{

    /**
     * 回调的参考值具体内容参考LianLianParam接口内容
    */
    public static function generate( LianLianParam $param );


    public static function notify( LianLianNotify $response );

}