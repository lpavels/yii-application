<?php

use common\models\Municipality;
use common\models\User;
use common\models\FederalDistrict;
use common\models\Region;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use common\models\Organization;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-report-form container"><h5 align="center">Анкета детей и родителей обучающихся</h5>
    <?php
    $form = ActiveForm::begin();
    $two_column = ['options' => ['class' => 'row mt-3'], 'labelOptions' => ['class' => 'col-4 col-form-label font-weight-bold']];
    $year_item['2022'] = '2022';

    $federal_district = FederalDistrict::find()->all();
    $federal_district_item = ArrayHelper::map($federal_district, 'id', 'name');

    if (Yii::$app->user->can('rospotrebnadzor'))
    {
        $flat_feet_items_info = Organization::find()->select(['federal_district_id', 'region_id'])->where(['id' => Yii::$app->user->identity->organization_id])->one();
        $federal_district = FederalDistrict::find()->where(['id' => $flat_feet_items_info['federal_district_id']])->all();
        $region = Region::find()->where(['id' => $flat_feet_items_info['region_id']])->all();
        $federal_district_item = ArrayHelper::map($federal_district, 'id', 'name');
        $region_item = ArrayHelper::map($region, 'id', 'name');
        echo $form->field($model, 'federal_district_id', $two_column)->dropDownList($federal_district_item,
            [
                'options' => [$federal_district_and_region['federal_district_id'] => ['Selected' => true]],
                'class' => 'form-control col-8'
            ])->label('Федеральный округ');
        echo $form->field($model, 'region_id', $two_column)->dropDownList($region_item, ['options' => [$federal_district_and_region['region_id'] => ['Selected' => true]], 'class' => 'form-control col-8'])->label('Субъект Федерации');;
    }

    echo $form->field($model, 'created_at', $two_column)->dropDownList($year_item, ['options' => ['2021' => ['Selected' => true]], 'class' => 'form-control col-8'])->label('Год');;

    ?>
    <div class="form-group row">
        <?= Html::submitButton('Показать', ['class' => 'btn btn-success main-color form-control col-12 mt-3']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
<? if (!empty($post))
{
    if (Yii::$app->user->can('rospotrebnadzor'))
    {
        ?>
        <div class="table-responsive">
            <table class="table table-bordered table-sm">
                <thead>
                <tr>
                    <th colspan="17" class="th">Анкета организаторов (операторов) питания</th>
                </tr>
                <tr>
                    <th rowspan="2" class="th">№</th>
                    <th rowspan="2" class="th">Федеральный округ</th>
                    <th rowspan="2" class="th">Субъект Федерации</th>
                    <th rowspan="2" class="th">Муниципальное образование</th>
                    <th rowspan="2" class="th">Наименование организации</th>
                    <th rowspan="1" colspan="4" class="th">Планируемая информация</th>
                    <th rowspan="1" colspan="4" class="th">Фактическая информация</th>
                    <th rowspan="1" colspan="4" class="th">% завершивших от плана</th>
                </tr>
                <tr>
                    <th class="th">9-10 лет</th>
                    <th class="th">13-14 лет</th>
                    <th class="th">15-16 лет</th>
                    <th class="th">Итого</th>
                    <th class="th">9-10 лет</th>
                    <th class="th">13-14 лет</th>
                    <th class="th">15-16 лет</th>
                    <th class="th">Итого</th>
                    <th class="th">9-10 лет</th>
                    <th class="th">13-14 лет</th>
                    <th class="th">15-16 лет</th>
                    <th class="th">Итого</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Сибирский</td>
                    <td>Новосибирская область</td>
                    <td>г. Новосибирск</td>
                    <td>МБОУ Гимназия №1</td>
                    <td>23</td>
                    <td>25</td>
                    <td>20</td>
                    <td>68</td>
                    <td class="main-color-3">20</td>
                    <td class="main-color-3">23</td>
                    <td>20</td>
                    <td>63</td>
                    <td class="main-color-3">86.96</td>
                    <td class="main-color-3">92.00</td>
                    <td>100.00</td>
                    <td>95.65</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Сибирский</td>
                    <td>Новосибирская область</td>
                    <td>г. Новосибирск</td>
                    <td>МБОУ Гимназия №2</td>
                    <td>33</td>
                    <td>35</td>
                    <td>30</td>
                    <td>98</td>
                    <td class="main-color-6">0</td>
                    <td class="main-color-3">11</td>
                    <td class="main-color-3">10</td>
                    <td>21</td>
                    <td class="main-color-6">0.00</td>
                    <td class="main-color-3">31.43</td>
                    <td class="main-color-3">33.33</td>
                    <td>21.43</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Сибирский</td>
                    <td>Новосибирская область</td>
                    <td>г. Новосибирск</td>
                    <td>МБОУ Гимназия №4</td>
                    <td>30</td>
                    <td>33</td>
                    <td>34</td>
                    <td>97</td>
                    <td>30</td>
                    <td class="main-color-6">0</td>
                    <td>34</td>
                    <td>64</td>
                    <td>100.00</td>
                    <td class="main-color-6">0.00</td>
                    <td>100.00</td>
                    <td>65.98</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Сибирский</td>
                    <td>Новосибирская область</td>
                    <td>Тогучинский район</td>
                    <td>МБОУ Горновская СШ</td>
                    <td>35</td>
                    <td>35</td>
                    <td>35</td>
                    <td>105</td>
                    <td>35</td>
                    <td>35</td>
                    <td>35</td>
                    <td>105</td>
                    <td>100.00</td>
                    <td>100.00</td>
                    <td>100.00</td>
                    <td>100.00</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Сибирский</td>
                    <td>Новосибирская область</td>
                    <td>Черепановский район</td>
                    <td>МКОУ СОШ №2 г. Черепанова</td>
                    <td>35</td>
                    <td>35</td>
                    <td>35</td>
                    <td>105</td>
                    <td>35</td>
                    <td>35</td>
                    <td>35</td>
                    <td>105</td>
                    <td>100.00</td>
                    <td>100.00</td>
                    <td>100.00</td>
                    <td>100.00</td>
                </tr>
                <tr>
                    <td class="main-color-7" colspan="1">Итого</td>
                    <td class="main-color-7" colspan="3">Сибирский</td>
                    <td class="main-color-7">5</td>
                    <td class="main-color-7">156</td>
                    <td class="main-color-7">163</td>
                    <td class="main-color-7">154</td>
                    <td class="main-color-7">473</td>
                    <td class="main-color-3">120</td>
                    <td class="main-color-3">104</td>
                    <td class="main-color-3">134</td>
                    <td class="main-color-3">358</td>
                    <td class="main-color-3">76.92</td>
                    <td class="main-color-3">63.80</td>
                    <td class="main-color-3">87.01</td>
                    <td class="main-color-3">76.69</td>
                </tr>
                </tbody>
            </table>
        </div>
    <?
    }

    if (Yii::$app->user->can('director_school'))
    {
        ?>
        <div class="table-responsive">
            <table class="table table-bordered table-sm">
                <thead>
                <tr>
                    <th colspan="17" class="th">Анкета организаторов (операторов) питания</th>
                </tr>
                <tr>
                    <th rowspan="2" class="th">№</th>
                    <th rowspan="2" class="th">Федеральный округ</th>
                    <th rowspan="2" class="th">Субъект Федерации</th>
                    <th rowspan="2" class="th">Муниципальное образование</th>
                    <th rowspan="2" class="th">Наименование организации</th>
                    <th rowspan="1" colspan="4" class="th">Планируемая информация</th>
                    <th rowspan="1" colspan="4" class="th">Фактическая информация</th>
                    <th rowspan="1" colspan="4" class="th">% завершивших от плана</th>
                </tr>
                <tr>
                    <th class="th">9-10 лет</th>
                    <th class="th">13-14 лет</th>
                    <th class="th">15-16 лет</th>
                    <th class="th">Итого</th>
                    <th class="th">9-10 лет</th>
                    <th class="th">13-14 лет</th>
                    <th class="th">15-16 лет</th>
                    <th class="th">Итого</th>
                    <th class="th">9-10 лет</th>
                    <th class="th">13-14 лет</th>
                    <th class="th">15-16 лет</th>
                    <th class="th">Итого</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Сибирский</td>
                    <td>Новосибирская область</td>
                    <td>г. Новосибирск</td>
                    <td>МБОУ Гимназия №1</td>
                    <td>23</td>
                    <td>25</td>
                    <td>20</td>
                    <td>68</td>
                    <td class="main-color-3">20</td>
                    <td class="main-color-3">23</td>
                    <td>20</td>
                    <td>63</td>
                    <td class="main-color-3">86.96</td>
                    <td class="main-color-3">92.00</td>
                    <td>100.00</td>
                    <td>95.65</td>
                </tr>
                <tr>
                    <td class="main-color-7" colspan="1">Итого</td>
                    <td class="main-color-7">Сибирский</td>
                    <td class="main-color-7">Новосибирская область</td>
                    <td class="main-color-7">г. Новосибирск</td>
                    <td class="main-color-7">МБОУ Гимназия №1</td>
                    <td class="main-color-7">23</td>
                    <td class="main-color-7">25</td>
                    <td class="main-color-7">20</td>
                    <td class="main-color-7">68</td>
                    <td class="main-color-3">20</td>
                    <td class="main-color-3">23</td>
                    <td class="main-color-3">20</td>
                    <td class="main-color-7">63</td>
                    <td class="main-color-3">86.96</td>
                    <td class="main-color-3">92.00</td>
                    <td class="main-color-7">100.00</td>
                    <td class="main-color-7">95.65</td>
                </tr>
                </tbody>
            </table>
        </div>
        <?
    }


}
?>



