<?php
namespace xq\lianlian;
use GuzzleHttp\Client;
use xq\exception\RsaEncryptionException;
use xq\interfacelib\Generate;
use xq\interfacelib\LianLianNotify;
use xq\interfacelib\Params;
use \xq\lib\RsaEncryption;
/**
 *创建其他订单的内容
*/
class GenerateOtherOrder implements Generate{

     use \xq\core\Util;

     use \xq\core\Json;

     /**
      * @description 创建订单
      * @param $config
      * @param  $params
      * @throws RsaEncryptionException
      * @throws \GuzzleHttp\Exception\GuzzleException
     */
     public  function generate( $config ,  Params  $params ){

          $privateKey = self::getPrivateKey( $config['private_key'] );

          RsaEncryption::setPublicKey( self::getPrivateKey( $config['public_key'] ) );

          $data = $params->getVariateWithMapping();

          RsaEncryption::setPrivateKey( $privateKey );

          $signature = RsaEncryption::encryption( urldecode( http_build_query( $params->getVariateWithMapping() ) ) );

          $data['sign'] = $signature;
          
          $client = new Client();

          $res = $client->request('POST',PathConfig::OTHER_PLATFORM_GENERATE,[
            'body'=>self::Encode( $data ),
            'debug'=>true
          ]);

        echo $res->getBody();

     }


     public  function notify( LianLianNotify $response)
     {



     }


}