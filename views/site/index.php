<?php

/** @var \yii\data\ActiveDataProvider $provider */

use app\widgets\GridViewPanelled;

echo GridViewPanelled::widget([
    'id' => 'cust',
    'title' => 'Customers list',
    'dataProvider' => $provider,
    //'controller' => \app\controllers\SiteController::className(),
]);
