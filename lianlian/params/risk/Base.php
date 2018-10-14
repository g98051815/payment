<?php
namespace xq\lianlian\params\risk;
use xq\interfacelib\LianLianParam;
/**
 * 基础的风控参数所有的风控参数必须继承此参数
*/
class Base implements LianLianParam{


    //对应字段 frms_ware_category [连连支付对应的字段]
    //@description 用户在商户系统中的标识
    protected $goodsCategory;

    //对应字段  user_info_mercht_userno [连连支付对应的字段]
    //@description 商户用户唯一标识
    //用户在商户系统中的标识
    protected $merchantCode;


    //对应字段  user_info_mercht_userlogin [连连支付对应字段]
    //@description 商户用户唯一标识
    //商户用户登陆名
    protected $merchantAccount;


    //对应字段 user_info_mail [连连支付对应字段]
    //@description 商户邮箱
    //用户在商户系统中注册的 邮箱
    protected $merchantEmail;

    //对应字段 user_info_bind_phone [连连支付对应的字段]
    //@description 绑定手机号
    //如有，需要传送
    protected $merchantBindPhone;

    //对应字段 user_info_mercht_usertype [连连支付对应的字段]
    //@description  商户用户分类
    //1:普通用户 2:白名单用户(低风险， 可靠用户)默认为 1
    protected $merchantUserType = 1;

    //对应字段 user_info_dt_register [连连支付对应的字段]
    //@description *注册时间
    //日期类型 ：YYYYMMDDHHIISS
    protected $userRegisterAt;

    //对应字段 user_info_register_ip
    //@description 注册ip
    //用户在商户端注册时留存 的 IP
    protected $userRegisterIpAddress;







}