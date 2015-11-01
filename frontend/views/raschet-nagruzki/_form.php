<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RaschetNagruzki */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="raschet-nagruzki-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kurs')->textInput() ?>

    <?= $form->field($model, 'budget')->textInput() ?>

    <?= $form->field($model, 'dogovor')->textInput() ?>

    <?= $form->field($model, 'nSemestra')->textInput() ?>

    <?= $form->field($model, 'modul')->dropDownList([ 'Да' => 'Да', 'Нет' => 'Нет', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'zachet')->dropDownList([ 'Да' => 'Да', 'Нет' => 'Нет', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ekzamen')->dropDownList([ 'Да' => 'Да', 'Нет' => 'Нет', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kursovoi')->dropDownList([ 'Да' => 'Да', 'Нет' => 'Нет', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'period')->textInput() ?>

    <?= $form->field($model, 'norma')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
