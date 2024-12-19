<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Graduat $model */

$this->title = 'Обновить данные: ' . $model->nsw;
$this->params['breadcrumbs'][] = ['label' => 'Выпускники', 'url' => ['table']];
$this->params['breadcrumbs'][] = ['label' => $model->nsw, 'url' => ['view', 'ids' => $model->ids]];
$this->params['breadcrumbs'][] = 'Обновить данные';
?>
<div class="graduat-update">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
