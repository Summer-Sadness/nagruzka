<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Kafedra */
?>
<div class="kafedra-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nazvanie:ntext',
            'fakultet',
        ],
    ]) ?>

</div>
