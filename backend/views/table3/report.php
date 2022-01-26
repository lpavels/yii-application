<?php

/* @var $this yii\web\View */

/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Отчет по "Таблица №3 Результаты проверок общеобразовательных организаций и принятых мер административного воздействия"';
$arrya['table3'] = [];
/*$arrya['table3']['wdwdwd'] += 1;
print_r($arrya);
print_r('<br><br>');
$arrya['table3']['wdwdwd'] += 2;
$arrya['table3']['wdwdwd'] += 2;
print_r($arrya);
$arrya['table3'] = [];
$arrya['table3']['wdwdwd'] = [1,2,4,5];
print_r($arrya);*/
$arrya_num = [
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
$num = 1;
$arrya2 = Yii::$app->myComponent->FederalDistrictItems();
$arrya2[100] = 'Посмотрть все';
?>

    <div class="mt-3 table1 container">
        <h5 class="text-center mb-4">Таблица №3 Результаты проверок общеобразовательных организаций и принятых мер
            административного воздействия</h5>
        <?php
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
            Yii::$app->myComponent->monthsLearning(),
            Yii::$app->myComponent->twoColumnInputSm()
        )->label('Выберите месяц') ?>
        <div class="form-group">
            <?= Html::submitButton('ПОКАЗАТЬ', ['class' => 'btn btn-primary btn-block mt-3']) ?>
        </div>

        <?php
        ActiveForm::end(); ?>

    </div>
<?
if ($models !== '') { ?>
    <input type="button" class="btn btn-warning table3excel mt-2 mb-2"
           title="Вы можете скачать в формате Excel" value="Скачать в Excel" id="pechat222">
    <table id="tableId" class="table table-bordered table-sm table3excel_with_colors">
        <tr class="table-primary font-weight-bold">
            <td rowspan="4">№</td>
            <td rowspan="4">Федеральный округ</td>
            <td rowspan="4">Регион</td>
            <td rowspan="4">Месяц</td>
            <td rowspan="4">Количество проверенных школ в текущем учебном году по вопросам питания (нарастайка 2021-2022
                учебный год)
            </td>
            <td rowspan="4">Количество проведенных проверок школ в текущем учебном году по вопросам питания (нарастайка
                2021-2022 учебный год)
            </td>
            <td rowspan="4">Количество проведенных проверок БЕЗ нарушений по вопросам питания (нарастайка 2021-2022
                учебный год)
            </td>
            <td rowspan="4">Количество проверок, проведенных с применением лабораторных методов (нарастайка 2021-2022
                учебный год)
            </td>
            <td rowspan="4">Количество рассмотренных меню в ходе проверок в 2021-2022 учебном году (нарастайка 2021-2022
                учебный год)
            </td>
            <td rowspan="4">Количество проверок, проведенных ЗА ОТЧЕТНЫЙ МЕСЯЦ</td>
            <td rowspan="4">Количество проверок, проведенных ЗА ОТЧЕТНЫЙ МЕСЯЦ без нарушений</td>
            <td rowspan="4">Количество проверок, проведенных ЗА ОТЧЕТНЫЙ МЕСЯЦ с нарушениями санитарного
                законодательства и законодательства в сфере технического регулирования
            </td>
            <td colspan="3">из них</td>
            <td rowspan="4">Количество проверок, проведенных с применением лабораторных методов за отчетный месяц</td>
            <td rowspan="4">Количество проверок, проведенных БЕЗ применения лабораторных методов за отчетный месяц</td>
            <td colspan="29">Выявленные нарушения санитарного законодательства и законодательства в сфере технического
                регулирования в ходе проведения проверок, ПРОВЕДЕННЫХ ЗА ОТЧЕТНЫЙ МЕСЯЦ -ПО ЗАВЕРШЕННЫМ В ОТЧЕТНОМ
                МЕСЯЦЕ ПРОВЕРКАМ)
            </td>
            <td colspan="36">Результаты оценки ДОКУМЕНТОВ ПО ПИТАНИЮ ШКОЛЬНИКОВ, ПРОВЕРЕННЫХ В ХОДЕ ПРОВЕРОК проведенных
                за отчетный месяц (меню, технологические карты, меню-раскладки, накопительная ведомость) - ПО
                ЗАВЕРШЕННЫМ В ОТЧЕТНОМ МЕСЯЦЕ ПРОВЕРКАМ
            </td>
            <td colspan="43">Результаты лабораторного контроля - по итогам проверок за отчетный месяц</td>
            <td colspan="8" rowspan="2">Процентное несоответствие фактического рациона примерному меню (невыполнение
                норм питания), по итогам проверок, проведенных за отчетный месяц (%) по следующим группам продуктов -
                УКАЗЫВАЮТСЯ средние значения
            </td>
            <td colspan="8" rowspan="2">Процентное несоответствие фактического рациона примерному меню (невыполнение
                норм питания), по итогам проверок, проведенных за отчетный месяц (%) по следующим группам продуктов -
                УКАЗЫВАЮТСЯ максимальные значения
            </td>
            <td rowspan="4">Количество составленных протоколов в ходе проверок - ВСЕГО</td>
            <td rowspan="4">Количество вынесенных временных запретов деятельности (указать в пояснительной записке)</td>
            <td colspan="2" rowspan="3">Кол-во вынесенных постановлений о назначении административного наказания</td>
            <td rowspan="4">Сумма штрафов - ВСЕГО (в тыс. руб.)</td>
            <td rowspan="4">Число дел, направленных на рассмотрение в суды</td>
            <td rowspan="4">Из них, на АПД</td>
            <td rowspan="4">рассмотрено судами</td>
            <td colspan="3">в т.ч.</td>
            <td rowspan="4">Находятся на рассмотрении в судах</td>
            <td rowspan="4">ОТКАЗАНО судами в рассмотрении</td>
            <td rowspan="4">Число дел переданных в правоохранительные органы для возбуждения уголовных дел</td>
            <td colspan="3">из них</td>
            <td rowspan="4">Количество общеобразовательных организаций в отношении которых по результатам проверок были
                составлены предписания
            </td>
            <td colspan="3">в т.ч. со сроками исполнения</td>
            <td rowspan="4">Количество нарушений устраненных в ходе проверок</td>
            <td colspan="2" rowspan="2">Количество обучающихся в проверенных общеобразовательных организациях</td>
            <td colspan="4" rowspan="2">Кол-во детей, получающих горячее питание (ВСЕ ДЕТИ: 1-11 класс)</td>
            <td colspan="4" rowspan="2">В том числе, кол-во детей 1-4 классов, получающих горячее питание</td>
            <td colspan="5" rowspan="2">Число детей, не питающихся в школьной столовой</td>
        </tr>
        <tr class="table-primary font-weight-bold">
            <td class="column8 style23 s style23" rowspan="3">&nbsp;нарушениями санитарного законодательства и
                законодательства в сфере технического регулирования
            </td>
            <td class="column9 style11 s style11" rowspan="3">Только с нарушениями санитарного законодательства</td>
            <td class="column10 style11 s style11" rowspan="3">Только с нарушениями законодательства в сфере
                технического регулирования
            </td>
            <td class="column13 style11 s style12" rowspan="3">Число выявленных нарушений, ВСЕГО</td>
            <td class="column14 style24 s style40" rowspan="3">&nbsp;к ведению документации (бракеражный журнал, журнал
                здоровья и т.д.)
            </td>
            <td class="column15 style24 s style40" rowspan="3">&nbsp;к сопроводительной документации</td>
            <td class="column16 style24 s style40" rowspan="3">не соответствия имеющихся продуктов (для школ) заявленным
                требованиям в конкурсной документации по показателям качества
            </td>
            <td class="column17 style25 s style26" colspan="4">в т.ч.* (все факты отражаются в пояснительной записке)
            </td>
            <td class="column21 style25 s style26" rowspan="3">к маркировке продуктов</td>
            <td class="column22 style25 s style26" rowspan="3">нарушения условий хранения пищевых продуктов (все факты
                отражаются в пояснительной записке)
            </td>
            <td class="column23 style25 s style26" rowspan="3">&nbsp;нарушения сроков годности пищевых продуктов (все
                факты отражаются в пояснительной записке)
            </td>
            <td class="column24 style25 s style26" rowspan="3">&nbsp;к условиям транспортировки (доставки) пищевых
                продуктов *
            </td>
            <td class="column25 style25 s style26" rowspan="3">&nbsp;&nbsp;к прохождению своевременных мед.осмотров</td>
            <td class="column26 style24 s style40" rowspan="3">количество лиц отстраненных от работы по причине не
                прохождения в регламентированные сроки М/О
            </td>
            <td class="column27 style25 s style26" rowspan="3">&nbsp;&nbsp;к прохождению гиг. обучения и воспитания</td>
            <td class="column28 style24 s style40" rowspan="3">количество лиц отстраненных от работы по причине не
                прохождения в регламентированные сроки гигиенического обучения
            </td>
            <td class="column29 style25 s style26" rowspan="3">занижения объемов порций</td>
            <td class="column30 style27 s style51" rowspan="3">дефицит посуды, в том числе посуда с трещинами и
                сколами
            </td>
            <td class="column31 style25 s style26" rowspan="3">нарушения технологии приготовления блюд</td>
            <td class="column32 style25 s style26" rowspan="3">нарушения в ведении бракеража готовой продукции</td>
            <td class="column33 style25 s style26" colspan="7">нарушения соблюдения режимных вопросов на пищеблоке</td>
            <td class="column40 style25 s style26" rowspan="3">исключения из меню отдельных продуктов и блюд, не
                адекватная по биологической ценности замена продуктов и блюд
            </td>
            <td class="column41 style25 s style26" rowspan="3">прочие нарушения санитарного законодательства и
                законодательства в сфере технического регулирования
            </td>
            <td class="column42 style5 s style5" colspan="36">Количество рассмотренных в ходе проверок за отчетный месяц
                фактических меню (за период не менее двух недель) для детей 1-4 классов
            </td>
            <td class="column78 style5 s style6" colspan="2" rowspan="2">Исследовано ПРОБ пищевых продуктов на
                показатели ФАЛЬСИФИКАЦИИ
            </td>
            <td class="column80 style28 s style44" colspan="2" rowspan="2">на соотвествие массы порций выдаваемых блюд
            </td>
            <td class="column82 style5 s style6" colspan="2" rowspan="2">Исследовано ПРОБ готовых блюд по
                микробиологическим показателям
            </td>
            <td class="column84 style5 s style6" colspan="2" rowspan="2">Исследовано ПРОБ готовых блюд на калорийность
            </td>
            <td class="column86 style5 s style6" rowspan="3">Снято продукции с реализации в общеобразовательных
                организациях пищевых продуктов, в <span
                        style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt">кг</span></td>
            <td class="column87 style5 s style6" colspan="2" rowspan="2">Количество школ, в которых определялась
                температура горячих блюд, <span
                        style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt">НА ЛИНИИ РАЗДАЧИ</span>
            </td>
            <td class="column89 style5 s style6" colspan="2" rowspan="2">Количество школ, в которых определялась
                температура горячих блюд, <span
                        style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt">НА СТОЛАХ У ШКОЛЬНИКОВ</span>
            </td>
            <td class="column91 style5 s style6" colspan="4">Количество исследованных ПРОБ готовых горячих блюд на
                соблюдение t выдачи
            </td>
            <td class="column95 style8 s style9" colspan="12">Исследовано проб на содержание витаминов *</td>
            <td class="column107 style31 s style33" colspan="14">Исследовано проб на содержание минералов</td>
            <td class="column145 style11 s style12" rowspan="3">вынесено решение об АПД (указать в пояснительной
                записке)
            </td>
            <td class="column146 style11 s style12" rowspan="3">вынесено решение о назначении штрафа</td>
            <td class="column147 style34 s style53" rowspan="3">об отказе в применении меры административного
                воздействия
            </td>
            <td class="column151 style35 s style56" rowspan="3">Рассмотрено</td>
            <td class="column152 style36 s style37" colspan="2">в т.ч.</td>
            <td class="column155 style11 s style12" rowspan="3">&nbsp;в течение текущего учебного года</td>
            <td class="column156 style11 s style12" rowspan="3">&nbsp;в период подготовки к новому учебному году</td>
            <td class="column157 style11 s style12" rowspan="3">&nbsp;со сроками исполнения следующий учебный год и
                далее
            </td>
        </tr>
        <tr class="table-primary font-weight-bold">
            <td class="column17 style25 s style26" rowspan="2">занижение сорта</td>
            <td class="column18 style25 s style26" rowspan="2">снижение заданных показателей пищевой ценности</td>
            <td class="column19 style25 s style26" rowspan="2">снижение заданных показателей биологической ценности</td>
            <td class="column20 style25 s style26" rowspan="2">иные показатели качества и безопасности</td>
            <td class="column33 style25 s style26" rowspan="2">всего</td>
            <td class="column34 style42 s style52" rowspan="2">принципов поточности</td>
            <td class="column35 style42 s style52" rowspan="2">режима мытья посуды</td>
            <td class="column36 style42 s style52" rowspan="2">режима ообработки овощей</td>
            <td class="column37 style42 s style52" rowspan="2">обработки инвентаря</td>
            <td class="column38 style42 s style52" rowspan="2">уборки помещения</td>
            <td class="column39 style42 s style52" rowspan="2">иные вопросы</td>
            <td class="column42 style5 s style6" rowspan="2">всего</td>
            <td class="column43 style5 s style5" rowspan="2">из них, с нарушениями обязательных требований И
                РЕКОМЕНДАЦИЙ (всего)
            </td>
            <td class="column44 style5 s style5" rowspan="2">в т.ч. с занижением суммарной массы блюд за прием пищи</td>
            <td class="column45 style5 s style5" colspan="2">отсутствие</td>
            <td class="column47 style5 s style5" colspan="3">наличие</td>
            <td class="column50 style5 s style5" rowspan="2">Содержание соли в завтраки более 1 г., обеды - более 1,5
                г.
            </td>
            <td class="column51 style5 s style5" rowspan="2">Содержания сахара в прием пищи более 10 г</td>
            <td class="column52 style5 s style5" colspan="4">Среднее содержание витаминов в ЗАВТРАКИ</td>
            <td class="column56 style5 s style5" colspan="7">Среднее содержание минеральных веществ в ЗАВТРАКИ</td>
            <td class="column63 style5 s style5" colspan="4">Среднее содержание витаминов в ОБЕДЫ</td>
            <td class="column67 style5 s style5" colspan="7">Среднее содержание минеральных веществ в ОБЕДЫ</td>
            <td class="column74 style5 s style5" colspan="2">&nbsp;СУММАРНАЯ МАССА блюд ЗАВТРАКА (в день в г.на 1 реб.
                1-4 класса)
            </td>
            <td class="column76 style5 s style5" colspan="2">&nbsp;СУММАРНАЯ МАССА блюд ОБЕДА (в день в г.на 1 реб. 1-4
                класса)
            </td>
            <td class="column91 style5 s style6" colspan="2">на линии раздачи</td>
            <td class="column93 style5 s style6" colspan="2">на столе у школьников</td>
            <td class="column95 style34 s style53" rowspan="2">Всего</td>
            <td class="column96 style34 s style53" rowspan="2">из них, с занижением рассчетной ожидаемой величины</td>
            <td class="column97 style5 s style6" colspan="2">С</td>
            <td class="column99 style5 s style6" colspan="2">В1</td>
            <td class="column101 style5 s style6" colspan="2">В2</td>
            <td class="column103 style5 s style6" colspan="2">А</td>
            <td class="column105 style5 s style6" colspan="2">D</td>
            <td class="column107 style45 s style54" rowspan="2">Всего</td>
            <td class="column108 style45 s style54" rowspan="2">из них, с занижением рассчетной ожидаемой величины</td>
            <td class="column109 style46 s style47" colspan="2">кальций</td>
            <td class="column111 style46 s style47" colspan="2">фосфор</td>
            <td class="column113 style46 s style47" colspan="2">магний</td>
            <td class="column115 style46 s style47" colspan="2">железо</td>
            <td class="column117 style46 s style47" colspan="2">йод</td>
            <td class="column119 style46 s style47" colspan="2">селен</td>
            <td class="column121 style5 s style6" rowspan="2">среднее по всем группам продуктов</td>
            <td class="column122 style5 s style6" rowspan="2">мясу</td>
            <td class="column123 style5 s style6" rowspan="2">рыбе</td>
            <td class="column124 style5 s style6" rowspan="2">молоку</td>
            <td class="column125 style5 s style6" rowspan="2">творогу</td>
            <td class="column126 style5 s style6" rowspan="2">маслу сливочному</td>
            <td class="column127 style5 s style6" rowspan="2">овощам</td>
            <td class="column128 style5 s style6" rowspan="2">фруктам</td>
            <td class="column129 style5 s style6" rowspan="2">среднее по всем группам продуктов</td>
            <td class="column130 style5 s style6" rowspan="2">мясу</td>
            <td class="column131 style5 s style6" rowspan="2">рыбе</td>
            <td class="column132 style5 s style6" rowspan="2">молоку</td>
            <td class="column133 style5 s style6" rowspan="2">творогу</td>
            <td class="column134 style5 s style6" rowspan="2">маслу сливочному</td>
            <td class="column135 style5 s style6" rowspan="2">овощам</td>
            <td class="column136 style5 s style6" rowspan="2">фруктам</td>
            <td class="column152 style35 s style56" rowspan="2">возбуждены уголовные дела</td>
            <td class="column153 style35 s style56" rowspan="2">отказано в возбуждении уголовного дела</td>
            <td class="column159 style5 s style6" rowspan="2">Всего</td>
            <td class="column160 style5 s style6" rowspan="2">1-4 кл</td>
            <td class="column161 style5 s style6" rowspan="2">Всего</td>
            <td class="column162 style5 s style6" rowspan="2">только завтраки</td>
            <td class="column163 style5 s style6" rowspan="2">только обеды</td>
            <td class="column164 style5 s style6" rowspan="2">получающие 2-3 разовое питание</td>
            <td class="column165 style5 s style6" rowspan="2">Всего</td>
            <td class="column166 style5 s style6" rowspan="2">только завтраки</td>
            <td class="column167 style5 s style6" rowspan="2">только обеды</td>
            <td class="column168 style5 s style6" rowspan="2">получающие 2-3 разовое питание</td>
            <td class="column169 style5 s style5" rowspan="2">Всего (1-11 кл)</td>
            <td class="column170 style5 s style5" rowspan="2">в т.ч. 1-4 кл</td>
            <td class="column171 style7 s style4" rowspan="2">в связи с отсутствием условий для организации горячего
                питания
            </td>
            <td class="column172 style5 s style6" colspan="2">в связи с ДОМАШНИМ ОБУЧЕНИЕМ</td>
        </tr>
        <tr class="table-primary font-weight-bold">
            <td class="column45 style2 s">свежих фруктов</td>
            <td class="column46 style2 s">свежих овощей</td>
            <td class="column47 style2 s">конд. и выпечных изделий</td>
            <td class="column48 style2 s">колбасных изделий</td>
            <td class="column49 style2 s">консервированных огурцов и помидоров, используемых для закусок</td>
            <td class="column52 style1 s">С (мг)</td>
            <td class="column53 style1 s">В1 (мг)</td>
            <td class="column54 style1 s">В2 (мг)</td>
            <td class="column55 style1 s">А (мкг рэ)</td>
            <td class="column56 style1 s">кальций (мг)</td>
            <td class="column57 style1 s">фосфор (мг)</td>
            <td class="column58 style1 s">железо (мг)</td>
            <td class="column59 style1 s">магний (мг)</td>
            <td class="column60 style1 s">калий (мг)</td>
            <td class="column61 style1 s">селен (мг)</td>
            <td class="column62 style1 s">йод (мг)</td>
            <td class="column63 style1 s">С (мг)</td>
            <td class="column64 style1 s">В1 (мг)</td>
            <td class="column65 style1 s">В2 (мг)</td>
            <td class="column66 style1 s">А (мкг рэ)</td>
            <td class="column67 style1 s">кальций (мг)</td>
            <td class="column68 style1 s">фосфор (мг)</td>
            <td class="column69 style1 s">железо (мг)</td>
            <td class="column70 style1 s">магний (мг)</td>
            <td class="column71 style1 s">калий (мг)</td>
            <td class="column72 style1 s">селен (мг)</td>
            <td class="column73 style1 s">йод (мг)</td>
            <td class="column74 style1 s">средняя</td>
            <td class="column75 style1 s">минимальная</td>
            <td class="column76 style1 s">средняя</td>
            <td class="column77 style1 s">минимальная</td>
            <td class="column78 style1 s">всего</td>
            <td class="column79 style1 s">из них не соответсвует требованиям</td>
            <td class="column80 style1 s">всего</td>
            <td class="column81 style1 s">из них ЗАНИЖЕНА масса</td>
            <td class="column82 style1 s">всего</td>
            <td class="column83 style1 s">из них не соответсвует требованиям</td>
            <td class="column84 style1 s">всего</td>
            <td class="column85 style1 s">из них не соответсвует требованиям</td>
            <td class="column87 style1 s">всего</td>
            <td class="column88 style1 s">в т.ч. с заниженной t</td>
            <td class="column89 style1 s">всего</td>
            <td class="column90 style1 s">в т.ч. с заниженной t</td>
            <td class="column91 style1 s">всего</td>
            <td class="column92 style1 s">в т.ч. с заниженной t</td>
            <td class="column93 style1 s">всего</td>
            <td class="column94 style1 s">в т.ч. с заниженной t</td>
            <td class="column97 style1 s">всего</td>
            <td class="column98 style1 s">ниже расчетной величины</td>
            <td class="column99 style1 s">всего</td>
            <td class="column100 style1 s">ниже расчетной величины</td>
            <td class="column101 style1 s">всего</td>
            <td class="column102 style1 s">ниже расчетной величины</td>
            <td class="column103 style1 s">всего</td>
            <td class="column104 style1 s">ниже расчетной величины</td>
            <td class="column105 style1 s">всего</td>
            <td class="column106 style1 s">ниже расчетной величины</td>
            <td class="column109 style1 s">всего</td>
            <td class="column110 style1 s">ниже расчетной величины</td>
            <td class="column111 style1 s">всего</td>
            <td class="column112 style1 s">ниже расчетной величины</td>
            <td class="column113 style1 s">всего</td>
            <td class="column114 style1 s">ниже расчетной величины</td>
            <td class="column115 style1 s">всего</td>
            <td class="column116 style1 s">ниже расчетной величины</td>
            <td class="column117 style1 s">всего</td>
            <td class="column118 style1 s">ниже расчетной величины</td>
            <td class="column119 style1 s">всего</td>
            <td class="column120 style1 s">ниже расчетной величины</td>
            <td class="column139 style55 s">Всего</td>
            <td class="column140 style55 s">из них в виде штрафа</td>
            <td class="column172 style1 s">всего (1-11 кл)</td>
            <td class="column173 style1 s">в т.ч. 1-4 кл.</td>
        </tr>
        <?
        foreach ($models as $model_one): ?>
            <?
            if ($reg == '0') { ?>
                <tr>
                <td><?= $num ?></td>
                <td><?= Yii::$app->myComponent->get_federal_name($model_one['federal_district_id']) ?></td>
                <td><?= Yii::$app->myComponent->get_region_name($model_one['region_id']) ?></td>
                <td><?= Yii::$app->myComponent->monthsLearningShort($model_one['month_status']) ?></td>
                <?
            }
            for ($n = 0; $n < count($arrya_num); $n++) { ?>
                <?
                if ($model_one[$arrya_num[$n]] === '') {
                    $model_one[$arrya_num[$n]] = 0;
                }
                $arrya['table3'][$arrya_num[$n]] += $model_one[$arrya_num[$n]];
                //$arryaRegion
                if ($reg == '0') {
                    ?>
                    <td><?= $model_one[$arrya_num[$n]] ?></td>
                    <?
                }
                ?>
                <?
            } ?>
            <?
            if ($reg == '0') { ?>
                </tr>
                <?
            }
            $num++;endforeach; ?>
        <tr class="table-danger text-center">
            <th colspan="4">ИТОГО</th>
            <?
            for ($n = 0; $n < count($arrya_num); $n++) { ?>
                <th>
                    <?= $arrya['table3'][$arrya_num[$n]] ?></th>
                <?
            } ?>
        </tr>
    </table>
    <?
} ?>

<?
$script = <<< JS
                              
    $("#pechat222").click(function () {
    var table = $('#tableId');
        if (table && table.length) {
            var preserveColors = (table.hasClass('table3excel_with_colors') ? true : false);
            $(table).table3excel({
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
