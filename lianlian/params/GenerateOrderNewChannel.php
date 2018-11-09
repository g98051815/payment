<?php
namespace xq\lianlian\params;
use xq\core\ParamsBase;
use xq\interfacelib\Params;
/**
 * wap新认证支付（全渠道）接口参数列表
*/

class GenerateOrderNewChannel extends ParamsBase implements Params{

    //版本号码1.1 必填参数
    protected $version ='1.1';

    //必填参数
    //商户编号是商户在连连支付平台上开设的商户号码
    protected $oidPartner;

    // 必填参数
    //商户用户的唯一编号
    protected $userId;


    //该参数可实现多个商户号之间的用户数据共享，该表示添加主商户号即可
    protected $platform;

    //必填参数
    //请求应用标识，1Android 2ios 3wap
    protected $appRequest;

    //必填参数
    //签名方式 RSA
    protected $signType;

    //必填参数
    //签名
    protected $sign;


    //背景颜色
    protected $bgColor;

    //字体颜色
    protected $fontColor;

    //是否主动同步通知标识
    protected $sysNotifyFlag;

    //必填参数
    //商户业务类型：虚拟商品销售：101001 实物商品销售：109001
    protected $businessPartner;

    //必填参数
    //订单编号
    protected $noOrder;

    //必填参数
    //商户订单的时间
    protected $orderCreatedAt;

    //必填参数
    //商品名称
    protected $goodsName;


    //订单标详情
    protected $infoOrder;

    //必填参数
    //订单金额
    protected $totalAmount;

    //必填参数
    //服务器异步通知地址
    protected $notifyUrl;

    //必填参数
    //支付结束后返回的url
    protected $urlReturn;


    //签约协议号
    protected $noAgree;

    //订单有效时间
    protected $validOrder;

    //必填参数
    //证件类型
    protected $idType;

    //必填参数
    //证件号码
    protected $idNo;

    //必填参数
    //银行账户姓名
    protected $acctName;


    //分账信息
    protected $sharedData;

    //风控参数
    protected $riskItem;

    //必填参数
    //银行卡号
    protected $cardNo;

    //必填参数
    //返回修改信息地址
    protected $backUrl;

    //必填参数
    //签约方式
    protected $payType = "P";


    protected $mapping = [
        //版本
        'version'=>'version',
        //商户的编号
        'oidPartner'=>'oid_partner',
        //用户的编号
        'userId'=>'user_id',
        //该参数可以实现多个商户号之间用户数据共享，该标识填写主商户号即可
        'platform'=>'platform',
        //请求标示app_request
        'appRequest'=>'app_request',
        //签类型
        'signType'=>'sign_type',
        //签名内容
        'sign'=>'sign',
        //支付页面背景颜色
        'bgColor'=>'bg_color',
        //支付页面字体颜色
        'fontColor'=>'font_color',
        //是否主动同步通知标识 0点击通知， 1-主动通知，默认为 0
        'sysNotifyFlag'=>'syschnotify_flag',
        //商户业务类型
        'businessPartner'=>'busi_partner',
        //商户唯一订单号
        'noOrder'=>'no_order',
        //订单创建的时间
        'orderCreatedAt'=>'dt_order',
        //商品的名称
        'goodsName'=>'name_goods',
        //订单的信息
        'infoOrder'=>'info_order',
        //订单的总金额
        'totalAmount'=>'money_order',
        //异步通知的地址
        'notifyUrl'=>'notify_url',
        //同步通知的url
        'urlReturn'=>'url_return',
        //签约协议号
        'noAgree'=>'no_agree',
        //订单有效时间
        'validOrder'=>'valid_order',
        //证件类型
        'idType'=>'id_type',
        //证件号码
        'idNo'=>'id_no',
        //银行账号姓名
        'acctName'=>'acct_name',
        //分账信息
        'sharedData'=>'shareing_data',
        //风险控制参数
        'riskItem'=>'risk_item',
        //卡片编号
        'cardNo'=>'card_no',
        //点击修改按钮后返回的页面
        'backUrl'=>'back_url',
        //签约方式
        'payType'=>'pay_type'

    ];



}