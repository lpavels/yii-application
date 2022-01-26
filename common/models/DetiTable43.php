<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "deti_table_43".
 *
 * @property int $id
 * @property int $field41
 * @property int $field42
 * @property int $field43
 * @property int $field43_1 Перекусывает ли ребенок вне дома и школы?
 * @property int $field43_2 Фаст-фуд
 * @property int $field43_3 Чипсы
 * @property int $field43_4 Шоколад, конфеты
 * @property int $field43_5 Пирожные
 * @property int $field43_6 Булочки, пироги
 * @property int $field43_7 Пряники, печенье
 * @property int $field43_8 Зефир, мармелад
 * @property int $field43_9 Мороженое
 * @property int $field43_10 Соки, нектары
 * @property int $field43_11 Вода питьевая бутилированная
 * @property int $field43_12 Сладкие газированные напитки
 * @property string $create_at
 */
class DetiTable43 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deti_table_43';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['field41', 'field42', 'field43', 'field43_1', 'field43_2', 'field43_3', 'field43_4', 'field43_5', 'field43_6', 'field43_7', 'field43_8', 'field43_9', 'field43_10', 'field43_11'], 'required'],
            [['field41', 'field42', 'field43', 'field43_1', 'field43_2', 'field43_3', 'field43_4', 'field43_5', 'field43_6', 'field43_7', 'field43_8', 'field43_9', 'field43_10', 'field43_11'], 'integer', 'min' => 0, 'max' => 1],
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
            'field41' => '41. Добавляет ли ребенок сахар в чай ? ',
            'field42' => '42. Досаливает ли ребенок пищу? ',
            'field43' => '43. Перекусывает ли ребенок вне дома и школы? ',
            'field43_1' => 'Field43 1',
            'field43_2' => 'Field43 2',
            'field43_3' => 'Field43 3',
            'field43_4' => 'Field43 4',
            'field43_5' => 'Field43 5',
            'field43_6' => 'Field43 6',
            'field43_7' => 'Field43 7',
            'field43_8' => 'Field43 8',
            'field43_9' => 'Field43 9',
            'field43_10' => 'Field43 10',
            'field43_11' => 'Field43 11',
            'field43_12' => 'Field43 12',
            'create_at' => 'Create At',
        ];
    }
}
