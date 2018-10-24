<?php
namespace xq\lianlian;

use GuzzleHttp\Client;
use xq\interfacelib\Params;
use xq\interfacelib\Query;
use xq\lib\RsaEncryption;

class QueryOrder implements Query{

    use \xq\core\Json;

    use \xq\core\Util;

    use \xq\lianlian\Configure;



    /**
     * @description 查询订单
     * @param $orderNo [订单的编号]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \xq\exception\RsaEncryptionException
    */
    public function search( Params $params ){



        //获取设置的内容
        $config = self::getConfigure();

        RsaEncryption::setPrivateKey( self::getPrivateKey( $config['private_key'] ) );

        $params->setVariate( 'signType' , $config['sign_type'] );

        $params->setVariate( 'oidPartNer', $config['oid_partner'] );

        RsaEncryption::setPublicKey( self::getPrivateKey( $config['public_key'] ) );



        $queryParam = $params->getVariateWithMapping();

        $params->setVariate(  'sign' , RsaEncryption::encryption( http_build_query( $queryParam  ) ) );

        $queryParam = $params->getVariateWithMapping();


        $client = new Client();


        var_dump( $queryParam );

        exit;


        $res = $client->request('POST',PathConfig::QUERY_ORDER , [

                    'json'=>$queryParam,

        ]);

        echo $res->getBody();

        exit;

    }



}