
<div><b>28. Форма организации питьевого режима </div></b>
<table border="1" class="table table-bordered table-sm table-anket-views">
    <tr align="center">
        <th>№</th>
        <th>Форма организации питьевого режима</th>
        <th>1/0</th>
    </tr>
    <tr>
        <td>28.1</td>
        <td>Питьевые фонтанчики</td>
        <td align="center"><?= Yii::$app->myComponent->statusYesNo($model->field28_1)?></td>
    </tr>
    <tr>
        <td>28.2</td>
        <td>Кулеры</td>
        <td align="center"><?= Yii::$app->myComponent->statusYesNo($model->field28_2)?></td>
    </tr>
    <tr>
        <td>28.3</td>
        <td>Бутилированная вода</td>
        <td align="center"><?= Yii::$app->myComponent->statusYesNo($model->field28_3)?></td>
    </tr>
    <tr>
        <td>28.4</td>
        <td>Кипяченая вода</td>
        <td align="center"><?= Yii::$app->myComponent->statusYesNo($model->field28_4)?></td>
    </tr>
    <tr>
        <td>28.5</td>
        <td>Питьевой режим не организован</td>
        <td align="center"><?= Yii::$app->myComponent->statusYesNo($model->field28_5)?></td>
    </tr>
</table>
