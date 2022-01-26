<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "deti_table_44".
 *
 * @property int $id
 * @property int $field44_1 отлично В школе
 * @property int $field44_2 отлично дома
 * @property int $field44_3 хорошо  В школе
 * @property int $field44_4 хорошо  дома
 * @property int $field44_5 удовлетворительно В школе
 * @property int $field44_6 удовлетворительно дома
 * @property int $field44_7 не удовлетворительно В школе
 * @property int $field44_8 не удовлетворительно дома
 * @property int $field45 отлично В школе
 * @property int $field46 отлично В школе
 * @property string $create_at
 */
class DetiTable44 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deti_table_44';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [
                [
                    'field44_1',
                    'field44_2',
                    'field44_3',
                    'field44_4',
                    'field44_5',
                    'field44_6',
                    'field44_7',
                    'field44_8',
                ],
                'required',
            ],
            [
                [
                    'field44_1',
                    'field44_2',
                    'field44_3',
                    'field44_4',
                    'field44_5',
                    'field44_6',
                    'field44_7',
                    'field44_8',
                ],
                'integer', 'min' => 0, 'max' => 1
            ],
            [
                [
                    'field45',
                    'field46',
                    'create_at'
                ],
                'safe'
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'field44_1' => 'Field44 1',
            'field44_2' => 'Field44 2',
            'field44_3' => 'Field44 3',
            'field44_4' => 'Field44 4',
            'field44_5' => 'Field44 5',
            'field44_6' => 'Field44 6',
            'field44_7' => 'Field44 7',
            'field44_8' => 'Field44 8',
            'field45' => '43. Предложения по улучшению питания в школе ',
            'field46' => '44. Предложения по улучшению питания дома ',
            'create_at' => 'Create At',
        ];
    }
}
