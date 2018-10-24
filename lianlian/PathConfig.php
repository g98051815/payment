<?php
namespace xq\lianlian;

class PathConfig{

    //微信wap,支付宝wap，微信扫码支付，支付宝扫码支付，
    const OTHER_PLATFORM_GENERATE = 'https://wallet.lianlianpay.com/llwalletapi/combinepay.htm';

    //查询订单当前的状态
    const QUERY_ORDER = 'https://wallet.lianlianpay.com/llwalletapi/orderquery.htm';

    //退款订单
    const REFUND_ORDER_GENERATE = 'https://traderapi.lianlianpay.com/refund.htm';

    //退款订单结果查询
    const REFUND_QUERY_ORDER = 'https://traderapi.lianlianpay.com/refund.htm';


}