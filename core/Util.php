<?php
namespace xq\core;

trait Util{

    /**
     * @param  $privateKey [私匙]
     * @return  string
    */
    public static function getPrivateKey( $privateKey ){

        if( is_file( $privateKey ) ){

            return file_get_contents( $privateKey );

        }


        return $privateKey;

    }


}