<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Service $model */

$this->title = 'Добавить данные о службе в воор. силах';
$this->params['breadcrumbs'][] = ['label' => 'Служба в воор. силах', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
