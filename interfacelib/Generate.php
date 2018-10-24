<?php
namespace xq\interfacelib;

interface Generate
{

    /**
     * 回调的参考值具体内容参考LianLianParam接口内容
     * @param  $params [参数]
     * @param  $config [配置的参数]
    */
    public function generate( $config ,  Params $params );

    /**
     * @description 订单的通知接口
     *
    */
    public function notify( LianLianNotify $response );

}