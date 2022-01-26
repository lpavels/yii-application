<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Table3 */

$this->title = 'Редактирование: '.$model->year_study;
$this->params['breadcrumbs'][] = ['label' => 'Table3s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="table3-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <h5 class="text-center text-danger"><i>ИНФОРМАЦИЯ ЗАПОЛНЯЕТСЯ ЕЖЕМЕСЯЧНО ПО РЕЗУЛЬТАТАМ ЗАВЕРШЕННЫХ В ДАННОМ МЕСЯЦЕ КОНТРОЛЬНО-НАДЗОРНЫХ МЕРОПРИЯТИЙ</i></h5>
    <div class="table3-form">
        <?php
        $form = ActiveForm::begin(); ?>
        <?= $this->render(
            '_form',
            [
                'model' => $model,
                'form' => $form,
            ]
        ) ?>
        <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success btn-block mt-3']) ?>
        </div>

        <?php
        ActiveForm::end(); ?>

    </div>

</div>
