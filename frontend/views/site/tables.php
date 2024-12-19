<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php
$this->title = 'Данные';
$this->params['breadcrumbs'][] = $this->title; ?>
<?php

use yii\helpers\Url;

  $table = url::to(['table']);
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
echo "<a href='{$tableW}' ><button  class='btn-g'>Трудоустройство</button></a>";
echo "</div>";
?>
</body>
</html>
