<?php

namespace App\Models\Busi;

use Illuminate\Database\Eloquent\Model;

/**
 * 客户
 * Class Customer
 * @package App\Models\Busi
 * @author xrs
 * @SWG\Model(id="Customer")
 * @SWG\Property(name="faddress", type="string", description="通讯地址")
 * @SWG\Property(name="farea", type="string", description="地区")
 * @SWG\Property(name="fauditor_id", type="integer", description="审核人")
 * @SWG\Property(name="faudit_date", type="string", description="审核日期")
 * @SWG\Property(name="fbusiness_mode", type="string", description="经营模式")
 * @SWG\Property(name="fcity", type="string", description="城市")
 * @SWG\Property(name="fcompany_nature", type="string", description="公司性质")
 * @SWG\Property(name="fcompany_scale", type="string", description="公司规模")
 * @SWG\Property(name="fcountry", type="string", description="国家")
 * @SWG\Property(name="fcreate_date", type="string", description="创建时间")
 * @SWG\Property(name="fcreator_id", type="integer", description="创建人")
 * @SWG\Property(name="fcust_type_id", type="string", description="客户类别")
 * @SWG\Property(name="fdiscount_list_id", type="string", description="折扣表")
 * @SWG\Property(name="fdocument_status", type="integer", description="审核状态")
 * @SWG\Property(name="ffax", type="string", description="传真")
 * @SWG\Property(name="fforbidder_id", type="integer", description="禁用人")
 * @SWG\Property(name="fforbid_date", type="string", description="禁用日期")
 * @SWG\Property(name="fforbid_status", type="integer", description="禁用状态")
 * @SWG\Property(name="fgroup", type="string", description="客户分组")
 * @SWG\Property(name="finvoice_type", type="string", description="发票类型")
 * @SWG\Property(name="fis_credit_check", type="integer", description="启用信用管理")
 * @SWG\Property(name="fmode_transport", type="string", description="运输方式")
 * @SWG\Property(name="fmodify_date", type="string", description="修改时间")
 * @SWG\Property(name="fmodify_id", type="integer", description="修改人")
 * @SWG\Property(name="fname", type="string", description="客户名称")
 * @SWG\Property(name="fprice_list_id", type="string", description="价目表")
 * @SWG\Property(name="fprovince", type="string", description="省份")
 * @SWG\Property(name="fsale_depart", type="string", description="所属营业部")
 * @SWG\Property(name="fseller", type="string", description="销售员")
 * @SWG\Property(name="fservice_depart", type="string", description="所属服务处")
 * @SWG\Property(name="fshort_name", type="string", description="客户简称")
 * @SWG\Property(name="ftax_rate", type="string", description="默认税率")
 * @SWG\Property(name="ftax_register_code", type="string", description="纳税登记号")
 * @SWG\Property(name="ftax_type", type="string", description="税分类")
 * @SWG\Property(name="ftel", type="string", description="联系电话")
 * @SWG\Property(name="ftrading_curr_id", type="string", description="结算币别")
 * @SWG\Property(name="fwebsite", type="string", description="公司网址")
 * @SWG\Property(name="fzip", type="string", description="邮政编码")
 * @SWG\Property(name="id", type="integer", description="")
 */
class Customer extends Model
{
    //
    protected $table = 'bd_customers';
}
