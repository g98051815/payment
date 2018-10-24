<?php
namespace xq\lianlian;

trait Configure{

    protected static $configure = [
        'oid_partner'=>'商户的代码',
        'private_key'=>'私匙的字符串',
        'public_key'=>'公匙的字符串'

    ];

    /**
     * @description 设置配置文件
     * @param $configure [配置的项目]
    */
    public static function setConfigure( array $configure ){


        self::$configure = $configure;

    }


    public static function getConfigure( $key=null ){

        $configure = self::$configure;

        return is_null($key) ? $configure : $configure[ $key ];

    }




}