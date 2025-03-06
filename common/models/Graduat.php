<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "Graduat".
 *
 * @property int $ids
 * @property string $nsw
 * @property string $birthday
 * @property int $entersyear
 * @property int $exityear
 * @property string $ts
 * @property string $class
 * @property int $idt
 * @property int $ido
 * @property int $udsvs
 * @property string $parents
 * @property string $address
 * @property string $phone
 * @property string $dlc
 */
class Graduat extends \yii\db\ActiveRecord
{
  /**
   * {@inheritdoc}
   */
  public static function tableName()
  {
    return 'graduat';
  }

  /**
   * {@inheritdoc}
   */
  public function rules()
  {
    return [
      [['nsw', 'birthday', 'entersyear', 'exityear', 'ts', 'class', 'idt', 'ido', 'idsvs', 'parents', 'address', 'phone', 'dlc'], 'required'],
      [['ids', 'entersyear', 'exityear', 'idt', 'ido', 'idsvs'], 'integer'],
      [['birthday'], 'safe'],
      [['nsw', 'ts', 'class', 'parents', 'address', 'phone', 'dlc'], 'string', 'max' => 100],
      [['nsw'], 'unique'],
      [['ids'], 'unique'],
    ];
  }


    /**
     * {@inheritdoc}
     */
    public
    function attributeLabels()
    {
      return [
        'ids' => 'Код выпускника',
        'nsw' => 'ФИО',
        'birthday' => 'День рождения',
        'entersyear' => 'Год поступления',
        'exityear' => 'Год выпуска',
        'ts' => 'Профиль обучения',
        'class' => 'Класс',
        'idt' => 'Код учебного заведения',
        'ido' => 'Код организации',
        'idsvs' => 'Код СВС',
        'parents' => 'Родители',
        'address' => 'Адрес проживания',
        'phone' => 'Номер телефона',
        'dlc' => 'Дополнительное образование',
      ];
    }
  }
