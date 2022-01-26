<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "deti_table_30".
 *
 * @property int $id
 * @property int $field29 Охвачен ли ребенок организованным питанием в школе?
 * @property int $field30_1 Охвачен ли ребенок организованным питанием в школе?
 * @property int $field30_2 Получает ли ребенок в школе дополнительное питание?
 * @property int $field30_3 комплексный обед
 * @property int $field30_4 первые блюда
 * @property int $field30_5 салаты
 * @property int $field30_6 бутерброды
 * @property int $field30_7 гарниры
 * @property int $field30_8 основные (мясные и рыбные) блюда
 * @property int $field30_9 сосиски, сардельки
 * @property int $field30_10 выпечные изделия (собственного и промышленного изготовления)
 * @property int $field30_11 кондитерские изделия (промышленного изготовления)
 * @property int $field30_12 горячие напитки
 * @property int $field30_13 холодные напитки
 * @property int $field30_14 фрукты
 * @property int $field30_15 продукция из вендингового аппарата (автомата)
 * @property string $create_at
 */
class DetiTable30 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deti_table_30';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['field29', 'field30', 'field30_1', 'field30_2', 'field30_3', 'field30_4', 'field30_5', 'field30_6', 'field30_7', 'field30_8', 'field30_9', 'field30_10', 'field30_11', 'field30_12', 'field30_13'], 'required'],
            [['field29', 'field30', 'field30_1', 'field30_2', 'field30_3', 'field30_4', 'field30_5', 'field30_6', 'field30_7', 'field30_8', 'field30_9', 'field30_10', 'field30_11', 'field30_12', 'field30_13'], 'integer', 'min' => 0, 'max' => 3],
            [['create_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'field29' => '29. Охвачен ли ребенок организованным питанием в школе? ',
            'field30' => '30. Получает ли ребенок в школе дополнительное питание ',
            'field30_1' => 'Field30 1',
            'field30_2' => 'Field30 2',
            'field30_3' => 'Field30 3',
            'field30_4' => 'Field30 4',
            'field30_5' => 'Field30 5',
            'field30_6' => 'Field30 6',
            'field30_7' => 'Field30 7',
            'field30_8' => 'Field30 8',
            'field30_9' => 'Field30 9',
            'field30_10' => 'Field30 10',
            'field30_11' => 'Field30 11',
            'field30_12' => 'Field30 12',
            'field30_13' => 'Field30 13',
            'create_at' => 'Create At',
        ];
    }
}
