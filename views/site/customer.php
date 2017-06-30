<?php

use app\widgets\CustomerAddressesWidget;
use app\widgets\CustomerEmailsWidget;
use yii\helpers\Html;

/** @var \yii\web\View $this */
/** @var \app\models\Customer $customer */

?>
<h1><?= Html::encode($customer->name) ?></h1>

<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">Delivery addresses</h3></div>
            <div class="panel-body">
                <?= CustomerAddressesWidget::widget([
                    'customer' => $customer,
                    'columns' => [
                        'city',
                        'zip',
                        'fullAddress',
                    ]
                ]) ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">Customer email addresses</h3></div>
            <div class="panel-body">
                <?= CustomerEmailsWidget::widget([
                    'customer' => $customer,
                    'columns' => [
                        'address',
                        'description',
                        [
                            'attribute' => 'send_notifications',
                            'label' => '',
                            'format' => 'raw',
                            'value' => function ($model) {
                                return $model->send_notifications
                                    ? '<span class="glyphicon glyphicon-bell" aria-hidden="true"></span>'
                                    : '';
                            }
                        ]
                    ]
                ]) ?>
            </div>
        </div>
    </div>
</div>