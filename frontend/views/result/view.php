<?php

use app\models\User;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\ResultOfEGA $model */

$this->title = $model->subject;
$this->params['breadcrumbs'][] = ['label' => 'Результаты ЕГЭ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="result-of-ega-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
      'options'=>['class'=>'gridview'],
        'model' => $model,
        'attributes' => [
            'ids',
            'subject',
            'countb',
            'teacher',
        ],
    ]) ?>

</div>
