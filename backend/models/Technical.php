<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "technical".
 *
 * @property string $typeeducataion
 * @property string $nameeducation
 * @property string $study
 * @property string $status
 * @property string $entersdate
 * @property int $idt
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
            [['entersdate'], 'safe'],
            [['typeeducataion', 'nameeducation', 'study', 'status'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'typeeducataion' => 'Вид обучения',
            'nameeducation' => 'Название учреждения',
            'study' => 'Цель обучения',
            'status' => 'Статус',
            'entersdate' => 'Дата поступления',
            'idt' => 'Idt',
        ];
    }
}
