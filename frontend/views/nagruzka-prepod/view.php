<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\NagruzkaPrepod */
?>
<div class="nagruzka-prepod-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'prepodavatel',
            'konsultacii',
            'modul',
            'kursovoi',
            'kontrolnii',
            'prakticheskie',
            'distsiplina',
        ],
    ]) ?>

</div>
