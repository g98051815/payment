<?php
namespace xq\lianlian\params;
use xq\interfacelib\LianLianParam;

class RefundQueryParam implements LianLianParam{

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
    //商户系统唯一标识该退款的流水号(支持按商户退款流水号查询)
    protected $noRefund;


    //对应字段 dt_refund [对应连连支付字段]
    //@description 商户退款的时间
    //格式:YYYYMMDDH24MISS 14 位数字， 精确到秒，此字段可以不送，只要商户退款流 水号在商户系统中保证唯一 根据退款流水查询的时候 必传
    protected $refundAt;

    //对应字段  oid_refundno [对应连连支付字段]
    //@description 连连银通退款 流水号
    // 银通退款流水号(也支持按连连银通的退款流水号加退款时间查询)
    protected $oidRefundNo;



}