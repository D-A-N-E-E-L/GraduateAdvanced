<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "Graduat".
 *
 * @property int $IDS
 * @property string $NSW
 * @property string $Birthday
 * @property int $EntersYear
 * @property int $ExitYear
 * @property string $TS
 * @property string $Photo
 * @property string $Class
 * @property int $IDT
 * @property int $IDO
 * @property int $IDSVS
 * @property string $Parents
 * @property string $Address
 * @property string $Phone
 * @property string $DLC
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
      [['nsw', 'birthday', 'entersyear', 'exityear', 'ts', 'photo', 'class', 'idt', 'ido', 'parents', 'address', 'phone', 'dlc'], 'required'],
      [['ids', 'entersyear', 'exityear', 'idt', 'ido', 'idsvs'], 'integer'],
      [['birthday'], 'safe'],
      [['photo'], 'string'],
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
        'photo' => 'Фото',
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
