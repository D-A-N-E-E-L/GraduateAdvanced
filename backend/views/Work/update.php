<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Work $model */

$this->title = 'Обновить данные: ' . $model->nameorganes;
$this->params['breadcrumbs'][] = ['label' => 'Трудоустройтво', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nameorganes, 'url' => ['view', 'ido' => $model->ido]];
$this->params['breadcrumbs'][] = 'Обновленние данных';
?>
<div class="work-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
