<?php

/** @var \yii\data\ActiveDataProvider $provider */

use app\widgets\GridViewPanelled;

echo \yii\helpers\Html::tag('h1', 'HMVC Demo');

echo GridViewPanelled::widget([
    'id' => 'cust',
    'panelCssClass' => 'panel-primary',
    'title' => 'Customers list',
    'options' => [
        'dataProvider' => $provider,
        'columns' => [
            'name',
            'created_at:datetime',
        ],
        'tableOptions' => [
            'class' => 'table table-condensed table-hover'
        ],
    ]
    //'controller' => \app\controllers\SiteController::className(),
]);
