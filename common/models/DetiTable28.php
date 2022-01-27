<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "deti_table_28".
 *
 * @property int $id
 * @property int $field27_1
 * @property int $field28_1 Ребенок завтракает (обедает) перед уходом в школу?
 * @property int $field28_2 Один
 * @property int $field28_3 Два
 * @property int $field28_4 Три
 * @property int $field28_5 Четыре
 * @property int $field28_6 Пять и более раз
 * @property string $create_at
 */
class DetiTable28 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deti_table_28';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['field27_1', 'field28',  'field28_1', 'field28_2', 'field28_3', 'field28_4', 'field28_5'], 'required'],
            [['field27_1', 'field28',  'field28_1', 'field28_2', 'field28_3', 'field28_4', 'field28_5'], 'integer','min'=>0, 'max'=>1],
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
            'field27_1' => '27.	Ребенок завтракает (обедает) перед уходом в школу? ',
            'field28' => '28. Сколько раз в день Ваш ребенок принимает пищу в учебные дни, включая питание в школе? ',
            'field28_1' => 'Field28 1',
            'field28_2' => 'Field28 2',
            'field28_3' => 'Field28 3',
            'field28_4' => 'Field28 4',
            'field28_5' => 'Field28 5',
            'field28_6' => 'Field28 6',
            'create_at' => 'Create At',
        ];
    }
}
