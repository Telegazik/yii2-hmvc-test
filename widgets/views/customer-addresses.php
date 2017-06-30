<?php

use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var \yii\web\View $this */
/** @var \yii\data\ActiveDataProvider $provider */
/** @var array $columns */

Pjax::begin(['id' => 'customer-addresses']);
echo GridView::widget([
    'dataProvider' => $provider,
    'columns' => $columns,
]);
Pjax::end();
