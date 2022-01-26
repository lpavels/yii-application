<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "deti_table_32".
 *
 * @property int $id
 * @property int $field31
 * @property int $field32_1 Установлен ли в школе вендинговый аппарат для дополнительного питания обучающихся?
 * @property int $field32_2 Соки
 * @property int $field32_3 Молоко и кисломолочная продукция
 * @property int $field32_4 Кондитерские изделия промышленного изготовления, включая шоколад, печенье, вафли и пряники
 * @property int $field32_5 Фруктово-злаковые батончики
 * @property int $field32_6 Иная продукция
 * @property string $create_at
 */
class DetiTable32 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deti_table_32';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['field31', 'field32_1', 'field32_2', 'field32_3', 'field32_4', 'field32_5', 'field32_6'], 'required'],
            [['field31', 'field32_1', 'field32_2', 'field32_3', 'field32_4', 'field32_5', 'field32_6'], 'integer', 'min' => 0, 'max' => 1],
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
            'field31' => '31. Установлен ли в школе вендинговый аппарат для дополнительного питания обучающихся? ',
            'field32_1' => '32.	Какую продукцию предпочитает приобретать ребенок в вендинговом аппарате?',
            'field32_2' => 'Field32 2',
            'field32_3' => 'Field32 3',
            'field32_4' => 'Field32 4',
            'field32_5' => 'Field32 5',
            'field32_6' => 'Field32 6',
            'create_at' => 'Create At',
        ];
    }
}
