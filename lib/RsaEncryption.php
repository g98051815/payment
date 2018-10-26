<?php
namespace xq\lib;

use xq\exception\RsaEncryptionException;

class RsaEncryption{

    //私匙
    private static $privateKey;

    //公匙
    private static $publicKey;

    //私匙的资源ID
    private static $privateKeySource;

    //公匙的资源ID
    private static $publicKeySource;

    /**
     * @description
     * @param $content [内容] 需要加密的内容
     * @return string 返回签名成功后的base64字符串
    */
    public static function encryption( $content ){

        $signature ='';

        $privateKeySource = self::getPrivateKeySource();


        openssl_sign( $content , $signature , $privateKeySource );

        openssl_free_key( $privateKeySource );

        return base64_encode( $signature );

    }


    /**
     * @description 解密数据
     * @param  $context [加密的内容]
    */
    public static function decryption( $context ){


    }


    /**
     * @description 验证签名的函数
     * @param $content [验证签名的内容]
     * @param $sign [签名内容]
     * @return boolean
    */
    public static function verifySign( $content , $sign ){

        $publicKeySource = self::getPublicKeySource();

        $verify = openssl_verify( $content , base64_decode( $sign ) , $publicKeySource , OPENSSL_ALGO_MD5 );

        openssl_free_key( $publicKeySource );

        return $verify > 0 ? true : false;

    }


    /**
     * @description 设置私匙
     * @param  $context [私匙内容]
     * @throws RsaEncryptionException
     * @return string
    */
    public static function setPrivateKey( $context ){

        $privateKey="-----BEGIN RSA PRIVATE KEY-----\r\n";
        $privateKey.=$context;
        $privateKey.="\r\n-----END RSA PRIVATE KEY-----";

        self::$privateKey = $privateKey;

        $privateKeySource = openssl_pkey_get_private( $privateKey );

        if( false === $privateKeySource ){

            throw new RsaEncryptionException( '私匙不合法' );

        }

        self::$privateKeySource = $privateKeySource;

    }


    /**
     * @description 设置公匙
     * @param $context  [公匙内容]
     * @throws RsaEncryptionException
     * @return string
    */
    public static function setPublicKey( $context ){
        $publicKey="-----BEGIN PUBLIC KEY-----\r\n";
        $publicKey.=$context;
        $publicKey.="\r\n-----END PUBLIC KEY-----";
        self::$publicKey = $publicKey;
        $publicKeySource = openssl_pkey_get_public( $publicKey );

        if( false === $publicKeySource ){

            throw new RsaEncryptionException( '公匙不合法' );

        }

        self::$publicKeySource = $publicKeySource;

    }


    /**
     * @description 获取私匙
    */
    public static function getPrivateKey(){

        return self::$privateKey;

    }


    /**
     * @description 获取私匙的资源
     * @return  RsaEncryption::$privateKeySource
    */
    public static function getPrivateKeySource(){

        return self::$privateKeySource;

    }


    /**
     * @description 获取公匙的资源
     * @return  RsaEncryption::$publicKeySource
     */
    public static function getPublicKeySource(){


        return self::$publicKeySource;

    }

    /**
     * @description 获取公匙
     * @return  RsaEncryption::$publicKey
     */
    public static function getPublicKey(){

        return self::$publicKey;

    }


}
