<?php

/* @var $this yii\web\View */

/* @var $dataProvider yii\data\ActiveDataProvider */

use common\models\Table1;
use common\models\Table2;
use common\models\Table3;
use common\models\Table4;
use common\models\Table5;
use common\models\Table6;
use common\models\Table7;
use common\models\Table8;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Сводный отчет по таблицам';
$arrya['table1'] = [];
$arrya['table2'] = [];
$arrya['table3'] = [];
$arrya['table4'] = [];
$arrya['table5'] = [];
$arrya['table6'] = [];
$arrya['table7'] = [];
$arrya['table8'] = [];
$arryaRegion['table1'] = [];
$arryaRegion['table2'] = [];
$arryaRegion['table3'] = [];
$arryaRegion['table4'] = [];
$arryaRegion['table5'] = [];
$arryaRegion['table6'] = [];
$arryaRegion['table7'] = [];
$arryaRegion['table8'] = [];
$arryaTable1 = [
    'total_organizations',
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
    'field13_1',
    'field13_2',
    'field13_3',
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
];
$arryaTable2 = [
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
];
$arryaTable3 = [
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

];
$arryaTable4 = [
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

];
$arryaTable5 = [
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

];
$arryaTable6 = [
    'field1',
    'field2',
    'field3',
    'field4',
];
$arryaTable7 = [
    'field1',
    'field1_1',
    'field2',
    'field4',
    'field4',
    'field5',
    'field6',
    'field7',
    'field8',
    'field9',
    'field10',
    'field11',
];
$arryaTable8 = [
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

];
$num = 1;
$arrya2 = Yii::$app->myComponent->FederalDistrictItems();
$arrya2[100] = 'Посмотрть все';
//print_r($arrya2);
$str = '';
?>
    <div class="mt-3 table1 container">
        <h5 class="text-center mb-4">Сводный отчет по формам</h5>
        <?
        $form = ActiveForm::begin(); ?>
        <?
        if (Yii::$app->user->can('admin')) {
            echo $form->field($model, 'federal_district_id', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
                $arrya2,
                Yii::$app->myComponent->twoColumnInputSm(['value' => $fed])
            );
            echo $form->field($model, 'region_id', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
                Yii::$app->myComponent->statusView(),
                Yii::$app->myComponent->twoColumnInputSm(['value' => $reg])
            )->label('Показать/скрыть регион');
        } ?>
        <?= $form->field($model, 'year_study', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
            Yii::$app->myComponent->yearStudy(),
            Yii::$app->myComponent->twoColumnInputSm()
        )->label('Выберите учебный год') ?>

        <?= $form->field($model, 'month_status', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
            Yii::$app->myComponent->monthsLearningShort(),
            Yii::$app->myComponent->twoColumnInputSm(['value' => $month_status])
        )->label('Выберите месяц') ?>
        <div class="form-group">
            <?= Html::submitButton('ПОКАЗАТЬ', ['class' => 'btn btn-primary btn-block mt-3']) ?>
        </div>

        <?
        ActiveForm::end(); ?>

    </div>
<?

if ($federalDistricts !== '') { ?>
    <input type="button" class="btn btn-warning table2excel mt-2 mb-2"
           title="Вы можете скачать в формате Excel" value="Скачать в Excel" id="pechat222">
    <table id="tableId" class="table table-bordered table-sm table2excel_with_colors">
        <tr class="table-primary font-weight-bold">
            <td class="column0 style1 s style52" rowspan="6">№</td>
            <td class="column1 style1 s style52" rowspan="6">Федеральный округ</td>
            <td class="column2 style1 s style52" rowspan="6">Регион</td>
            <td class="column3 style1 s style52" rowspan="6">Месяц</td>
            <td class="text-center" colspan="66">Таблица №1 Общие сведения</td>
            <td class="text-center" colspan="24">Таблица №2 Формы организации питания</td>
            <td class="text-center" colspan="174">Таблица №3 Результаты проверок общеобразовательных организаций и
                принятых мер
                административного воздействия
            </td>
            <td class="text-center" colspan="81">Таблица №4 Результаты проверок</td>
            <td class="text-center" colspan="80">Таблица №5 Характеристика продуктов</td>
            <td class="text-center" colspan="4">Таблица №6 Малокомплектные общеобразовательные организации</td>
            <td class="text-center" colspan="12">Таблица №7 Жалобы и мероприятия родительского контроля</td>
            <td class="text-center" colspan="18">Таблица №8 Сведения об организации питании детей с пищевыми
                особенностями
            </td>
        </tr>
        <tr class="table-primary font-weight-bold">
            <td class="column4 style6 s style53" rowspan="5">Всего общеобразовательных организаций</td>
            <td class="column5 style6 s style53" rowspan="5">Количество школ в которых обучаются дети 1-4 классов</td>
            <td class="column6 style7 s style7" colspan="5">Число ОБУЧАЮЩИХСЯ</td>
            <td class="column11 style6 s style53" rowspan="5">Число общеобразовательных организаций в которых
                организовано <span
                        style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt">горячее</span><span
                        style="color:#000000; font-family:'Calibri'; font-size:11pt"> питание школьников, НА БАЗЕ самой ОБЩЕОБРАЗОВАТЕЛЬНОЙ ОРГАНИЗАЦИИ</span>
            </td>
            <td class="column12 style7 s style8" colspan="2">Количество обучающихся в НИХ</td>
            <td class="column14 style6 s style53" rowspan="5">Число общеобразовательных организаций в которых
                организовано<span
                        style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt"> горячее</span><span
                        style="color:#000000; font-family:'Calibri'; font-size:11pt"> питание школьников, НА БАЗЕ ДРУГИХ ОРГАНИЗАЦИЙ и объектов общепита </span>
            </td>
            <td class="column15 style7 s style8" colspan="2">Количество обучающихся в НИХ</td>
            <td class="column17 style6 s style53" rowspan="5">Число общеобразовательных организаций в которых
                организовано<span
                        style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt"> горячее</span><span
                        style="color:#000000; font-family:'Calibri'; font-size:11pt"> питание школьников, НА БАЗЕ  других школ</span>
            </td>
            <td class="column18 style7 s style8" colspan="2">Количество обучающихся в НИХ</td>
            <td class="column20 style6 s style53" rowspan="5">Число общеобразовательных организаций в которых НЕ
                ОРГАНИЗОВАНО <span
                        style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt">горячее</span><span
                        style="color:#000000; font-family:'Calibri'; font-size:11pt"> питание школьников </span></td>
            <td class="column21 style7 s style8" colspan="2">Количество обучающихся в НИХ</td>
            <td class="column23 style7 s style8" colspan="4">Кол-во детей, получающих горячее питание (ВСЕ ДЕТИ: 1-11
                класс)
            </td>
            <td class="column27 style7 s style8" colspan="4">В том числе, кол-во детей 1-4 классов, получающих горячее
                питание
            </td>
            <td class="column31 style7 s style8" colspan="5">Число детей, не питающихся в школьной столовой</td>
            <td class="column36 style6 s style53" rowspan="5">Количество организаций (объекты), в которых отсутствуют
                пищеблоки и питание организовано
            </td>
            <td class="column37 style7 s style7" colspan="2">Число обучающихся в них детей</td>
            <td class="column39 style6 s style53" rowspan="5">Количество организаций (объекты), в которых отсутствуют
                пищеблоки и питание НЕ организовано
            </td>
            <td class="column40 style7 s style8" colspan="2">Число обучающихся в них детей</td>
            <td class="column42 style9 s style11" colspan="4">Число школ, в которых кол-во посадочных мест НЕДОСТАТОЧНО
                для питания всех обучающихся (1-11 класс)
            </td>
            <td class="column46 style9 s style11" colspan="4">Число школ, в которых кол-во посадочных мест НЕДОСТАТОЧНО
                для питания всех обучающихся (1-4 класс)
            </td>
            <td class="column50 style7 s style8" colspan="2">Число школ, в которых продолжительность ПЕРЕМЕН для
                питания
            </td>
            <td class="column52 style7 s style8" colspan="2">Число школ, в которых разработаны графики посещения
                столовых
            </td>
            <td class="column54 style6 s style53" rowspan="5">Кол-во школ, в которых НЕ ОБЕСПЕЧЕНЫ В ПОЛНОМ ОБЪЕМЕ
                условия для мытья рук при обеденном зале
            </td>
            <td class="column55 style12 s style54" rowspan="5">Число школ в которых проводятся мероприятия родительского
                контроля (по инф. Регионального министерства образования)
            </td>
            <td class="column56 style12 s style54" rowspan="5">Количество обучающихся (1-11 классов) с заболеваниями,
                требующими индивидуального подхода в организации питания (по инф. Мин. образования)
            </td>
            <td class="column57 style13 s style54" rowspan="5">из них охвачены ОЧНОЙ формой образования</td>
            <td class="column58 style14 s style14" colspan="3">в т.ч. питаются в общеобразовательной организации</td>
            <td class="column61 style13 s style54" rowspan="5">из них на домашнем обучении (из гр. 51)</td>
            <td class="column62 style14 s style14" colspan="5">в т.ч. со следующими заболеваниями</td>
            <td class="column67 style6 s style53" rowspan="5">Всего малокомплектных школ * (указываются объекты)</td>
            <td class="column68 style7 s style7" colspan="2">Число детей, обучающихся в них</td>
            <td class="column70 style15 s style16" colspan="8">Количество работающих пищеблоков в общеобразовательных
                организациях
            </td>
            <td class="column78 style17 s style55" rowspan="5">Количество школ, в которых ТРЕБУЕТСЯ подвоз детей до
                столовых других школ для обеспечения питанием
            </td>
            <td class="column79 style17 s style55" rowspan="5">Количество школ, в которых ОРГАНИЗОВАН подвоз детей до
                столовых других школ и организаций для обеспечения питанием (из графы 13)
            </td>
            <td class="column80 style15 s style15" colspan="3">КОЛИЧЕСТВО ШКОЛ</td>
            <td class="column83 style18 s style19" colspan="2">Количество организаций, оказывающих услуги в системе
                школьного питания
            </td>
            <td class="column85 style17 s style55" rowspan="5">Всего поставщиков пищевых продуктов</td>
            <td class="column86 style15 s style16" colspan="4">Стоимость питания (в руб. в день/чел.) в 1-4 классах
                _ЗАВТРАКИ
            </td>
            <td class="column90 style15 s style16" colspan="4">Стоимость питания (в руб. в день/чел.) в 1-4 классах
                _ОБЕДЫ
            </td>
            <td class="column94 style6 s style53" rowspan="5">Количество проверенных школ в текущем учебном году по
                вопросам питания (нарастайка 2021-2022 учебный год)
            </td>
            <td class="column95 style6 s style53" rowspan="5">Количество проведенных проверок школ в текущем учебном
                году по вопросам питания (нарастайка 2021-2022 учебный год)
            </td>
            <td class="column96 style6 s style53" rowspan="5">Количество проведенных проверок БЕЗ нарушений по вопросам
                питания (нарастайка 2021-2022 учебный год)
            </td>
            <td class="column97 style6 s style53" rowspan="5">Количество проверок, проведенных с применением
                лабораторных методов (нарастайка 2021-2022 учебный год)
            </td>
            <td class="column98 style6 s style53" rowspan="5">Количество рассмотренных меню в ходе проверок в 2021-2022
                учебном году (нарастайка 2021-2022 учебный год)
            </td>
            <td class="column99 style6 s style53" rowspan="5">Количество проверок, проведенных ЗА ОТЧЕТНЫЙ МЕСЯЦ</td>
            <td class="column100 style6 s style53" rowspan="5">Количество проверок, проведенных ЗА ОТЧЕТНЫЙ МЕСЯЦ без
                нарушений
            </td>
            <td class="column101 style6 s style53" rowspan="5">Количество проверок, проведенных ЗА ОТЧЕТНЫЙ МЕСЯЦ с
                нарушениями санитарного законодательства и законодательства в сфере технического регулирования
            </td>
            <td class="column102 style7 s style7" colspan="3">из них</td>
            <td class="column105 style6 s style53" rowspan="5">Количество проверок, проведенных с применением
                лабораторных методов за отчетный месяц
            </td>
            <td class="column106 style6 s style53" rowspan="5">Количество проверок, проведенных БЕЗ применения
                лабораторных методов за отчетный месяц
            </td>
            <td class="column107 style7 s style8" colspan="29">Выявленные нарушения санитарного законодательства и
                законодательства в сфере технического регулирования в ходе проведения проверок, ПРОВЕДЕННЫХ ЗА ОТЧЕТНЫЙ
                МЕСЯЦ -ПО ЗАВЕРШЕННЫМ В ОТЧЕТНОМ МЕСЯЦЕ ПРОВЕРКАМ)
            </td>
            <td class="column136 style7 s style8" colspan="36">Результаты оценки ДОКУМЕНТОВ ПО ПИТАНИЮ ШКОЛЬНИКОВ,
                ПРОВЕРЕННЫХ В ХОДЕ ПРОВЕРОК проведенных за отчетный месяц (меню, технологические карты, меню-раскладки,
                накопительная ведомость) - ПО ЗАВЕРШЕННЫМ В ОТЧЕТНОМ МЕСЯЦЕ ПРОВЕРКАМ
            </td>
            <td class="column172 style7 s style20" colspan="43">Результаты лабораторного контроля - по итогам проверок
                за отчетный месяц
            </td>
            <td class="column215 style7 s style8" colspan="8" rowspan="2">Процентное несоответствие фактического рациона
                примерному меню (невыполнение норм питания), по итогам проверок, проведенных за отчетный месяц (%) по
                следующим группам продуктов - УКАЗЫВАЮТСЯ средние значения
            </td>
            <td class="column223 style7 s style8" colspan="8" rowspan="2">Процентное несоответствие фактического рациона
                примерному меню (невыполнение норм питания), по итогам проверок, проведенных за отчетный месяц (%) по
                следующим группам продуктов - УКАЗЫВАЮТСЯ максимальные значения
            </td>
            <td class="column231 style6 s style53" rowspan="5">Количество составленных протоколов в ходе проверок -
                ВСЕГО
            </td>
            <td class="column232 style6 s style53" rowspan="5">Количество вынесенных временных запретов деятельности
                (указать в пояснительной записке)
            </td>
            <td class="column233 style7 s style7" colspan="2" rowspan="3">Кол-во вынесенных постановлений о назначении
                административного наказания
            </td>
            <td class="column235 style6 s style53" rowspan="5">Сумма штрафов - ВСЕГО (в тыс. руб.)</td>
            <td class="column236 style6 s style53" rowspan="5">Число дел, направленных на рассмотрение в суды</td>
            <td class="column237 style6 s style53" rowspan="5">Из них, на АПД</td>
            <td class="column238 style6 s style53" rowspan="5">рассмотрено судами</td>
            <td class="column239 style10 s style11" colspan="3">в т.ч.</td>
            <td class="column242 style6 s style53" rowspan="5">Находятся на рассмотрении в судах</td>
            <td class="column243 style6 s style53" rowspan="5">ОТКАЗАНО судами в рассмотрении</td>
            <td class="column244 style6 s style53" rowspan="5">Число дел переданных в правоохранительные органы для
                возбуждения уголовных дел
            </td>
            <td class="column245 style9 s style11" colspan="3">из них</td>
            <td class="column248 style6 s style53" rowspan="5">Количество общеобразовательных организаций в отношении
                которых по результатам проверок были составлены предписания
            </td>
            <td class="column249 style7 s style8" colspan="3">в т.ч. со сроками исполнения</td>
            <td class="column252 style6 s style53" rowspan="5">Количество нарушений устраненных в ходе проверок</td>
            <td class="column253 style7 s style7" colspan="2" rowspan="2">Количество обучающихся в проверенных
                общеобразовательных организациях
            </td>
            <td class="column255 style7 s style7" colspan="4" rowspan="2">Кол-во детей, получающих горячее питание (ВСЕ
                ДЕТИ: 1-11 класс)
            </td>
            <td class="column259 style7 s style7" colspan="4" rowspan="2">В том числе, кол-во детей 1-4 классов,
                получающих горячее питание
            </td>
            <td class="column263 style7 s style7" colspan="5" rowspan="2">Число детей, не питающихся в школьной
                столовой
            </td>
            <td class="column268 style21 s style22" colspan="3" rowspan="2">Количество проверенных</td>
            <td class="column271 style23 s style23" rowspan="5">Количество проведенных проверок в отношении
                поставщиков+операторов+комбинатов питания
            </td>
            <td class="column272 style23 s style23" rowspan="5">в т.ч. без нарушений</td>
            <td class="column273 style23 s style23" rowspan="5">с нарушениями санитарного законодательства и
                законодательства в сфере технического регулирования (всего)
            </td>
            <td class="column274 style23 s style23" colspan="3">из них</td>
            <td class="column277 style23 s style23" rowspan="5">Количество проверок с применением лабораторных методов
            </td>
            <td class="column278 style23 s style23" rowspan="5">Количество проверок, проведенных БЕЗ использования
                лабораторных методов
            </td>
            <td class="column279 style23 s style23" rowspan="5">Количество проверок по итогам которых проинформированы
                органы управления образованием
            </td>
            <td class="column280 style23 s style23" rowspan="5">Число выявленных нарушений (ВСЕГО)</td>
            <td class="column281 style23 s style23" colspan="15" rowspan="2">выявленные в ходе проверок нарушения (за
                отчетный месяц)
            </td>
            <td class="column296 style23 s style23" colspan="14">Результаты лабораторного контроля по итогам проверок за
                ОТЧЕТНЫЙ МЕСЯЦ
            </td>
            <td class="column310 style21 s style22" rowspan="5">Снято продукции с реализации у поставщиков, кг
                (нарастайка 2021-2022 учебный год)
            </td>
            <td class="column311 style21 s style21" colspan="6">в т.ч. (в кг)</td>
            <td class="column317 style21 s style22" rowspan="5">Применена мера временного запрета деятельности (указать
                в пояснительной записке объекты и причины) - нарастайка 2021-2022 учебный год
            </td>
            <td class="column318 style21 s style22" rowspan="5">Количество составленных протоколов в ходе проверок
                поставщиков, операторов (организаторов) питания, комбинаты питания - ВСЕГО
            </td>
            <td class="column319 style21 s style22" colspan="3">в т.ч.</td>
            <td class="column322 style21 s style22" rowspan="5">Кол-во вынесенных постановлений о назначении
                администратиного наказания
            </td>
            <td class="column323 style24 s">из них:</td>
            <td class="column324 style21 s style22" rowspan="5">Сумма штрафов на поставщиков, операторов (организаторов)
                питания, комбинаты питания
            </td>
            <td class="column325 style21 s style22" colspan="3">в т.ч.</td>
            <td class="column328 style21 s style22" rowspan="5">Число дел, направленных на рассмотрение в суды</td>
            <td class="column329 style21 s style21" rowspan="5">Количество дел по которым приняты решения</td>
            <td class="column330 style21 s style21" colspan="3">из них:</td>
            <td class="column333 style21 s style21" rowspan="5">Находится на рассмотрении в судах</td>
            <td class="column334 style21 s style21" rowspan="5">Отказано в рассмотрении судами</td>
            <td class="column335 style21 s style21" rowspan="5">Число дел переданных в правоохранительные органы для
                возбуждения уголовных дел
            </td>
            <td class="column336 style23 s style23" rowspan="5">Рассмотрено</td>
            <td class="column337 style23 s style23" colspan="2">в т.ч.</td>
            <td class="column339 style21 s style22" rowspan="5">Наличие в регионе реестра недобросовестных поставщиков
                (+-)
            </td>
            <td class="column340 style21 s style22" colspan="4" rowspan="3">Количество поставщиков, внесенных в реестр
                недобросовестных - НАДО ДОБАВИТЬ (операторов и КШП)
            </td>
            <td class="column344 style21 s style22" rowspan="5">Количество поставщиков, операторов и комбинатов питания
                в отношении которых по результатам проверок были составлены предписания
            </td>
            <td class="column345 style21 s style22" colspan="3">в т.ч. со сроками исполнения</td>
            <td class="column348 style25 s style25" rowspan="5">Количество нарушений устраненных в ходе проверок</td>
            <td class="column349 style7 s style8" colspan="40">СУММАРНЫЕ по итогам проверок объемы продукции имеющейся
                на реализации в ОБЩЕОБРАЗОВАТЕЛЬНЫХ ОРГАНИЗАЦИЯХ на дату проверки (указывается сумма всех продуктов на
                проверенных объектах за отчетный месяц)
            </td>
            <td class="column389 style7 s style8" colspan="40">СУММАРНЫЕ по итогам проверок объемы продукции имеющейся
                на реализации у ПОСТАВЩИКОВ,ОРГАНИЗАТОРОВ (ОПЕРАТОРОВ) ПИТАНИЯ, НА КОМБИНАТАХ ПИТАНИЯ на дату проверки
                (указывается сумма всех продуктов на проверенных объектах за отчетный месяц)
            </td>
            <td class="column429 style21 s style21" rowspan="5">Количество проверенных малокомплектных школ</td>
            <td class="column430 style21 s style21" rowspan="5">Количество малокомплектных школ, в которых выявлены
                нарушения
            </td>
            <td class="column431 style21 s style21" rowspan="5">Число составленных протоколов</td>
            <td class="column432 style21 s style21" rowspan="5">Сумма наложенных штрафов, (в тыс. руб.)</td>
            <td class="column433 style7 s style7" rowspan="5">Число ПОСТУПИВШИХ жалоб на организацию питания детей 1-4
                кл.поступивших в органы Роспотребнадзора
            </td>
            <td class="column434 style7 s style7" colspan="5" rowspan="2">из них</td>
            <td class="column439 style7 s style7" rowspan="5">Число школ, в которых проводились мероприятия
                родительского контроля (из числа проверенных школ)
            </td>
            <td class="column440 style7 s style7" rowspan="5">Число школ, в которых НЕ проводились мероприятия
                родительского контроля (из числа проверенных школ)
            </td>
            <td class="column441 style7 s style7" rowspan="5">Число проведенных мероприятий родительского контроля ЗА
                ОТЧЕТНЫЙ МЕСЯЦ
            </td>
            <td class="column442 style7 s style7" rowspan="5">в т.ч. с оценкой показателей несъедаемости пищи
                (нарастайка за 2021-2022 учебный год)
            </td>
            <td class="column443 style7 s style7" colspan="2" rowspan="2">СРЕДНИЕ_показатели несъедаемости (в %) ПО
                ИТОГАМ ОТЧЕТНОГО МЕСЯЦА
            </td>
            <td class="column445 style21 s style21" rowspan="5">Всего общеобразовательных организаций (ОБЪЕКТОВ), в
                которых обучаются дети 1-4 классов, требующие по состоянию здоровья индивидуального подхода в
                организации питания
            </td>
            <td class="column446 style21 s style22" colspan="5">из них:</td>
            <td class="column451 style21 s style21" colspan="12">Число детей 1-4 классов, требующих <span
                        style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt">ИНДИВИДУАЛЬНОГО</span><span
                        style="color:#000000; font-family:'Calibri'; font-size:11pt"> подхода в организации питания </span>
            </td>
        </tr>
        <tr class="table-primary font-weight-bold">
            <td class="column6 style6 s style53" rowspan="4">Всего</td>
            <td class="column7 style7 s style8" colspan="4">Число детей 1-4 классов в них</td>
            <td class="column12 style6 s style53" rowspan="4">Всего</td>
            <td class="column13 style6 s style53" rowspan="4">в т.ч. 1-4 кл</td>
            <td class="column15 style6 s style53" rowspan="4">Всего</td>
            <td class="column16 style6 s style53" rowspan="4">1-4 кл</td>
            <td class="column18 style6 s style53" rowspan="4">Всего</td>
            <td class="column19 style6 s style53" rowspan="4">1-4 кл</td>
            <td class="column21 style6 s style53" rowspan="4">Всего</td>
            <td class="column22 style6 s style53" rowspan="4">1-4 кл</td>
            <td class="column23 style6 s style53" rowspan="4">Всего</td>
            <td class="column24 style6 s style53" rowspan="4">только завтраки</td>
            <td class="column25 style6 s style53" rowspan="4">только обеды</td>
            <td class="column26 style6 s style53" rowspan="4">получающие 2-3 разовое питание</td>
            <td class="column27 style6 s style53" rowspan="4">Всего</td>
            <td class="column28 style6 s style53" rowspan="4">только завтраки</td>
            <td class="column29 style6 s style53" rowspan="4">только обеды</td>
            <td class="column30 style6 s style53" rowspan="4">получающие 2-3 разовое питание</td>
            <td class="column31 style6 s style53" rowspan="4">Всего (1-11 кл)</td>
            <td class="column32 style6 s style53" rowspan="4">в т.ч. 1-4 кл</td>
            <td class="column33 style6 s style53" rowspan="4">в связи с отсутствием условий для организации горячего
                питания
            </td>
            <td class="column34 style7 s style8" colspan="2">в связи с ДОМАШНИМ ОБУЧЕНИЕМ</td>
            <td class="column37 style6 s style53" rowspan="4">ВСЕГО (1-11 кл)</td>
            <td class="column38 style6 s style53" rowspan="4">в т.ч. 1-4 классов</td>
            <td class="column40 style6 s style53" rowspan="4">ВСЕГО (1-11 кл)</td>
            <td class="column41 style6 s style53" rowspan="4">в т.ч. 1-4 классов</td>
            <td class="column42 style6 s style53" rowspan="4">ВСЕГО школ</td>
            <td class="column43 style6 s style53" rowspan="4">Суммарный дефицит посадочных мест во всех школах</td>
            <td class="column44 style7 s style7" colspan="2">в т.ч.</td>
            <td class="column46 style6 s style53" rowspan="4">ВСЕГО школ</td>
            <td class="column47 style6 s style53" rowspan="4">Суммарный дефицит посадочных мест во всех школах</td>
            <td class="column48 style7 s style7" colspan="2">в т.ч.</td>
            <td class="column50 style6 s style53" rowspan="4">менее 20 минут</td>
            <td class="column51 style6 s style53" rowspan="4">в т.ч. для питания детей 1-4 классов</td>
            <td class="column52 style6 s style53" rowspan="4">Всего</td>
            <td class="column53 style6 s style53" rowspan="4">в т.ч. для детей 1-4 кл</td>
            <td class="column58 style13 s style54" rowspan="4">организованно по специально разработанному меню</td>
            <td class="column59 style13 s style54" rowspan="4">приносят еду из дома</td>
            <td class="column60 style13 s style54" rowspan="4">иной вариант питания</td>
            <td class="column62 style13 s style54" rowspan="4">сахарный диабет</td>
            <td class="column63 style13 s style54" rowspan="4">пищевая аллергия</td>
            <td class="column64 style13 s style54" rowspan="4">целиакия</td>
            <td class="column65 style13 s style54" rowspan="4">фенилкетонурия</td>
            <td class="column66 style13 s style54" rowspan="4">муковисцидоз</td>
            <td class="column68 style6 s style53" rowspan="4">Всего (1-11 класс)</td>
            <td class="column69 style6 s style53" rowspan="4">в т.ч. в 1-4 классах</td>
            <td class="column70 style17 s style55" rowspan="4">Всего</td>
            <td class="column71 style15 s style16" colspan="3">Из них, оборудованных для работы на сырье</td>
            <td class="column74 style15 s style16" colspan="3">Из них, оборудованных для работы на полуфабрикатах</td>
            <td class="column77 style17 s style55" rowspan="4">Кол-во буфетов-раздаточных (раздача готовой горячей
                пищи)
            </td>
            <td class="column80 style17 s style55" rowspan="4">&nbsp;организующих питание детей самостоятельно (без
                сторонних организаций)
            </td>
            <td class="column81 style17 s style55" rowspan="4">работающих с привлечением сторонних организаций,
                осуществляющих поставку продуктов и приготовление пищи (не учитывая комбинаты питания)
            </td>
            <td class="column82 style28 null"></td>
            <td class="column83 style17 s style55" rowspan="4">Всего (операторов) питания</td>
            <td class="column84 style17 s style55" rowspan="4">в т.ч. комбинаты питания (из гр 24)</td>
            <td class="column86 style29 n style56" rowspan="4">May-21</td>
            <td class="column87 style29 n style56" rowspan="4">Sep-21</td>
            <td class="column88 style29 n style56" rowspan="4">Jan-22</td>
            <td class="column89 style29 n style56" rowspan="4">May-22</td>
            <td class="column90 style29 n style56" rowspan="4">May-21</td>
            <td class="column91 style29 n style56" rowspan="4">Sep-21</td>
            <td class="column92 style29 n style56" rowspan="4">Jan-22</td>
            <td class="column93 style29 n style56" rowspan="4">May-22</td>
            <td class="column102 style6 s style53" rowspan="4">&nbsp;нарушениями санитарного законодательства и
                законодательства в сфере технического регулирования
            </td>
            <td class="column103 style6 s style53" rowspan="4">Только с нарушениями санитарного законодательства</td>
            <td class="column104 style6 s style53" rowspan="4">Только с нарушениями законодательства в сфере
                технического регулирования
            </td>
            <td class="column107 style6 s style53" rowspan="4">Число выявленных нарушений, ВСЕГО</td>
            <td class="column108 style30 s style57" rowspan="4">&nbsp;к ведению документации (бракеражный журнал, журнал
                здоровья и т.д.)
            </td>
            <td class="column109 style30 s style57" rowspan="4">&nbsp;к сопроводительной документации</td>
            <td class="column110 style30 s style57" rowspan="4">не соответствия имеющихся продуктов (для школ)
                заявленным требованиям в конкурсной документации по показателям качества
            </td>
            <td class="column111 style31 s style32" colspan="4">в т.ч.* (все факты отражаются в пояснительной записке)
            </td>
            <td class="column115 style33 s style58" rowspan="4">к маркировке продуктов</td>
            <td class="column116 style33 s style58" rowspan="4">нарушения условий хранения пищевых продуктов (все факты
                отражаются в пояснительной записке)
            </td>
            <td class="column117 style33 s style58" rowspan="4">&nbsp;нарушения сроков годности пищевых продуктов (все
                факты отражаются в пояснительной записке)
            </td>
            <td class="column118 style33 s style58" rowspan="4">&nbsp;к условиям транспортировки (доставки) пищевых
                продуктов *
            </td>
            <td class="column119 style33 s style58" rowspan="4">&nbsp;&nbsp;к прохождению своевременных мед.осмотров
            </td>
            <td class="column120 style30 s style57" rowspan="4">количество лиц отстраненных от работы по причине не
                прохождения в регламентированные сроки М/О
            </td>
            <td class="column121 style33 s style58" rowspan="4">&nbsp;&nbsp;к прохождению гиг. обучения и воспитания
            </td>
            <td class="column122 style30 s style57" rowspan="4">количество лиц отстраненных от работы по причине не
                прохождения в регламентированные сроки гигиенического обучения
            </td>
            <td class="column123 style33 s style58" rowspan="4">занижения объемов порций</td>
            <td class="column124 style33 s style58" rowspan="4">дефицит посуды, в том числе посуда с трещинами и
                сколами
            </td>
            <td class="column125 style33 s style58" rowspan="4">нарушения технологии приготовления блюд</td>
            <td class="column126 style33 s style58" rowspan="4">нарушения в ведении бракеража готовой продукции</td>
            <td class="column127 style31 s style32" colspan="7">нарушения соблюдения режимных вопросов на пищеблоке</td>
            <td class="column134 style33 s style58" rowspan="4">исключения из меню отдельных продуктов и блюд, не
                адекватная по биологической ценности замена продуктов и блюд
            </td>
            <td class="column135 style33 s style58" rowspan="4">прочие нарушения санитарного законодательства и
                законодательства в сфере технического регулирования
            </td>
            <td class="column136 style7 s style7" colspan="36">Количество рассмотренных в ходе проверок за отчетный
                месяц фактических меню (за период не менее двух недель) для детей 1-4 классов
            </td>
            <td class="column172 style7 s style8" colspan="2" rowspan="2">Исследовано ПРОБ пищевых продуктов на
                показатели ФАЛЬСИФИКАЦИИ
            </td>
            <td class="column174 style34 s style45" colspan="2" rowspan="2">на соотвествие массы порций выдаваемых
                блюд
            </td>
            <td class="column176 style7 s style8" colspan="2" rowspan="2">Исследовано ПРОБ готовых блюд по
                микробиологическим показателям
            </td>
            <td class="column178 style7 s style8" colspan="2" rowspan="2">Исследовано ПРОБ готовых блюд на
                калорийность
            </td>
            <td class="column180 style6 s style53" rowspan="4">Снято продукции с реализации в общеобразовательных
                организациях пищевых продуктов, в <span
                        style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt">кг</span></td>
            <td class="column181 style7 s style8" colspan="2" rowspan="2">Количество школ, в которых определялась
                температура горячих блюд, <span
                        style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt">НА ЛИНИИ РАЗДАЧИ</span>
            </td>
            <td class="column183 style7 s style8" colspan="2" rowspan="2">Количество школ, в которых определялась
                температура горячих блюд, <span
                        style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt">НА СТОЛАХ У ШКОЛЬНИКОВ</span>
            </td>
            <td class="column185 style7 s style8" colspan="4">Количество исследованных ПРОБ готовых горячих блюд на
                соблюдение t выдачи
            </td>
            <td class="column189 style9 s style11" colspan="12">Исследовано проб на содержание витаминов *</td>
            <td class="column201 style9 s style11" colspan="14">Исследовано проб на содержание минералов</td>
            <td class="column239 style6 s style53" rowspan="4">вынесено решение об АПД (указать в пояснительной
                записке)
            </td>
            <td class="column240 style6 s style53" rowspan="4">вынесено решение о назначении штрафа</td>
            <td class="column241 style36 s style60" rowspan="4">об отказе в применении меры административного
                воздействия
            </td>
            <td class="column245 style36 s style60" rowspan="4">Рассмотрено</td>
            <td class="column246 style37 s style38" colspan="2">в т.ч.</td>
            <td class="column249 style6 s style53" rowspan="4">&nbsp;в течение текущего учебного года</td>
            <td class="column250 style6 s style53" rowspan="4">&nbsp;в период подготовки к новому учебному году</td>
            <td class="column251 style6 s style53" rowspan="4">&nbsp;со сроками исполнения следующий учебный год и
                далее
            </td>
            <td class="column274 style23 s style23" rowspan="4">с нарушениями санитарного законодательства и
                законодательства в сфере технического регулирования (mix)
            </td>
            <td class="column275 style23 s style23" rowspan="4">&nbsp;ТОЛЬКО с нарушениями санитарного
                законодательства
            </td>
            <td class="column276 style23 s style23" rowspan="4">&nbsp;ТОЛЬКО с нарушениями законодательства в сфере
                технического регулирования
            </td>
            <td class="column296 style21 s style21" colspan="2" rowspan="2">Всего исследованно проб пищевых продуктов по
                м/б показателям
            </td>
            <td class="column298 style21 s style21" colspan="2" rowspan="2">Всего исследованно проб по показателям
                фальсификации
            </td>
            <td class="column300 style21 s style21" colspan="2" rowspan="2">Всего исследованно проб по сан-хим.
                показателям
            </td>
            <td class="column302 style21 s style21" colspan="2" rowspan="2">Всего исследованно проб на нитраты</td>
            <td class="column304 style21 s style21" colspan="2" rowspan="2">Всего исследованно проб на пестициды</td>
            <td class="column306 style21 s style21" colspan="2" rowspan="2">Всего исследованно проб на антибиотики</td>
            <td class="column308 style21 s style21" colspan="2" rowspan="2">Всего исследованно проб на ГМО</td>
            <td class="column311 style23 s style23" rowspan="4">молоко и молочные продукты</td>
            <td class="column312 style23 s style23" rowspan="4">мясо</td>
            <td class="column313 style23 s style23" rowspan="4">рыба</td>
            <td class="column314 style39 s style61" rowspan="4">овощи</td>
            <td class="column315 style23 s style23" rowspan="4">фрукты</td>
            <td class="column316 style23 s style23" rowspan="4">иные</td>
            <td class="column319 style21 s style22" rowspan="4">на юридических лиц и ИП</td>
            <td class="column320 style21 s style22" rowspan="4">на должностных лиц</td>
            <td class="column321 style21 s style22" rowspan="4">на граждан</td>
            <td class="column323 style21 s style22" rowspan="4">постановлений о назначении наказания в виде штрафа</td>
            <td class="column325 style21 s style22" rowspan="4">на поставщиков</td>
            <td class="column326 style21 s style22" rowspan="4">на операторов питания</td>
            <td class="column327 style21 s style22" rowspan="4">на комбинаты</td>
            <td class="column330 style21 s style22" rowspan="4">вынесено решениен об АПД (указать в пояснительной
                записке объекты и причины, длительность АПД)
            </td>
            <td class="column331 style21 s style22" rowspan="4">вынесено решение о наложении штрафа</td>
            <td class="column332 style23 s style23" rowspan="4">об отказе в применении меры административного
                воздействия
            </td>
            <td class="column337 style23 s style23" rowspan="4">возбуждены уголовные дела</td>
            <td class="column338 style23 s style23" rowspan="4">отказано в возбуждении уголовного дела</td>
            <td class="column345 style21 s style22" rowspan="4">&nbsp;в течение текущего учебного года</td>
            <td class="column346 style21 s style22" rowspan="4">&nbsp;в период к 15.08.2022 (период подготовки к новому
                2022-2023 учебному году)
            </td>
            <td class="column347 style21 s style22" rowspan="4">со сроками исполнения следующий учебный год и далее</td>
            <td class="column349 style7 s style8" colspan="5">молоко, л</td>
            <td class="column354 style7 s style7" colspan="5">кисломолочная продукция, л</td>
            <td class="column359 style7 s style7" colspan="5">творог, кг</td>
            <td class="column364 style7 s style8" colspan="5">мясо, кг</td>
            <td class="column369 style7 s style8" colspan="5">рыба, кг</td>
            <td class="column374 style7 s style8" colspan="5">овощи, кг</td>
            <td class="column379 style7 s style8" colspan="5">картофель, кг</td>
            <td class="column384 style7 s style8" colspan="5">фрукты, кг</td>
            <td class="column389 style7 s style8" colspan="5">молоко, л</td>
            <td class="column394 style7 s style7" colspan="5">кисломолочная продукция, л</td>
            <td class="column399 style7 s style7" colspan="5">творог, кг</td>
            <td class="column404 style7 s style8" colspan="5">мясо, кг</td>
            <td class="column409 style7 s style8" colspan="5">рыба, кг</td>
            <td class="column414 style7 s style8" colspan="5">овощи, кг</td>
            <td class="column419 style7 s style8" colspan="5">картофель, кг</td>
            <td class="column424 style7 s style8" colspan="5">фрукты, кг</td>
            <td class="column446 style21 s style21" rowspan="4">Число школ, в которых организовано питание детей с
                пищевыми особенностями (для всех патологий)
            </td>
            <td class="column447 style21 s style21" rowspan="4">Число школ, в которых организовано питание детей с
                пищевыми особенностями (для отдельных нозологий - не для всех нуждающихся)
            </td>
            <td class="column448 style21 s style21" rowspan="4">не организовано горячее питание</td>
            <td class="column449 style25 s style25" colspan="2">в том числе</td>
            <td class="column451 style21 s style21" rowspan="4">Всего таких детей</td>
            <td class="column452 style21 s style21" colspan="2">в том числе</td>
            <td class="column454 style21 s style21" rowspan="4">из числа обучающихся очно, охваченных горячим питанием
            </td>
            <td class="column455 style21 s style21" rowspan="4">из числа обучающихся очно, кушают в школе еду,
                принесенную из дома
            </td>
            <td class="column456 style21 s style21" rowspan="4">&nbsp;из числа обучающихся очно, не кушают в школе
                вообще
            </td>
            <td class="column457 style21 s style21" colspan="6">Количество школьников 1-4 класса, не охваченных в
                общеобразовательной организации организованным горячим питанием
            </td>
        </tr>
        <tr class="table-primary font-weight-bold">
            <td class="column7 style6 s style53" rowspan="3">Всего</td>
            <td class="column8 style6 s style53" rowspan="3">&nbsp;обучающихся в 1 смену</td>
            <td class="column9 style6 s style53" rowspan="3">&nbsp;обучающихся во 2 смену</td>
            <td class="column10 style6 s style53" rowspan="3">&nbsp;обучающихся в 3 смену</td>
            <td class="column34 style6 s style53" rowspan="3">всего (1-11 кл)</td>
            <td class="column35 style6 s style53" rowspan="3">в т.ч. 1-4 кл.</td>
            <td class="column44 style6 s style53" rowspan="3">минимальное количество посадочных мест</td>
            <td class="column45 style6 s style53" rowspan="3">максимальное количество посадочных мест</td>
            <td class="column48 style6 s style53" rowspan="3">минимальное количество посадочных мест</td>
            <td class="column49 style6 s style53" rowspan="3">максимальное количество посадочных мест</td>
            <td class="column71 style17 s style55" rowspan="3">Всего</td>
            <td class="column72 style17 s style55" rowspan="3">работающих на сырье</td>
            <td class="column73 style17 s style55" rowspan="3">работающих на полуфабрикатах</td>
            <td class="column74 style17 s style55" rowspan="3">Всего</td>
            <td class="column75 style17 s style55" rowspan="3">работающих на сырье</td>
            <td class="column76 style17 s style55" rowspan="3">работающих на полуфабрикатах</td>
            <td class="column82 style17 s style55" rowspan="3">комбинаты питания (из гр. 17)</td>
            <td class="column111 style33 s style58" rowspan="3">занижение сорта</td>
            <td class="column112 style33 s style58" rowspan="3">снижение заданных показателей пищевой ценности</td>
            <td class="column113 style33 s style58" rowspan="3">снижение заданных показателей биологической ценности
            </td>
            <td class="column114 style33 s style58" rowspan="3">иные показатели качества и безопасности</td>
            <td class="column127 style33 s style58" rowspan="3">всего</td>
            <td class="column128 style43 s style59" rowspan="3">принципов поточности</td>
            <td class="column129 style43 s style59" rowspan="3">режима мытья посуды</td>
            <td class="column130 style43 s style59" rowspan="3">режима ообработки овощей</td>
            <td class="column131 style43 s style59" rowspan="3">обработки инвентаря</td>
            <td class="column132 style43 s style59" rowspan="3">уборки помещения</td>
            <td class="column133 style43 s style59" rowspan="3">иные вопросы</td>
            <td class="column136 style6 s style53" rowspan="3">всего</td>
            <td class="column137 style6 s style53" rowspan="3">из них, с нарушениями обязательных требований И
                РЕКОМЕНДАЦИЙ (всего)
            </td>
            <td class="column138 style6 s style53" rowspan="3">в т.ч. с занижением суммарной массы блюд за прием пищи
            </td>
            <td class="column139 style7 s style7" colspan="2">отсутствие</td>
            <td class="column141 style7 s style7" colspan="3">наличие</td>
            <td class="column144 style6 s style53" rowspan="3">Содержание соли в завтраки более 1 г., обеды - более 1,5
                г.
            </td>
            <td class="column145 style6 s style53" rowspan="3">Содержания сахара в прием пищи более 10 г</td>
            <td class="column146 style7 s style7" colspan="4">Среднее содержание витаминов в ЗАВТРАКИ</td>
            <td class="column150 style7 s style7" colspan="7">Среднее содержание минеральных веществ в ЗАВТРАКИ</td>
            <td class="column157 style7 s style7" colspan="4">Среднее содержание витаминов в ОБЕДЫ</td>
            <td class="column161 style7 s style7" colspan="7">Среднее содержание минеральных веществ в ОБЕДЫ</td>
            <td class="column168 style7 s style7" colspan="2">&nbsp;СУММАРНАЯ МАССА блюд ЗАВТРАКА (в день в г.на 1 реб.
                1-4 класса)
            </td>
            <td class="column170 style7 s style7" colspan="2">&nbsp;СУММАРНАЯ МАССА блюд ОБЕДА (в день в г.на 1 реб. 1-4
                класса)
            </td>
            <td class="column185 style7 s style8" colspan="2">на линии раздачи</td>
            <td class="column187 style7 s style8" colspan="2">на столе у школьников</td>
            <td class="column189 style36 s style60" rowspan="3">Всего</td>
            <td class="column190 style36 s style60" rowspan="3">из них, с занижением рассчетной ожидаемой величины</td>
            <td class="column191 style7 s style8" colspan="2">С</td>
            <td class="column193 style7 s style8" colspan="2">В1</td>
            <td class="column195 style7 s style8" colspan="2">В2</td>
            <td class="column197 style7 s style8" colspan="2">А</td>
            <td class="column199 style7 s style8" colspan="2">D</td>
            <td class="column201 style36 s style60" rowspan="3">Всего</td>
            <td class="column202 style36 s style60" rowspan="3">из них, с занижением рассчетной ожидаемой величины</td>
            <td class="column203 style7 s style8" colspan="2">кальций</td>
            <td class="column205 style7 s style8" colspan="2">фосфор</td>
            <td class="column207 style7 s style8" colspan="2">магний</td>
            <td class="column209 style7 s style8" colspan="2">железо</td>
            <td class="column211 style7 s style8" colspan="2">йод</td>
            <td class="column213 style7 s style8" colspan="2">селен</td>
            <td class="column215 style6 s style53" rowspan="3">среднее по всем группам продуктов</td>
            <td class="column216 style6 s style53" rowspan="3">мясу</td>
            <td class="column217 style6 s style53" rowspan="3">рыбе</td>
            <td class="column218 style6 s style53" rowspan="3">молоку</td>
            <td class="column219 style6 s style53" rowspan="3">творогу</td>
            <td class="column220 style6 s style53" rowspan="3">маслу сливочному</td>
            <td class="column221 style6 s style53" rowspan="3">овощам</td>
            <td class="column222 style6 s style53" rowspan="3">фруктам</td>
            <td class="column223 style6 s style53" rowspan="3">среднее по всем группам продуктов</td>
            <td class="column224 style6 s style53" rowspan="3">мясу</td>
            <td class="column225 style6 s style53" rowspan="3">рыбе</td>
            <td class="column226 style6 s style53" rowspan="3">молоку</td>
            <td class="column227 style6 s style53" rowspan="3">творогу</td>
            <td class="column228 style6 s style53" rowspan="3">маслу сливочному</td>
            <td class="column229 style6 s style53" rowspan="3">овощам</td>
            <td class="column230 style6 s style53" rowspan="3">фруктам</td>
            <td class="column246 style36 s style60" rowspan="3">возбуждены уголовные дела</td>
            <td class="column247 style36 s style60" rowspan="3">отказано в возбуждении уголовного дела</td>
            <td class="column253 style6 s style53" rowspan="3">Всего</td>
            <td class="column254 style6 s style53" rowspan="3">1-4 кл</td>
            <td class="column255 style6 s style53" rowspan="3">Всего</td>
            <td class="column256 style6 s style53" rowspan="3">только завтраки</td>
            <td class="column257 style6 s style53" rowspan="3">только обеды</td>
            <td class="column258 style6 s style53" rowspan="3">получающие 2-3 разовое питание</td>
            <td class="column259 style6 s style53" rowspan="3">Всего</td>
            <td class="column260 style6 s style53" rowspan="3">только завтраки</td>
            <td class="column261 style6 s style53" rowspan="3">только обеды</td>
            <td class="column262 style6 s style53" rowspan="3">получающие 2-3 разовое питание</td>
            <td class="column263 style6 s style53" rowspan="3">Всего (1-11 кл)</td>
            <td class="column264 style6 s style53" rowspan="3">в т.ч. 1-4 кл</td>
            <td class="column265 style6 s style53" rowspan="3">в связи с отсутствием условий для организации горячего
                питания
            </td>
            <td class="column266 style7 s style8" colspan="2">в связи с ДОМАШНИМ ОБУЧЕНИЕМ</td>
            <td class="column268 style21 s style21" rowspan="3">Поставщиков</td>
            <td class="column269 style21 s style21" rowspan="3">операторов питания</td>
            <td class="column270 style21 s style21" rowspan="3">комбинатов питания</td>
            <td class="column281 style21 s style22" rowspan="3">&nbsp;к сопроводительной документации</td>
            <td class="column282 style21 s style22" rowspan="3">не соответствие имеющихся продуктов (для школ)
                заявленным требованиям в конкурсной документации по показателям качества
            </td>
            <td class="column283 style21 s style22" colspan="4">в т.ч.* (все факты отражаются в пояснительной записке)
            </td>
            <td class="column287 style21 s style22" rowspan="3">&nbsp;&nbsp;к маркировке продуктов</td>
            <td class="column288 style21 s style22" rowspan="3">нарушения условий хранения пищевых продуктов (все факты
                отражаются в пояснительной записке)
            </td>
            <td class="column289 style21 s style22" rowspan="3">&nbsp;нарушения сроков годности пищевых продуктов (все
                факты отражаются в пояснительной записке)
            </td>
            <td class="column290 style21 s style22" rowspan="3">&nbsp;&nbsp;к условиям транспортировки (доставки)
                пищевых продуктов *
            </td>
            <td class="column291 style21 s style22" rowspan="3">&nbsp;к прохождению своевременных мед.осмотров</td>
            <td class="column292 style21 s style22" rowspan="3">количество лиц отстраненных от работы по причине не
                прохождения м/о
            </td>
            <td class="column293 style21 s style22" rowspan="3">к прохождению гиг. обучения и воспитания</td>
            <td class="column294 style21 s style22" rowspan="3">количество лиц отстраненных от работы по причине не
                прохождения в регламентированные сроки гигиенического обучения
            </td>
            <td class="column295 style23 s style23" rowspan="3">иные нарушения</td>
            <td class="column349 style6 s style53" rowspan="3">ВСЕГО</td>
            <td class="column350 style6 s style53" rowspan="3">зарубежного производства</td>
            <td class="column351 style7 s style8" colspan="3">производства РФ</td>
            <td class="column354 style6 s style53" rowspan="3">всего</td>
            <td class="column355 style6 s style53" rowspan="3">зарубежного производства</td>
            <td class="column356 style7 s style7" colspan="3">производства РФ</td>
            <td class="column359 style6 s style53" rowspan="3">всего</td>
            <td class="column360 style6 s style53" rowspan="3">зарубежного производства</td>
            <td class="column361 style7 s style7" colspan="3">производства РФ</td>
            <td class="column364 style6 s style53" rowspan="3">всего</td>
            <td class="column365 style6 s style53" rowspan="3">зарубежного производства</td>
            <td class="column366 style7 s style8" colspan="3">производства РФ</td>
            <td class="column369 style6 s style53" rowspan="3">всего</td>
            <td class="column370 style6 s style53" rowspan="3">зарубежного производства</td>
            <td class="column371 style7 s style8" colspan="3">производства РФ</td>
            <td class="column374 style6 s style53" rowspan="3">всего</td>
            <td class="column375 style6 s style53" rowspan="3">зарубежного производства</td>
            <td class="column376 style7 s style8" colspan="3">производства РФ</td>
            <td class="column379 style6 s style53" rowspan="3">всего</td>
            <td class="column380 style6 s style53" rowspan="3">зарубежного производства</td>
            <td class="column381 style7 s style8" colspan="3">производства РФ</td>
            <td class="column384 style6 s style53" rowspan="3">всего</td>
            <td class="column385 style6 s style53" rowspan="3">зарубежного производства</td>
            <td class="column386 style7 s style8" colspan="3">производства РФ</td>
            <td class="column389 style6 s style53" rowspan="3">всего</td>
            <td class="column390 style6 s style53" rowspan="3">зарубежного производства</td>
            <td class="column391 style7 s style8" colspan="3">производства РФ</td>
            <td class="column394 style6 s style53" rowspan="3">всего</td>
            <td class="column395 style6 s style53" rowspan="3">зарубежного производства</td>
            <td class="column396 style7 s style7" colspan="3">производства РФ</td>
            <td class="column399 style6 s style53" rowspan="3">всего</td>
            <td class="column400 style6 s style53" rowspan="3">зарубежного производства</td>
            <td class="column401 style7 s style7" colspan="3">производства РФ</td>
            <td class="column404 style6 s style53" rowspan="3">всего</td>
            <td class="column405 style6 s style53" rowspan="3">зарубежного производства</td>
            <td class="column406 style7 s style8" colspan="3">производства РФ</td>
            <td class="column409 style6 s style53" rowspan="3">всего</td>
            <td class="column410 style6 s style53" rowspan="3">зарубежного производства</td>
            <td class="column411 style7 s style8" colspan="3">производства РФ</td>
            <td class="column414 style6 s style53" rowspan="3">всего</td>
            <td class="column415 style6 s style53" rowspan="3">зарубежного производства</td>
            <td class="column416 style7 s style8" colspan="3">производства РФ</td>
            <td class="column419 style6 s style53" rowspan="3">всего</td>
            <td class="column420 style6 s style53" rowspan="3">зарубежного производства</td>
            <td class="column421 style7 s style8" colspan="3">производства РФ</td>
            <td class="column424 style6 s style53" rowspan="3">всего</td>
            <td class="column425 style6 s style53" rowspan="3">зарубежного производства</td>
            <td class="column426 style7 s style8" colspan="3">производства РФ</td>
            <td class="column434 style7 s style7" rowspan="3">РАССМОТРЕНО</td>
            <td class="column435 style7 s style7" rowspan="3">число подтвержденных обращений</td>
            <td class="column436 style7 s style7" rowspan="3">в том числе, удалось решить проблему, отраженную в
                жалобе
            </td>
            <td class="column437 style7 s style7" rowspan="3">проблема в стадии решения</td>
            <td class="column438 style7 s style7" rowspan="3">проблема не может быть решена</td>
            <td class="column443 style7 s style7" rowspan="3">по завтракам</td>
            <td class="column444 style7 s style7" rowspan="3">по обедам</td>
            <td class="column449 style21 s style21" rowspan="3">Число школ, в которых созданы условия для питания едой,
                приносимой из дома (из гр.5)
            </td>
            <td class="column450 style21 s style21" rowspan="3">Число школ, в которых питание детей с пищевыми
                особенностями не организовано и не созданы условия (из гр.5)
            </td>
            <td class="column452 style23 s style23" rowspan="3">на домашнем обучении</td>
            <td class="column453 style23 s style23" rowspan="3">охвачены очной формой обучения</td>
            <td class="column457 style21 s style21" rowspan="3">ВСЕГО</td>
            <td class="column458 style23 s style23" colspan="5">в том числе</td>
        </tr>
        <tr class="table-primary font-weight-bold">
            <td class="column139 style6 s style53" rowspan="2">свежих фруктов</td>
            <td class="column140 style6 s style53" rowspan="2">свежих овощей</td>
            <td class="column141 style6 s style53" rowspan="2">конд. и выпечных изделий</td>
            <td class="column142 style6 s style53" rowspan="2">колбасных изделий</td>
            <td class="column143 style6 s style53" rowspan="2">консервированных огурцов и помидоров, используемых для
                закусок
            </td>
            <td class="column146 style6 s style53" rowspan="2">С (мг)</td>
            <td class="column147 style6 s style53" rowspan="2">В1 (мг)</td>
            <td class="column148 style6 s style53" rowspan="2">В2 (мг)</td>
            <td class="column149 style6 s style53" rowspan="2">А (мкг рэ)</td>
            <td class="column150 style6 s style53" rowspan="2">кальций (мг)</td>
            <td class="column151 style6 s style53" rowspan="2">фосфор (мг)</td>
            <td class="column152 style6 s style53" rowspan="2">железо (мг)</td>
            <td class="column153 style6 s style53" rowspan="2">магний (мг)</td>
            <td class="column154 style6 s style53" rowspan="2">калий (мг)</td>
            <td class="column155 style6 s style53" rowspan="2">селен (мг)</td>
            <td class="column156 style6 s style53" rowspan="2">йод (мг)</td>
            <td class="column157 style6 s style53" rowspan="2">С (мг)</td>
            <td class="column158 style6 s style53" rowspan="2">В1 (мг)</td>
            <td class="column159 style6 s style53" rowspan="2">В2 (мг)</td>
            <td class="column160 style6 s style53" rowspan="2">А (мкг рэ)</td>
            <td class="column161 style6 s style53" rowspan="2">кальций (мг)</td>
            <td class="column162 style6 s style53" rowspan="2">фосфор (мг)</td>
            <td class="column163 style6 s style53" rowspan="2">железо (мг)</td>
            <td class="column164 style6 s style53" rowspan="2">магний (мг)</td>
            <td class="column165 style6 s style53" rowspan="2">калий (мг)</td>
            <td class="column166 style6 s style53" rowspan="2">селен (мг)</td>
            <td class="column167 style6 s style53" rowspan="2">йод (мг)</td>
            <td class="column168 style6 s style53" rowspan="2">средняя</td>
            <td class="column169 style6 s style53" rowspan="2">минимальная</td>
            <td class="column170 style6 s style53" rowspan="2">средняя</td>
            <td class="column171 style6 s style53" rowspan="2">минимальная</td>
            <td class="column172 style6 s style53" rowspan="2">всего</td>
            <td class="column173 style6 s style53" rowspan="2">из них не соответсвует требованиям</td>
            <td class="column174 style6 s style53" rowspan="2">всего</td>
            <td class="column175 style6 s style53" rowspan="2">из них ЗАНИЖЕНА масса</td>
            <td class="column176 style6 s style53" rowspan="2">всего</td>
            <td class="column177 style6 s style53" rowspan="2">из них не соответсвует требованиям</td>
            <td class="column178 style6 s style53" rowspan="2">всего</td>
            <td class="column179 style6 s style53" rowspan="2">из них не соответсвует требованиям</td>
            <td class="column181 style6 s style53" rowspan="2">всего</td>
            <td class="column182 style6 s style53" rowspan="2">в т.ч. с заниженной t</td>
            <td class="column183 style6 s style53" rowspan="2">всего</td>
            <td class="column184 style6 s style53" rowspan="2">в т.ч. с заниженной t</td>
            <td class="column185 style6 s style53" rowspan="2">всего</td>
            <td class="column186 style6 s style53" rowspan="2">в т.ч. с заниженной t</td>
            <td class="column187 style6 s style53" rowspan="2">всего</td>
            <td class="column188 style6 s style53" rowspan="2">в т.ч. с заниженной t</td>
            <td class="column191 style6 s style53" rowspan="2">всего</td>
            <td class="column192 style6 s style53" rowspan="2">ниже расчетной величины</td>
            <td class="column193 style6 s style53" rowspan="2">всего</td>
            <td class="column194 style6 s style53" rowspan="2">ниже расчетной величины</td>
            <td class="column195 style6 s style53" rowspan="2">всего</td>
            <td class="column196 style6 s style53" rowspan="2">ниже расчетной величины</td>
            <td class="column197 style6 s style53" rowspan="2">всего</td>
            <td class="column198 style6 s style53" rowspan="2">ниже расчетной величины</td>
            <td class="column199 style6 s style53" rowspan="2">всего</td>
            <td class="column200 style6 s style53" rowspan="2">ниже расчетной величины</td>
            <td class="column203 style6 s style53" rowspan="2">всего</td>
            <td class="column204 style6 s style53" rowspan="2">ниже расчетной величины</td>
            <td class="column205 style6 s style53" rowspan="2">всего</td>
            <td class="column206 style6 s style53" rowspan="2">ниже расчетной величины</td>
            <td class="column207 style6 s style53" rowspan="2">всего</td>
            <td class="column208 style6 s style53" rowspan="2">ниже расчетной величины</td>
            <td class="column209 style6 s style53" rowspan="2">всего</td>
            <td class="column210 style6 s style53" rowspan="2">ниже расчетной величины</td>
            <td class="column211 style6 s style53" rowspan="2">всего</td>
            <td class="column212 style6 s style53" rowspan="2">ниже расчетной величины</td>
            <td class="column213 style6 s style53" rowspan="2">всего</td>
            <td class="column214 style6 s style53" rowspan="2">ниже расчетной величины</td>
            <td class="column233 style6 s style53" rowspan="2">Всего</td>
            <td class="column234 style6 s style53" rowspan="2">из них в виде штрафа</td>
            <td class="column266 style6 s style53" rowspan="2">всего (1-11 кл)</td>
            <td class="column267 style6 s style53" rowspan="2">в т.ч. 1-4 кл.</td>
            <td class="column283 style21 s style22" rowspan="2">занижение сорта</td>
            <td class="column284 style21 s style22" rowspan="2">сниженная пищевая ценность</td>
            <td class="column285 style21 s style22" rowspan="2">сниженная биологическая ценность</td>
            <td class="column286 style21 s style22" rowspan="2">более низкий уровень показателей безопасности</td>
            <td class="column296 style21 s style21" rowspan="2">Всего</td>
            <td class="column297 style21 s style21" rowspan="2">Из них не отвечает ТР ТС</td>
            <td class="column298 style21 s style21" rowspan="2">Всего</td>
            <td class="column299 style21 s style21" rowspan="2">Из них не отвечает ТР ТС</td>
            <td class="column300 style21 s style21" rowspan="2">Всего</td>
            <td class="column301 style21 s style21" rowspan="2">Из них не отвечает ТР ТС</td>
            <td class="column302 style21 s style21" rowspan="2">Всего</td>
            <td class="column303 style21 s style21" rowspan="2">Из них не отвечает ТР ТС</td>
            <td class="column304 style21 s style21" rowspan="2">Всего</td>
            <td class="column305 style21 s style21" rowspan="2">Из них не отвечает ТР ТС</td>
            <td class="column306 style21 s style21" rowspan="2">Всего</td>
            <td class="column307 style21 s style21" rowspan="2">Из них не отвечает ТР ТС</td>
            <td class="column308 style21 s style21" rowspan="2">Всего</td>
            <td class="column309 style21 s style21" rowspan="2">Из них не отвечает ТР ТС</td>
            <td class="column340 style21 s style22" rowspan="2">ВСЕГО</td>
            <td class="column341 style49 s style50" colspan="3">в т.ч. внесенных</td>
            <td class="column351 style6 s style53" rowspan="2">всего</td>
            <td class="column352 style6 s style53" rowspan="2">в т.ч. местного</td>
            <td class="column353 style6 s style53" rowspan="2">иные регионы</td>
            <td class="column356 style6 s style53" rowspan="2">всего</td>
            <td class="column357 style6 s style53" rowspan="2">в т.ч. местного</td>
            <td class="column358 style6 s style53" rowspan="2">иные регионы</td>
            <td class="column361 style6 s style53" rowspan="2">всего</td>
            <td class="column362 style6 s style53" rowspan="2">в т.ч. местного</td>
            <td class="column363 style6 s style53" rowspan="2">иные регионы</td>
            <td class="column366 style6 s style53" rowspan="2">всего</td>
            <td class="column367 style6 s style53" rowspan="2">в т.ч. местного</td>
            <td class="column368 style6 s style53" rowspan="2">иные регионы</td>
            <td class="column371 style6 s style53" rowspan="2">всего</td>
            <td class="column372 style6 s style53" rowspan="2">в т.ч. местного</td>
            <td class="column373 style6 s style53" rowspan="2">иные регионы</td>
            <td class="column376 style6 s style53" rowspan="2">всего</td>
            <td class="column377 style6 s style53" rowspan="2">в т.ч. местного</td>
            <td class="column378 style6 s style53" rowspan="2">иные регионы</td>
            <td class="column381 style6 s style53" rowspan="2">всего</td>
            <td class="column382 style6 s style53" rowspan="2">в т.ч. местного</td>
            <td class="column383 style6 s style53" rowspan="2">иные регионы</td>
            <td class="column386 style6 s style53" rowspan="2">всего</td>
            <td class="column387 style6 s style53" rowspan="2">в т.ч. местного</td>
            <td class="column388 style6 s style53" rowspan="2">иные регионы</td>
            <td class="column391 style6 s style53" rowspan="2">всего</td>
            <td class="column392 style6 s style53" rowspan="2">в т.ч. местного</td>
            <td class="column393 style6 s style53" rowspan="2">иные регионы</td>
            <td class="column396 style6 s style53" rowspan="2">всего</td>
            <td class="column397 style6 s style53" rowspan="2">в т.ч. местного</td>
            <td class="column398 style6 s style53" rowspan="2">иные регионы</td>
            <td class="column401 style6 s style53" rowspan="2">всего</td>
            <td class="column402 style6 s style53" rowspan="2">в т.ч. местного</td>
            <td class="column403 style6 s style53" rowspan="2">иные регионы</td>
            <td class="column406 style6 s style53" rowspan="2">всего</td>
            <td class="column407 style6 s style53" rowspan="2">в т.ч. местного</td>
            <td class="column408 style6 s style53" rowspan="2">иные регионы</td>
            <td class="column411 style6 s style53" rowspan="2">всего</td>
            <td class="column412 style6 s style53" rowspan="2">в т.ч. местного</td>
            <td class="column413 style6 s style53" rowspan="2">иные регионы</td>
            <td class="column416 style6 s style53" rowspan="2">всего</td>
            <td class="column417 style6 s style53" rowspan="2">в т.ч. местного</td>
            <td class="column418 style6 s style53" rowspan="2">иные регионы</td>
            <td class="column421 style6 s style53" rowspan="2">всего</td>
            <td class="column422 style6 s style53" rowspan="2">в т.ч. местного</td>
            <td class="column423 style6 s style53" rowspan="2">иные регионы</td>
            <td class="column426 style6 s style53" rowspan="2">всего</td>
            <td class="column427 style6 s style53" rowspan="2">в т.ч. местного</td>
            <td class="column428 style6 s style53" rowspan="2">иные регионы</td>
            <td class="column458 style21 s style21" rowspan="2">с сахарным диабетом</td>
            <td class="column459 style21 s style21" rowspan="2">с целиакией</td>
            <td class="column460 style21 s style21" rowspan="2">с фенилкетонурией</td>
            <td class="column461 style21 s style21" rowspan="2">с муковисцидозом</td>
            <td class="column462 style51 s style51" rowspan="2">с пищевой аллергией</td>
        </tr>
        <tr class="table-primary font-weight-bold">
            <td class="column341 style24 s">в предыдущем учебном году</td>
            <td class="column342 style24 s">в текущем учебном году</td>
            <td class="column343 style24 s">в отчетном месяце</td>
        </tr>
        <?
        foreach ($federalDistricts as $federalDistrict):
            $resultTable1 = Table1::find()->where(['month_status' => $month_status])->andWhere(
                ['federal_district_id' => $federalDistrict['district_id'], 'region_id' => $federalDistrict['region_id']]
            )->asArray()->one();
            $resultTable2 = Table2::find()->where(['month_status' => $month_status])->andWhere(
                ['federal_district_id' => $federalDistrict['district_id'], 'region_id' => $federalDistrict['region_id']]
            )->asArray()->one();
            $resultTable3 = Table3::find()->where(['month_status' => $month_status])->andWhere(
                ['federal_district_id' => $federalDistrict['district_id'], 'region_id' => $federalDistrict['region_id']]
            )->asArray()->one();
            $resultTable4 = Table4::find()->where(['month_status' => $month_status])->andWhere(
                ['federal_district_id' => $federalDistrict['district_id'], 'region_id' => $federalDistrict['region_id']]
            )->asArray()->one();
            $resultTable5 = Table5::find()->where(['month_status' => $month_status])->andWhere(
                ['federal_district_id' => $federalDistrict['district_id'], 'region_id' => $federalDistrict['region_id']]
            )->asArray()->one();
            $resultTable6 = Table6::find()->where(['month_status' => $month_status])->andWhere(
                ['federal_district_id' => $federalDistrict['district_id'], 'region_id' => $federalDistrict['region_id']]
            )->asArray()->one();
            $resultTable7 = Table7::find()->where(['month_status' => $month_status])->andWhere(
                ['federal_district_id' => $federalDistrict['district_id'], 'region_id' => $federalDistrict['region_id']]
            )->asArray()->one();
            $resultTable8 = Table8::find()->where(['month_status' => $month_status])->andWhere(
                ['federal_district_id' => $federalDistrict['district_id'], 'region_id' => $federalDistrict['region_id']]
            )->asArray()->one();
            if (
                !empty($resultTable1) ||
                !empty($resultTable2) ||
                !empty($resultTable3) ||
                !empty($resultTable4) ||
                !empty($resultTable5) ||
                !empty($resultTable6) ||
                !empty($resultTable7) ||
                !empty($resultTable8)
            ) {
                ?>
                <?
                if ($reg == '0') { ?>
                    <tr>
                    <td><?= $num ?></td>
                    <td><?= $federalDistrict['federal'] ?></td>
                    <td><?= $federalDistrict['region'] ?></td>
                    <td><?= Yii::$app->myComponent->monthsLearningShort($month_status) ?></td>
                    <?
                }
                if (!empty($resultTable1)) {
                    for ($n = 0; $n < count($arryaTable1); $n++) { ?>
                        <?
                        if ($resultTable1[$arryaTable1[$n]] === '') {
                            $resultTable1[$arryaTable1[$n]] = 0;
                        }
                        $arrya['table1'][$arryaTable1[$n]] += $resultTable1[$arryaTable1[$n]];//cчитаем общее итого
                        $arryaRegion['table1'][$arryaTable1[$n]] += $resultTable1[$arryaTable1[$n]];//считаем итого по федеральным
                        if ($reg == '0') {
                            ?>
                            <td><?= $resultTable1[$arryaTable1[$n]] ?></td>
                            <?
                        }
                    } ?>
                    <?
                } else {
                    if ($reg == '0') {
                        for ($n = 0; $n < count($arryaTable2); $n++) { ?>
                            <td class="table-danger"> 0</td>
                            <?
                        }
                    }
                }

                if (!empty($resultTable2)) {
                    for ($n = 0; $n < count($arryaTable2); $n++) { ?>
                        <?
                        if ($resultTable2[$arryaTable2[$n]] === '') {
                            $resultTable2[$arryaTable2[$n]] = 0;
                        }
                        $arrya['table2'][$arryaTable2[$n]] += $resultTable2[$arryaTable2[$n]];
                        $arryaRegion['table2'][$arryaTable2[$n]] += $resultTable2[$arryaTable2[$n]];
                        if ($reg == '0') {
                            ?>
                            <td><?= $resultTable2[$arryaTable2[$n]] ?></td>
                            <?
                        }
                    } ?>
                    <?
                } else {
                    if ($reg == '0') {
                        for ($n = 0; $n < count($arryaTable2); $n++) { ?>
                            <td class="table-danger"> 0</td>
                            <?
                        }
                    }
                }
                if (!empty($resultTable3)) {
                    for ($n = 0; $n < count($arryaTable3); $n++) { ?>
                        <?
                        if ($resultTable3[$arryaTable3[$n]] === '') {
                            $resultTable3[$arryaTable3[$n]] = 0;
                        }
                        $arrya['table3'][$arryaTable3[$n]] += $resultTable3[$arryaTable3[$n]];
                        $arryaRegion['table3'][$arryaTable3[$n]] += $resultTable3[$arryaTable3[$n]];
                        if ($reg == '0') { ?>
                            <td><?= $resultTable3[$arryaTable3[$n]] ?></td>
                            <?
                        }
                    } ?>
                    <?
                } else {
                    if ($reg == '0') {
                        for ($n = 0; $n < count($arryaTable3); $n++) { ?>
                            <td class="table-danger"> 0</td>
                            <?
                        }
                    }
                }
                if (!empty($resultTable4)) {
                    for ($n = 0; $n < count($arryaTable4); $n++) { ?>
                        <?
                        if ($resultTable4[$arryaTable4[$n]] === '') {
                            $resultTable4[$arryaTable4[$n]] = 0;
                        }
                        $arrya['table4'][$arryaTable4[$n]] += $resultTable4[$arryaTable4[$n]];
                        $arryaRegion['table4'][$arryaTable4[$n]] += $resultTable4[$arryaTable4[$n]];
                        if ($reg == '0') {
                            ?>
                            <td><?= $resultTable4[$arryaTable4[$n]] ?></td>
                            <?
                        }
                    } ?>
                    <?
                } else {
                    if ($reg == '0') {
                        for ($n = 0; $n < count($arryaTable4); $n++) { ?>
                            <td class="table-danger"> 0</td>
                            <?
                        }
                    }
                }
                if (!empty($resultTable5)) {
                    for ($n = 0; $n < count($arryaTable5); $n++) { ?>
                        <?
                        if ($resultTable5[$arryaTable5[$n]] === '') {
                            $resultTable5[$arryaTable5[$n]] = 0;
                        }
                        $arrya['table5'][$arryaTable5[$n]] += $resultTable5[$arryaTable5[$n]];
                        $arryaRegion['table5'][$arryaTable5[$n]] += $resultTable5[$arryaTable5[$n]];
                        if ($reg == '0') { ?>
                            <td><?= $resultTable5[$arryaTable5[$n]] ?></td>
                            <?
                        }
                    } ?>
                    <?
                } else {
                    if ($reg == '0') {
                        for ($n = 0; $n < count($arryaTable5); $n++) { ?>
                            <td class="table-danger"> 0</td>
                            <?
                        }
                    }
                }
                if (!empty($resultTable6)) {
                    for ($n = 0; $n < count($arryaTable6); $n++) { ?>
                        <?
                        if ($resultTable6[$arryaTable6[$n]] === '') {
                            $resultTable6[$arryaTable6[$n]] = 0;
                        }
                        $arrya['table6'][$arryaTable6[$n]] += $resultTable6[$arryaTable6[$n]];
                        $arryaRegion['table6'][$arryaTable6[$n]] += $resultTable6[$arryaTable6[$n]];
                        if ($reg == '0') { ?>
                            <td><?= $resultTable6[$arryaTable6[$n]] ?></td>
                            <?
                        }
                    } ?>
                    <?
                } else {
                    if ($reg == '0') {
                        for ($n = 0; $n < count($arryaTable6); $n++) { ?>
                            <td class="table-danger"> 0</td>
                            <?
                        }
                    }
                }
                if (!empty($resultTable7)) {
                    for ($n = 0; $n < count($arryaTable7); $n++) { ?>
                        <?
                        if ($resultTable7[$arryaTable7[$n]] === '') {
                            $resultTable7[$arryaTable7[$n]] = 0;
                        }
                        $arrya['table7'][$arryaTable7[$n]] += $resultTable7[$arryaTable7[$n]];
                        $arryaRegion['table7'][$arryaTable7[$n]] += $resultTable7[$arryaTable7[$n]];
                        if ($reg == '0') { ?>
                            <td><?= $resultTable7[$arryaTable7[$n]] ?></td>
                            <?
                        }
                    } ?>
                    <?
                } else {
                    if ($reg == '0') {
                        for ($n = 0; $n < count($arryaTable7); $n++) { ?>
                            <td class="table-danger"> 0</td>
                            <?
                        }
                    }
                }
                if (!empty($resultTable8)) {
                    for ($n = 0; $n < count($arryaTable8); $n++) { ?>
                        <?
                        if ($resultTable8[$arryaTable8[$n]] === '') {
                            $resultTable8[$arryaTable8[$n]] = 0;
                        }
                        $arrya['table8'][$arryaTable8[$n]] += $resultTable8[$arryaTable8[$n]];
                        $arryaRegion['table8'][$arryaTable8[$n]] += $resultTable8[$arryaTable8[$n]];
                        if ($reg == '0') { ?>
                            <td><?= $resultTable8[$arryaTable8[$n]] ?></td>
                            <?
                        }
                    } ?>
                    <?
                } else {
                    if ($reg == '0') {
                        for ($n = 0; $n < count($arryaTable8); $n++) { ?>
                            <td class="table-danger"> 0</td>
                            <?
                        }
                    }
                } ?>

                </tr>
                <?
            } else {
                $str .= 'Нет данных по Федеральный округ: '.$federalDistrict['federal'].', региону: '.$federalDistrict['region'].'<br>';
            } ?>
            <?
            $num++;
        endforeach; ?>
        <tr class="table-danger text-center">
            <th colspan="4">ИТОГО</th>
            <?

            for ($n = 0; $n < count($arryaTable1); $n++) { ?>
                <th>
                    <?= $arrya['table1'][$arryaTable1[$n]] ?></th>
                <?
            } ?>
            <?

            for ($n = 0; $n < count($arryaTable2); $n++) { ?>
                <th>
                    <?= $arrya['table2'][$arryaTable2[$n]] ?></th>
                <?
            } ?>
            <?

            for ($n = 0; $n < count($arryaTable3); $n++) { ?>
                <th>
                    <?= $arrya['table3'][$arryaTable3[$n]] ?></th>
                <?
            } ?>
            <?

            for ($n = 0; $n < count($arryaTable4); $n++) { ?>
                <th>
                    <?= $arrya['table4'][$arryaTable4[$n]] ?></th>
                <?
            } ?>
            <?

            for ($n = 0; $n < count($arryaTable5); $n++) { ?>
                <th>
                    <?= $arrya['table5'][$arryaTable5[$n]] ?></th>
                <?
            } ?>
            <?

            for ($n = 0; $n < count($arryaTable6); $n++) { ?>
                <th>
                    <?= $arrya['table6'][$arryaTable6[$n]] ?></th>
                <?
            } ?>
            <?
            for ($n = 0; $n < count($arryaTable7); $n++) { ?>
                <th>
                    <?= $arrya['table7'][$arryaTable7[$n]] ?></th>
                <?
            } ?>
            <?
            for ($n = 0; $n < count($arryaTable8); $n++) { ?>
                <th>
                    <?= $arrya['table8'][$arryaTable8[$n]] ?></th>
                <?
            } ?>
        </tr>
    </table>
    <div class="container">
        <?
        if ($str !== '') { ?>
            <div class="alert alert-danger " role="alert">
                <?= $str ?>
            </div>
            <?
        } ?>

    </div>

    <?
} ?>


<?
$script = <<< JS
                              
$("#pechat222").click(function () {
var table = $('#tableId');
    if (table && table.length) {
        var preserveColors = (table.hasClass('table2excel_with_colors') ? true : false);
        $(table).table2excel({
            exclude: ".noExl",
            name: "Excel Document Name",
            filename: "Таблица №1 Общие сведения.xls",
            fileext: ".xls",
            exclude_img: true,
            exclude_links: true,
            exclude_inputs: true,
            preserveColors: preserveColors
        });
    }
});
JS;
$this->registerJs($script, yii\web\View::POS_READY);
