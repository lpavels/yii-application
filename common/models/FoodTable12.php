<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "food_table_12".
 *
 * @property int $id
 * @property int $user_id
 * @property int $field12_1 Молоко Продукция РФ 
 * @property int $field12_2 Молоко в т.ч. местного производства
 * @property int $field12_3 Молоко Импортная продукция 
 * @property int $field12_4 Кисломолочная продукция Продукция РФ 
 * @property int $field12_5 Кисломолочная продукция в т.ч. местного производства
 * @property int $field12_6 Кисломолочная продукция Импортная продукция 
 * @property int $field12_7 Творог Продукция РФ 
 * @property int $field12_8 Творог в т.ч. местного производства
 * @property int $field12_9 Творог Импортная продукция 
 * @property int $field12_10 Мясо Продукция РФ 
 * @property int $field12_11 Мясо в т.ч. местного производства
 * @property int $field12_12 Мясо Импортная продукция 
 * @property int $field12_13 Рыба Продукция РФ 
 * @property int $field12_14 Рыба в т.ч. местного производства
 * @property int $field12_15 Рыба Импортная продукция 
 * @property int $field12_16 Крупы и бобовые Продукция РФ 
 * @property int $field12_17 Крупы и бобовые в т.ч. местного производства
 * @property int $field12_18 Крупы и бобовые Импортная продукция 
 * @property int $field12_19 Овощи Продукция РФ 
 * @property int $field12_20 Овощи в т.ч. местного производства
 * @property int $field12_21 Овощи Импортная продукция 
 * @property int $field12_22 Картофель Продукция РФ 
 * @property int $field12_23 Картофель в т.ч. местного производства
 * @property int $field12_24 Картофель Импортная продукция 
 * @property int $field12_25 Фрукты Продукция РФ 
 * @property int $field12_26 Фрукты в т.ч. местного производства
 * @property int $field12_27 Фрукты Импортная продукция 
 * @property int $field12_28 яйца Продукция РФ 
 * @property int $field12_29 яйца в т.ч. местного производства
 * @property int $field12_30 яйца Импортная продукция 
 * @property string $create_at
 */
class FoodTable12 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'food_table_12';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'field12_1', 'field12_2', 'field12_3', 'field12_4', 'field12_5', 'field12_6', 'field12_7', 'field12_8', 'field12_9', 'field12_10', 'field12_11', 'field12_12', 'field12_13', 'field12_14', 'field12_15', 'field12_16', 'field12_17', 'field12_18', 'field12_19', 'field12_20', 'field12_21', 'field12_22', 'field12_23', 'field12_24', 'field12_25', 'field12_26', 'field12_27', 'field12_28', 'field12_29', 'field12_30'], 'required'],
            [['user_id', 'field12_1', 'field12_2', 'field12_3', 'field12_4', 'field12_5', 'field12_6', 'field12_7', 'field12_8', 'field12_9', 'field12_10', 'field12_11', 'field12_12', 'field12_13', 'field12_14', 'field12_15', 'field12_16', 'field12_17', 'field12_18', 'field12_19', 'field12_20', 'field12_21', 'field12_22', 'field12_23', 'field12_24', 'field12_25', 'field12_26', 'field12_27', 'field12_28', 'field12_29', 'field12_30'], 'integer'],
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
            'user_id' => 'User ID',
            'field12_1' => 'Field12 1',
            'field12_2' => 'Field12 2',
            'field12_3' => 'Field12 3',
            'field12_4' => 'Field12 4',
            'field12_5' => 'Field12 5',
            'field12_6' => 'Field12 6',
            'field12_7' => 'Field12 7',
            'field12_8' => 'Field12 8',
            'field12_9' => 'Field12 9',
            'field12_10' => 'Field12 10',
            'field12_11' => 'Field12 11',
            'field12_12' => 'Field12 12',
            'field12_13' => 'Field12 13',
            'field12_14' => 'Field12 14',
            'field12_15' => 'Field12 15',
            'field12_16' => 'Field12 16',
            'field12_17' => 'Field12 17',
            'field12_18' => 'Field12 18',
            'field12_19' => 'Field12 19',
            'field12_20' => 'Field12 20',
            'field12_21' => 'Field12 21',
            'field12_22' => 'Field12 22',
            'field12_23' => 'Field12 23',
            'field12_24' => 'Field12 24',
            'field12_25' => 'Field12 25',
            'field12_26' => 'Field12 26',
            'field12_27' => 'Field12 27',
            'field12_28' => 'Field12 28',
            'field12_29' => 'Field12 29',
            'field12_30' => 'Field12 30',
            'create_at' => 'Create At',
        ];
    }
}
