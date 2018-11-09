<?php
namespace xq\core;

trait Json{



    public static function Decode(){


    }


    /**
     * @description 将数组解析成json串
     * @param  $content array [传入进行来的内容]
     * @return string
    */
    public static function Encode( array $content ){

        return json_encode( $content , 320);

    }



}