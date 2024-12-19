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
if (!yii::$app->user->isGuest) {
  $id = yii::$app->user->getId();
  $user = User::findone($id);
  $status = $user->getAttribute("Access_level");
}
?>
<div class="service-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= (Html::a('Обновить данные', ['update', 'idsvs' => $model->idsvs], ['class' => 'btn btn-primary'])) ?>
        <?= (Html::a('Удалить данные', ['delete', 'idsvs' => $model->idsvs], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить этот объект?',
                'method' => 'post',
            ],
        ])); ?>
    </p>

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
