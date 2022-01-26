<?php

use yii\bootstrap4\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\DetiTable37 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Deti Table37s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="deti-table37-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'field34',
            'field35',
            'field36',
            'field37',
            'field37_1',
            'field37_2',
            'field37_3',
            'field37_4',
            'field37_5',
            'field37_6',
            'field37_7',
            'field37_8',
            'field37_9',
            'create_at',
        ],
    ]) ?>

</div>
