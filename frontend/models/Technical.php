<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Technical".
 *
 * @property int $idt
 * @property string $typeeducataion
 * @property string $nameeducation
 * @property string $study
 * @property string $status
 * @property string $entersdate
 */
class Technical extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'technical';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['typeeducataion', 'nameeducation', 'study', 'status', 'entersdate'], 'required'],
            [['EntersDate'], 'safe'],
            [['typeeducataion', 'nameeducation', 'study', 'status'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idt' => "Код учебного заведения",
            'typeeducataion' => 'Тип обучения',
            'nameeducation' => 'Название учебного заведения',
            'study' => 'Цель обучения',
            'status' => 'Статус',
            'entersdate' => 'Дата поступленния',
        ];
    }
}
