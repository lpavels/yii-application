<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Table3 */

$this->title = 'Таблица №3 Результаты проверок общеобразовательных организаций и принятых мер административного воздействия ';
$this->params['breadcrumbs'][] = ['label' => 'Table3s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table3-create container">

    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
    <h5 class="text-center text-danger"><i>(опрос детей и родителей обучающихся в общеобразовательных организациях проводится с целью улучшения организации питания; вся полученная информация будет использоваться для анализа и оценки исключительно в обобщенном виде)</i></h5>

    <div class="table-responsive">
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
