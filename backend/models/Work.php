<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "work".
 *
 * @property string $nameorganes
 * @property string $jobtitle
 * @property string $date
 * @property string $cantactinfo
 * @property int $ido
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
            'nameorganes' => 'Название организации',
            'jobtitle' => 'Должность',
            'date' => 'Дата',
            'cantactinfo' => 'Контакная информация',
            'ido' => 'Код организации',
        ];
    }
}
