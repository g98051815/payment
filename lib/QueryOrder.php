<?php
namespace xq\lib;


class QueryOrder{


    protected static $driverStock = [

        Config::LianLian=>\xq\lianlian\QueryOrder::CLASS

    ];

    /**
     * @param  $driver [驱动的驱动的名字]
     * @param  $config [配置文件]
     * @param  $params [参数]
     * @return object
    */
    public static function search( $driver , $config , $params ){


        $driverStock = self::$driverStock;

        $obj = $driverStock[$driver];

        $obj::setConfigure( $config );

        return $obj::search( $params );

    }


}