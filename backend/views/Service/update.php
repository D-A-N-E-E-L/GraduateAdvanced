<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Service $model */

$this->title = 'Обновить данные: ' . $model->namesvs;
$this->params['breadcrumbs'][] = ['label' => 'Служба в воор. силах', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->namesvs, 'url' => ['view', 'idsvs' => $model->idsvs]];
$this->params['breadcrumbs'][] = 'Обновить данные';
?>
<div class="service-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
