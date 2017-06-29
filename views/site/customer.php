<?php

use app\widgets\CustomerAddressesWidget;
use yii\helpers\Html;

/** @var \yii\web\View $this */
/** @var \app\models\Customer $customer */


echo Html::tag('h1', Html::encode($customer->name));

echo CustomerAddressesWidget::widget([
    'customer' => $customer
]);
