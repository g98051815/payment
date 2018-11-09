<?php
namespace xq\lianlian\params\generate_other_platform;
use xq\interfacelib\Params;
use xq\lianlian\params\generate_other_platform\GenerateOrderBase;
/**
 * 连连支付参数的实现
*/
class WeChatForPublicWap extends GenerateOrderBase implements Params{


    protected $payType = 'W';


}