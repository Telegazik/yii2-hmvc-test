<?php
/**
 * Created by PhpStorm.
 * User: Denis Bondar
 * Date: 29.06.2017
 * Time: 18:38
 */

namespace app\widgets;


use app\models\Customer;
use yii\base\InvalidCallException;
use yii\base\Widget;
use yii\data\ActiveDataProvider;

class CustomerEmailsWidget extends Widget
{
    /** @var Customer */
    public $customer;
    /** @var array Columns for GridView Widget */
    public $columns = [];

    public function run()
    {
        if (!$this->customer || !$this->customer instanceof Customer) {
            throw new InvalidCallException('The param [customer] is required.');
        }

        $provider = new ActiveDataProvider([
            'query' => $this->customer->getEmails(),
            'sort' => [
                'sortParam' => 'cst-eml-srt'
            ],
            'pagination' => [
                'pageParam' => 'cst-eml-pg'
            ]
        ]);

        return $this->render('customer-emails', [
            'provider' => $provider,
            'columns' => $this->columns,
        ]);
    }
}