<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Technical $model */

$this->title = 'Добавить учебное заведение';
$this->params['breadcrumbs'][] = ['label' => 'Учебное заведение', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="technical-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
