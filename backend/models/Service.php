<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property string $namesvs
 * @property int $ids
 * @property string $nsw
 * @property string $entersdate
 * @property int $idsvs
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
            [['ids'], 'default', 'value' => null],
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
            'namesvs' => 'Название СВС',
            'ids' => 'Код ученика',
            'nsw' => 'ФИО',
            'entersdate' => 'Дата поступления',
            'idsvs' => 'Idsvs',
        ];
    }
}
