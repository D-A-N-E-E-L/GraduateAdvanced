<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Graduat $model */

$this->title = 'Добавить данные о выпускнике';
$this->params['breadcrumbs'][] = ['label' => 'Выпускники', 'url' => ['/site/table']];
$this->params['breadcrumbs'][] = $this->title;
?>
<body class="mem">
<div class="graduat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</body>
