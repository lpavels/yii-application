<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "deti_table_39".
 *
 * @property int $id
 * @property int $field39_1 Спортом, танцами, физической культурой не занимается
 * @property int $field39_2 Ежедневная организованная двигательная активность (спорт, танцы) и неорганизованная двигательная активность (активные игры, иные виды двигательной активности) составляет МЕНЕЕ 2 Ч. - ежедневно
 * @property int $field39_3 Ежедневная организованная двигательная активность (спорт, танцы) и неорганизованная двигательная активность (активные игры, иные виды двигательной активности) составляет НЕ МЕНЕЕ 2 Ч. - ежедневно
 * @property string $create_at
 */
class DetiTable39 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deti_table_39';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['field39_1', 'field39_2', 'field39_3'], 'required'],
            [['field39_1', 'field39_2', 'field39_3'], 'integer', 'min' => 0, 'max' => 1],
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
            'field39_1' => ' ',
            'field39_2' => 'Field39 2',
            'field39_3' => 'Field39 3',
            'create_at' => 'Create At',
        ];
    }
}
