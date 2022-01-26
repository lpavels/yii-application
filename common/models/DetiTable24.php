<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "deti_table_24".
 *
 * @property int $id
 * @property int $field21_1 Как часто Ваш ребенок болел простудными заболеваниями в прошлом году?
 * @property int $field22_1 Знакомы ли Вы с принципами здорового питания?
 * @property int $field23_1 Придерживаетесь ли Вы в домашнем питании принципов здорового питания?
 * @property int $field24_1 Овощные блюда (не включая картофельные) используются в 2-х и более приемах пищи ежедневно (овощные супы, салаты, гарниры и др.)
 * @property int $field24_2 Фрукты ежедневно присутствуют в рационе питания членов семьи в количестве не менее 250-300 г. (средний вес яблока, груши, апельсина – 120-130 г)
 * @property int $field24_3 При выборе хлеба и хлебобулочных изделий, отдается приоритет продуктам из муки грубого помола, с присутствием цельных злаков, отрубей
 * @property int $field24_4 Блюда из рыбы присутствуют в рационе еженедельно
 * @property int $field24_5 Ежедневно в питании используются 2-3 молочных продукта (включая молочные блюда и напитки)
 * @property string $create_at
 */
class DetiTable24 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deti_table_24';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [
                [
                    'field21_1',
                    'field22_1',
                    'field23_1',
                    'field24_1',
                    'field24_2',
                    'field24_3',
                    'field24_4',
                    'field24_5',
                    'field24_6',
                ],
                'required',
            ],
            [
                [
                    'field21_1',
                    'field22_1',
                    'field23_1',
                    'field24_1',
                    'field24_2',
                    'field24_3',
                    'field24_4',
                    'field24_5',
                    'field24_6',
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
            'field21_1' => '21.	Как часто Ваш ребенок болел простудными заболеваниями в прошлом году? ',
            'field22_1' => '22.	Знакомы ли Вы с принципами здорового питания? ',
            'field23_1' => '23.	Придерживаетесь ли Вы в домашнем питании принципов здорового питания? ',
            'field24_1' => '24.	Справедливы ли для Вашей семьи следующие подходы к организации питания дома? ',
            'field24_2' => 'Field24 2',
            'field24_3' => 'Field24 3',
            'field24_4' => 'Field24 4',
            'field24_5' => 'Field24 5',
            'field24_6' => 'Field24 6',
            'create_at' => 'Create At',
        ];
    }
}
