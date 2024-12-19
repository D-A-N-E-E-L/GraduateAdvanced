<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ResultOfEGA $model */

$this->title = 'Обновить данные: ' . $model->ide;
$this->params['breadcrumbs'][] = ['label' => 'Результаты ЕГЭ', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ide, 'url' => ['view', 'ide' => $model->ide]];
$this->params['breadcrumbs'][] = 'Обновить данные';
?>
<div class="result-of-ega-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
