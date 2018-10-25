<?php
namespace xq\lianlian\params;
use xq\core\ParamsBase;
use xq\interfacelib\Params;

class QueryParam extends ParamsBase implements Params{



    //对应字段 oid_partner [对应连连支付的字段]
    //@description 商户在银通所开的商户号
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


    //对应字段 no_order [对应连连支付的字段]
    //@description 商家订单号
    protected $orderNo;



    //对应字段 oid_paybill [对应连连支付字段]
    //@description 原连连 银通支 付单号
    //原订单对应的连连银通支付单号
    protected $oidPayBill;

    //对应字段 dt_order [对应连连支付字段]
    //@description 原商户 订单时 间
    //原商户订单号、原订单时间和连连银通支付单 号 oid_paybill，这两个必须提供一个作为退原 单的标识，格式:YYYYMMDDH24MISS 14 位数字，精确到秒
    protected $orderAt;


    //对应字段 query_version [对应连连支付字段]
    //@description 查询版本号
    //查询版本号 默认 1.0
    protected $version = '1.0';

    //对应字段 user_id [对应连连支付字段]
    //@description 用户唯一标识
    //收付标示为 2,3 的情况下 需要传用户唯一 编号
    protected $userId;


    protected $mapping = [
        'oidPartNer'=>'oid_partner',
        'signType'=>'sign_type',
        'sign'=>'sign',
        'orderNo'=>'no_order',
        'oidPayBill'=>'oid_paybill',
        'orderAt'=>'dt_order',
        'version'=>'query_version',
        'userId'=>'user_id'
    ];



}