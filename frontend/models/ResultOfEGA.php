<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "result of EGA".
 *  @property int $ide
 * @property int $ids
 * @property string $subject
 * @property float $countb
 * @property string $teacher
 *
 * @property Graduat $graduat
 */
class ResultOfEGA extends \yii\db\ActiveRecord
{
  /**
   * @var mixed|null
   */
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
            [['ids', "ide"], 'integer'],
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

    /**
     * Gets query for [[Graduat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGraduat()
    {
        return $this->hasOne(Graduat::class, ['ids' => 'ids']);
    }
}
