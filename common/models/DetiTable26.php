<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "deti_table_26".
 *
 * @property int $id
 * @property int $field26_1 Один
 * @property int $field26_2 Два
 * @property int $field26_3 Три
 * @property int $field26_4 Четыре
 * @property int $field26_5 Пять и более раз
 * @property string $create_at
 */
class DetiTable26 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deti_table_26';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['field26', 'field26_1', 'field26_2', 'field26_3', 'field26_4', 'field26_5'], 'required'],
            [['field26', 'field26_1', 'field26_2', 'field26_3', 'field26_4', 'field26_5'], 'integer','min'=>0, 'max'=>1],
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
            'field26' => '26. Сколько раз в день Ваш ребенок принимает пищу в выходные?',
            'field26_1' => 'Field26 1',
            'field26_2' => 'Field26 2',
            'field26_3' => 'Field26 3',
            'field26_4' => 'Field26 4',
            'field26_5' => 'Field26 5',
            'create_at' => 'Create At',
        ];
    }
}
