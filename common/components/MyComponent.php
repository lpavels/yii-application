<?php

namespace common\components;

use common\models\FederalDistrict;
use common\models\Municipality;
use common\models\Organization;
use common\models\Region;
use common\models\User;
use yii\base\Component;
use yii\helpers\ArrayHelper;


class MyComponent extends Component
{
    public function statusView($id = false)
    {
        $item = ['показать', 'скрыть'];
        if (!is_bool($id))
        {
            // echo 'есть id='. $id;
            return $item[$id];
        }
        else
        {
            //echo 'нет id';
            return $item;
        }
    }

    public function statusYesNo($id = false)
    {
        $item = ['нет', 'да'];
        if (!is_bool($id))
        {
            // echo 'есть id='. $id;
            return $item[$id];
        }
        else
        {
            //echo 'нет id';
            return $item;
        }
    }

    public function statusHaveNo($id = false)
    {
        $item = ['нет', 'есть'];
        if (!is_bool($id))
        {
            // echo 'есть id='. $id;
            return $item[$id];
        }
        else
        {
            //echo 'нет id';
            return $item;
        }
    }

    /*public function userName($id)
    {
        $model = User::findOne($id);
        return $model->name;
    }*/

    public function monthsLearning($id = false)
    {
        $item = [
            '9' => 'Сентябрь',
            '10' => 'Октябрь',
            '11' => 'Ноябрь',
            '12' => 'Декабрь',
            '1' => 'Январь',
            '2' => 'Февраль',
            '3' => 'Март',
            '4' => 'Апрель',
            '5' => 'Май',
            '6' => 'Июнь',
        ];
        if (!is_bool($id))
        {
            // echo 'есть id='. $id;
            return $item[$id];
        }
        else
        {
            //echo 'нет id';
            return $item;
        }
    }

    public function monthsLearningShort($id = false)
    {
        $item = [
            '9' => 'Сентябрь',
            '1' => 'Январь',
        ];
        if (!is_bool($id))
        {
            // echo 'есть id='. $id;
            return $item[$id];
        }
        else
        {
            //echo 'нет id';
            return $item;
        }
    }

    public function yearStudy($id = false)
    {
        $item = [
            '2021-2022' => '2021-2022',
        ];
        if (!is_bool($id))
        {
            // echo 'есть id='. $id;
            return $item[$id];
        }
        else
        {
            //echo 'нет id';
            return $item;
        }
    }

    public function numericCustom($id)
    {
        if (is_numeric($id))
        {
            return $id;
        }
        else
        {
            return 0;
        }
    }

    public function dateStr($id)
    {
        $old_date = strtotime($id);

        return date('d.m.Y', $old_date);
    }

    public function dateStrBack($id)
    {
        $old_date = strtotime($id);

        return date('Y-m-d', $old_date);
    }

    public function randomFileName($path, $extension)
    {
        do
        {
            $name = mt_rand(0, 999999999);
            $file = $path . $name . '.' . $extension;
        } while (file_exists($file));

        return $name . '.' . $extension;
    }

    public function twoColumnNameSm($action)
    {
        switch ($action)
        {
            case 'first':
                return $result = [
                    'options' => ['class' => 'row mt-0 mb-0 ml-0 mr-0 input-group-sm main-color-10'],
                    'labelOptions' => ['class' => 'col-sm-12 col-md-12 col-lg-8 col-xl-8'],
                ];
                break;
            case 'two':
                return $result = [
                    'options' => ['class' => 'row mt-0 mb-0 ml-0 mr-0 input-group-sm main-color-11'],
                    'labelOptions' => ['class' => 'col-sm-12 col-md-12 col-lg-8 col-xl-8'],
                ];
                break;
            case 'three':
                return $result = [
                    'options' => ['class' => 'row mt-0 mb-0 ml-0 mr-0 input-group-sm main-color-12'],
                    'labelOptions' => ['class' => 'col-sm-12 col-md-12 col-lg-8 col-xl-8'],
                ];
                break;
            case 'four':
                return $result = [
                    'options' => ['class' => 'row mt-0 mb-0 ml-0 mr-0 input-group-sm main-color-14'],
                    'labelOptions' => ['class' => 'col-sm-12 col-md-12 col-lg-8 col-xl-8'],
                ];
                break;
            case '':
                return $result = [
                    'options' => ['class' => 'row mt-0 mb-0 ml-0 mr-0 input-group-sm '],
                    'labelOptions' => ['class' => 'col-sm-12 col-md-12 col-lg-8 col-xl-8'],
                ];
                break;
            default:
                return 1;
        }
    }

    public function twoColumnInputSm($params = false)
    {
        $result = ['class' => 'form-control col-sm-12 col-md-12 col-lg-4 col-xl-4'];
        if ($params != false)
        {
            $result += $params;
        }

        return $result;
    }

//    public function twoColumnName($params_options = false)
//    {
//        $result = [
//            'options' => ['class' => 'row mt-2 mb-0 ml-0 mr-0'],
//            'labelOptions' => ['class' => 'col-sm-12 col-md-12 col-lg-6 col-xl-6 col-form-label']
//        ];
//        if ($params_options != false) {
//            $result['options']['class'] .= $params_options;
//        }
//        return $result;
//    }

    public function twoColumnName()
    {
        return $result = [
            'options' => ['class' => 'row mt-2 mb-0 ml-0 mr-0'],
            'labelOptions' => ['class' => 'col-sm-12 col-md-12 col-lg-6 col-xl-6'],
        ];
    }

    public function twoColumnInput($params = false)
    {
        $result = ['class' => 'form-control col-sm-12 col-md-12 col-lg-6 col-xl-6'];
        if ($params != false)
        {
            $result += $params;
        }

        return $result;
    }

    public function twoColumnInputDate()
    {
        return ['type' => 'date', 'class' => 'form-control col-sm-12 col-md-12 col-lg-6 col-xl-6'];
    }

    public function get_federal_name($id)
    {
        return FederalDistrict::findOne($id)->name;
    }

    public function get_region_name($id)
    {
        return Region::findOne($id)->name;
    }

    public function get_municipality_name($id)
    {
        return Municipality::findOne($id)->name;
    }

    public function get_orgainization_name($id)
    {
        return Organization::findOne($id)->title;
    }

    public function get_orgainization($id)
    {
        /*SELECT
           user.name AS 'Имя пользователя',
           organization.`title` AS 'title'
       FROM user JOIN organization ON user.organization_id = organization.id*/
        $organization_title = User::find()->
        select([
            'organization.title as title',
        ])->
        leftJoin('organization', 'user.organization_id = organization.id')->
        where(['user.id' => $id])
            ->asArray()
            ->one();
        return $organization_title['title'];
    }

    public function FederalDistrictItems()
    {
        return ArrayHelper::map(FederalDistrict::find()->orderBy(['name' => SORT_ASC])->all(), 'id', 'name');
    }

    public function RegionItems($federal_id = false)
    {
        if ($federal_id != false)
        {
            $where = ['district_id' => $federal_id];
        }
        else
        {
            $where = ['district_id' => 1];
        }

        return ArrayHelper::map(Region::find()->where($where)->orderBy(['name' => SORT_ASC])->all(), 'id', 'name');
    }

    public function MunicipalityItems($region_id = false)
    {
        if ($region_id != false)
        {
            $where = ['region_id' => $region_id];
        }
        else
        {
            $where = ['region_id' => 1];
        }

        return ArrayHelper::map(Municipality::find()->where($where)->orderBy(['name' => SORT_ASC])->all(), 'id', 'name');
    }
}