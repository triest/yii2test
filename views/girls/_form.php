<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Girls */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="girls-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'age')->textInput(['type' => 'number', 'min' => 18, 'value' => 18]) ?>

    <?= $form->field($model, 'sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weigt')->textInput(['type' => 'number', 'min' => 10, 'value' => 50]) ?>

    <?= $form->field($model, 'height')->textInput(['type' => 'number', 'min' => 10, 'value' => 160]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'file')->fileInput() ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
