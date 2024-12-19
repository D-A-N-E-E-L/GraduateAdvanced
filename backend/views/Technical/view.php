<?php

use app\models\User;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Technical $model */

$this->title = $model->nameeducation;
$this->params['breadcrumbs'][] = ['label' => 'Учебное заведение', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="technical-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= (Html::a('Обновить данные', ['update', 'idt' => $model->idt], ['class' => 'btn btn-primary'])); ?>
        <?= (Html::a('Удалить данные', ['delete', 'idt' => $model->idt], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Ты уверен что хочешь удалить этот обьект?',
                'method' => 'post',
            ],
        ])); ?>
    </p>

    <?= DetailView::widget([
      'options'=>['class'=>'gridview'],
        'model' => $model,
        'attributes' => [
            'idt',
            'typeeducataion',
            'nameeducation',
            'study',
            'status',
            'entersdate',
        ],
    ]) ?>

</div>
