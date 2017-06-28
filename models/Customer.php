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
 * @property string $id [INTEGER]
 * @property string $name [VARCHAR]
 * @property string $created_at [INTEGER UNSIGNED]
 */
class Customer extends ActiveRecord
{
    public static function tableName()
    {
        return 'customers';
    }
}
