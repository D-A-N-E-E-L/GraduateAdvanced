<?php

use app\models\User;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Service $model */

$this->title = $model->namesvs;
$this->params['breadcrumbs'][] = ['label' => 'Служба в воор. силах', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="service-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= DetailView::widget([
      'options'=>['class'=>'gridview'],
        'model' => $model,
        'attributes' => [
            'idsvs',
            'namesvs',
            'ids',
            'nsw',
            'entersdate',
        ],
    ]) ?>

</div>
