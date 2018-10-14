<?php
namespace xq\interfacelib;

//连连支付商品分类
interface LianLianGoodsCategory{

    //非实名虚拟物品，所指的是购买的物品属于虚拟物品比如充值点卡，话费等，并且是匿名购买的。
    const ANONYMOUS_VIRTUAL_GOODS = (object)[
        //虚拟卡充值
        //话费卡，游戏点卡
        'VIRTUAL_POINT'=>1001,

        //虚拟钱包充值，虚拟账户充值
        'VIRTUAL_WALLET_RECHARGE'=>1002,

        //数字娱乐,网路游戏道具，装备购买，彩铃影音充值/歌曲下载
        'ONLINE_ENTERTAINMENT'=> 1003,

        //网路虚拟服务,门户/资讯/论坛/网络小说/搜索引 擎/网络广告/网络推广费/视频制作
        'VIRTUAL_SERVICE'=>1004,

        //网路推广营销 团购/优惠/促销/打折卡
        'INTERNET_MARKETING'=>1005,

        //娱乐票务 影票/演唱会/赛事/舞台剧等娱乐票 务
        'ENTERTAINMENT_TICKETING'=>1006,

        //博彩类 彩票
        'LOTTERY'=>1007,

        //中介\咨询服务 中介/招聘/婚介交友/返利;咨询(医 疗咨询除外)，法律咨询、金融咨 询等;
        'INTERMEDIARY_AGENT'=>1008,

        //生活服务 家政/婚庆服务/摄影服务/印刷/维 修服务/排版/刻板;物流/快递服务
        'SERVICE_FOR_LIFE'=>1009,

        //个人话费充值 移动手机充值
        'PERSONAL_PHONE_CHARGES_RECHARGE'=>1010,

        //其他 其他特殊虚拟类或无法归类商品或服务
        'OTHER'=>1999

    ];

    //实名类 ，指的是实名认证过购买的商品
    const REAL_NAME = (object)[

        //商旅机票 航空机票、酒订预订(国内、国际)
        'TRADE_CARAVAN_AIR_TICKET'=>2001,

        //旅游票务 旅馆/酒店/景区/度假区; 汽车票/船票等长途交通票务
        'TRAVEL_TICKET'=>2002,

        //证券 证券类商品
        'SECURITY'=>2003,

        //基金
        'FUND'=>2004,

        //保险
        'INSURANCE'=>2005,

        //贵金属交易
        'TRADING_IN_PRECIOUS_METALS'=>2006,

        //技术开发、软件服务 各类软件(学习/办公管理等)销售、 开发或服务费
        'SOFTWARE_SERVICE'=>2007,

         //娱乐/健身服务 美容/健身类会所、会员服务、套餐; 会员制俱乐部/高尔夫球场/休闲会 所
        'ENTERTAINMENT_SERVICE'=>2008,

        //P2P 小额贷款
        'P2P_LOANS'=>2009,

        //其他 其他特殊低风险业务
        'OTHER'=>3999,



    ];

    const PUBLIC_EDUCATION_PAY_THE_FEES = (object)[

        //教育、学费 教育/培训/考试缴费/学费
        'COST_OF_EDUCATION'=>3001,

        //公共事业缴费 水电煤缴费/交通罚款/城市交通卡 等生活缴费
        'UTILITY_BILL'=>3002,

        //其他 其他特殊低风险业务
        'OTHER'=>3999,



    ];

    //实物类商品
    const ENTITY = (object)[

        //家居百货 服装/鞋帽/饰品; 家居、建材、装饰、布艺类; 母婴、玩具; 装饰园艺/工艺品/盆栽/室内装饰品 /摆设等
        'HOUSEHOLD_DEPARTMENT'=>4001,

        //书籍/音像/文具 书籍刊物/音像制品; 文具/办公设备/耗材; 乐器;
        'BOOKS_ANOTHER'=>4002,

        //五金器材 摩托/自行车/配件/改装; 健身器材
        'HARDWARE_EQUIPMENT'=>4003,

        //数码家电 家用电器、手机、相机等
        'DIGITAL_HOME_APPLIANCES'=>4004,

        //礼品、保健品 化妆品/保健品/滋补品
        'GIFT'=>4005,

        //药品 处方药/非处方药
        'DRUG'=>4006,

        //收藏、工艺品 古董、工艺品、黄金、首饰
        'THE_COLLECTION'=>4007,

        //农产品 粮食、蔬果、活禽、家畜、网类等
        'AGRICULTURAL_PRODUCTS'=>4008,

        //外贸出口类 综合分类
        'EXPORT_TRADE'=>4100,

        //其他特殊实物类商品
        'OTHER'=>4999

    ];

    //大额类商品包括但不限于 （实物，虚拟物品）
    const WHOLESALE = (object)[

        //房地产
        'REAL_ESTATE'=>5001,

        //汽车
        'AUTOMOBILE'=>5002,

        //奢侈品 高档奢侈品(名牌手表、箱包等)
        'LUXURY_GOODS'=>5003,

        //其他 其他大额或奢侈品商品
        'OTHER'=>5999


    ];


}