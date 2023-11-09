<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 结算信息管理
 *
 * 生态圈接收机构结算信息管理的申请，对商户的结算信息进行管理
*/
class Request1123 extends Request
{
    /**
     * @var string 平台商户/供应商编码
     * M 1~19
    */
    public $mcht_no = '';

    /**
     * @var string 请求类型
     * M 1 1：查询 2：新增 3：修改
    */
    public $req_type = '';

    /**
     * @var string 结算信息
     * C json串，见 4.3.3 字段说明，请求类型为新增时必传，请求类型为修改且修改账户信息时必填
     *
     * 结算信息json格式
     * settle_seq_no 序号 M 2 01，02……
     * settle_acct_type 结算账户类型 M 1 1：个人账户 2：对公账户
     * settle_cer_type 证件类型 M 2 详见附录 5.2 证件类型
     * settle_cer_num 证件号码 M 1~25
     * settle_bank_id 银行 M 8 详见附录 5.1 银行编码
     * settle_acct_no 账号 M 1~30
     * settle_acct_name 账户户名 M 2~80
     * settle_cnaps_code 联行号 C 12 对公账户必填
     * settle_bank_name 开户行名称 C 1~500 对公账户必填
     * settle_acct_province 账户所在省 O 1~20 带“省”或“自治区”，如 广东省，广西省，内蒙古自治区等。如果是直辖市，则填市，如北京市
     * settle_acct_city 账户所在市 O 1~100 带“市”，如广州市，南宁市等。如果是直辖市，则填市，如北京市北京市。
     * ori_settle_acct_no 原结算账号 C 1~30 结算信息管理请求类型为 3-修改时必填
     * ori_settle_acct_name 原结算账号户名 C 2~80结算信息管理请求类型为 3-修改时必填
     * settle_acct_sub_no 结算交易子账号 R 17 进件成功响应
     * json串：[{账户 1 信息},{账户 2 信息}……{账户 n 信息}] 说明：进件时结算账户仅支持上送 1 个，多结算账户通过结算信息管理新增获得；
    */
    public $settle_info = '';

    /**
     * @var string 分账比例
     * C 1 按比例分账时填写请求类型为新增时必填，请求类型为修改且修改分账比例时必填。填写格式：账号 1：比例|账号 2：比例填 写 样 例 ：6217800259121525 ：60|6217900566668954：40填写时每个结算账号对应的分账比例累加求和需等于 100
    */
    public $settle_sep_proportion = '';

    /**
     * @var string 附件
     * O json串，见 4.3.7 字段说明，只需上传结算账户证明材料、结算账户授权委托书及免责声明、被授权人身份证正反面和关系证明即可
     *
     * 附件json格式
     * tax_or_union 营业执照/统一社会信用代码 C 1~256 企业、个体工商户必填
     * legp_cer_front 法人身份证-正面 M 1~256
     * legp_cer_back 法人身份证-反面 M 1~256
     * settle_acct_pic 结算账户证明材料 M 1~256 银行卡正面照片/开户许可证照片
     * author_pic 签字授权书 C 1~256 仅商户类型为 1-平台商户时可填法人手机号与本人信息不一致，不能通过运营商三要素验证，可上传签字授权书以便合规性审查
     * settle_auth_paper 结算账户授权委托书及免责声明 C 1~256 结算账户对私时，且允许法人与结算账户不一致时，必填
     * authed_person_cert 被授权人身份证正反面 C 1~256 需加盖公章，结算账户对私时，且允许法人与结算账户不一致时，必填
     * relation_proof 关系证明 C 1~256 被授权人与商户关系证明，结算账户对私时，且允许法人与结算账户不一致时，必填
     * business_explain 业务说明 O 1~256 当存在多方按比例分账时需要填写
     * stroe_pic 门头照片 C 1~256 商户类型为 1-平台商户时必填
     * stroe_inner_pic 内景照片 C 1~256 商户类型为 1-平台商户时必填
     * legp_with_cer 经营者手持证件照片 C 1~256 商户性质个人时必填
     * owner_shop_pic 经营者与店铺门头合照 C 1~256 商户类型为 1-平台商户并且商户性质为个人时必填
     * biz_place_pic 经营场所证明文件 C 1~256 商户类型为 1-平台商户并且商户性质为个人时必填（不限于营业场所租赁协议或者产权证明、集中经营场所管理方出具的证明文件等）
     * paper_agreement 纸质协议 C 1~256 协议签署方式纸质必填
     * paper_agreement_front 纸质协议首页 C 1~256 协议签署方式纸质、商户性质为平台商户时必填
     * paper_agreement_back 纸质协议盖章页 C 1~256 协议签署方式纸质、商户性质为平台商户时必填
     * register_form 注册登记表 C 1~256 商户类型为 1-平台商户并且协议签署方式纸质必填
     * business_form 业务表 O 1~256
     * business_flow 交易流程截图 C 1~256 商户类型为 1-平台商户并且业务场景线上必传
     * other 其他 O 1~256 合并成一个文件
     * 请求包含报文+文件 zip 包流字符串，这里的附件只是文件 zip 流中包含的文件的文件名。注：附件采用机构上送 url 地址，生态圈主动访问该地址下载的方式传输，除 md5 签名外，其余报文元素取值均为图片/文件链接的 url。
    */
    public $appendix_info = '';

    /**
     * @var string 后台应答地址
     * C 1~1024 回调通知地址
    */
    public $resp_url = '';
}
