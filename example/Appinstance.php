<?php
namespace xq\example;
use xq\core\Json;
use xq\exception\GenerateOrderException;
use xq\exception\ParamsException;
use xq\lianlian\params\QueryParam;
use xq\lib\GenerateOrder;
use xq\lib\Config;
use xq\lianlian\params\PayTypeParam;
use xq\lib\QueryOrder;

class Appinstance{

    use \xq\core\Json;

    protected static $lianLianConfig =
    [
        //商户账号
        'oid_partner'=>'201806250001948345',
        //私匙
        'private_key'=>__DIR__.'/rsa_private_key.pem',
        //公匙
        'public_key'=>__DIR__.'/rsa_public_key.pem',
        //签名的方式
        'sign_type'=>'RSA',
        //微信的商户账号
    ];



    public  function index(){

        $this->generateOtherOrder();

        //$this->search();


    }

    /**
     * @throws  ParamsException;
     * @throws GenerateOrderException
    */
    public function generateOtherOrder(){

        $config = self::$lianLianConfig;

        $generateWechatPublicParams = new \xq\lianlian\params\generate_other_platform\WeChatForPublicWap();

        $riskParamRealName = new \xq\lianlian\params\risk\RealName();

        $riskParamRealName->setVariates(

            [
                'goodsCategory'=>'3001',
                'merchantCode'=>'18800171183',
                'merchantBindPhone'=>'18800171183',
                'userRegisterAt'=>date('YmdHis')
            ]

        );

        $generateWechatPublicParams->setVariates(

       [
           'orderNo'=>'10002345678',
           'oidPartNer'=>$config['oid_partner'],
           'appId'=>'wxe58cf280312f7847',
           'openId'=>'o-yym0w91kWpYrfciE3ynG8qQcFM',
           'businessType'=>'109001',
           'totalAmount'=>1,
           'userId'=>'0101',
           'merchantCode'=>$config['oid_partner'],
           'notifyUrl'=>'http://baidu.com',
           'goodsName'=>'这个是商品的名称',
           'createdAt'=>date('YmdHis'),
           'returnUrl'=>'http://baidu.com',
           'orderDescription'=>'这个是订单的标识',
           'riskItem'=>self::Encode($riskParamRealName->getVariateWithMapping())
       ]

        );

        //var_dump( $generateWechatPublicParams->getVariateWithMapping() );

        //exit;


        GenerateOrder::generate( Config::LianLian ,  $config  ,  $generateWechatPublicParams );


    }


    /**
     * @throws ParamsException
     * @throws GenerateOrderException
     */
    public function generate(){


        $generateNewParam = new \xq\lianlian\params\GenerateOrderNewChannel();



        $config = self::$lianLianConfig;



        //设置风控参数
        $riskItemResult = $riskParamRealName->getVariateWithMapping();



        $generateNewParam->setVariates(

            [
                'oidPartner'=>$config['oid_partner'],
                //平台标识//1 android，2 ios，3 wap
                'appRequest'=>'3',
                //签名类型
                'signType'=>'RSA',
                //商户业务类型：虚拟类销售：101001 实物销售：109001
                'businessPartner'=>'109001',
                //订单编号
                'noOrder'=>'XS0001222111',
                //订单生成的时间
                'orderCreatedAt'=>date('YmdHis'),
                //商品的名称
                'goodsName'=>'这是一首简单的小情歌',
                //订单的详情
                'infoOrder'=>'唱着人们心肠的曲折',
                //总金额
                'totalAmount'=>0.01,
                //总金额
                'notifyUrl'=>'http://baidu.com',
                //支付结束后返回的url
                'urlReturn'=>'http://baidu.com',
                //点击返回显示的页面内容
                'backUrl'=>'http://baidu.com',
                //风险控制参数
                'riskItem'=>$riskItemResult,
                //商户系统中唯一的标识
            ]

        );


        GenerateOrder::generate( Config::LianLian ,  $config  ,  $generateNewParam );

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