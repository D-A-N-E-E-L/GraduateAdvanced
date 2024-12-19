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

    <p>
        <?= (Html::a('Обновить данные', ['update', 'ids' => $model->ids], ['class' => 'btn btn-primary'])); ?>
        <?= (Html::a('Удалить данные', ['delete', 'ids' => $model->ids], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверенны что хотите удалить этот объект?',
                'method' => 'post',
            ],
        ]));
        ?>
    </p>
    <?="<img src='{$model['photo']}'>"?>
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
