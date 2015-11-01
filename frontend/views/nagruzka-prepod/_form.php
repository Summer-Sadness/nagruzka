<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NagruzkaPrepod */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nagruzka-prepod-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'prepodavatel')->textInput() ?>

    <?= $form->field($model, 'konsultacii')->textInput() ?>

    <?= $form->field($model, 'modul')->textInput() ?>

    <?= $form->field($model, 'kursovoi')->textInput() ?>

    <?= $form->field($model, 'kontrolnii')->textInput() ?>

    <?= $form->field($model, 'prakticheskie')->textInput() ?>

    <?= $form->field($model, 'distsiplina')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
