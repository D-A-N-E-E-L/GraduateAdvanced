<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ResultOfEGA $model */

$this->title = 'Добавить результаты ЕГЭ';
$this->params['breadcrumbs'][] = ['label' => 'Результаты ЕГЭ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="result-of-ega-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
