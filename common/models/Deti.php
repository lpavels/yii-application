<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "deti".
 *
 * @property int $id
 * @property int $user_id
 * @property int $field1_1 Код общеобразовательной организации (код региона/номер школы по порядку в соответствии с планом анкетирования)
 * @property string $field1_2 Имя и первая буква фамилии ребенка
 * @property int $field1_3 Возрастная категория респондента (нужное подчеркнуть): 9-10 лет/13-14 лет/15-17 лет
 * @property int $field1_4 Класс
 * @property int $field1_5 Дата заполнения анкеты
 * @property int $field1_6 Дата рождения ребенка
 * @property int $field1_7 Возраст полных лет
 * @property string $field1_8 Пол ребенка
 * @property string $field1_9 Состав семьи – полная (два родителя); неполная (один родитель или воспитывает опекун)
 * @property string $field1_10 Образование мамы – неполное среднее, среднее, среднее профессиональное, высшее)
 * @property string $field1_11 Образование папы – неполное среднее, среднее, среднее профессиональное, высшее)
 * @property string $field1_12 Оцените уровень доходов Вашей семьи – низкий, средний, высокий)
 * @property int $field1_13 В какую смену учится Ваш ребенок? – первая, вторая, третья
 * @property int $field1_14 Сколько времени ребенок в среднем находится в школе в часах
 * @property string $field1_15 Посещает ли ребенок группу продленного дня?
 * @property string $field1_16 Посещает ли ребенок кружок или спортивную секцию в школе?
 * @property int $field1_17 Антропометрические данные ребенка: длина тела в см ____
 * @property int $field1_18 Антропометрические данные ребенка: масса тела в кг ____
 * @property int $field1_19 Антропометрические данные матери: длина тела в см ____
 * @property int $field1_20 Антропометрические данные матери: масса тела в кг ____
 * @property int $field1_21 Антропометрические данные отца: длина тела в см ____
 * @property int $field1_22 Антропометрические данные отца: масса тела в кг ____
 * @property string $field1_23 Имеются ли у ребенка хронические заболевания?
 * @property int $table_20
 * @property int $table_24
 * @property int $table_25
 * @property int $table_26
 * @property int $table_28
 * @property int $table_30
 * @property int $table_32
 * @property int $table_33
 * @property int $table_37
 * @property int $table_38
 * @property int $table_39
 * @property int $table_40
 * @property int $table_43
 * @property int $table_44
 * @property int $table_45
 * @property int $table_46
 * @property string $create_at
 */
class Deti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [
                [
                    'organization_id',
                    'federal_district_id',
                    'region_id',
                    'municipality_id',
                    'field1_1',
                    'field1_2',
                    'field1_3',
                    'field1_4',
                    'field1_6',
                    'field1_7',
                    'field1_8',
                    'field1_9',
                    'field1_10',
                    'field1_11',
                    'field1_12',
                    'field1_13',
                    'field1_14',
                    'field1_15',
                    'field1_16',
                    'field1_17',
                    'field1_18',
                    'field1_19',
                    'field1_20',
                    'field1_21',
                    'field1_22',
                    'field1_23',
                    'table_20',
                    'table_24',
                    'table_25',
                    'table_26',
                    'table_28',
                    'table_30',
                    'table_32',
                    'table_33',
                    'table_37',
                    'table_38',
                    'table_39',
                    'table_40',
                    'table_43',
                    'table_44',
                ],
                'required',
            ],
            [
                [
                    'user_id',
                    'field1_1',
                    'field1_3',
                    'field1_4',
                    'field1_5',
                    'field1_7',
                    'field1_14',
                    'field1_17',
                    'field1_18',
                    'field1_19',
                    'field1_20',
                    'field1_21',
                    'field1_22',
                    'table_20',
                    'table_24',
                    'table_25',
                    'table_26',
                    'table_28',
                    'table_30',
                    'table_32',
                    'table_33',
                    'table_37',
                    'table_38',
                    'table_39',
                    'table_40',
                    'table_43',
                    'table_44',
                ],
                'integer',
            ],
            [['field1_17'], 'integer', 'min' => 20, 'max' => 200],//17. Антропометрические данные ребенка: длина тела в см
            [['field1_18'], 'integer', 'min' => 20, 'max' => 150],//18. Антропометрические данные ребенка: масса тела в кг
            [['field1_19'], 'integer', 'min' => 80, 'max' => 250],//19. Антропометрические данные матери: длина тела в см
            [['field1_20'], 'integer', 'min' => 50, 'max' => 150],//20. Антропометрические данные матери: масса тела в кг
            [['field1_21'], 'integer', 'min' => 80, 'max' => 250],//21. Антропометрические данные отца: длина тела в см
            [['field1_22'], 'integer', 'min' => 80, 'max' => 250],//22. Антропометрические данные отца: масса тела в кг
            [['create_at'], 'safe'],
            [
                [
                    'field1_2',
                    'field1_8',
                    'field1_9',
                    'field1_10',
                    'field1_11',
                    'field1_12',
                    'field1_15',
                    'field1_16',
                    'field1_23',
                ],
                'string',
                'max' => 211,
            ],
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
           'organization_id' => 'Организация',
           'federal_district_id' => 'Федеральный округ',
           'region_id' => 'Регион',
           'municipality_id' => 'Муниципальное образование',
            'field1_1' => 'Field1 1',
            'field1_2' => '2. Имя и первая буква фамилии ребенка',
            'field1_3' => '3. Возрастная категория респондента',
            'field1_4' => '4. Класс ',
            'field1_5' => 'Field1 5',
            'field1_6' => '6. Дата рождения ребенка',
            'field1_7' => '7. Возраст полных лет ',
            'field1_8' => '8. Пол ребенка ',
            'field1_9' => '9. Состав семьи ',
            'field1_10' => '10. Образование мамы ',
            'field1_11' => '11. Образование папы ',
            'field1_12' => '12.	Оцените уровень доходов Вашей семьи ',
            'field1_13' => '13.	В какую смену учится Ваш ребенок',
            'field1_14' => '14.	Сколько времени ребенок в среднем находится в школе в ',
            'field1_15' => '15.	Посещает ли ребенок группу продленного дня? ',
            'field1_16' => '16.	Посещает ли ребенок кружок или спортивную секцию в школе? ',
            'field1_17' => '17.	Антропометрические данные ребенка: длина тела в см ',
            'field1_18' => '18.	Антропометрические данные ребенка: масса тела в кг ',
            'field1_19' => '19. Антропометрические данные матери: длина тела в см ',
            'field1_20' => '20. Антропометрические данные матери: масса тела в кг ',
            'field1_21' => '21. Антропометрические данные отца: длина тела в см ',
            'field1_22' => '22. Антропометрические данные отца: масса тела в кг ',
            'field1_23' => 'Field1 23',
            'table_20' => 'Table 20',
            'table_24' => 'Table 24',
            'table_25' => 'Table 25',
            'table_26' => 'Table 26',
            'table_28' => 'Table 28',
            'table_30' => 'Table 30',
            'table_32' => 'Table 32',
            'table_33' => 'Table 33',
            'table_37' => 'Table 37',
            'table_38' => 'Table 38',
            'table_39' => 'Table 39',
            'table_40' => 'Table 40',
            'table_43' => 'Table 43',
            'table_44' => 'Table 44',
            'create_at' => 'Create At',
        ];
    }
    public function get_imt2($heightVal, $massVal, $typeKidsVal, $sexVal, $birthVal, $status)
    {
        if ($heightVal == 0) return '';

        $imt_arrayVal = [
            'Дефицит массы тела',
            'Нормальный вес',
            'Избыточная масса тела',
            'Ожирение'
        ];
        $imt_boys_preschoolers = [
            1 => [14.5, 18.1, 18.5],
            2 => [14.5, 18.1, 18.5],
            3 => [14, 17.5, 17.8],
            4 => [13.9, 17, 17.3],
            5 => [13.8, 16.9, 17.2],
            6 => [13.5, 17, 17.5],
            7 => [13.6, 17.5, 18]
        ];
        $imt_boys_school = [
            6 => [13.5, 17, 17.5],
            7 => [13.6, 17.5, 18],
            8 => [13.8, 18, 18.5],
            9 => [13.9, 18.5, 19.5],
            10 => [14, 19.2, 20.4],
            11 => [14.3, 20, 21.3],
            12 => [14.7, 21, 22.1],
            13 => [15.1, 21.8, 23],
            14 => [15.6, 22.5, 23.9],
            15 => [16.3, 23.5, 24.7],
            16 => [16.9, 24, 25.4],
            17 => [17.3, 25, 26.1],
            18 => [17.9, 25.6, 26.9]
        ];
        $imt_boys_student = [
            17 => [17.3, 25, 26.1],
            18 => [17.9, 25.6, 26.9],
            19 => [18.2, 26.2, 27.8],
            20 => [18.6, 27, 28.4],
            21 => [18.6, 27, 28.4],
            22 => [18.6, 27, 28.4],
            23 => [18.6, 27, 28.4],
            24 => [18.6, 27, 28.4],
            25 => [18.6, 27, 28.4],
            26 => [18.6, 27, 28.4]
        ];

        $imt_boys_else = [
            1 => [14.5, 18.1, 18.5],
            2 => [14.5, 18.1, 18.5],
            3 => [14, 17.5, 17.8],
            4 => [13.9, 17, 17.3],
            5 => [13.8, 16.9, 17.2],
            6 => [13.5, 17, 17.5],
            7 => [13.6, 17.5, 18],
            8 => [13.8, 18, 18.5],
            9 => [13.9, 18.5, 19.5],
            10 => [14, 19.2, 20.4],
            11 => [14.3, 20, 21.3],
            12 => [14.7, 21, 22.1],
            13 => [15.1, 21.8, 23],
            14 => [15.6, 22.5, 23.9],
            15 => [16.3, 23.5, 24.7],
            16 => [16.9, 24, 25.4],
            17 => [17.3, 25, 26.1],
            18 => [17.9, 25.6, 26.9],
            19 => [18.2, 26.2, 27.8],
            20 => [18.6, 27, 28.4],
            21 => [18.6, 27, 28.4],
            22 => [18.6, 27, 28.4],
            23 => [18.6, 27, 28.4],
            24 => [18.6, 27, 28.4],
            25 => [18.6, 27, 28.4],
            26 => [18.6, 27, 28.4]
        ];

        $imt_girls_preschoolers = [
            1 => [14, 18, 18.2],
            2 => [14, 18, 18.2],
            3 => [13.8, 17.2, 17.4],
            4 => [13.5, 16.8, 17.1],
            5 => [13.3, 16.9, 17.2],
            6 => [13.2, 17, 17.3],
            7 => [13.2, 17.9, 18.4]
        ];
        $imt_girls_school = [
            6 => [13.2, 17, 17.3],
            7 => [13.2, 17.9, 18.4],
            8 => [13.2, 18.5, 18.7],
            9 => [13.5, 19, 19.6],
            10 => [13.9, 20, 21],
            11 => [14, 21, 22],
            12 => [14.5, 21.6, 23],
            13 => [15, 22.5, 24],
            14 => [15.5, 23.5, 24.8],
            15 => [16, 24, 25.5],
            16 => [16.5, 24.8, 26],
            17 => [16.9, 25.1, 26.8],
            18 => [17, 25.8, 27.3]
        ];
        $imt_girls_student = [
            17 => [16.9, 25.1, 26.8],
            18 => [17, 25.8, 27.3],
            19 => [17.2, 25.8, 27.8],
            20 => [17.5, 25.5, 28.2],
            21 => [17.5, 25.5, 28.2],
            22 => [17.5, 25.5, 28.2],
            23 => [17.5, 25.5, 28.2],
            24 => [17.5, 25.5, 28.2],
            25 => [17.5, 25.5, 28.2],
            26 => [17.5, 25.5, 28.2]
        ];

        $imt_girls_else = [
            1 => [14, 18, 18.2],
            2 => [14, 18, 18.2],
            3 => [13.8, 17.2, 17.4],
            4 => [13.5, 16.8, 17.1],
            5 => [13.3, 16.9, 17.2],
            6 => [13.2, 17, 17.3],
            7 => [13.2, 17.9, 18.4],
            8 => [13.2, 18.5, 18.7],
            9 => [13.5, 19, 19.6],
            10 => [13.9, 20, 21],
            11 => [14, 21, 22],
            12 => [14.5, 21.6, 23],
            13 => [15, 22.5, 24],
            14 => [15.5, 23.5, 24.8],
            15 => [16, 24, 25.5],
            16 => [16.5, 24.8, 26],
            17 => [16.9, 25.1, 26.8],
            18 => [17, 25.8, 27.3],
            19 => [17.2, 25.8, 27.8],
            20 => [17.5, 25.5, 28.2],
            21 => [17.5, 25.5, 28.2],
            22 => [17.5, 25.5, 28.2],
            23 => [17.5, 25.5, 28.2],
            24 => [17.5, 25.5, 28.2],
            25 => [17.5, 25.5, 28.2],
            26 => [17.5, 25.5, 28.2]
        ];

        $queteletIndexVal = $massVal / (pow($heightVal / 100, 2));


        if ($typeKidsVal == 1)
        {
            if ($sexVal == 0)
            {
                $arrayChild_temp = $imt_boys_preschoolers;
            }
            else $arrayChild_temp = $imt_girls_preschoolers;
        }
        if ($typeKidsVal == 2)
        {
            if ($sexVal == 0)
            {
                $arrayChild_temp = $imt_boys_school;
            }
            else $arrayChild_temp = $imt_girls_school;
        }
        if ($typeKidsVal == 3)
        {
            if ($sexVal == 0)
            {
                $arrayChild_temp = $imt_boys_student;
            }
            else $arrayChild_temp = $imt_girls_student;
        }
        if ($typeKidsVal == 4)
        {
            if ($sexVal == 0)
            {
                $arrayChild_temp = $imt_boys_else;
            }
            else $arrayChild_temp = $imt_girls_else;
        }

        if ($queteletIndexVal<$arrayChild_temp[$birthVal][0]) $arrayChildNum = 0;
        else if ($queteletIndexVal>=$arrayChild_temp[$birthVal][0]&& $queteletIndexVal <= $arrayChild_temp[$birthVal][1]) $arrayChildNum = 1;
        else if ($queteletIndexVal>$arrayChild_temp[$birthVal][1]&& $queteletIndexVal <= $arrayChild_temp[$birthVal][2]) $arrayChildNum = 2;
        else if ($queteletIndexVal>$arrayChild_temp[$birthVal][2]) $arrayChildNum = 3;

        if ($status == 1)
        {
            return $imt_arrayVal[$arrayChildNum];
        }
        if ($status == 2)
        {
            $minRecBodyMass = $arrayChild_temp[$birthVal][0] * (pow($heightVal / 100, 2));
            return round($minRecBodyMass,1);
        }
        if ($status == 3)
        {
            $maxRecBodyMass = $arrayChild_temp[$birthVal][1] * (pow($heightVal / 100, 2));
            return round($maxRecBodyMass,1);
        }
    }
}
