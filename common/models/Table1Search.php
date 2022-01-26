<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;


class Table1Search extends Table1
{

    public function rules()
    {
        return [
            [
                [
                    'federal_district_id',
                    'region_id',
                    //'municipality_id',
                    'month_status',
                ],
                'safe',
            ],
        ];
    }


    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }


    public function search($params)
    {
        if (Yii::$app->user->can('admin'))
        {
            !empty($params['Table1Search']['federal_district_id']) ? $where = ['federal_district_id' => $params['Table1Search']['federal_district_id']] : $where = [];
            !empty($params['Table1Search']['region_id']) ? $where += ['region_id' => $params['Table1Search']['region_id']] : $where += [];
        }
        else
        {
            $organizate = Organization::findone(Yii::$app->user->identity->organization_id);
            $where = [
                'federal_district_id' => $organizate->federal_district_id,
                'region_id' => $organizate->region_id,
            ];
            /*$where = [
                'user_id' => Yii::$app->user->identity->id,
            ];*/
        }

        $query = Table1::find()->where($where);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate())
        {
            return $dataProvider;
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                //'forcePageParam' => false,
                //'pageSizeParam' => false,
                'pageSize' => 50,
            ],
            'sort' => [
                'defaultOrder' => [
                    'year_study' => SORT_DESC,
                    'month_status' => SORT_DESC,
                    //'title' => SORT_ASC,
                ],
            ],
        ]);

        $query->andFilterWhere(['=', 'month_status', $this->month_status]);

        /*$query->andFilterWhere(['like', 'ugroup', $this->ugroup]);

        if(Yii::$app->user->can('admin')){
            $query->andFilterWhere(['=', 'city_id', $this->city_id]);

            $query->andFilterWhere(['like', 'ugroup', $this->ugroup]);
        }*/

        return $dataProvider;
    }
}
