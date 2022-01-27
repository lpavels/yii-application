<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Food */

$this->title = 'АНКЕТА ДЛЯ ОЦЕНКИ ОРГАНИЗАЦИИ ПИТАНИЯ ОБУЧАЮЩИХСЯ В ОБЩЕОБРАЗОВАТЕЛЬНЫХ ОРГАНИЗАЦИЯХ';
$this->params['breadcrumbs'][] = ['label' => 'Анкета', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="food-create container">

    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
    <h5 class="text-center text-danger"><i>(опрос организаторов питания, заполняется интервьюером)</i></h5>

    <?php
    $form = ActiveForm::begin(); ?>
    <?=
    $this->render(
        '/food-table-6/create',
        [
            'model' => $foodTable6,
            'form' => $form,
        ]
    ); ?>
    <?=
    $this->render(
        '/food-table-7/create',
        [
            'model' => $foodTable7,
            'form' => $form,
        ]
    ); ?>
    <?=
    $this->render(
        '/food-table-8/create',
        [
            'model' => $foodTable8,
            'form' => $form,
        ]
    ); ?>
    <?=
    $this->render(
        '/food-table-9/create',
        [
            'model' => $foodTable9,
            'form' => $form,
        ]
    ); ?>
    <?=
    $this->render(
        '/food-table-10/create',
        [
            'model' => $foodTable10,
            'form' => $form,
        ]
    ); ?>
    <?=
    $this->render(
        '/food-table-11/create',
        [
            'model' => $foodTable11,
            'form' => $form,
        ]
    ); ?>
    <?=
    $this->render(
        '/food-table-12/create',
        [
            'model' => $foodTable12,
            'form' => $form,
        ]
    ); ?>
    <?=
    $this->render(
        '/food-table-13/create',
        [
            'model' => $foodTable13,
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
