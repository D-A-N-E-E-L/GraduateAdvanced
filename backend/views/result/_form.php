<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ResultOfEGA $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="result-of-ega-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ids')->textInput()->label('Код ученика') ?>

    <?= $form->field($model, 'subject')->textInput(['maxlength' => true])->label('Предмет') ?>

    <?= $form->field($model, 'countb')->textInput()->label('Кол-во баллов') ?>

    <?= $form->field($model, 'teacher')->textInput(['maxlength' => true])->label('От. учитель') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
