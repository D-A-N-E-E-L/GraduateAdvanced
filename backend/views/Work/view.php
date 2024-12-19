<?php

use app\models\User;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Work $model */

$this->title = $model->nameorganes;
$this->params['breadcrumbs'][] = ['label' => 'Трудоустройство', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="work-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?=  (Html::a('Обновить данные', ['update', 'ido' => $model->ido], ['class' => 'btn btn-primary']));?>
         <?=(Html::a('Удалить данные', ['delete', 'ido' => $model->ido], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверенны что хотите удалить этот объект?',
                'method' => 'post',
            ],
        ]));?>

    </p>
    <?= DetailView::widget([
      'options'=>['class'=>'gridview'],
        'model' => $model,
        'attributes' => [
            'ido',
            'nameorganes',
            'jobtitle',
            'date',
            'cantactinfo',
        ],
    ]) ?>

</div>
