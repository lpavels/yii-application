<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "food_table_13".
 *
 * @property int $id
 * @property int $user_id
 * @property int $field13_1 отлично Завтраки
 * @property int $field13_2 отлично обеды
 * @property int $field13_3 отлично дополнительное питание
 * @property int $field13_4 отлично Питание детей с заболеваниями, требующими индивидуального подхода
 * @property int $field13_5 хорошо Завтраки
 * @property int $field13_6 хорошо обеды
 * @property int $field13_7 хорошо дополнительное питание
 * @property int $field13_8 хорошо Питание детей с заболеваниями, требующими индивидуального подхода
 * @property int $field13_9 удовлетворительно Завтраки
 * @property int $field13_10 удовлетворительно обеды
 * @property int $field13_11 удовлетворительно дополнительное питание
 * @property int $field13_12 удовлетворительно Питание детей с заболеваниями, требующими индивидуального подхода
 * @property int $field13_13 не удовлетворительно Завтраки
 * @property int $field13_14 не удовлетворительно обеды
 * @property int $field13_15 не удовлетворительно дополнительное питание
 * @property int $field13_16 не удовлетворительно Питание детей с заболеваниями, требующими индивидуального подхода
 * @property string $create_at
 */
class FoodTable13 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'food_table_13';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'field13_1', 'field13_2', 'field13_3', 'field13_4', 'field13_5', 'field13_6', 'field13_7', 'field13_8', 'field13_9', 'field13_10', 'field13_11', 'field13_12', 'field13_13', 'field13_14', 'field13_15', 'field13_16'], 'required'],
            [['user_id', 'field13_1', 'field13_2', 'field13_3', 'field13_4', 'field13_5', 'field13_6', 'field13_7', 'field13_8', 'field13_9', 'field13_10', 'field13_11', 'field13_12', 'field13_13', 'field13_14', 'field13_15', 'field13_16'], 'integer'],
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
            'field13_1' => 'Field13 1',
            'field13_2' => 'Field13 2',
            'field13_3' => 'Field13 3',
            'field13_4' => 'Field13 4',
            'field13_5' => 'Field13 5',
            'field13_6' => 'Field13 6',
            'field13_7' => 'Field13 7',
            'field13_8' => 'Field13 8',
            'field13_9' => 'Field13 9',
            'field13_10' => 'Field13 10',
            'field13_11' => 'Field13 11',
            'field13_12' => 'Field13 12',
            'field13_13' => 'Field13 13',
            'field13_14' => 'Field13 14',
            'field13_15' => 'Field13 15',
            'field13_16' => 'Field13 16',
            'create_at' => 'Create At',
        ];
    }
}
