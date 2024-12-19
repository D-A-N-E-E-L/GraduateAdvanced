<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reward".
 *
 * @property string $nswrewarded
 * @property string $typereward
 * @property string $level
 * @property string $datareward
 * @property int $idr
 */
class Reward extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reward';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nswrewarded', 'typereward', 'level', 'datareward'], 'required'],
            [['datareward'], 'safe'],
            [['nswrewarded', 'typereward', 'level'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nswrewarded' => 'ФИО награжденного',
            'typereward' => 'Вид награды',
            'level' => 'Уровень мероприятия',
            'datareward' => 'Дата награждения',
            'idr' => 'Idr',
        ];
    }
}
