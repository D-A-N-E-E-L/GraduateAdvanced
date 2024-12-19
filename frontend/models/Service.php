<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Service".
 *
 * @property int $idsvs
 * @property string $namesvs
 * @property int $ids
 * @property string $nsw
 * @property string $entersdate
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namesvs', 'ids', 'nsw', 'entersdate'], 'required'],
            [['ids'], 'integer'],
            [['entersdate'], 'safe'],
            [['namesvs', 'nsw'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idsvs' => 'Кож СВС',
            'namesvs' => 'Название СВС',
            'ids' => 'Код выпускника',
            'nsw' => 'ФИО',
            'entersdate' => 'Дата поступления',
        ];
    }
}
