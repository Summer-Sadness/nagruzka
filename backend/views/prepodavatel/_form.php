<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Stavka;

/* @var $this yii\web\View */
/* @var $model backend\models\Prepodavatel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prepodavatel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fio')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'zvanie')->textarea(['rows' => 6]) ?>

    <?//= $form->field($model, 'stavka')->textInput() ?>

    <?= $form->field($model, 'stavka')->dropDownList(
      ArrayHelper::map(Stavka::find()->all(),'id','chasi'),
      ['prompt' => 'Количество часов']

    ) ?>


  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
