<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "deti_table_37".
 *
 * @property int $id
 * @property int $field34 Полностью ли ребенок съедает предложенные меню порции?
 * @property int $field35 Хватает ли ребенку размеров порций?
 * @property int $field36 Считаете ли Вы перемену достаточной по продолжительности для приема пищи?
 * @property int $field37 Нравится ли ребенку обстановка в школьной столовой?
 * @property int $field37_1 грязно
 * @property int $field37_2 много детей и мало места
 * @property int $field37_3 приходится долго ждать чтобы получить еду
 * @property int $field37_4 еда часто бывает остывшей
 * @property int $field37_5 еда не вкусная
 * @property int $field37_6 не нравится сервировка столов
 * @property int $field37_7 в столовой часто неприятно пахнет
 * @property int $field37_8 не хватает времени
 * @property int $field37_9 не хватает посуды
 * @property string $create_at
 */
class DetiTable37 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deti_table_37';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['field34', 'field35', 'field36', 'field37', 'field37_1', 'field37_2', 'field37_3', 'field37_4', 'field37_5', 'field37_6', 'field37_7', 'field37_8', 'field37_9'], 'required'],
            [['field34', 'field35', 'field36', 'field37', 'field37_1', 'field37_2', 'field37_3', 'field37_4', 'field37_5', 'field37_6', 'field37_7', 'field37_8', 'field37_9'], 'integer', 'min' => 0, 'max' => 1],
            [['create_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'field34' => '34. Полностью ли ребенок съедает предложенные меню порции? ',
            'field35' => '35. Хватает ли ребенку размеров порций? ',
            'field36' => '36. Считаете ли Вы перемену достаточной по продолжительности для приема пищи?',
            'field37' => '37. Нравится ли ребенку обстановка в школьной столовой? ',
            'field37_1' => 'Field37 1',
            'field37_2' => 'Field37 2',
            'field37_3' => 'Field37 3',
            'field37_4' => 'Field37 4',
            'field37_5' => 'Field37 5',
            'field37_6' => 'Field37 6',
            'field37_7' => 'Field37 7',
            'field37_8' => 'Field37 8',
            'field37_9' => 'Field37 9',
            'create_at' => 'Create At',
        ];
    }
}
