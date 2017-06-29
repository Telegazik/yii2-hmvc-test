<?php
/**
 * Created by PhpStorm.
 * User: Denis Bondar
 * Date: 29.06.2017
 * Time: 18:31
 */

namespace app\models;


use yii\db\ActiveRecord;

/**
 * Class CustomerAddress
 * @package app\models
 * @property string $customer_id [INTEGER]
 * @property string $address1 [VARCHAR]
 * @property string $address2 [VARCHAR]
 * @property string $city [VARCHAR]
 * @property string $region [VARCHAR]
 * @property string $country [VARCHAR]
 * @property string $zip [VARCHAR]
 * @property string $id [INTEGER]
 *
 * @property Customer $customer
 */
class CustomerAddress extends ActiveRecord
{
    public static function tableName()
    {
        return 'cust_addresses';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['id' => 'customer_id']);
    }
}
