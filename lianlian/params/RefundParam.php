<?php
namespace xq\lianlian\params;
use xq\interfacelib\Params;

//退款参数，请求参数使用json进行报文编辑
class RefundParam implements Params{

    //对应字段 no_order [对应连连支付的字段]
    //@description 商户编号 商户编号是商户在连连支付支付平台上开设的 商户号码，为 18 位数字，如: 201304121000001004
    protected $oidPartNer;

    //对应字段 sign_type [对应连连支付的字段]
    //@description 请求签名方式
    //默认只有一种签名方式就是RSA
    //全参数加签
    protected $signType;


    //对应字段 sign [对应连连支付的字段]
    //@description 签名串
    //全参数加签
    protected $sign;



    //对应字段 no_refund [对应连连支付字段]
    //@description 退款流水号
    //商户系统唯一标识该退款的流水号
    protected $noRefund;

    //对应字段 dt_refund [对应连连支付字段]
    //@description 商户退款的时间
    protected $refundAt;

    //对应字段 money_refund [对应连连支付字段]
    protected $total;

    //对应字段 no_order [对应连连支付字段]
    //@description 原商户订单号
    // 原商户订单号和连连银通支付单号 oid_paybill，这两个必须提供一个作为退原单 的标识
    protected $orderNo;


    //对应字段 dt_order [对应连连支付字段]
    //@description 原商户 订单时 间
    //原商户订单号、原订单时间和连连银通支付单 号 oid_paybill，这两个必须提供一个作为退原 单的标识，格式:YYYYMMDDH24MISS 14 位数字，精确到秒
    protected $orderAt;

    //对应字段 oid_paybill [对应连连支付字段]
    //@description 原连连 银通支 付单号
    //原订单对应的连连银通支付单号
    protected $oidPayBill;

    //对应字段 notify_url [对应连连支付字段]
    //@description 服务器 异步通 知地址
    //连连支付支付平台在退款后通知商户服务端的
    //地址，如:http://www.chhy.site/payment/notify
    protected $notifyUrl;




}