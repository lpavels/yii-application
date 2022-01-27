<?php

use yii\bootstrap4\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\DetiTable20 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Deti Table20s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="deti-table20-view">

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
            'field20_1',
            'field20_2',
            'field20_3',
            'field20_4',
            'field20_5',
            'field20_6',
            'field20_7',
            'field20_8',
            'field20_9',
            'field20_10',
            'field20_11',
            'field20_12',
            'field20_13',
            'field20_14',
            'create_at',
        ],
    ]) ?>

</div>
