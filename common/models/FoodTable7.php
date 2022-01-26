<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "food_table_7".
 *
 * @property int $id
 * @property int $user_id
 * @property int $field7_1 Сахарный диабет всего
 * @property int $field7_2 Сахарный диабет 1-4 кл.
 * @property int $field7_3 Сахарный диабет 5-9 кл.
 * @property int $field7_4 Сахарный диабет 10-11 кл.
 * @property int $field7_5 Пищевая аллергия всего
 * @property int $field7_6 Пищевая аллергия 1-4 кл.
 * @property int $field7_7 Пищевая аллергия 5-9 кл.
 * @property int $field7_8 Пищевая аллергия 10-11 кл.
 * @property int $field7_9 Целиакия всего
 * @property int $field7_10 Целиакия 1-4 кл.
 * @property int $field7_11 Целиакия 5-9 кл.
 * @property int $field7_12 Целиакия 10-11 кл.
 * @property int $field7_13 Фенилкетонурия всего
 * @property int $field7_14 Фенилкетонурия 1-4 кл.
 * @property int $field7_15 Фенилкетонурия 5-9 кл.
 * @property int $field7_16 Фенилкетонурия 10-11 кл.
 * @property int $field7_17 Муковисцидоз всего
 * @property int $field7_18 Муковисцидоз 1-4 кл.
 * @property int $field7_19 Муковисцидоз 5-9 кл.
 * @property int $field7_20 Муковисцидоз 10-11 кл.
 * @property string $create_at
 */
class FoodTable7 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'food_table_7';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'field7_1', 'field7_2', 'field7_3', 'field7_4', 'field7_5', 'field7_6', 'field7_7', 'field7_8', 'field7_9', 'field7_10', 'field7_11', 'field7_12', 'field7_13', 'field7_14', 'field7_15', 'field7_16', 'field7_17', 'field7_18', 'field7_19', 'field7_20'], 'required'],
            [['user_id', 'field7_1', 'field7_2', 'field7_3', 'field7_4', 'field7_5', 'field7_6', 'field7_7', 'field7_8', 'field7_9', 'field7_10', 'field7_11', 'field7_12', 'field7_13', 'field7_14', 'field7_15', 'field7_16', 'field7_17', 'field7_18', 'field7_19', 'field7_20'], 'integer'],
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
            'field7_1' => 'Field7 1',
            'field7_2' => 'Field7 2',
            'field7_3' => 'Field7 3',
            'field7_4' => 'Field7 4',
            'field7_5' => 'Field7 5',
            'field7_6' => 'Field7 6',
            'field7_7' => 'Field7 7',
            'field7_8' => 'Field7 8',
            'field7_9' => 'Field7 9',
            'field7_10' => 'Field7 10',
            'field7_11' => 'Field7 11',
            'field7_12' => 'Field7 12',
            'field7_13' => 'Field7 13',
            'field7_14' => 'Field7 14',
            'field7_15' => 'Field7 15',
            'field7_16' => 'Field7 16',
            'field7_17' => 'Field7 17',
            'field7_18' => 'Field7 18',
            'field7_19' => 'Field7 19',
            'field7_20' => 'Field7 20',
            'create_at' => 'Create At',
        ];
    }
}
