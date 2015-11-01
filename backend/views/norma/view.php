<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Norma */
?>
<div class="norma-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'distsiplina',
            'lekcii',
            'prakticheskie',
            'laboratornie',
            'srs',
        ],
    ]) ?>

</div>
