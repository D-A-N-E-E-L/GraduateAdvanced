<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Service $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="service-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'namesvs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ids')->textInput() ?>

    <?= $form->field($model, 'nsw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'entersdate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
