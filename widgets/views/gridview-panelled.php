<?php

use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\widgets\Pjax;

/** @var \yii\data\ActiveDataProvider $dataProvider */
/** @var string $id */
/** @var string $title */
/** @var string $panelCssClass */
/** @var array $options */
?>
<div class="panel <?= $panelCssClass ?>">
    <div class="panel-heading"><h4 class="panel-title"><?= $title ?></h4></div>
    <div class="panel-body">
        <?php
        $config = ArrayHelper::merge([
            'id' => 'grid-' . $id,
        ], $options);
        Pjax::begin(['id' => 'pjax-' . $id]);
        echo GridView::widget($config);
        Pjax::end();
        ?>
    </div>
</div>