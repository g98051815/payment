<?php
namespace xq\lianlian\params;
use xq\interfacelib\Params;
use xq\core\ParamsBase;
/**
 * 连连支付参数的实现
*/
class GenerateParam extends ParamsBase implements Params{



    //对应字段 no_order [对应连连支付的字段]
    //@description 商家订单号
    protected $orderNo;

    //对应字段 oid_partner [对应连连支付的字段]
    //@description 商户在银通所开的商户号
    protected $oidPartNer;

    //对应字段 appid [对应连连支付的字段]
    //@description 微信或者支付宝的appid
    protected $appId;

    //对应字段 openid [对应连连支付的字段]
    //@description 微信或者支付宝的openid
    protected $openId;

    //对应字段 busi_partner [对应连连支付的字段]
    //@description 虚拟商品销售 商户的业务类型
    //参数说明
    //虚拟商品:101001
    //实物商品销售:109001
    protected $businessType;


    //对应字段 money_order [对应连连支付的字段]
    //商品价值的总订单金额 该笔商品的订单总金额 money_order，可以直接使用float类型进行输入，不会遇到微信支付的（分制单位）
    //***注意***：也就是说微信支付转换分的操作可以省略，直接可以按照支付宝的付多少钱填多少钱就可以。
    protected $totalAmount;

    //对应字段 userid [对应连连支付的字段]
    protected $userId; //用户的编号, 付款方的userid，针对于连连支付而言

    //对应字段 name_user [对应连连支付的字段]
    protected $UserName; //name_user 非钱包用户可以可以传入可以不传入，不传入默认记录为匿名用户

    //对应字段 id_type [对应连连支付的字段]
    //@description 默认值为：【 0 】
    //参数说明
    //0为身份证
    //1为户口簿
    //2为护照
    //3为军官证
    //4为士兵证
    //5为港澳居民来往内地通行证
    //6为台湾同胞来往内地通行证
    //7临时身份证
    //8外国人居留证
    //9为警官证
    //10组织机构代码
    //X为其他证件
    protected $idType;

    //对应字段 id_no [对应连连支付的字段]
    //@description 付款方证件号码，钱包用户可以不传，默认取实名认证的证件号
    protected $idNo;

    //对应字段 col_userid [对应连连支付的字段]
    //@description 收款方 钱包用户的id， 如果该字段默认给商户号收款.
    //***注意***收款方用户与收款方商户号必须传入，并且两者一次只能传一个不同同时传入
    protected $beneficiary;

    //对应字段 col_oidpartner [对应连连支付的字段]
    //@description 收款方商户号 收款方商户号是商户在连连钱包支付平台 上开设的商户号码，为 18 位数字，如: 201304121000001004
    //***注意***收款方用户与收款方商户号两者必须传一 个(不能同时传)
    protected $merchantCode;

    //对应字段 name_goods [对应连连支付的字段]
    //@description 商品名称
    protected $goodsName;

    //对应字段 dt_order [对应连连支付的字段]
    //@description 商家订单时间 格式 [YYYYMMDDHHIISS]
    //***注意***时间中不存在【:】或者其他分隔符，时间是以24小时制的组合之后共14位
    protected $createdAt;

    //对应字段 notify_url [对应连连支付的字段]
    //@description 商家的回调通知接口
    protected $notifyUrl;

    //对应的字段 notify_url [对应连连支付的字段]
    //@description 商家回调通知
    protected $returnUrl;

    //对应的字段 order_description [对应连连支付的字段]
    //@description 订单的描述
    protected $orderDescription;

    //对应的字段 pay_type [对应连连支付的字段]
    //@description 支付类型
    //参数列表
    //I-微信扫码支付
    //L-支付宝扫码支付
    //Y-微信App支付
    //W-微信公众号支付
    protected $payType;

    //对应的字段 riskItem [对应连连支付的字段]
    //@description 风控字段 风险控制字段
    //***注意*** 此字段需要使用json进行传输
    //参数列表
    //商品类目 frms_ware_category string 必填数据
    //商户用户唯一标识 user_info_mercht_userno String 必填数据
    //商户用户登陆名 user_info_mercht_userlogin String
    //商户邮箱 user_info_email String
    //绑定的手机号 user_info_bind_phone
    //商户用户分类 user_info_mercht_usertype String
    //注册时间 user_info_dt_register 时间格式[YYYYMMDDHHIISS]
    //注册IP user_info_register_ip String 用户在商户端注册时留存的IP
    protected $riskItem;

    //分帐信息数据 shareing_data [对应字段]
    //分帐帐号^分帐帐号类型^分帐金额^分账 说明|分帐帐号^分帐帐号类型^分帐金额^ 分账说明|分帐帐号^分帐用户号^分帐帐 号类型^分帐金额^分账说明
    //***注意***
    //1、分帐帐号:可以为 用户编号(user_id 字 段)或者是商户号字段 2、分帐帐号类型:0 钱包用户类型， 1 商 户类型 3、分帐金额:元为单位，保留两位数字 4、分账说明:不能超过 100 个汉字，不能 有^和|符号
    //分账方只支持除主收款方外的 3 个分账方
    protected $accountingToDistinguishData;

    //对应字段 sign_type [对应连连支付的字段]
    //@description 请求签名方式
    //默认只有一种签名方式就是RSA
    //全参数加签
    protected $signType;

    //对应字段 sign [对应连连支付的字段]
    //@description 签名串
    //全参数加签
    protected $sign;


    //对应字段 secured_partn er [对应连连支付的字段]
    //@description 担保商户编号
    // 担保商户号是商户在连连支付支付平台上 开设结算到银行账户的商户号码，为 18 位 数字，如:201304121000001004 传了该字段，会走担保相关交易
    protected $GuarnteeMerchantNumber;


    //对应字段 buyer_confirm_valid [对应连连支付的字段]
    //@description 买方确认收货有效期
    //分钟为单位，默认为 10080 分钟(7 天)， 从创建时间开始，过了此订单有效时间此笔 订单就会被设置为失败状态不能再重新进 行支付。
    protected $buyerConfirmValid;


    //对应字段 seller_send_valid [对应连连支付的字段]
    //@description 卖方发货有效期
    //分钟为单位，默认为 10080 分钟(7 天)， 从创建时间开始，过了此订单有效时间此笔 订单就会被设置为失败状态不能再重新进 行支付。
    protected $sellerSandValid;



}