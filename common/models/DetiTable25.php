<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "deti_table_25".
 *
 * @property int $id
 * @property int $field25_1 От медицинских работников
 * @property int $field25_2 Телевидение
 * @property int $field25_3 Интернет-ресурсы
 * @property int $field25_4 Печатные издания
 * @property int $field25_5 Родственники, знакомые
 * @property string $create_at
 */
class DetiTable25 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deti_table_25';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['field25', 'field25_1', 'field25_2', 'field25_3', 'field25_4', 'field25_5'], 'required'],
            [['field25', 'field25_1', 'field25_2', 'field25_3', 'field25_4', 'field25_5'], 'integer','min'=>0, 'max'=>1],
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
            'field25' => '25. Откуда Вы получаете информацию о здоровом питании? ',
            'field25_1' => '',
            'field25_2' => 'Field25 2',
            'field25_3' => 'Field25 3',
            'field25_4' => 'Field25 4',
            'field25_5' => 'Field25 5',
            'create_at' => 'Create At',
        ];
    }
}
