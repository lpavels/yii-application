<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "food_table_9".
 *
 * @property int $id
 * @property int $user_id
 * @property int $field9_1 по показателям фальсификации
 * @property int $field9_2 на антибиотики
 * @property int $field9_3 на пестициды
 * @property int $field9_4 на содержание витаминов и микроэлементов
 * @property int $field9_5 на микробиологические показатели
 * @property string $create_at
 */
class FoodTable9 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'food_table_9';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'field9_1', 'field9_2', 'field9_3', 'field9_4', 'field9_5'], 'required'],
            [['user_id', 'field9_1', 'field9_2', 'field9_3', 'field9_4', 'field9_5'], 'integer'],
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
            'field9_1' => 'Field9 1',
            'field9_2' => 'Field9 2',
            'field9_3' => 'Field9 3',
            'field9_4' => 'Field9 4',
            'field9_5' => 'Field9 5',
            'create_at' => 'Create At',
        ];
    }
}
