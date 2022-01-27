<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "deti_table_38".
 *
 * @property int $id
 * @property int $field38_1 Принимает ли ребенок витаминно-минеральные комплексы?
 * @property int $field38_2 постоянно
 * @property int $field38_3 2-3 раза в полгода курсами
 * @property int $field38_4 1-2 раза в год курсами
 * @property string $create_at
 */
class DetiTable38 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deti_table_38';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['field38_1', 'field38_2', 'field38_3', 'field38_4'], 'required'],
            [['field38_1', 'field38_2', 'field38_3', 'field38_4'],  'integer','min'=>0, 'max'=>1],
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
            'field38_1' => '38. Принимает ли ребенок витаминно-минеральные комплексы?',
            'field38_2' => 'Field38 2',
            'field38_3' => 'Field38 3',
            'field38_4' => 'Field38 4',
            'create_at' => 'Create At',
        ];
    }
}
