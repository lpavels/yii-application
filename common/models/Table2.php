<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "table2".
 *
 * @property int $id
 * @property int $user_id
 * @property int $federal_district_id
 * @property int $region_id
 * @property int $municipality_id
 * @property int $month_status
 * @property string $field1 из них, оборудованных для работы на сырье (из стр.2)
 * @property string $field2 в т.ч., работающих на сырье (из стр.3)
 * @property string $field3 на полуфабрикатах (из стр.3)
 * @property string $field4 из них, оборудованных для работы на сырье (из стр.2)
 * @property string $field5 в т.ч., работающих на сырье (из стр.6)
 * @property string $field6 на полуфабрикатах (из стр.6)
 * @property string $field7 из них оборудованных для работы в форме буфетов-раздаточных (раздача готовой горячей пищи) - из стр .2
 * @property string $field8 Количество общеобразовательных организаций, в которых ТРЕБУЕТСЯ подвоз детей до столовых других школ  для обеспечения питанием
 * @property string $field9 Количество общеобразовательных организаций, в которых ОРГАНИЗОВАН подвоз детей до столовых других школ  для обеспечения питанием (из стр. 10)
 * @property string $field10 Количество общеобразовательных организаций, организаующих питание школьников (1- 11 класс) САМОСТОЯТЕЛЬНО (без сторонних организаций)
 * @property string $field11 Количество общеобразовательных организаций, работающих по организации питания школьников (1- 11 класс) с привлечением сторонних организаций, осуществляющих поставку продуктов и приготовление пищи (не учитывая комбинаты питания)
 * @property string $field12 Количество общеобразовательных организаций, работающих по организации питания школьников (1-11 класс)с привлечением сторонних организаций - КОМБИНАТЫ ПИТАНИЯ
 * @property string $field13 Количество организаций, оказывающих услуги в системе  школьного питания - ОПЕРАТОРЫ (ОРГАНИЗАТОРЫ) питания
 * @property string $field14 Количество организаций, оказывающих услуги в системе  школьного питания - КОМБИНАТЫ питания
 * @property string $field15 Количество ПОСТАВЩИКОВ пищевых продуктов, задействованных в организации питания школьников
 * @property string $field16 Стоимость горячих завтраков для школьников 1-4 классов на май 2021 (руб/день)
 * @property string $field17 Стоимость горячих завтраков для школьников 1-4 классов на сентябрь 2021 (руб/день)
 * @property string $field18 Стоимость горячих завтраков для школьников 1-4 классов на май 2022 (руб/день)
 * @property string $field19 Стоимость обедов для школьников 1-4 классов на май 2021 (руб/день)
 * @property string $field20 Стоимость обедов для школьников 1-4 классов на сентябрь 2021 (руб/день)
 * @property string $field21 Стоимость обедов для школьников 1-4 классов на январь 2022 (руб/день)
 * @property string $field22 Стоимость обедов для школьников 1-4 классов на май 2022 (руб/день)
 * @property string $field23
 * @property string $field24
 * @property string $create_at
 */
class Table2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'table2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [
                [
                    'user_id',
                    'federal_district_id',
                    'region_id',
                    'municipality_id',
                    'year_study',
                    'month_status',
                    'field1',
                    'field2',
                    'field3',
                    'field4',
                    'field5',
                    'field6',
                    'field7',
                    'field8',
                    'field9',
                    'field10',
                    'field11',
                    'field12',
                    'field13',
                    'field14',
                    'field15',
                    'field16',
                    'field17',
                    'field18',
                    'field19',
                    'field20',
                    'field21',
                    'field22',
                    'field23',
                    'field24',
                ],
                'required',
            ],
            [['user_id', 'federal_district_id', 'region_id', 'municipality_id'], 'integer'],
            [['create_at'], 'safe'],
            [
                [
                    'field1',
                    'field2',
                    'field3',
                    'field4',
                    'field5',
                    'field6',
                    'field7',
                    'field8',
                    'field9',
                    'field10',
                    'field11',
                    'field12',
                    'field13',
                    'field14',
                    'field15',
                    'field16',
                ],
                'integer',
                'min' => 0,
            ],
            [
                [
                    'field17',
                    'field18',
                    'field19',
                    'field20',
                    'field21',
                    'field22',
                    'field23',
                    'field24',
                ],
                'integer',
                'min' => 50, 'message' => 'Цена не может быть меньше 50 руб.'
            ],
            [['field1', 'field2', 'field3'], 'validateSum'],
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
            'federal_district_id' => 'Федеральный округ',
            'region_id' => 'Регион',
            'municipality_id' => 'Муниципальное образование',
            'year_study' => 'Учебный год',
            'month_status' => 'Период за который вносятся данные',
            'field1' => '2. Количество работающих пищеблоков в общеобразовательных организациях',
            'field2' => '3. из них, оборудованных для работы на сырье (из стр.2)',
            'field3' => '4. в т.ч., работающих на сырье (из стр.3)',
            'field4' => '5. на полуфабрикатах (из стр.3)',
            'field5' => '6. из них, оборудованных для работы на сырье (из стр.2)',
            'field6' => '7. в т.ч., работающих на сырье (из стр.6)',
            'field7' => '8. на полуфабрикатах (из стр.6)',
            'field8' => '9. из них оборудованных для работы в форме буфетов-раздаточных (раздача готовой горячей пищи) - из стр.2',
            'field9' => '10. Количество общеобразовательных организаций, в которых ТРЕБУЕТСЯ подвоз детей до столовых других школ для обеспечения питанием',
            'field10' => '11. Количество общеобразовательных организаций, в которых ОРГАНИЗОВАН подвоз детей до столовых других школ для обеспечения питанием (из стр.10)',
            'field11' => '12. Количество общеобразовательных организаций, организующих питание школьников (1- 11 класс) САМОСТОЯТЕЛЬНО (без сторонних организаций)',
            'field12' => '13. Количество общеобразовательных организаций, работающих по организации питания школьников (1- 11 класс) с привлечением сторонних организаций, осуществляющих поставку продуктов и приготовление пищи (не учитывая комбинаты питания)',
            'field13' => '14. Количество общеобразовательных организаций, работающих по организации питания школьников (1-11 класс) с привлечением сторонних организаций - КОМБИНАТЫ ПИТАНИЯ',
            'field14' => '15. Количество организаций, оказывающих услуги в системе школьного питания - ОПЕРАТОРЫ (ОРГАНИЗАТОРЫ) питания',
            'field15' => '16. Количество организаций, оказывающих услуги в системе школьного питания - КОМБИНАТЫ питания',
            'field16' => '17. Количество ПОСТАВЩИКОВ пищевых продуктов, задействованных в организации питания школьников',
            'field17' => '18. Стоимость горячих завтраков для школьников 1-4 классов на май 2021 (руб/день/чел)',
            'field18' => '19. Стоимость горячих завтраков для школьников 1-4 классов на сентябрь 2021 (руб/день/чел)',
            'field19' => '20. Стоимость горячих завтраков для школьников 1-4 классов на январь 2022 (руб/день/чел)',
            'field20' => '21. Стоимость горячих завтраков для школьников 1-4 классов на май 2022 (руб/день/чел)',
            'field21' => '22. Стоимость обедов для школьников 1-4 классов на май 2021 (руб/день/чел)',
            'field22' => '23. Стоимость обедов для школьников 1-4 классов на сентябрь 2021 (руб/день/чел)',
            'field23' => '24. Стоимость обедов для школьников 1-4 классов на январь 2022 (руб/день/чел)',
            'field24' => '25. Стоимость обедов для школьников 1-4 классов на май 2022 (руб/день/чел)',
        ];
    }

    //ДЛЯ поля: Всего общеобразовательных организаций (СУБЪЕКТЫ)
    public function validateSum($attribute)
    {
        $rules_array_sum = [
            'field1' => ['==', 'field2', 'field5', 'field8'],
            'field2' => ['<=', 'field1'],
            'field3' => ['<=', 'field2'],
            'field4' => ['<=', 'field2'],
            'field5' => ['<=', 'field1'],
            'field6' => ['<=', 'field5'],
            'field7' => ['<=', 'field6'],
            'field8' => ['<=', 'field1'],
            'field10' => ['<=', 'field9']
        ];
        $sum = 0;
        for ($i = 0, $count_info = count($rules_array_sum[$attribute]) - 1; $count_info > 0; $count_info--, $i++)
        {
            $sum = $sum + $this[$rules_array_sum[$attribute][$i + 1]];
        }
        switch ($rules_array_sum[$attribute][0])
        {
            case '==':
                if ((int)$this->$attribute !== (int)$sum)
                {
                    $this->addError(
                        $attribute,
                        'У Вас ошибка по ' . $rules_array_sum[$attribute][0] . ' выделенных строк;'
                    );
                    for (
                        $j = 0, $count_info = count(
                            $rules_array_sum[$attribute]
                        ) - 1; $count_info > 0; $count_info--, $j++
                    )
                    {
                        $this->addError(
                            $rules_array_sum[$attribute][$j + 1],
                            'Ошибка, проверьте правильность внесения: ' . $this->getAttributeLabel(
                                $rules_array_sum[$attribute][$j + 1]
                            ) . ';'
                        );
                    }
                }
                break;
            case '<=':
                if ((int)$this->$attribute > (int)$sum)
                {
                    $this->addError(
                        $attribute,
                        'У Вас ошибка по ' . $rules_array_sum[$attribute][0] . ' выделенных строк;'
                    );
                    for (
                        $j = 0, $count_info = count(
                            $rules_array_sum[$attribute]
                        ) - 1; $count_info > 0; $count_info--, $j++
                    )
                    {
                        $this->addError(
                            $rules_array_sum[$attribute][$j + 1],
                            'Ошибка, проверьте правильность внесения: ' . $this->getAttributeLabel(
                                $rules_array_sum[$attribute][$j + 1]
                            ) . ';'
                        );
                    }
                }
                break;
            case '<':
                if ((int)$this->$attribute >= (int)$sum)
                {
                    $this->addError(
                        $attribute,
                        'У Вас ошибка по ' . $rules_array_sum[$attribute][0] . ' выделенных строк;'
                    );
                    for (
                        $j = 0, $count_info = count(
                            $rules_array_sum[$attribute]
                        ) - 1; $count_info > 0; $count_info--, $j++
                    )
                    {
                        $this->addError(
                            $rules_array_sum[$attribute][$j + 1],
                            'Ошибка, проверьте правильность внесения: ' . $this->getAttributeLabel(
                                $rules_array_sum[$attribute][$j + 1]
                            ) . ';'
                        );
                    }
                }
                break;
            case '>':
                if ((int)$this->$attribute <= (int)$sum)
                {
                    $this->addError(
                        $attribute,
                        'У Вас ошибка по ' . $rules_array_sum[$attribute][0] . ' выделенных строк;'
                    );
                    for (
                        $j = 0, $count_info = count(
                            $rules_array_sum[$attribute]
                        ) - 1; $count_info > 0; $count_info--, $j++
                    )
                    {
                        $this->addError(
                            $rules_array_sum[$attribute][$j + 1],
                            'Ошибка, проверьте правильность внесения: ' . $this->getAttributeLabel(
                                $rules_array_sum[$attribute][$j + 1]
                            ) . ';'
                        );
                    }
                }
                break;
            case '>=':
                if ((int)$this->$attribute < (int)$sum)
                {
                    $this->addError(
                        $attribute,
                        'У Вас ошибка по ' . $rules_array_sum[$attribute][0] . ' выделенных строк;'
                    );
                    for (
                        $j = 0, $count_info = count(
                            $rules_array_sum[$attribute]
                        ) - 1; $count_info > 0; $count_info--, $j++
                    )
                    {
                        $this->addError(
                            $rules_array_sum[$attribute][$j + 1],
                            'Ошибка, проверьте правильность внесения: ' . $this->getAttributeLabel(
                                $rules_array_sum[$attribute][$j + 1]
                            ) . ';'
                        );
                    }
                }
                break;
        }
    }

    //это для расчета всего организации
    public function totalOrganization($arrays) //считаем сумму по массиву полей!
    {
        if (!empty($arrays))
        {
            $sum = 0;
            foreach ($arrays as $array):
                $sum = $sum + Yii::$app->myComponent->numericCustom($array);
            endforeach;

            return $sum;
        }
        else
        {
            return 0;
        }
    }
}
