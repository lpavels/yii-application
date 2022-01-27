
<h6>9. Укажите количество школ (из числа участвующих в анкетировании), в которые поставляется пищевая продукция, после
    проведения дополнительных исследований по показателям качества: </h6>
<table border="1" class="table table-bordered table-sm table-anket-views">
    <tr align="center">
        <th>№</th>
        <th colspan="2">Количество школ (из числа участвующих в анкетировании), в которые поставляется пищевая
            продукция, после проведения дополнительных исследований
        </th>
    </tr>
    <tr>
        <td>9.1.</td>
        <td>по показателям фальсификации</td>
        <td align="center"><?= Yii::$app->myComponent->statusYesNo($model->field9_1) ?></td>
    </tr>
    <tr>
        <td>9.2.</td>
        <td>на антибиотики</td>
        <td align="center"><?= Yii::$app->myComponent->statusYesNo($model->field9_2) ?></td>
    </tr>
    <tr>
        <td>9.3.</td>
        <td>на пестициды</td>
        <td align="center"><?= Yii::$app->myComponent->statusYesNo($model->field9_3) ?></td>
    </tr>
    <tr>
        <td>9.4.</td>
        <td>на содержание витаминов и микроэлементов</td>
        <td align="center"><?= Yii::$app->myComponent->statusYesNo($model->field9_4) ?></td>
    </tr>
    <tr>
        <td>9.5.</td>
        <td>на микробиологические показатели</td>
        <td align="center"><?= Yii::$app->myComponent->statusYesNo($model->field9_5) ?></td>
    </tr>
</table>