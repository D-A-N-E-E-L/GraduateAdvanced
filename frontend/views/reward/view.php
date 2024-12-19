<?php

use app\models\User;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Reward $model */

$this->title = $model->nswrewarded;
$this->params['breadcrumbs'][] = ['label' => 'Награды', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="reward-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
      'options'=>['class'=>'gridview'],
        'model' => $model,
        'attributes' => [
            'nswrewarded',
            'typereward',
            'level',
            'datareward',
        ],
    ]) ?>

</div>
