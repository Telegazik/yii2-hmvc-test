<?php
/**
 * Created by PhpStorm.
 * User: Denis Bondar
 * Date: 29.06.2017
 * Time: 18:38
 */

namespace app\widgets;


use app\models\Customer;
use yii\base\Widget;
use yii\data\ActiveDataProvider;

class CustomerAddressesWidget extends Widget
{
    const PANEL_CLASS_DEFAULT = 'panel-default';
    const PANEL_CLASS_PRIMARY = 'panel-primary';
    const PANEL_CLASS_WARNING = 'panel-warning';
    const PANEL_CLASS_DANGER = 'panel-danger';

    /** @var Customer */
    public $customer;
    /** @var string */
    public $panelClass;
    /** @var string */
    public $title;

    public function init()
    {
        parent::init();

        if (empty($this->panelClass)) {
            $this->panelClass = self::PANEL_CLASS_DEFAULT;
        }

        if (empty($this->title)) {
            $this->title = \Yii::t('app', 'Delivery addresses');
        }
    }


    public function run()
    {
        $provider = new ActiveDataProvider([
            'query' => $this->customer->getAddresses(),
            'sort' => [
                //'route' => 'customer/addresses'
                'sortParam' => 'cst-adr-srt'
            ],
            'pagination' => [
                //'route' => 'customer/addresses'
                'pageParam' => 'cst-adr-pg'
            ]
        ]);

        return $this->render('customer-adresses', [
            'provider' => $provider,
            'panelClass' => $this->panelClass,
            'title' => $this->title,
        ]);
    }
}