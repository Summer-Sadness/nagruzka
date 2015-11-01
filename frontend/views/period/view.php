<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Period */
?>
<div class="period-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nazvanie:ntext',
            'kNedel',
        ],
    ]) ?>

</div>
