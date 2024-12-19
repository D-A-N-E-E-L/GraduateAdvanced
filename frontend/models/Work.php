<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Work".
 *
 * @property int $ido
 * @property string $nameorganes
 * @property string $jobtitle
 * @property string $date
 * @property string $cantactinfo
 *
 * @property Graduat[] $graduats
 */
class Work extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'work';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nameorganes', 'jobtitle', 'date', 'cantactinfo'], 'required'],
            [['date'], 'safe'],
            [['nameorganes', 'jobtitle', 'cantactinfo'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ido' => 'Код организации',
            'nameorganes' => 'Название организации',
            'jobtitle' => 'Должность',
            'date' => 'Дата',
            'cantactinfo' => 'Контактная информация',
        ];
    }

    /**
     * Gets query for [[Graduats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGraduats()
    {
        return $this->hasMany(Graduat::class, ['ido' => 'ido']);
    }
}
