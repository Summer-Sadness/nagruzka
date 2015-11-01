<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Specialnost */
?>
<div class="specialnost-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nazvanie:ntext',
            'kafedra',
        ],
    ]) ?>

</div>
