<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Prepodavatel */
?>
<div class="prepodavatel-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'fio:ntext',
            'zvanie:ntext',
            'stavka',
        ],
    ]) ?>

</div>
