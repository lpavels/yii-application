<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "table1".
 *
 * @property int $id
 * @property int $user_id
 * @property int $federal_district_id
 * @property int $region_id
 * @property int $municipality_id
 * @property int $month_status
 * @property string $field1
 * @property string $field2
 * @property string $field3
 * @property string $field4
 * @property string $field5
 * @property string $field6
 * @property string $field7
 * @property string $field8
 * @property string $field9
 * @property string $field10
 * @property string $field11
 * @property string $field12
 * @property string $field13
 * @property string $field14
 * @property string $field15
 * @property string $field16
 * @property string $field17
 * @property string $field18
 * @property string $field19
 * @property string $field20
 * @property string $field21
 * @property string $field22
 * @property string $field23
 * @property string $field24
 * @property string $field25
 * @property string $field26
 * @property string $field27
 * @property string $field28
 * @property string $field29
 * @property string $field30
 * @property string $field31
 * @property string $field32
 * @property string $field33
 * @property string $field34
 * @property string $field35
 * @property string $field36
 * @property string $field37
 * @property string $field38
 * @property string $field39
 * @property string $field40
 * @property string $field41
 * @property string $field42
 * @property string $field43
 * @property string $field44
 * @property string $field45
 * @property string $field46
 * @property string $field47
 * @property string $field48
 * @property string $field49
 * @property string $field50
 * @property string $field51
 * @property string $field52
 * @property string $field53
 * @property string $field54
 * @property string $field55
 * @property string $field56
 * @property string $field57
 * @property string $field58
 * @property string $field59
 * @property string $field60
 * @property string $created_at
 */
class Table1 extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'table1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [
                [
                    //правила для простых полей, без расчетов
                    'year_study',
                    //'user_id',
                    //'federal_district_id',
                    //'region_id',
                    //'municipality_id',
                    'month_status',
                    //'total_organizations',
                    'field1',
                    'field2',
                    'field3',
                    //'field4',
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
                    //'field21',
                    'field22',
                    'field23',
                    'field24',
                    //'field25',
                    'field26',
                    'field27',
                    'field28',
                    'field29',
                    'field30',
                    'field31',
                    'field32',
                    'field33',
                    'field34',
                    'field35',
                    'field36',
                    'field37',
                    'field38',
                    'field39',
                    'field40',
                    'field41',
                    'field42',
                    'field43',
                    'field44',
                    'field45',
                    'field46',
                    'field47',
                    'field48',
                    'field49',
                    //'field50',
                    //'field51',
                    'field52',
                    'field53',
                    'field54',
                    //'field55',
                    'field56',
                    'field57',
                    'field58',
                    'field59',
                    'field60',
                    'field61',
                    'field62',
                    'field63',
                ],
                'required',
            ],
            [
                [
                    'total_organizations',
                    'field4',
                ],
                'validateSum',
            ],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'year_study' => 'Учебный год',
            'user_id' => 'User ID',
            'federal_district_id' => 'Федеральный округ',
            'region_id' => 'Регион',
            'municipality_id' => 'Муниципальное образование',
            'month_status' => 'Период за который вносятся данные',
            'total_organizations' => '2. Всего общеобразовательных организаций (СУБЪЕКТЫ) ',
            'field1' => '',
            'field2' => '3. Количество общеобразовательных организаций, в которых обучаются дети 1-4 классов (ОБЪЕКТЫ)',
            'field3' => '4. Количество обучающихся - ВСЕГО',
            'field4' => '5. в т.ч. детей 1-4 классов (из стр.4)',
            'field5' => '6. из них, обучается в  первую смену (из стр.5)',
            'field6' => '7. во вторую смену (из стр.5)',
            'field7' => '8. в  третью смену (из стр 5.)',
            'field8' => '9. Количество общеобразовательных организаций, в которых организовано горячее питание школьников, НА БАЗЕ самой ОБЩЕОБРАЗОВАТЕЛЬНОЙ ОРГАНИЗАЦИИ, из стр.3',
            'field9' => '10. Количество обучающихся в них детей - ВСЕГО (из стр.4)',
            'field10' => '11. в т.ч. детей 1-4 классов (из стр.5)',
            'field11' => '12. Количество общеобразовательных организаций в которых организовано горячее питание школьников, НА БАЗЕ ДРУГИХ ОРГАНИЗАЦИЙ и объектов общепита (из стр.3)',
            'field12' => '13. Количество обучающихся в них детей - ВСЕГО (из стр.4)',
            'field13_1' => 'Число общеобразовательных организаций в которых организовано горячее питание школьников, НА БАЗЕ  других школ',
            'field13_2' => 'Количество обучающихся в НИХ: Всего',
            'field13_3' => 'Количество обучающихся в НИХ: 1-4 кл',
            'field13' => '14. в т.ч. детей 1-4 классов (из стр.5)',
            'field14' => '15. Количество общеобразовательных организаций в которых НЕ ОРГАНИЗОВАНО горячее питание школьников (из стр.3)',
            'field15' => '16. Количество обучающихся в них детей - ВСЕГО (из стр 4)',
            'field16' => '17. в т.ч. детей 1-4 классов (из стр.5)',
            'field17' => '18. Кол-во детей, получающих горячее питание (ВСЕ ДЕТИ: 1-11 класс)',
            'field18' => '19. в т.ч. только завтраки',
            'field19' => '20. в т.ч. только обеды',
            'field20' => '21. получают 2-3х разовое питание',
            'field21' => '22. Кол-во детей, получающих горячее питание (1-4 класс)',
            'field22' => '23. в т.ч. только завтраки',
            'field23' => '24. в т.ч. только обеды',
            'field24' => '25. получают 2-3х разовое питание',
            'field25' => '26. Кол-во детей, не получающих организованное горячее питание (ВСЕ ДЕТИ: 1-11 класс)',
            'field26' => '27. в т.ч. детей 1-4 классов',
            'field27' => '28. из них, в связи с отсутствием условий для организации горячего питания (из стр.27)',
            'field28' => '29. Находятся на домашнем обучении - ВСЕ возрастные группы (1-11 класс), из стр.26',
            'field29' => '30. в т.ч. детей 1-4 классов (из стр.29)',
            'field30' => '31. Количество общеобразовательных организаций в которых ОТСУТСВУЮТ ПИЩЕБЛОКИ и  горячее питание школьников  ОРГАНИЗОВАНО горячее питание школьников (из стр.9)',
            'field31' => '32. Количество обучающихся в них детей - ВСЕГО (из стр 10.)',
            'field32' => '33. в т.ч. детей 1-4 классов (из стр.11)',
            'field33' => '34. Количество общеобразовательных организаций в которых ОТСУТСВУЮТ ПИЩЕБЛОКИ и  горячее питание школьников НЕ ОРГАНИЗОВАНО горячее питание школьников (из стр.15)',
            'field34' => '35. Количество обучающихся в них детей - ВСЕГО (из стр 16.)',
            'field35' => '36. в т.ч. детей 1-4 классов (из стр.17)',
            'field36' => '37. Количество общеобразовательных организаций в которых кол-во посадочных мест НЕДОСТАТОЧНО для питания всех обучающихся (1-11 класс) из стр.2а',
            'field37' => '38. Суммарный дефицит посадочных мест во всех школах',
            'field38' => '39. в т.ч. минимальный дефицит посадочных мест (приводится пример по школе с минимальным дефицитом посадочных мест)',
            'field39' => '40. в т.ч. максимальный дефицит посадочных мест (приводится пример по школе с максимальным дефицитом посадочных мест)',
            'field40' => '41. Количество общеобразовательных организаций в которых кол-во посадочных мест НЕДОСТАТОЧНО для питания всех обучающихся (1-4 класс) из стр.3',
            'field41' => '42. Суммарный дефицит посадочных мест для шк.1-4 кл. во всех школах',
            'field42' => '43. в т.ч. минимальный дефицит посадочных мест (приводится пример по школе с минимальным дефицитом посадочных мест для шк. 1-4 кл.)',
            'field43' => '44. в т.ч. максимальный дефицит посадочных мест (приводится пример по школе с максимальным дефицитом посадочных мест для шк. 1-4 кл.)',
            'field44' => '45. Количество общеобразовательных организаций в которых продолжительность ПЕРЕМЕН для питания детей 1-11 классов менее 20 минут (из стр.2а)',
            'field45' => '46. Количество общеобразовательных организаций в которых продолжительность ПЕРЕМЕН для питания детей 1-4 классов менее 20 минут (из стр.3)',
            'field46' => '47. Количество общеобразовательных организаций в которых разработаны графики посещения столовых (из стр.2а)',
            'field47' => '48. Количество общеобразовательных организаций в которых разработаны графики посещения столовых для детей 1-4 кл. (из стр.3)',
            'field48' => '49. Количество общеобразовательных организаций в которых НЕ ОБЕСПЕЧЕНЫ В ПОЛНОМ ОБЪЕМЕ условия для мытья рук при обеденном зале (из стр.2а)',
            'field49' => '50. Число школ в которых проводятся мероприятия родительского контроля (по инф. Регионального министерства образования)',
            'field50' => '51. Количество обучающихся (1-11 классов) с заболеваниями, требующими индивидуального подхода в организации питания (по инф. Мин. образования)',
            'field51' => '52. из них, охвачены ОЧНОЙ формой образования (из стр. 51)',
            'field52' => '53. в т.ч. питаются в общеобразовательной организации организованно по специально разработанному меню',
            'field53' => '54. питаются в общеобразовательной организации - приносят еду из дома',
            'field54' => '55. иной вариант питания',
            'field55' => '56. из них, находятся на домашнем обучении (всего) (из стр.51)',
            'field56' => '57. в т.ч. дети с сахарным диабетом',
            'field57' => '58. с пищевой аллергией',
            'field58' => '59. с целиакией',
            'field59' => '60. с фенилкетонурией',
            'field60' => '61. с муковисцидозом',
            'field61' => 'т.6.1. Всего малокомплектных школ * (указываются объекты)',
            'field62' => 'т.6.2. Всего (1-11 класс)',
            'field63' => 'т.6.3. в т.ч. в 1-4 классах',
        ];
    }

    //ДЛЯ поля: Всего общеобразовательных организаций (СУБЪЕКТЫ)
    public function validateSum($attribute)
    {
        $rules_array_sum = [
            'field4' => ['==', 'field5', 'field6', 'field7'],
            'field5' => ['<=', 'field4'],
        ];
        //print_r(count($rules_array_sum[$attribute])); exit();
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

    //это для расчета
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

    public function сomplianceCheck($model)
    {
        //Какие поля проверять на 0:
        //field7
        //field14
        //field33
        $str = '';
        if ($model->field7 != 0)
        {
            $str .= 'Уточните почему у Вас НЕ 0 "Количество обучающихся детей 1-4 классов" обучаются в третью смену. <br>';
        }
        if ($model->field14 != 0)
        {
            $str .= 'Уточните почему у Вас НЕ 0 в "Количество общеобразовательных организаций в которых НЕ ОРГАНИЗОВАНО горячее питание школьников (из стр.3)". <br>';
        }
        if ($model->field33 != 0)
        {
            $str .= 'Уточните почему у Вас НЕ 0 в строке "Количество общеобразовательных организаций в которых ОТСУТСВУЮТ ПИЩЕБЛОКИ и  горячее питание школьников НЕ ОРГАНИЗОВАНО горячее питание школьников (из стр.15) ". <br>';
        }
        if ($model->field7 == 0 && $model->field14 == 0 && $model->field33 == 0)
        {
            $str .= '-';
        }

        return $str;
    }
}
