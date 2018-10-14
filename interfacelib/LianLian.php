<?php
namespace xq\interfacelib;
/**
 * @author g才华横溢
 * @description 连连支付的接口文件，下面常量定义的解释如下
 * ALIPAY 使用支付宝的支付方式
 * WXWEBVIEWPAY 微信浏览器支付(微信公众号支付)
 * WXAPPPAY 微信APP支付通道 (微信APP支付通道)
 * WXQRCODE 微信二维码支付方式 (用户扫码支付方式)
 * WXPAYBYCARD 微信刷卡支付通道 （微信刷卡支付通道连连支付暂时不支持这个功能）
*/

interface LianLian{


    const ALIPAY = 'L'; 

    const WXWEBVIEWPAY = 'W';

    const WXAPPPAY = 'W';

    const WXQRCODE = 'W';

    const WXPAYBYCARD = 'W';


}