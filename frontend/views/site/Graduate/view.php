<?php

use app\models\User;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Graduat $model */

$this->title = $model->nsw;
$this->params['breadcrumbs'][] = ['label' => 'Выпускники', 'url' => ['table']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="graduat-view">

    <h1><?= Html::encode($this->title) ?></h1>
  <?="<img src='{$model['photo']}' width='200px' height='200px' class='img' >"?>
    <?= DetailView::widget([
      'options'=>['class'=>'gridview'],
        'model' => $model,
        'attributes' => [
            'ids',
            'nsw',
            'birthday',
            'entersyear',
            'exityear',
            'ts',
            'class',
            'idt',
            'ido',
            'idsvs',
            'parents',
            'address',
            'phone',
            'dlc',
        ],
    ]) ?>

</div>
