<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Reward $model */

$this->title = 'Добваить данные о наградах';
$this->params['breadcrumbs'][] = ['label' => 'Награды', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reward-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
