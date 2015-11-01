<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\RaschetNagruzki */
?>
<div class="raschet-nagruzki-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'kurs',
            'budget',
            'dogovor',
            'nSemestra',
            'modul',
            'zachet',
            'ekzamen',
            'kursovoi',
            'period',
            'norma',
        ],
    ]) ?>

</div>
