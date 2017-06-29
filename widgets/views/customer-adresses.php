<?php

use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var \yii\web\View $this */
/** @var string $panelClass */
/** @var string $title */
/** @var \yii\data\ActiveDataProvider $provider */

?>
<div class="panel <?= $panelClass ?>">
    <div class="panel-heading"><h4 class="panel-title"><?= $title ?></h4></div>
    <div class="panel-body">
        <?php
        Pjax::begin(['id' => 'customer-addresses']);
        echo GridView::widget([
            'dataProvider' => $provider,
        ]);
        Pjax::end();
        ?>
    </div>
</div>
