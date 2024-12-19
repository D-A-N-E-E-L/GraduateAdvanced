<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Technical $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="technical-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'typeeducataion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nameeducation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'study')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'entersdate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
