<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Reward $model */

$this->title = 'Обновить данные:' . $model->nswrewarded;
$this->params['breadcrumbs'][] = ['label' => 'Награды', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nswrewarded, 'url' => ['view', 'nswrewarded' => $model->nswrewarded]];
$this->params['breadcrumbs'][] = 'Обновить данные';
?>
<div class="reward-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
