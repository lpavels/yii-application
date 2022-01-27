
<div><b>19. Форма организации питания </div></b>
<table border="1" class="table table-bordered table-sm table-anket-views">
    <tr align="center">
        <th>№</th>
        <th>Форма организации питания</th>
        <th>1/0</th>
    </tr>
    <tr>
        <td>19.1</td>
        <td>Аутсорсинг (поставка пищевых продуктов + приготовление блюд)</td>
        <td align="center"><?= Yii::$app->myComponent->statusYesNo($model->field19_1)?></td>
    </tr>
    <tr>
        <td>19.2</td>
        <td>Аутсорсинг (поставка пищевых продуктов)</td>
        <td align="center"><?= Yii::$app->myComponent->statusYesNo($model->field19_2)?></td>
    </tr>
    <tr>
        <td>19.3</td>
        <td>Приобретение продуктов и приготовление блюд без привлечения сторонних организаций</td>
        <td align="center"><?= Yii::$app->myComponent->statusYesNo($model->field19_3)?></td>
    </tr>
</table>
