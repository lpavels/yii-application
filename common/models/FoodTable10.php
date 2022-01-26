<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "food_table_10".
 *
 * @property int $id
 * @property int $user_id
 * @property int $field10_1 Мясо Пищевое сырье
 * @property int $field10_2 Мясо Полуфабрикаты
 * @property int $field10_3 Мясо Готовая продукция
 * @property int $field10_4 Птица Пищевое сырье
 * @property int $field10_5 Птица Полуфабрикаты
 * @property int $field10_6 Птица Готовая продукция
 * @property int $field10_7 Рыба Пищевое сырье
 * @property int $field10_8 Рыба Полуфабрикаты
 * @property int $field10_9 Рыба Готовая продукция
 * @property int $field10_10 Овощи Пищевое сырье
 * @property int $field10_11 Овощи Полуфабрикаты
 * @property int $field10_12 Овощи Готовая продукция
 * @property int $field10_13 Картофель Пищевое сырье
 * @property int $field10_14 Картофель Полуфабрикаты
 * @property int $field10_15 Картофель Готовая продукция
 * @property string $create_at
 */
class FoodTable10 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'food_table_10';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'field10_1', 'field10_2', 'field10_3', 'field10_4', 'field10_5', 'field10_6', 'field10_7', 'field10_8', 'field10_9', 'field10_10', 'field10_11', 'field10_12', 'field10_13', 'field10_14', 'field10_15'], 'required'],
            [['user_id', 'field10_1', 'field10_2', 'field10_3', 'field10_4', 'field10_5', 'field10_6', 'field10_7', 'field10_8', 'field10_9', 'field10_10', 'field10_11', 'field10_12', 'field10_13', 'field10_14', 'field10_15'], 'integer'],
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
            'field10_1' => 'Field10 1',
            'field10_2' => 'Field10 2',
            'field10_3' => 'Field10 3',
            'field10_4' => 'Field10 4',
            'field10_5' => 'Field10 5',
            'field10_6' => 'Field10 6',
            'field10_7' => 'Field10 7',
            'field10_8' => 'Field10 8',
            'field10_9' => 'Field10 9',
            'field10_10' => 'Field10 10',
            'field10_11' => 'Field10 11',
            'field10_12' => 'Field10 12',
            'field10_13' => 'Field10 13',
            'field10_14' => 'Field10 14',
            'field10_15' => 'Field10 15',
            'create_at' => 'Create At',
        ];
    }
}
