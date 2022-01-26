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

<div class="users-report-form container"><h5 align="center">Анкета руководителей образовательных организаций</h5>
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
                <th colspan="8" class="th">Анкета руководителей образовательных организаций</th>
            </tr>
            <tr>
                <th class="th">№</th>
                <th class="th">Федеральный округ</th>
                <th class="th">Субъект Федерации</th>
                <th class="th">Муниципальное образование</th>
                <th class="th">Наименование организации</th>
                <th class="th">Планируемая информация</th>
                <th class="th">Фактическая информация</th>
                <th class="th">% завершивших от плана</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Сибирский</td>
                <td>Новосибирская область</td>
                <td>г. Новосибирск</td>
                <td>МБОУ Гимназия №1</td>
                <td>Да</td>
                <td>Да</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Сибирский</td>
                <td>Новосибирская область</td>
                <td>г. Новосибирск</td>
                <td>МБОУ Гимназия №2</td>
                <td>Да</td>
                <td class="main-color-3">Нет</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Сибирский</td>
                <td>Новосибирская область</td>
                <td>г. Новосибирск</td>
                <td>МБОУ Гимназия №4</td>
                <td>Да</td>
                <td>Да</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Сибирский</td>
                <td>Новосибирская область</td>
                <td>Тогучинский район</td>
                <td>МБОУ Горновская СШ</td>
                <td>Да</td>
                <td>Да</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Сибирский</td>
                <td>Новосибирская область</td>
                <td>Черепановский район</td>
                <td>МКОУ СОШ №2 г. Черепанова</td>
                <td>Да</td>
                <td class="main-color-3">Нет</td>
            </tr>
            <tr>
                <td class="main-color-7" colspan="1">Итого</td>
                <td class="main-color-7" colspan="4">Сибирский</td>
                <td class="main-color-7">5</td>
                <td class="main-color-7">3</td>
                <td class="main-color-7">60%</td>
            </tr>
            </tbody>
        </table>
    </div>
    <?}

    if (Yii::$app->user->can('director_school'))
    {
        ?>
        <div class="table-responsive">
            <table class="table table-bordered table-sm">
                <thead>
                <tr>
                    <th colspan="8" class="th">Анкета руководителей образовательных организаций</th>
                </tr>
                <tr>
                    <th class="th">№</th>
                    <th class="th">Федеральный округ</th>
                    <th class="th">Субъект Федерации</th>
                    <th class="th">Муниципальное образование</th>
                    <th class="th">Наименование организации</th>
                    <th class="th">Планируемая информация</th>
                    <th class="th">Фактическая информация</th>
                    <th class="th">% завершивших от плана</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Сибирский</td>
                    <td>Новосибирская область</td>
                    <td>г. Новосибирск</td>
                    <td>МБОУ Гимназия №1</td>
                    <td>Да</td>
                    <td>Да</td>
                </tr>
                <tr>
                    <td class="main-color-7" colspan="1">Итого</td>
                    <td class="main-color-7">Сибирский</td>
                    <td class="main-color-7">Новосибирская область</td>
                    <td class="main-color-7">г. Новосибирск</td>
                    <td class="main-color-7">МБОУ Гимназия №1</td>
                    <td class="main-color-7">1</td>
                    <td class="main-color-7">1</td>
                    <td class="main-color-7">100%</td>
                </tr>
                </tbody>
            </table>
        </div>
    <?}
}
?>



