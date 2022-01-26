<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Director */

$this->title = 'АНКЕТА ДЛЯ ОЦЕНКИ ОРГАНИЗАЦИИ ПИТАНИЯ ОБУЧАЮЩИХСЯ В ОБЩЕОБРАЗОВАТЕЛЬНЫХ ОРГАНИЗАЦИЯХ';
$this->params['breadcrumbs'][] = ['label' => 'Анкета', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="director-create container">

    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
    <h5 class="text-center text-danger"><i>(опрос детей и родителей обучающихся в общеобразовательных организациях
            проводится с целью улучшения организации питания; вся полученная информация будет использоваться для анализа
            и оценки исключительно в обобщенном виде)</i></h5>

    <?php
    $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'federal_district_id')->dropDownList($district_items, [
        //'prompt' => 'Выберите федеральный округ ...',
        'options' => [1 => ['Selected' => true]],
        //'class' => 'form-control col-4',
        //'options' => [$post['federal_district_id'] => ['Selected' => true]],
        'onchange' => '
            $.get("../deti/region-list?id="+$(this).val(), function(data){
                $("select#deti-region_id").html(data);
            });
            $.get("../deti/municipality-list?id=0", function(data){
                $("select#deti-municipality_id").html(data);
            });
        ',
    ]); ?>

    <?= $form->field($model, 'region_id')->dropDownList($region_items, [
        //'prompt' => 'Выберите регион ...',
        'options' => [1 => ['Selected' => true]],
        //'class' => 'form-control col-4',
        'onchange' => '
            $.get("../deti/municipality-list?id="+$(this).val(), function(data){
                $("select#deti-municipality_id").html(data);
            });
        ',
    ]); ?>

    <?= $form->field($model, 'municipality_id')->dropDownList($municipality_items, [
        //'prompt' => 'Выберите муниципальное образование...',
        'options' => [1565 => ['Selected' => true]],
        //'class' => 'form-control col-4',
        'onchange' => '
            $.get("../deti/organization-list?id="+$(this).val(), function(data){
                $("select#deti-organization_id").html(data);
            });'
    ]); ?>
    <?= $form->field($model, 'organization_id')->dropDownList($org_items, [
        //'prompt' => 'Выберите Вашу организацию ...',
    ]) ?>
    <?= $form->field($model, 'field1_2')->textInput()?>
    <?
    $items = [
        '1'=>'9-10 лет',
        '2'=>'13-14 лет',
        '3'=>'15-17 лет',
    ]
    ?>
    <?= $form->field($model, 'field1_3')->dropdownList($items)?>
    <?
    $items = [
        '1'=>'1',
        '2'=>'2',
        '3'=>'3',
        '4'=>'4',
        '5'=>'5',
        '6'=>'6',
        '7'=>'7',
        '8'=>'8',
        '9'=>'9',
        '10'=>'10',
        '11'=>'11',
    ]
    ?>
    <?= $form->field($model, 'field1_4')->dropdownList($items)?>
    <?= $form->field($model, 'field1_6')->textInput(['type'=>'date'])?>
    <?
    $items = [
        '6'=>'6',
        '7'=>'7',
        '8'=>'8',
        '9'=>'9',
        '10'=>'10',
        '11'=>'11',
        '12'=>'12',
        '13'=>'13',
        '14'=>'14',
        '15'=>'15',
        '16'=>'16',
        '17'=>'17',
    ]
    ?>
    <?= $form->field($model, 'field1_7')->dropdownList($items)?>
    <?
    $items = [
        'м'=>'м',
        'ж'=>'ж',
    ]
    ?>
    <?= $form->field($model, 'field1_8')->dropdownList($items)?>
    <?
    $items = [
        'полная (два родителя)'=>'полная (два родителя)',
        'неполная (один родитель или воспитывает опекун)'=>'неполная (один родитель или воспитывает опекун)',
    ]
    ?>
    <?= $form->field($model, 'field1_9')->dropdownList($items)?>
    <?
    $items = [
        'неполное среднее'=>'неполное среднее',
        'среднее'=>'среднее',
        'среднее профессиональное'=>'среднее профессиональное',
        'высшее'=>'высшее',
    ]
    ?>
    <?= $form->field($model, 'field1_10')->dropdownList($items)?>
    <?
    $items = [
        'неполное среднее'=>'неполное среднее',
        'среднее'=>'среднее',
        'среднее профессиональное'=>'среднее профессиональное',
        'высшее'=>'высшее',
    ]
    ?>
    <?= $form->field($model, 'field1_11')->dropdownList($items)?>
    <?
    $items = [
        'низкий'=>'низкий',
        'средний'=>'средний',
        'высокий'=>'высокий',
    ]
    ?>
    <?= $form->field($model, 'field1_12')->dropdownList($items)?>
    <?
    $items = [
        'первая'=>'первая',
        'вторая'=>'вторая',
        'третья'=>'третья',
    ]
    ?>
    <?= $form->field($model, 'field1_13')->dropdownList($items)?>
    <?
    $items = [
        '3'=>'3',
        '4'=>'4',
        '5'=>'5',
        '6'=>'6',
        '7'=>'7',
        '8'=>'8',
        '9'=>'9',
    ]
    ?>
    <?= $form->field($model, 'field1_14')->dropdownList($items)?>
    <?
    $items = [
        '1'=>'да',
        '0'=>'нет',
    ]
    ?>
    <?= $form->field($model, 'field1_15')->dropdownList($items)?>
    <?
    $items = [
        '1'=>'да',
        '0'=>'нет',
    ]
    ?>
    <?= $form->field($model, 'field1_16')->dropdownList($items)?>
    <?= $form->field($model, 'field1_17')->textInput(['type'=>'number','min' => 20, 'max' => 200])?>
    <?= $form->field($model, 'field1_18')->textInput(['type'=>'number','min' => 20, 'max' => 150])?>
    <?= $form->field($model, 'field1_19')->textInput(['type'=>'number','min' => 80, 'max' => 250])?>
    <?= $form->field($model, 'field1_20')->textInput(['type'=>'number','min' => 50, 'max' => 150])?>
    <?= $form->field($model, 'field1_21')->textInput(['type'=>'number','min' => 80, 'max' => 250])?>
    <?= $form->field($model, 'field1_22')->textInput(['type'=>'number','min' => 80, 'max' => 250])?>

    <?=
    $this->render(
        '/deti-table-20/create',
        [
            'model' => $DetiTable20,
            'form' => $form,
        ]
    ); ?>
    <?=
    $this->render(
        '/deti-table-24/create',
        [
            'model' => $DetiTable24,
            'form' => $form,
        ]
    ); ?>
    <?=
    $this->render(
        '/deti-table-25/create',
        [
            'model' => $DetiTable25,
            'form' => $form,
        ]
    ); ?>
    <?=
    $this->render(
        '/deti-table-26/create',
        [
            'model' => $DetiTable26,
            'form' => $form,
        ]
    ); ?>
    <?=
    $this->render(
        '/deti-table-28/create',
        [
            'model' => $DetiTable28,
            'form' => $form,
        ]
    ); ?>
    <?=
    $this->render(
        '/deti-table-30/create',
        [
            'model' => $DetiTable30,
            'form' => $form,
        ]
    ); ?>
    <?=
    $this->render(
        '/deti-table-32/create',
        [
            'model' => $DetiTable32,
            'form' => $form,
        ]
    ); ?>
    <?=
    $this->render(
        '/deti-table-33/create',
        [
            'model' => $DetiTable33,
            'form' => $form,
        ]
    ); ?>
    <?=
    $this->render(
        '/deti-table-37/create',
        [
            'model' => $DetiTable37,
            'form' => $form,
        ]
    ); ?>
    <?=
    $this->render(
        '/deti-table-38/create',
        [
            'model' => $DetiTable38,
            'form' => $form,
        ]
    ); ?>
    <?=
    $this->render(
        '/deti-table-39/create',
        [
            'model' => $DetiTable39,
            'form' => $form,
        ]
    ); ?>
    <?=
    $this->render(
        '/deti-table-40/create',
        [
            'model' => $DetiTable40,
            'form' => $form,
        ]
    ); ?>
    <?=
    $this->render(
        '/deti-table-43/create',
        [
            'model' => $DetiTable43,
            'form' => $form,
        ]
    ); ?>
    <?=
    $this->render(
        '/deti-table-44/create',
        [
            'model' => $DetiTable44,
            'form' => $form,
        ]
    ); ?>
    <div class="form-group">
        <?= Html::submitButton(
            'Сохранить',
            ['class' => 'btn btn-outline-primary mt-3 px-5 radius-30 btn-block']
        ) ?>
    </div>
    <?php
    ActiveForm::end(); ?>
</div>

<?php
$js = <<< JS

     var field_field20_1 = $('#detitable20-field20_1');
     field_field20_1.on('change', function () {
        if (field_field20_1.val() !== "1" ) {
            $('.table20').hide();
        }
        else{
            $('.table20').show();
        }
     });
     field_field20_1.trigger('change');

     var field_field24_1 = $('#detitable24-field24_1');
     field_field24_1.on('change', function () {
        if (field_field24_1.val() !== "1" ) {
            $('.table24').hide();
        }
        else{
            $('.table24').show();
        }
     });
     field_field24_1.trigger('change');

     var field_field25 = $('#detitable25-field25');
     field_field25.on('change', function () {
        if (field_field25.val() !== "1" ) {
            $('.table25').hide();
        }
        else{
            $('.table25').show();
        }
     });
     field_field25.trigger('change');

     var field_field26 = $('#detitable26-field26');
     field_field26.on('change', function () {
        if (field_field26.val() !== "1" ) {
            $('.table26').hide();
        }
        else{
            $('.table26').show();
        }
     });
     field_field26.trigger('change');

     var field_field28 = $('#detitable28-field28');
     field_field28.on('change', function () {
        if (field_field28.val() !== "1" ) {
            $('.table28').hide();
        }
        else{
            $('.table28').show();
        }
     });
     field_field28.trigger('change');

     var field_field30 = $('#detitable30-field30');
     field_field30.on('change', function () {
        if (field_field30.val() !== "1" ) {
            $('.table30').hide();
        }
        else{
            $('.table30').show();
        }
     });
     field_field30.trigger('change');

     var field_field32 = $('#detitable32-field32_1');
     field_field32.on('change', function () {
        if (field_field32.val() !== "1" ) {
            $('.table32').hide();
        }
        else{
            $('.table32').show();
        }
     });
     field_field32.trigger('change');

     var field_field37 = $('#detitable37-field37');
     field_field37.on('change', function () {
        if (field_field37.val() !== "1" ) {
            $('.table37').hide();
        }
        else{
            $('.table37').show();
        }
     });
     field_field37.trigger('change');

     var field_field38 = $('#detitable38-field38_1');
     field_field38.on('change', function () {
        if (field_field38.val() !== "1" ) {
            $('.table38').hide();
        }
        else{
            $('.table38').show();
        }
     });
     field_field38.trigger('change');

     var field_field43 = $('#detitable43-field43');
     field_field43.on('change', function () {
        if (field_field43.val() !== "1" ) {
            $('.table43').hide();
        }
        else{
            $('.table43').show();
        }
     });
     field_field43.trigger('change');

JS;
$this->registerJs($js, \yii\web\View::POS_READY);