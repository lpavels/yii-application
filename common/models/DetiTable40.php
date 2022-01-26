<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "deti_table_40".
 *
 * @property int $id
 * @property int $field40_1 каши
 * @property int $field40_2 макаронные изделия
 * @property int $field40_3 мясо
 * @property int $field40_4 птица
 * @property int $field40_5 рыба
 * @property int $field40_6 колбаса, сосиски, сардельки
 * @property int $field40_7 творог
 * @property int $field40_8 яйца
 * @property int $field40_9 овощи вареные
 * @property int $field40_10 овощи сырые
 * @property int $field40_11 картофель
 * @property int $field40_12 зелень
 * @property int $field40_13 фаст-фуд (гамбургеры, пицца)
 * @property int $field40_14 выпечные изделия
 * @property int $field40_15 конфеты, шоколад
 * @property int $field40_16 кондитерские изделия – торты, пирожные, пряники, печенье, вафли (за исключением конфет и шоколада)
 * @property int $field40_17 майонез
 * @property int $field40_18 кетчуп
 * @property int $field40_19 сладкие творожные сырки
 * @property int $field40_20 соки
 * @property int $field40_21 Компоты и кисели
 * @property int $field40_22 сладкие газированные напитки
 * @property int $field40_23 молоко
 * @property int $field40_24 кисломолочная продукция
 * @property int $field40_25 чай
 * @property int $field40_26 кофе
 * @property int $field40_27 какао
 * @property int $field40_28 Добавляет ли ребенок сахар в чай?
 * @property int $field40_29 Досаливает ли ребенок пищу?
 * @property string $create_at
 */
class DetiTable40 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deti_table_40';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['field40_1', 'field40_2', 'field40_3', 'field40_4', 'field40_5', 'field40_6', 'field40_7', 'field40_8', 'field40_9', 'field40_10', 'field40_11', 'field40_12', 'field40_13', 'field40_14', 'field40_15', 'field40_16', 'field40_17', 'field40_18', 'field40_19', 'field40_20', 'field40_21', 'field40_22', 'field40_23', 'field40_24', 'field40_25', 'field40_26', 'field40_27'], 'required'],
            [['field40_1', 'field40_2', 'field40_3', 'field40_4', 'field40_5', 'field40_6', 'field40_7', 'field40_8', 'field40_9', 'field40_10', 'field40_11', 'field40_12', 'field40_13', 'field40_14', 'field40_15', 'field40_16', 'field40_17', 'field40_18', 'field40_19', 'field40_20', 'field40_21', 'field40_22', 'field40_23', 'field40_24', 'field40_25', 'field40_26', 'field40_27'], 'integer', 'min' => 0, 'max' => 5],
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
            'field40_1' => 'Field40 1',
            'field40_2' => 'Field40 2',
            'field40_3' => 'Field40 3',
            'field40_4' => 'Field40 4',
            'field40_5' => 'Field40 5',
            'field40_6' => 'Field40 6',
            'field40_7' => 'Field40 7',
            'field40_8' => 'Field40 8',
            'field40_9' => 'Field40 9',
            'field40_10' => 'Field40 10',
            'field40_11' => 'Field40 11',
            'field40_12' => 'Field40 12',
            'field40_13' => 'Field40 13',
            'field40_14' => 'Field40 14',
            'field40_15' => 'Field40 15',
            'field40_16' => 'Field40 16',
            'field40_17' => 'Field40 17',
            'field40_18' => 'Field40 18',
            'field40_19' => 'Field40 19',
            'field40_20' => 'Field40 20',
            'field40_21' => 'Field40 21',
            'field40_22' => 'Field40 22',
            'field40_23' => 'Field40 23',
            'field40_24' => 'Field40 24',
            'field40_25' => 'Field40 25',
            'field40_26' => 'Field40 26',
            'field40_27' => 'Field40 27',
            'field40_28' => 'Field40 28',
            'field40_29' => 'Field40 29',
            'create_at' => 'Create At',
        ];
    }
}
