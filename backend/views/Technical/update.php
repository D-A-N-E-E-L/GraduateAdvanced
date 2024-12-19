<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Technical $model */

$this->title = 'Обновить данные: ' . $model->nameeducation;
$this->params['breadcrumbs'][] = ['label' => 'Учебное заведение', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nameeducation, 'url' => ['view', 'idt' => $model->idt]];
$this->params['breadcrumbs'][] = 'Обновить данные';
?>
<div class="technical-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
