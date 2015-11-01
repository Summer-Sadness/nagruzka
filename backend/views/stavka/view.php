<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Stavka */
?>
<div class="stavka-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'chasi',
        ],
    ]) ?>

</div>
