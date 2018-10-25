<?php
namespace xq\example;
use xq\exception\GenerateOrderException;
use xq\exception\ParamsException;
use xq\lianlian\params\GenerateParam;
use xq\lianlian\params\QueryParam;
use xq\lib\GenerateOrder;
use xq\lib\Config;
use xq\lianlian\params\PayTypeParam;
use xq\lib\QueryOrder;

class Appinstance{



    public  function index(){

        $this->search();


    }

    /**
     * @throws ParamsException
     * @throws GenerateOrderException
     */
    public function generate(){


        $generateParam = new GenerateParam();

        $generateParam->setVariates(

            [
                'orderNo'=>'这个是订单的编号',
                'oidPartNer'=>'这个是订单的啥啥啥',
                'appId'=>'微信的编号',
                'openId'=>'微信的开放平台id',
                'businessType'=>'101001',
                'totalAmount'=>0.01,
                'merchantCode'=>'连连支付的商户号',
                'goodsName'=>'商品的名称',
                'createdAt'=>time(),
                'notifyUrl'=>'通知的地址',
                'returnUrl'=>'跳转的地址',
                'orderDescription'=>'订单的描述',
                'payType'=>PayTypeParam::WXWEBVIEWPAY,
                'riskItem'=>'风控字段',
                'signType'=>'RSA',
                'sign'=>'签名的字段',
                'buyerConfirmValid'=>'买方方确认收货有效期',
                'sellerSandValid'=>'卖方确认发货有效期'
            ]

        );

        $config = [
            'private_key'=>__DIR__.'/app_private_key.pem',
            'public_key'=>__DIR__.'/app_public_key.pem'
        ];


        GenerateOrder::generate( Config::LianLian ,  $config  ,  $generateParam );

    }


    /**
     * @description 查询
     * @throws
    */
    public function search(){

        $queryParam = new QueryParam();

        $queryParam->setVariates(
            [
                'oidPartNer'=>'abcdef00101212',
                'orderNo'=>'hello',
                'orderAt'=>date('YmdHis' ),
            ]
        );

        $config = [
            //商户账号
            'oid_partner'=>'201806250001948345',
            //私匙
            'private_key'=>__DIR__.'/rsa_private_key.pem',
            //公匙
            'public_key'=>__DIR__.'/rsa_public_key.pem',
            //签名的方式
            'sign_type'=>'RSA'
        ];

        QueryOrder::search( Config::LianLian , $config , $queryParam  );


    }


}