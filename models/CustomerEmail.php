<?php
/**
 * Created by PhpStorm.
 * User: Denis Bondar
 * Date: 30.06.2017
 * Time: 14:26
 */

namespace app\models;


use yii\db\ActiveRecord;

/**
 * Class CustomerEmail
 * @package app\models
 *
 * @property string $customer_id [INTEGER]
 * @property string $address [VARCHAR]
 * @property string $description [VARCHAR]
 * @property bool $send_notifications [BOOLEAN]
 * @property string $id [INTEGER]
 *
 * @property Customer $customer
 */
class CustomerEmail extends ActiveRecord
{
    public static function tableName()
    {
        return 'cust_emails';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['id' => 'customer_id']);
    }
}
