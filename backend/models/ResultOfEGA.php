<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "result".
 *
 * @property int $ids
 * @property string $subject
 * @property float $countb
 * @property string $teacher
 * @property int $ide
 */
class ResultOfEGA extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'result';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ids', 'subject', 'countb', 'teacher'], 'required'],
            [['ids'], 'default', 'value' => null],
            [['ids'], 'integer'],
            [['countb'], 'number'],
            [['subject', 'teacher'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
          'ide' => 'IdE',
          'ids' => 'Код ученика',
          'subject' => 'Предмет',
          'countb' => 'Балл',
          'teacher' => 'От. Учитель',
        ];
    }
}
