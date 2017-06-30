<?php
/**
 * Created by PhpStorm.
 * User: Denis Bondar
 * Date: 28.06.2017
 * Time: 12:58
 */

namespace app\models;


use yii\db\ActiveRecord;

/**
 * Class Customer
 * @package app\models
 *
 * @property string $id [INTEGER]
 * @property string $name [VARCHAR]
 * @property string $created_at [INTEGER UNSIGNED]
 *
 * @property CustomerAddress[] $addresses
 * @property CustomerEmail[] $emails
 */
class Customer extends ActiveRecord
{
    public static function tableName()
    {
        return 'customers';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddresses()
    {
        return $this->hasMany(CustomerAddress::className(), ['customer_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmails()
    {
        return $this->hasMany(CustomerEmail::className(), ['customer_id' => 'id']);
    }
}
