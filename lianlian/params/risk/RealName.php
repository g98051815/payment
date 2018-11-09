<?php
namespace xq\lianlian\params\risk;
use xq\interfacelib\Params;

/**
 * 实名认证类参数
*/
class RealName extends Base implements Params {


    //对应参数 user_info_full_name [对应连连支付的参数]
    //@description 用户注册姓名
    protected $realFullName;

    //对应参数 user_info_id_type [对应连连支付的参数]
    //@description 用户注册证件类型
    //0:身份证或企业经营证件 1:户口簿，
    //2:护照
    //3:军官证,
    //4:士兵证
    //5: 港澳居民来往内地通行证 6:台湾同胞来往内地通行证 7: 临时身份证
    //8: 外国人居留证
    //9: 警官证
    //X:其他证件
    //默认为:0
    protected $idType;

    //对应参数 user_info_id_no
    //@description 用户注册证件号码
    protected $idNo;

    //对应参数 user_info_identify_state [对应连连支付参数]
    //@description  是否实名认证
    //1::是 0:无认证 商户自身是否对用户信息进行实名 认证。默认:0
    protected $identifySate = 0;

    //对应参数 user_info_identify_type
    //@description 实名认证方式
    //是实名认证时，
    //必填
    // 1:银行卡认证
    // 2:现场认证
    // 3:身份证远程认证
    // 4:其它认证
    protected $identifyType;

    protected $mapping = [
        //商品的类别
        'goodsCategory'=>'frms_ware_category',
        //商户用户的唯一标识
        'merchantCode'=>'user_info_mercht_userno',
        //用户在商户系统中的登陆名
        'merchantAccount'=>'user_info_mercht_userlogin',
        //商户邮箱
        'merchantEmail'=>'user_info_mail',
        //绑定的手机号
        'merchantBindPhone'=>'user_info_bind_phone',
        //商户用户分类
        'merchantUserType'=>'user_info_mercht_usertype',
        //注册时间
        'userRegisterAt'=>'user_info_dt_register',
        //注册Ip
        'userRegisterIpAddress'=>'user_info_register_ip',
        //用户注册姓名
        'realFullName'=>'user_info_full_name',
        //正价类型
        'idType'=>'user_info_id_type',
        //用户注册的证件号码
        'idNo'=>'user_info_id_no',
        //实名认证的方式
        'identifySate'=>'user_info_identify_state',
        //实名认证方式
        'identifyType'=>'user_info_identify_type'
    ];
}