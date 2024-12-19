<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reward".
 * @property int $IDR
 * @property string $NSWRewarded
 * @property string $TypeReward
 * @property string $Level
 * @property string $DataReward
 *
 * @property Graduat $nSWRewarded
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
            [['NSWRewarded', 'TypeReward', 'Level', 'DataReward'], 'required'],
            [['DataReward'], 'safe'],
            [['NSWRewarded', 'TypeReward', 'Level'], 'string', 'max' => 100],
            [['IDR'], 'unique'],
            [['NSWRewarded'], 'exist', 'skipOnError' => true, 'targetClass' => Graduat::class, 'targetAttribute' => ['NSWRewarded' => 'NSW']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDR' => 'Idr',
            'NSWRewarded' => 'ФИО награжденного',
            'TypeReward' => 'Вид награды',
            'Level' => 'Уровень мероприятия',
            'DataReward' => 'Дата награждения',
        ];
    }

    /**
     * Gets query for [[NSWRewarded]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNSWRewarded()
    {
        return $this->hasOne(Graduat::class, ['NSW' => 'NSWRewarded']);
    }
}
