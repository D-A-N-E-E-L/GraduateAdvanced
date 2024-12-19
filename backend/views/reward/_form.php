<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Reward $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="reward-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nswrewarded')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'typereward')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'level')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'datareward')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
