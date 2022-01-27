<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "food_table_8".
 *
 * @property int $id
 * @property int $user_id
 * @property int $field8_1 Наличие в меню обогащенной продукции, за исключением соли поваренной йодированной  Витаминами 
 * @property int $field8_2 Наличие в меню обогащенной продукции, за исключением соли поваренной йодированной Микроэле-ментами 
 * @property int $field8_3 в том числе, хлеб и хлебобулочные изделия Витаминами
 * @property int $field8_4 в том числе, хлеб и хлебобулочные изделия Микроэле-ментами 
 * @property int $field8_5 молоко и молочная продукция Витаминами
 * @property int $field8_6 молоко и молочная продукция Микроэле-ментами
 * @property int $field8_7 кисели Витаминами
 * @property int $field8_8 кисели Микроэле-ментами
 * @property int $field8_9 напитки Витаминами
 * @property int $field8_10 напитки Микроэле-ментами
 * @property int $field8_11 напитки Витаминами
 * @property int $field8_12 напитки Микроэле-ментами
 * @property string $create_at
 */
class FoodTable8 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'food_table_8';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'field8_1', 'field8_2', 'field8_3', 'field8_4', 'field8_5', 'field8_6', 'field8_7', 'field8_8', 'field8_9', 'field8_10', 'field8_11', 'field8_12'], 'required'],
            [['user_id', 'field8_1', 'field8_2', 'field8_3', 'field8_4', 'field8_5', 'field8_6', 'field8_7', 'field8_8', 'field8_9', 'field8_10', 'field8_11', 'field8_12'], 'integer'],
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
            'field8_1' => 'Field8 1',
            'field8_2' => 'Field8 2',
            'field8_3' => 'Field8 3',
            'field8_4' => 'Field8 4',
            'field8_5' => 'Field8 5',
            'field8_6' => 'Field8 6',
            'field8_7' => 'Field8 7',
            'field8_8' => 'Field8 8',
            'field8_9' => 'Field8 9',
            'field8_10' => 'Field8 10',
            'field8_11' => 'Field8 11',
            'field8_12' => 'Field8 12',
            'create_at' => 'Create At',
        ];
    }
}
