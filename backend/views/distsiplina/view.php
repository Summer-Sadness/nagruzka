<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Distsiplina */
?>
<div class="distsiplina-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nazvanie:ntext',
            'ekzamen',
            'zachet',
            'kursovoi',
            'modul',
            'podgrupchel',
            'specialnost',
        ],
    ]) ?>

</div>
