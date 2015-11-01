<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Fakultet */
?>
<div class="fakultet-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nazvanie:ntext',
        ],
    ]) ?>

</div>
