<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Graduat $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="graduat-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nsw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthday')->textInput() ?>

    <?= $form->field($model, 'entersyear')->textInput() ?>

    <?= $form->field($model, 'exityear')->textInput() ?>

    <?= $form->field($model, 'ts')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->textInput()?>

    <?= $form->field($model, 'class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idt')->textInput()?>

    <?= $form->field($model, 'ido')->textInput() ?>

    <?= $form->field($model, 'idsvs')->textInput() ?>

    <?= $form->field($model, 'parents')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dlc')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
