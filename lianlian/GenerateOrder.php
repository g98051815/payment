<?php
namespace xq\lianlian;
use GuzzleHttp\Client;
use xq\exception\RsaEncryptionException;
use xq\interfacelib\Generate;
use xq\interfacelib\LianLianNotify;
use xq\interfacelib\Params;
use \xq\lib\RsaEncryption;

class GenerateOrder implements Generate{

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

          $data = $params->getVariate();

          RsaEncryption::setPrivateKey( $privateKey );

          $signature = RsaEncryption::encryption( self::Encode( $data ) );

          $data['sign'] = $signature;

           $client = new Client();

          $res = $client->request('POST',PathConfig::OTHER_PLATFORM_GENERATE,[
             'form_params'=>[
                 'body'=>$data
             ]
          ]);

        echo $res->getBody();
     }


     public  function notify( LianLianNotify $response)
     {



     }


}