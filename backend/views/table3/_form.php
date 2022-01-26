<?php

/* @var $this yii\web\View */

/* @var $model common\models\Table3 */
/* @var $form yii\widgets\ActiveForm */
$items = [
    'да' => '1',
    'нет' => '0',
];
$items3 = [
    'м' => '1',
    'ж' => '0',
];
$items2 = [
    '1' => '1',
    '2' => '2',
    '3' => '3',
    '4' => '4',
    '5' => '5',
    '6' => '6',
    '7' => '7',
    '8' => '8',
    '9' => '9',
    '10' => '10',
    '11' => '11',
];
?>

<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->textInput(
    Yii::$app->myComponent->twoColumnInputSm()
)->label('2. Имя и первая буква фамилии ребенка.') ?>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->textInput(
    Yii::$app->myComponent->twoColumnInputSm()
)->label('3. Школа (выбор из введенного справочника).') ?>

<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items2,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('4. Класс.') ?>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->textInput(
    Yii::$app->myComponent->twoColumnInputSm()
)->label('6. Дата рождения ребенка.') ?>

<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items3,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('8.Пол ребенка ') ?>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->textInput(
    Yii::$app->myComponent->twoColumnInputSm()
)->label('9. Состав семьи ') ?>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->textInput(
    Yii::$app->myComponent->twoColumnInputSm()
)->label('10. Образование мамы ') ?>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->textInput(
    Yii::$app->myComponent->twoColumnInputSm()
)->label('11. Образование папы  ') ?>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->textInput(
    Yii::$app->myComponent->twoColumnInputSm()
)->label('12. Оцените уровень доходов Вашей семьи') ?>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->textInput(
    Yii::$app->myComponent->twoColumnInputSm()
)->label('13. В какую смену учится Ваш ребенок') ?>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->textInput(
    Yii::$app->myComponent->twoColumnInputSm()
)->label('14.	Сколько времени ребенок в среднем находится в школе в часах ') ?>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('15.	Посещает ли ребенок группу продленного дня?') ?>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('16.	Посещает ли ребенок кружок или спортивную секцию в школе? ') ?>
17.    Антропометрические данные ребенка: длина тела в см ____; масса тела в кг ____; ИМТ (рассчитывается автоматически и визуализируется).
<br>
18.    Антропометрические данные матери: длина тела в см ____; масса тела в кг ____; ИМТ (рассчитывается автоматически и визуализируется). ВОПРОС ОБЯЗАТЕЛЬНЫЙ – если в п. 9 выбрана полная семья, если не полная, то не обязательный.
<br>
19.    Антропометрические данные отца: длина тела в см ____; масса тела в кг ____; ИМТ (рассчитывается автоматически и визуализируется). ВОПРОС ОБЯЗАТЕЛЬНЫЙ – если в п. 9 выбрана полная семья, если не полная, то не обязательный.
<br>

<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('20. Имеются ли у ребенка хронические заболевания?') ?>
<table class="table table-bordered table-sm">
    <tr>
        <td>№</td>
        <td>Показатели</td>
        <td>Да/нет</td>
    </tr>
    <tr>
        <td>20.1</td>
        <td>Болезни сердечно-сосудистой системы</td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>20.2</td>
        <td>Болезни нервной системы</td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>20.3</td>
        <td>Нарушения осанки</td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>20.4</td>
        <td>Нарушения зрения</td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>20.5</td>
        <td>Болезни щитовидной железы</td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>20.6</td>
        <td>Заболевания органов пищеварения</td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>20.7</td>
        <td>Анемии</td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>20.8</td>
        <td>Ожирение</td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>20.9</td>
        <td>Сахарный диабет</td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>20.10</td>
        <td>Пищевая аллергия</td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>20.11</td>
        <td>Целиакия</td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>20.12</td>
        <td>Муковисцидоз</td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>20.13</td>
        <td>Фенилкетонурия</td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
</table>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->textInput(
    Yii::$app->myComponent->twoColumnInputSm()
)->label('21.	Как часто Ваш ребенок болел простудными заболеваниями в прошлом году? ') ?>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->textInput(
    Yii::$app->myComponent->twoColumnInputSm()
)->label('22.	Знакомы ли Вы с принципами здорового питания? ') ?>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('23.	Придерживаетесь ли Вы в домашнем питании принципов здорового питания?') ?>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('24.	Справедливы ли для Вашей семьи следующие подходы к организации питания дома? ') ?>
<table class="table table-bordered table-sm">
    <tr>
        <td>№</td>
        <td>Показатели</td>
        <td>Да/нет</td>
    </tr>
    <tr>
        <td>24.1</td>
        <td>Овощные блюда (не включая картофельные) используются в 2-х и более приемах пищи ежедневно (овощные супы,
            салаты, гарниры и др.)
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>24.2</td>
        <td>Фрукты ежедневно присутствуют в рационе питания членов семьи в количестве не менее 250-300 г. (средний вес
            яблока, груши, апельсина – 120-130 г)
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>24.3</td>
        <td>При выборе хлеба и хлебобулочных изделий, отдается приоритет продуктам из муки грубого помола, с
            присутствием цельных злаков, отрубей
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>24.4</td>
        <td>Блюда из рыбы присутствуют в рационе еженедельно</td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>24.5</td>
        <td>Ежедневно в питании используются 2-3 молочных продукта (включая молочные блюда и напитки)</td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
</table>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('25.	Откуда Вы получаете информацию о здоровом питании? ') ?>
<table class="table table-bordered table-sm">
    <tr>
        <td>№</td>
        <td>Показатели</td>
        <td>Да/нет</td>
    </tr>
    <tr>
        <td>25.1</td>
        <td>От медицинских работников
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>25.2</td>
        <td>Телевидение
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>25.3</td>
        <td>Интернет-ресурсы
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>25.4</td>
        <td>Печатные издания
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>25.5</td>
        <td>Родственники, знакомые
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
</table>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('26.	Сколько раз в день Ваш ребенок принимает пищу в выходные?  ') ?>
<table class="table table-bordered table-sm">
    <tr>
        <td>№</td>
        <td>Показатели</td>
        <td>Да/нет</td>
    </tr>
    <tr>
        <td>26.1</td>
        <td>один
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>26.2</td>
        <td>два
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>26.3</td>
        <td>три
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>26.4</td>
        <td>четыре
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>26.5</td>
        <td>Пять и более раз
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
</table>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('27.	Ребенок завтракает (обедает) перед уходом в школу? ') ?>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('28.	Сколько раз в день Ваш ребенок принимает пищу в учебные дни, включая питание в школе? ') ?>
<table class="table table-bordered table-sm">
    <tr>
        <td>№</td>
        <td>Показатели</td>
        <td>Да/нет</td>
    </tr>
    <tr>
        <td>28.1</td>
        <td>один
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>28.2</td>
        <td>два
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>28.3</td>
        <td>три
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>28.4</td>
        <td>четыре
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>28.5</td>
        <td>Пять и более раз
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
</table>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('29.	Охвачен ли ребенок организованным питанием в школе? ') ?>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('30.	Получает ли ребенок в школе дополнительное питание ') ?>
<table class="table table-bordered table-sm">
    <tr>
        <td>№</td>
        <td>Показатели</td>
        <td>Да/нет</td>
    </tr>
    <tr>
        <td>30.1</td>
        <td>комплексный обед
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>30.2</td>
        <td>первые блюда
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>30.3</td>
        <td>салаты
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>30.4</td>
        <td>бутерброды
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>30.5</td>
        <td>гарниры
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>30.6</td>
        <td>основные (мясные и рыбные) блюда
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>30.7</td>
        <td>сосиски, сардельки
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>30.8</td>
        <td>выпечные изделия (собственного и промышленного изготовления)
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>30.9</td>
        <td>кондитерские изделия (промышленного изготовления)
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>30.10</td>
        <td>горячие напитки
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>30.11</td>
        <td>холодные напитки
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>30.12</td>
        <td>фрукты
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>30.13</td>
        <td>продукция из вендингового аппарата (автомата)
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
</table>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('31.	Установлен ли в школе вендинговый аппарат для дополнительного питания обучающихся? ') ?>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('32.	Какую продукцию предпочитает приобретать ребенок в вендинговом аппарате?') ?>
<table class="table table-bordered table-sm">
    <tr>
        <td>№</td>
        <td>Какую продукцию предпочитает приобретать ребенок в вендинговом аппарате?</td>
        <td>Да/нет</td>
    </tr>
    <tr>
        <td>32.1</td>
        <td>Соки
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>32.2</td>
        <td>Молоко и кисломолочная продукция
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>32.3</td>
        <td>Кондитерские изделия промышленного изготовления, включая шоколад, печенье, вафли и пряники
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>32.4</td>
        <td>Фруктово-злаковые батончики
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>32.5</td>
        <td>Иная продукция
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
</table>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('34.	Полностью ли ребенок съедает предложенные меню порции?  ') ?>
<table class="table table-bordered table-sm">
    <tr>
        <td>№</td>
        <td>Где Ваш ребенок обедает?</td>
        <td>Да/нет</td>
    </tr>
    <tr>
        <td>33.1</td>
        <td>дома
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>33.2</td>
        <td>в школе кушает блюда, приготовленные в столовой
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>33.3</td>
        <td>в школе кушает еду принесенную из дома
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>33.4</td>
        <td>не обедает
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
</table>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('35.	Хватает ли ребенку размеров порций? ') ?>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('36.	Считаете ли Вы перемену достаточной по продолжительности для приема пищи? ') ?>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('37.	Нравится ли ребенку обстановка в школьной столовой? ') ?>
<table class="table table-bordered table-sm">
    <tr>
        <td>№</td>
        <td>Что не нравится в школьной столовой</td>
        <td>Да/нет</td>
    </tr>
    <tr>
        <td>37.1</td>
        <td>грязно
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>37.2</td>
        <td>много детей и мало места
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>37.3</td>
        <td>приходится долго ждать чтобы получить еду
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>37.4</td>
        <td>еда часто бывает остывшей
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>37.5</td>
        <td>еда не вкусная
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>37.6</td>
        <td>не нравится сервировка столов
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>37.7</td>
        <td>в столовой часто неприятно пахнет
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>37.8</td>
        <td>не хватает времени
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>37.9</td>
        <td>не хватает посуды
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
</table>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('38.	Принимает ли ребенок витаминно-минеральные комплексы ') ?>
<table class="table table-bordered table-sm">
    <tr>
        <td>№</td>
        <td>Как ребенок принимает витаминно-минеральные комплексы</td>
        <td>Да/нет</td>
    </tr>
    <tr>
        <td>38.1</td>
        <td>постоянно
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>38.2</td>
        <td>2-3 раза в полгода курсами
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>38.3</td>
        <td>1-2 раза в год курсами.
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
</table>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('39.	Оцените уровень двигательной активности ребенка (с учетом занятий физической культурой, спортом, танцами, активных игр) – выбор одного варианта ответа.') ?>
<table class="table table-bordered table-sm">
    <tr>
        <td>№</td>
        <td>Оцените уровень двигательной активности ребенка</td>
        <td>Да/нет</td>
    </tr>
    <tr>
        <td>39.1</td>
        <td>Спортом, танцами, физической культурой не занимается
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>39.2</td>
        <td>Ежедневная организованная двигательная активность (спорт, танцы) и неорганизованная двигательная активность (активные игры, иные виды двигательной активности) составляет МЕНЕЕ 2 Ч. - ежедневно
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>39.3</td>
        <td>Ежедневная организованная двигательная активность (спорт, танцы) и неорганизованная двигательная активность (активные игры, иные виды двигательной активности) составляет НЕ МЕНЕЕ 2 Ч. - ежедневно
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
</table>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('39.	Оцените уровень двигательной активности ребенка (с учетом занятий физической культурой, спортом, танцами, активных игр) – выбор одного варианта ответа.') ?>
<table class="table table-bordered table-sm">
    <tr>
        <td>№</td>
        <td>Оцените уровень двигательной активности ребенка</td>
        <td>Да/нет</td>
    </tr>
    <tr>
        <td>39.1</td>
        <td>Спортом, танцами, физической культурой не занимается
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>39.2</td>
        <td>Ежедневная организованная двигательная активность (спорт, танцы) и неорганизованная двигательная активность (активные игры, иные виды двигательной активности) составляет МЕНЕЕ 2 Ч. - ежедневно
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>39.3</td>
        <td>Ежедневная организованная двигательная активность (спорт, танцы) и неорганизованная двигательная активность (активные игры, иные виды двигательной активности) составляет НЕ МЕНЕЕ 2 Ч. - ежедневно
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
</table>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('40.	Как часто ребенок в домашнем питании употребляет основные группы пищевых продуктов (нужно заполнить таблицу по группам продуктов и выбрать следующие варианты ответов: не употребляю, ем каждый день; не менее 3 раз в неделю, 1-2 раза в неделю, не менее 1 раза в месяц, реже 1 раза в месяц).') ?>
<table class="table table-bordered table-sm">
    <tr>
        <td>№</td>
        <td>Оцените уровень двигательной активности ребенка</td>
        <td>Да/нет</td>
    </tr>
    <tr>
        <td>40.1</td>
        <td>каши
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.2</td>
        <td>макаронные изделия
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.3</td>
        <td>мясо
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.4</td>
        <td>птица
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.5</td>
        <td>рыба
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.6</td>
        <td>колбаса, сосиски, сардельки
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.7</td>
        <td>творог
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.8</td>
        <td>яйца
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.9</td>
        <td>овощи вареные
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.10</td>
        <td>овощи сырые
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.11</td>
        <td>картофель
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.12</td>
        <td>зелень
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.13</td>
        <td>фаст-фуд (гамбургеры, пицца и т.п)
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.14</td>
        <td>выпечные изделия
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.15</td>
        <td>конфеты, шоколад
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.16</td>
        <td>кондитерские изделия – торты, пирожные, пряники, печенье, вафли (за исключением конфет и шоколада)
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.17</td>
        <td>майонез
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.18</td>
        <td>кетчуп
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.19</td>
        <td>сладкие творожные сырочки
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.20</td>
        <td>соки
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.21</td>
        <td>Компоты и кисели
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.22</td>
        <td>сладкие газированные напитки
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.23</td>
        <td>молоко
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.24</td>
        <td>кисломолочная продукция
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.25</td>
        <td>чай
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.26</td>
        <td>кофе
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>40.27</td>
        <td>какао
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
</table>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('41.	Добавляет ли ребенок сахар в чай ? ') ?>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('42.	Досаливает ли ребенок пищу? ') ?>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('43.	Перекусывает ли ребенок вне дома и школы? ') ?>
<table class="table table-bordered table-sm">
    <tr>
        <td>№</td>
        <td>Оцените уровень двигательной активности ребенка</td>
        <td>Да/нет</td>
    </tr>
    <tr>
        <td>43.1</td>
        <td>Фаст-фуд
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>43.2</td>
        <td>Чипсы
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>43.3</td>
        <td>Шоколад, конфеты
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>43.4</td>
        <td>Пирожные
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>43.5</td>
        <td>Булочки, пироги
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>43.6</td>
        <td>Пряники, печенье
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>43.7</td>
        <td>Зефир, мармелад
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>43.8</td>
        <td>Мороженое
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>43.9</td>
        <td>Соки, нектары
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>43.10</td>
        <td>Вода питьевая бутилированная
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>43.11</td>
        <td>Сладкие газированные напитки
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
</table>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
    $items,
    Yii::$app->myComponent->twoColumnInputSm()
)->label('44.Оценка ребенком организации питания в общеобразовательной организации и дома  ') ?>
<table class="table table-bordered table-sm">
    <tr>
        <td>№</td>
        <td>Оценка питания</td>
        <td>В школе</td>
        <td>дома</td>
    </tr>
    <tr>
        <td>44.1</td>
        <td>отлично
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>44.2</td>
        <td>хорошо
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>44.3</td>
        <td>удовлетворительно
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
    <tr>
        <td>44.4</td>
        <td>не удовлетворительно
        </td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
        <td><?= $form->field($model, 'field1')->dropdownList($items)->label(false) ?></td>
    </tr>
</table>
<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->textarea(
    Yii::$app->myComponent->twoColumnInputSm()
)->label('45. Предложения по улучшению питания в школе:') ?>

<?= $form->field($model, 'field1', Yii::$app->myComponent->twoColumnNameSm(''))->textarea(
    Yii::$app->myComponent->twoColumnInputSm()
)->label('46.	Предложения по улучшению питания дома:') ?>
