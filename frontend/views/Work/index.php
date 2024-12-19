<?php

use app\models\User;
use app\models\Work;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Трудоустройство';
$this->params['breadcrumbs'][] = ['label' => 'Данные', 'url' => ['tables']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="work-index">
  <?php
  $table = url::to(['site/table']);
  $tableR2 = url::to(['reward/']);
  $tableR = url::to(['result/']);
  $tableS2 = \yii\helpers\Url::to(['service/']);
  $tableT = \yii\helpers\Url::to(['technical/']);
  $tableW = \yii\helpers\Url::to(['work/']);
  echo "<div class='btn-ar'>";
  echo "<a href='{$table}'><button class='btn-g'>Выпускники</button></a>";
  echo "<a href='{$tableR}'><button  class='btn-g'>Результаты ЕГЭ</button></a>";
  echo "<a href='{$tableR2}'><button  class='btn-g'>Награды</button></a>";
  echo "<a href='{$tableS2}' ><button  class='btn-g'>Служба в армии</button></a>";
  echo "<a href='{$tableT}' ><button  class='btn-g'>Учебное заведение</button></a>";
  echo "<a href='{$tableW}' ><button  class='btn-A'>Трудоустройство</button></a>";
  echo "</div>";
  ?>
    <h1><?= Html::encode($this->title) ?></h1>


<?=
    GridView::widget([
      'options'=>['class'=>'gridview'],
      'dataProvider' => $dataProvider,
      'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'nameorganes',
        'jobtitle',
        'date',
        'cantactinfo',
        [
          'class' => ActionColumn::className(),
          'visibleButtons' => ['update' => false, 'delete' => false],
          'urlCreator' => function ($action, Work $model, $key, $index, $column) {
            return Url::toRoute([$action, 'ido' => $model->ido]);
          }
        ],
      ],
    ]);
?>
</div>
