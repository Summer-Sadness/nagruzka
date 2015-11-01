<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Distsiplina */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="distsiplina-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nazvanie')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ekzamen')->textInput() ?>

    <?= $form->field($model, 'zachet')->textInput() ?>

    <?= $form->field($model, 'kursovoi')->textInput() ?>

    <?= $form->field($model, 'modul')->textInput() ?>

    <?= $form->field($model, 'podgrupchel')->textInput() ?>

    <?= $form->field($model, 'specialnost')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
