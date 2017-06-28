<?php

use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var \yii\data\ActiveDataProvider $dataProvider */
/** @var string $id */
/** @var string $title */
?>
<div class="panel panel-default">
    <div class="panel-heading"><h4 class="panel-title"><?= $title ?></h4></div>
    <div class="panel-body">
        <?php
        Pjax::begin(['id' => 'pjax-' . $id]);
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'id' => 'grid-' . $id,
            'tableOptions' => [
                'class' => 'table table-condensed table-hover'
            ],
            'columns' => [
                'name',
                'created_at:datetime',
            ]
        ]);
        Pjax::end();
        ?>
    </div>
</div>