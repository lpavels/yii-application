<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "table3".
 *
 * @property int $id
 * @property int $user_id
 * @property int $federal_district_id
 * @property int $region_id
 * @property int $municipality_id
 * @property string $year_study
 * @property int $month_status
 * @property string $total_organizations
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
 * @property string $field61
 * @property string $field62
 * @property string $field63
 * @property string $field64
 * @property string $field65
 * @property string $field66
 * @property string $field67
 * @property string $field68
 * @property string $field69
 * @property string $field70
 * @property string $field71
 * @property string $field72
 * @property string $field73
 * @property string $field74
 * @property string $field75
 * @property string $field76
 * @property string $field77
 * @property string $field78
 * @property string $field79
 * @property string $field80
 * @property string $field81
 * @property string $field82
 * @property string $field83
 * @property string $field84
 * @property string $field85
 * @property string $field86
 * @property string $field87
 * @property string $field88
 * @property string $field89
 * @property string $field90
 * @property string $field91
 * @property string $field92
 * @property string $field93
 * @property string $field94
 * @property string $field95
 * @property string $field96
 * @property string $field97
 * @property string $field98
 * @property string $field99
 * @property string $field100
 * @property string $field101
 * @property string $field102
 * @property string $field103
 * @property string $field104
 * @property string $field105
 * @property string $field106
 * @property string $field107
 * @property string $field108
 * @property string $field109
 * @property string $field110
 * @property string $field111
 * @property string $field112
 * @property string $field113
 * @property string $field114
 * @property string $field115
 * @property string $field116
 * @property string $field117
 * @property string $field118
 * @property string $field119
 * @property string $field120
 * @property string $field121
 * @property string $field122
 * @property string $field123
 * @property string $field124
 * @property string $field125
 * @property string $field126
 * @property string $field127
 * @property string $field128
 * @property string $field129
 * @property string $field130
 * @property string $field131
 * @property string $field132
 * @property string $field133
 * @property string $field134
 * @property string $field135
 * @property string $field136
 * @property string $field137
 * @property string $field138
 * @property string $field139
 * @property string $field140
 * @property string $field141
 * @property string $field142
 * @property string $field143
 * @property string $field144
 * @property string $field145
 * @property string $field146
 * @property string $field147
 * @property string $field148
 * @property string $field149
 * @property string $field150
 * @property string $field151
 * @property string $field152
 * @property string $field153
 * @property string $field154
 * @property string $field155
 * @property string $field156
 * @property string $field157
 * @property string $field158
 * @property string $field159
 * @property string $field160
 * @property string $field161
 * @property string $field162
 * @property string $field163
 * @property string $field164
 * @property string $field165
 * @property string $field166
 * @property string $field167
 * @property string $field168
 * @property string $field169
 * @property string $field170
 * @property string $created_at
 */
class Table3 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'table3';
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
                    'total_organizations_1',
                    'total_organizations',
                    'field1_1',
                    'field1_2',
                    'field1_3',
                    'field1',
                    'field2',
                    'field3',
                    'field3_1',
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
                    'field25',
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
                    'field50',
                    'field51',
                    'field52',
                    'field53',
                    'field54',
                    'field55',
                    'field56',
                    'field57',
                    'field58',
                    'field59',
                    'field60',
                    'field61',
                    'field62',
                    'field63',
                    'field64',
                    'field65',
                    'field66',
                    'field67',
                    'field68',
                    'field69',
                    'field70',
                    'field71',
                    'field72',
                    'field73',
                    'field74',
                    'field74_1',
                    'field74_2',
                    'field75',
                    'field76',
                    'field77',
                    'field78',
                    'field79',
                    'field80',
                    'field81',
                    'field82',
                    'field83',
                    'field84',
                    'field85',
                    'field86',
                    'field87',
                    'field88',
                    'field89',
                    'field90',
                    'field91',
                    'field92',
                    'field93',
                    'field94',
                    'field95',
                    'field96',
                    'field97',
                    'field98',
                    'field99',
                    'field100',
                    'field101',
                    'field102',
                    'field103',
                    'field104',
                    'field105',
                    'field106',
                    'field107',
                    'field108',
                    'field109',
                    'field110',
                    'field111',
                    'field112',
                    'field113',
                    'field114',
                    'field115',
                    'field116',
                    'field117',
                    'field118',
                    'field119',
                    'field120',
                    'field121',
                    'field122',
                    'field123',
                    'field124',
                    'field125',
                    'field126',
                    'field127',
                    'field128',
                    'field129',
                    'field130',
                    'field131',
                    'field132',
                    'field133',
                    'field134',
                    'field135',
                    'field136',
                    'field137',
                    'field138',
                    'field139',
                    'field140',
                    'field141',
                    'field142',
                    'field143',
                    'field144',
                    'field145',
                    'field146',
                    'field147',
                    'field148',
                    'field149',
                    'field150',
                    'field151',
                    'field152',
                    'field153',
                    'field154',
                    'field155',
                    'field156',
                    'field157',
                    'field158',
                    'field159',
                    'field160',
                    'field161',
                    'field162',
                    'field163',
                    'field164',
                    'field165',
                    'field166',
                ],
                'required',
            ],
            [['user_id', 'federal_district_id', 'region_id', 'municipality_id', 'month_status'], 'integer'],
            [['created_at'], 'safe'],
            [['year_study'], 'string', 'max' => 50],
            [
                [
                    'total_organizations',
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
                    'field25',
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
                    'field50',
                    'field51',
                    'field52',
                    'field53',
                    'field54',
                    'field55',
                    'field56',
                    'field57',
                    'field58',
                    'field59',
                    'field60',
                    'field61',
                    'field62',
                    'field63',
                    'field64',
                    'field65',
                    'field66',
                    'field67',
                    'field68',
                    'field69',
                    'field70',
                    'field71',
                    'field72',
                    'field73',
                    'field74',
                    'field75',
                    'field76',
                    'field77',
                    'field78',
                    'field79',
                    'field80',
                    'field81',
                    'field82',
                    'field83',
                    'field84',
                    'field85',
                    'field86',
                    'field87',
                    'field88',
                    'field89',
                    'field90',
                    'field91',
                    'field92',
                    'field93',
                    'field94',
                    'field95',
                    'field96',
                    'field97',
                    'field98',
                    'field99',
                    'field100',
                    'field101',
                    'field102',
                    'field103',
                    'field104',
                    'field105',
                    'field106',
                    'field107',
                    'field108',
                    'field109',
                    'field110',
                    'field111',
                    'field112',
                    'field113',
                    'field114',
                    'field115',
                    'field116',
                    'field117',
                    'field118',
                    'field119',
                    'field120',
                    'field121',
                    'field122',
                    'field123',
                    'field124',
                    'field125',
                    'field126',
                    'field127',
                    'field128',
                    'field129',
                    'field130',
                    'field131',
                    'field132',
                    'field133',
                    'field134',
                    'field135',
                    'field136',
                    'field137',
                    'field138',
                    'field139',
                    'field140',
                    'field141',
                    'field142',
                    'field143',
                    'field144',
                    'field145',
                    'field146',
                    'field147',
                    'field148',
                    'field149',
                    'field150',
                    'field151',
                    'field152',
                    'field153',
                    'field154',
                    'field155',
                    'field156',
                    'field157',
                    'field158',
                    'field159',
                    'field160',
                    'field161',
                    'field162',
                    'field163',
                    'field164',
                    'field165',
                    'field166',
                ],
                'integer',
                'min' => 0,
            ],
            [
                [
                    'field158',
                    'field154',
                    'field151',
                ],
                'validateSum',
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
            'federal_district_id' => 'Федеральный округ',
            'region_id' => 'Регион',
            'municipality_id' => 'Муниципальное образование',
            'year_study' => 'Учебный год',
            'month_status' => 'Период за который вносятся данные',
            'total_organizations_1' => '7.1 Количество проверенных школ в текущем учебном году по вопросам питания (нарастайка 2021-2022 учебный год)',
            'total_organizations' => '7.2 Количество проверок общеобразовательных организаций по вопросам питания школьников, ЗАВЕРШЕННЫХ В ОТЧЕТНЫЙ МЕСЯЦ',
            'field1_1' => 'Количество проведенных проверок БЕЗ нарушений по вопросам питания (нарастайка 2021-2022 учебный год)',
            'field1_2' => 'Количество проверок, проведенных с применением лабораторных методов (нарастайка 2021-2022 учебный год)',
            'field1_3' => 'Количество рассмотренных меню в ходе проверок в 2021-2022 учебном году (нарастайка 2021-2022 учебный год)',
            'field1' => '8. из них, без нарушений санитарного законодательства и законодательства в сфере ТР (из стр.7)',
            'field2' => '9. с нарушениями санитарного законодательства и законодательства в сфере технического регулирования  (из стр.7)',
            'field3' => '10. с нарушениями санитарного законодательства и законодательства в сфере технического регулирования (mix)',
            'field3_1' => '10.1  нарушениями санитарного законодательства и законодательства в сфере технического регулирования',
            'field4' => '11. ТОЛЬКО с нарушениями санитарного законодательства',
            'field5' => '12. ТОЛЬКО с нарушениями законодательства в сфере технического регулирования',
            'field6' => '13. Количество проверок общеобразовательных организаций по вопросам питания школьников, ЗАВЕРШЕННЫХ В ОТЧЕТНЫЙ МЕСЯЦ, проведенных с лабораторным контролем',
            'field7' => '14. Количество проверок общеобразовательных организаций по вопросам питания школьников, ЗАВЕРШЕННЫХ В ОТЧЕТНЫЙ МЕСЯЦ, проведенных с БЕЗ лабораторного контроля',
            'field8' => '15. Число выявленных нарушений санитарного законодательства и законодательства в сфере технического регулирования (ВСЕГО)',
            'field9' => '16. в т.ч. к ведению документации (бракеражный журнал, журнал здоровья и т.д.)',
            'field10' => '17. к сопроводительной документации',
            'field11' => '18. не соответствия имеющихся продуктов (для школ) заявленным требованиям в конкурсной документации по показателям качества',
            'field12' => '19. из них, занижение сорта',
            'field13' => '20. снижение заданных показателей пищевовй ценности',
            'field14' => '21. снижение заданных показателей биологической ценности',
            'field15' => '22. иные показатели качества и безопасности',
            'field16' => '23. к маркировке продуктов',
            'field17' => '24. нарушения условий хранения пищевых продуктов (все факты отражаются в пояснительной записке)',
            'field18' => '25. нарушения сроков годности пищевых продуктов (все факты отражаются в пояснительной записке)',
            'field19' => '26. к условиям транспортировки (доставки) пищевых продуктов',
            'field20' => '27. к прохождению своевременных мед.осмотров',
            'field21' => '28. КОЛИЧЕСТВО лиц отстраненных от работы по причине не прохождения в регламентированные сроки М/О',
            'field22' => '29. к прохождению гиг. обучения и воспитания',
            'field23' => '30. КОЛИЧЕСТВО лиц отстраненных от работы по причине не прохождения в регламентированные сроки ГВиО',
            'field24' => '31. занижения объемов порций',
            'field25' => '32. дефицит посуды, в том числе посуда с трещинами и сколами',
            'field26' => '33. нарушения технологии приготовления блюд',
            'field27' => '34. нарушения в ведении бракеража готовой продукции',
            'field28' => '35. нарушения соблюдения режимных вопросов на пищеблоке',
            'field29' => '36. из них, нарушения принципов поточности',
            'field30' => '37. режима мытья посуды',
            'field31' => '38. режима ообработки овощей',
            'field32' => '39. обработки инвентаря',
            'field33' => '40. уборки помещения',
            'field34' => '41. иные вопросы',
            'field35' => '42. исключения из меню отдельных продуктов и блюд, не адекватная по биологической ценности замена продуктов и блюд',
            'field36' => '43. прочие нарушения санитарного законодательства и законодательства в сфере технического регулирования',
            'field37' => '44. Количество рассмотренных в ходе проверок за отчетный месяц фактических меню (за период не менее двух недель) для детей 1-4 классов',
            'field38' => '45. из них, с нарушениями обязательных  требований И РЕКОМЕНДАЦИЙ (всего)',
            'field39' => '46. в т.ч. с занижением  суммарной массы блюд за прием пищи',
            'field40' => '47. с ОТСУТСТВИЕМ свежих фруктов',
            'field41' => '48. с ОТСУТСТВИЕМ свежих овощей',
            'field42' => '49. с  НАЛИЧИЕМ конд. и выпечных изделий',
            'field43' => '50. с  НАЛИЧИЕМ колбасных изделий',
            'field44' => '51. с  НАЛИЧИЕМ консервированных огурцов и помидоров, используемых для закусок',
            'field45' => '52. с  СОДЕРЖАНИЕМ соли в завтраки более 1 г., обеды - более 1,5 г.',
            'field46' => '53. с  СОДЕРЖАНИЕМ сахара в прием пищи более 10 г',
            'field47' => '54. Среднее содержание  в ЗАВТРАКИ витамина С (мг)',
            'field48' => '55. Среднее содержание  в ЗАВТРАКИ витамина В1 (мг)',
            'field49' => '56. Среднее содержание  в ЗАВТРАКИ витамина В2 (мг)',
            'field50' => '57. Среднее содержание  в ЗАВТРАКИ витамина А (мкг рэ)',
            'field51' => '58. Среднее содержание  в ЗАВТРАКИ кальция (мг)',
            'field52' => '59. Среднее содержание  в ЗАВТРАКИ фосфора (мг)',
            'field53' => '60. Среднее содержание  в ЗАВТРАКИ железа (мг)',
            'field54' => '61. Среднее содержание  в ЗАВТРАКИ магния (мг)',
            'field55' => '62. Среднее содержание  в ЗАВТРАКИ калия (мг)',
            'field56' => '63. Среднее содержание  в ЗАВТРАКИ селена (мг)',
            'field57' => '64. Среднее содержание  в ЗАВТРАКИ йода (мг)',
            'field58' => '65. Среднее содержание  в ОБЕДЫ витамина С (мг)',
            'field59' => '66. Среднее содержание  в ОБЕДЫ витамина В1 (мг)',
            'field60' => '67. Среднее содержание  в ОБЕДЫ витамина В2 (мг)',
            'field61' => '68. Среднее содержание  в ОБЕДЫ витамина А (мкг рэ)',
            'field62' => '69. Среднее содержание  в ОБЕДЫ кальция (мг)',
            'field63' => '70. Среднее содержание  в ОБЕДЫ фосфора (мг)',
            'field64' => '71. Среднее содержание  в ОБЕДЫ железа (мг)',
            'field65' => '72. Среднее содержание  в ОБЕДЫ магния (мг)',
            'field66' => '73. Среднее содержание  в ОБЕДЫ калия (мг)',
            'field67' => '74. Среднее содержание  в ОБЕДЫ селена (мг)',
            'field68' => '75. Среднее содержание  в ОБЕДЫ йода (мг)',
            'field69' => '76. СРЕДНЯЯ СУММАРНАЯ МАССА блюд ЗАВТРАКА  (в день в г.на 1 реб. 1-4 класса)',
            'field70' => '77. МИНИМАЛЬНАЯ СУММАРНАЯ МАССА блюд ЗАВТРАКА (в день в г. на 1 реб. 1-4 класса)',
            'field71' => '78. СРЕДНЯЯ СУММАРНАЯ МАССА блюд ОБЕДА  (в день в г.на 1 реб. 1-4 класса)',
            'field72' => '79. МИНИМАЛЬНАЯ СУММАРНАЯ МАССА блюд ОБЕДА (в день в г. на 1 реб. 1-4 класса)',
            'field73' => '80. Исследовано ПРОБ пищевых продуктов на показатели ФАЛЬСИФИКАЦИИ',
            'field74' => '81. из них, не соотвествует гигиеническим требованиям',
            'field74_1' => 'на соотвествие массы порций выдаваемых блюд: всего',
            'field74_2' => 'на соотвествие массы порций выдаваемых блюд: из них ЗАНИЖЕНА масса',
            'field75' => '82. Исследовано ПРОБ готовых блюд по микробиологическим показателям',
            'field76' => '83. из них, не соотвествует гигиеническим требованиям',
            'field77' => '84. Исследовано ПРОБ готовых блюд на калорийность',
            'field78' => '85. из них, не соотвествует гигиеническим требованиям',
            'field79' => '86. Снято продукции с реализации в общеобразовательных организациях пищевых продуктов, в кг',
            'field80' => '87. Количество общеобразовательных организаций, в которых определялась температура горячих блюд, НА ЛИНИИ РАЗДАЧИ',
            'field81' => '88. в т.ч. с заниженной t',
            'field82' => '89. Количество общеобразовательных организаций, в которых определялась температура горячих блюд, НА ЛИНИИ РАЗДАЧИ',
            'field83' => '90. в т.ч. с заниженной t',
            'field84' => '91. Количество исследованных ПРОБ готовых горячих блюд на соблюдение t выдачи (на линии раздачи)',
            'field85' => '92. в т.ч. с заниженной t',
            'field86' => '93. Количество исследованных ПРОБ готовых горячих блюд на соблюдение t выдачи (на столе у обучающихся)',
            'field87' => '94. в т.ч. с заниженной t',
            'field88' => '95. Исследовано проб на содержание витаминов',
            'field89' => '96. из них, с занижением рассчетной ожидаемой величины',
            'field90' => '97. Исследовано проб на содержание витамина С',
            'field91' => '98. из них, с занижением рассчетной ожидаемой величины',
            'field92' => '99. Исследовано проб на содержание витамина В1',
            'field93' => '100. из них, с занижением рассчетной ожидаемой величины',
            'field94' => '101. Исследовано проб на содержание витамина В2',
            'field95' => '102. из них, с занижением рассчетной ожидаемой величины',
            'field96' => '103. Исследовано проб на содержание витамина А',
            'field97' => '104. из них, с занижением рассчетной ожидаемой величины',
            'field98' => '105. Исследовано проб на содержание витамина D',
            'field99' => '106. из них, с занижением рассчетной ожидаемой величины',
            'field100' => '107. Исследовано проб на содержание минеральных веществ',
            'field101' => '108. из них, с занижением рассчетной ожидаемой величины',
            'field102' => '109. Исследовано проб на содержание кальция',
            'field103' => '110. из них, с занижением рассчетной ожидаемой величины',
            'field104' => '111. Исследовано проб на содержание фосфора',
            'field105' => '112. из них, с занижением рассчетной ожидаемой величины',
            'field106' => '113. Исследовано проб на содержание магния',
            'field107' => '114. из них, с занижением рассчетной ожидаемой величины',
            'field108' => '115. Исследовано проб на содержание железа',
            'field109' => '116. из них, с занижением рассчетной ожидаемой величины',
            'field110' => '117. Исследовано проб на содержание йода',
            'field111' => '118. из них, с занижением рассчетной ожидаемой величины',
            'field112' => '119. Исследовано проб на содержание селена',
            'field113' => '120. из них, с занижением рассчетной ожидаемой величины',
            'field114' => '121. Процентное  несоответствие фактического рациона примерному меню (невыполнение норм питания), по итогам проверок, проведенных за отчетный месяц (%) - УКАЗЫВАЮТСЯ средние значения по ВСЕМ ГРУППАМ ПРОДУКТОВ',
            'field115' => '122. в т.ч., по мясу',
            'field116' => '123. по рыбе',
            'field117' => '124. по молоку',
            'field118' => '125. по творогу',
            'field119' => '126. по маслу сливочному',
            'field120' => '127. по овощам',
            'field121' => '128. по фруктам',
            'field122' => '129. Процентное  несоответствие фактического рациона примерному меню (невыполнение норм питания), по итогам проверок, проведенных за отчетный месяц (%) - УКАЗЫВАЮТСЯ МАКСИМАЛЬНЫЕ значения по ВСЕМ ГРУППАМ ПРОДУКТОВ',
            'field123' => '130. в т.ч., по мясу',
            'field124' => '131. по рыбе',
            'field125' => '132. по молоку',
            'field126' => '133. по творогу',
            'field127' => '134. по маслу сливочному',
            'field128' => '135. по овощам',
            'field129' => '136. по фруктам',
            'field130' => '137. Количество составленных протоколов в ходе проверок  - ВСЕГО (за отчетный период)',
            'field131' => '138. Количество вынесенных временных запретов деятельности (указать в пояснительной записке)',
            'field132' => '139. Количество вынесенных постановлений о назначении административного наказания',
            'field133' => '140. в т.ч. в форме штрафа',
            'field134' => '141. сумма штрафов (в тыс. руб.)',
            'field135' => '142. Число дел, направленных на рассмотрение в суды',
            'field136' => '143. из них, на АПД  (указать в пояснительной записке)',
            'field137' => '144. Рассмотрено судами',
            'field138' => '145. в т.ч. вынесено решение об АПД (указать в пояснительной записке)',
            'field139' => '146. вынесено решение о назначении штрафа',
            'field140' => '146а. вынесено решение о назначении штрафа',
            'field141' => '147. Находятся на рассмотрении в судах',
            'field142' => '148. ОТКАЗАНО судами в рассмотрении',
            'field143' => '149. Число дел переданных в правоохранительные органы для возбуждения уголовных дел',
            'field144' => '150. из них, рассмотрено',
            'field145' => '151. в т.ч. возбуждены уголовные дела',
            'field146' => '152. в т.ч. отказано в возбуждении уголовного дела',
            'field147' => '153. Количество общеобразовательных организаций в отношении которых по результатам проверок были составлены предписания',
            'field148' => '154. в т.ч. со сроками исполнения в период  подготовки к новому  учебному году',
            'field149' => '155. в т.ч. со сроками исполнения в течение текущего учебного года',
            'field150' => '156. в т.ч. со сроками исполнения следующий учебный год и далее',
            'field151' => '157. Количество нарушений устраненных в ходе проверок',
            'field152' => '158. Количество обучающихся в них детей - ВСЕГО',
            'field153' => '159. в т.ч. детей 1-4 классов (из стр.158)',
            'field154' => '160. Кол-во детей, получающих горячее питание (ВСЕ ДЕТИ: 1-11 класс) по результатам проверок',
            'field155' => '161. в т.ч. только завтраки',
            'field156' => '162. в т.ч. только обеды',
            'field157' => '163. получают 2-3х разовое питание',
            'field158' => '164. Кол-во детей, получающих горячее питание (1-4 класс), по результатам проверок',
            'field159' => '165. в т.ч. только завтраки',
            'field160' => '166. в т.ч. только обеды',
            'field161' => '167. получают 2-3х разовое питание',
            'field162' => '168. Кол-во детей, не получающих организованное горячее питание (ВСЕ ДЕТИ: 1-11 класс)',
            'field163' => '169. в т.ч. детей 1-4 классов',
            'field164' => '170. из них, в связи с отсутствием условий для организации горячего питания',
            'field165' => '171. Находятся на домашнем обучении - ВСЕ возрастные группы (1-11 класс)',
            'field166' => '172. в т.ч. детей 1-4 классов (из стр.29)',
            'create_at' => 'Дата заполнения анкеты',
        ];
    }

    //ДЛЯ поля: Всего общеобразовательных организаций (СУБЪЕКТЫ)
    public function validateSum($attribute)
    {
        $rules_array_sum = [
            'field158' => [
                '<=',
                'field153',
                'field154',
                'field155',
                'field156',
                'field157',
                'field158',
                'field159',
                'field160',
                'field161',
                'field162',
                'field163',
                'field164',
                'field165',
                'field166',
            ],
            'field154' => [
                '<=',
                'field1',
                'field152',
                'field153',
                'field154',
                'field155',
                'field156',
                'field157',
                'field159',
                'field160',
                'field161',
                'field162',
                'field163',
                'field164',
                'field165',
            ],
            'field151' => ['<=', 'field8'],
            'field113' => ['<=', 'field112'],
            'field111' => ['<=', 'field110'],
            'field109' => ['<=', 'field108'],
            'field107' => ['<=', 'field106'],
            'field105' => ['<=', 'field104'],
            'field103' => ['<=', 'field102'],
            'field99' => ['<=', 'field98'],
            'field97' => ['<=', 'field96'],
            'field95' => ['<=', 'field94'],
            'field93' => ['<=', 'field92'],
            'field91' => ['<=', 'field90'],
            'field87' => ['<=', 'field86'],
            'field85' => ['<=', 'field84'],
            'field83' => ['<=', 'field82'],
            'field78' => ['<=', 'field77'],
            'field76' => ['<=', 'field75'],
            'field74' => ['<=', 'field73'],
            'field39' => ['<=', 'field38'],
            'field38' => ['<=', 'field37'],
            'field6' => ['<=', 'field3'],
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

    //это для расчета всего организации
    public function totalOrganization2($arrays) //считаем сумму по массиву полей!
    {
        if (!empty($arrays))
        {
            $sum = 0;
            foreach ($arrays as $array):
                $sum = $sum + Yii::$app->myComponent->numericCustom($array);
            endforeach;
            if (count($arrays) != 0)
            {
                $sum2 = $sum / count($arrays);

                return $sum2;
            }
            else
            {
                $sumf = $sum / 7;

                return $sumf;
            }
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
        if ($model->field12 != 0)
        {
            $str .= 'Уточните почему у Вас НЕ 0 в строке: "не соответствия имеющихся продуктов (для школ) заявленным требованиям в конкурсной документации по показателям качества: из них, занижение сорта". <br>';
        }
        if ($model->field13 != 0)
        {
            $str .= 'Уточните почему у Вас НЕ 0 в строке: "не соответствия имеющихся продуктов (для школ) заявленным требованиям в конкурсной документации по показателям качества: снижение заданных показателей пищевой ценности".  <br>';
        }
        if ($model->field14 != 0)
        {
            $str .= 'Уточните почему у Вас НЕ 0 в строке: "не соответствия имеющихся продуктов (для школ) заявленным требованиям в конкурсной документации по показателям качества: снижение заданных показателей биологической ценности".  <br>';
        }
        if ($model->field15 != 0)
        {
            $str .= 'Уточните почему у Вас НЕ 0 в строке: "не соответствия имеющихся продуктов (для школ) заявленным требованиям в конкурсной документации по показателям качества: иные показатели качества и безопасности".  <br>';
        }
        if ($model->field16 != 0)
        {
            $str .= 'Уточните почему у Вас НЕ 0 в строке: "к маркировке продуктов".  <br>';
        }
        if ($model->field17 != 0)
        {
            $str .= 'Уточните почему у Вас НЕ 0 в строке: "нарушения условий хранения пищевых продуктов (все факты отражаются в пояснительной записке)".  <br>';
        }
        if ($model->field18 != 0)
        {
            $str .= 'Уточните почему у Вас НЕ 0 в строке: "нарушения сроков годности пищевых продуктов (все факты отражаются в пояснительной записке)".  <br>';
        }
        if ($model->field35 != 0)
        {
            $str .= 'Уточните почему у Вас НЕ 0 в строке: "исключения из меню отдельных продуктов и блюд, не адекватная по биологической ценности замена продуктов и блюд".  <br>';
        }
        if ($model->field79 != 0)
        {
            $str .= 'Уточните почему у Вас НЕ 0 в строке: "Снято продукции с реализации в общеобразовательных организациях пищевых продуктов, в кг".  <br>';
        }
        if ($model->field131 != 0)
        {
            $str .= 'Уточните почему у Вас НЕ 0 в строке: "Количество вынесенных временных запретов деятельности (указать в пояснительной записке)".  <br>';
        }
        if ($model->field136 != 0)
        {
            $str .= 'Уточните почему у Вас НЕ 0 в строке: "из них, на АПД  (указать в пояснительной записке)".  <br>';
        }
        if ($model->field138 != 0)
        {
            $str .= 'Уточните почему у Вас НЕ 0 в строке: "в т.ч. вынесено решение об АПД (указать в пояснительной записке)".  <br>';
        }
        if ($model->field143 != 0)
        {
            $str .= 'Уточните почему у Вас НЕ 0 в строке: "Число дел переданных в правоохранительные органы для возбуждения уголовных дел".  <br>';
        }
        if ($model->field145 != 0)
        {
            $str .= 'Уточните почему у Вас НЕ 0 в строке: "в т.ч. возбуждены уголовные дела".  <br>';
        }
        if ($model->field150 != 0)
        {
            $str .= 'Уточните почему у Вас НЕ 0 в строке: "в т.ч. со сроками исполнения следующий учебный год и далее".  <br>';
        }

        if (
            $model->field12 == 0 &&
            $model->field13 == 0 &&
            $model->field14 == 0 &&
            $model->field15 == 0 &&
            $model->field16 == 0 &&
            $model->field17 == 0 &&
            $model->field18 == 0 &&
            $model->field35 == 0 &&
            $model->field79 == 0 &&
            $model->field131 == 0 &&
            $model->field136 == 0 &&
            $model->field138 == 0 &&
            $model->field143 == 0 &&
            $model->field145 == 0 &&
            $model->field150 == 0
        )
        {
            $str .= '-';
        }

        return $str;
    }
}
