<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "deti_table_20".
 *
 * @property int $id
 * @property int $field20_1 Болезни органов дыхания
 * @property int $field20_2 Болезни сердечно-сосудистой системы
 * @property int $field20_3 Болезни нервной системы
 * @property int $field20_4 Нарушения осанки
 * @property int $field20_5 Нарушения зрения
 * @property int $field20_6 Болезни щитовидной железы
 * @property int $field20_7 Заболевания органов пищеварения
 * @property int $field20_8 Анемии
 * @property int $field20_9 Ожирение
 * @property int $field20_10 Сахарный диабет
 * @property int $field20_11 Пищевая аллергия
 * @property int $field20_12 Целиакия
 * @property int $field20_13 Муковисцидоз
 * @property int $field20_14 Фенилкетонурия
 * @property string $create_at
 */
class DetiTable20 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deti_table_20';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [
                [
                    'field20_1',
                    'field20_2',
                    'field20_3',
                    'field20_4',
                    'field20_5',
                    'field20_6',
                    'field20_7',
                    'field20_8',
                    'field20_9',
                    'field20_10',
                    'field20_11',
                    'field20_12',
                    'field20_13',
                    'field20_14',
                ],
                'required', 'message' => 'Данное поле является обязательным при внесении'
            ],
            [
                [
                    'field20_1',
                    'field20_2',
                    'field20_3',
                    'field20_4',
                    'field20_5',
                    'field20_6',
                    'field20_7',
                    'field20_8',
                    'field20_9',
                    'field20_10',
                    'field20_11',
                    'field20_12',
                    'field20_13',
                    'field20_14',
                ],
                'integer', 'min' => 0, 'max' => 1
            ],
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
            'field20_1' => 'Field20 1',
            'field20_2' => 'Field20 2',
            'field20_3' => 'Field20 3',
            'field20_4' => 'Field20 4',
            'field20_5' => 'Field20 5',
            'field20_6' => 'Field20 6',
            'field20_7' => 'Field20 7',
            'field20_8' => 'Field20 8',
            'field20_9' => 'Field20 9',
            'field20_10' => 'Field20 10',
            'field20_11' => 'Field20 11',
            'field20_12' => 'Field20 12',
            'field20_13' => 'Field20 13',
            'field20_14' => 'Field20 14',
            'create_at' => 'Create At',
        ];
    }
}
