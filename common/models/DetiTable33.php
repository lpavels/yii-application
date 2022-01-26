<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "deti_table_33".
 *
 * @property int $id
 * @property int $field33_1 дома
 * @property int $field33_2 в школе кушает блюда, приготовленные в столовой
 * @property int $field33_3 в школе кушает еду, принесенную из дома
 * @property int $field33_4 не обедает
 * @property string $create_at
 */
class DetiTable33 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deti_table_33';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['field33_1', 'field33_2', 'field33_3', 'field33_4'], 'required'],
            [['field33_1', 'field33_2', 'field33_3', 'field33_4'], 'integer', 'min' => 0, 'max' => 1],
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
            'field33_1' => 'Field33 1',
            'field33_2' => 'Field33 2',
            'field33_3' => 'Field33 3',
            'field33_4' => 'Field33 4',
            'create_at' => 'Create At',
        ];
    }
}
