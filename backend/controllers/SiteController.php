<?php

namespace backend\controllers;

use common\models\FederalDistrict;
use common\models\Table1;
use common\models\UserAutorizationStatistic;
use common\models\Municipality;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\ChangeForm;
use common\models\SignupForm;
use common\models\User;
use common\models\Organization;
use common\models\Region;
use yii\rbac\DbManager;

class SiteController extends Controller
{
    
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => [
                            'badbrowser',
                            'login',
                            'logout',
                            'error',
                            'signup',
                            'subjectslist',
                            'municipalitylist',
                            'organization-name',
                        ],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['badbrowser', 'login', 'logout', 'index', 'error', 'report'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],

        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->redirect(['/site/index']);
        }

        $model = new LoginForm();
        $change = new ChangeForm();

        if ($change->load(Yii::$app->request->post())) {
            if ($change->changePassword()) {
                Yii::$app->session->setFlash('changePassword', 'Дождитесь письма с новым паролем.', false);
                $this->redirect(['/site/login']);
            } else {
                Yii::$app->session->setFlash('changeErrorPassword', 'Дождитесь письма с новым паролем.', false);
                $this->redirect(['/site/login']);
            }
        }

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $stat = new UserAutorizationStatistic();
            $stat->user_id = Yii::$app->user->id;
            $stat->time_auth = time();
            $stat->save();

            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
                'change' => $change,
            ]);
        }
    }

    public function actionLogout()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['/site/index']);
        }
        Yii::$app->user->logout();

        return $this->goHome();
    }

    //Регистрация "
    public function actionSignup()
    {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $post = Yii::$app->request->post()['SignupForm'];

            $organization = new Organization();
            if (!$organization->validate()){
                return null;
            }
            $organization->title = $post['name_organization'];
            $organization->federal_district_id = $post['federal_district_id'];
            $organization->region_id = $post['region_id'];
            $organization->municipality_id = $post['municipality_id'];
            $organization->organization_type_id = 3;
            if ($organization->save()){
                $model->signup($organization['id']);

                return $this->redirect(['index']);
            }
        }

        $district_items = ArrayHelper::map(
            FederalDistrict::find()->all(),
            'id',
            'name'
        );
        $post_items = [
            'Руководитель' => 'Руководитель',
            'Иное' => 'Иное',
        ];

        return $this->render('signup', [
            'model' => $model,
            'district_items' => $district_items,
            'post_items' => $post_items,
        ]);
    }


    public function actionBadbrowser()
    {
        $this->layout = false;

        return $this->render('badbrowser');
        //return $this->redirect(['badbrowser']);
    }
	
    /*Подставляет регионы в выпадающий список*/
    public function actionSubjectslist($id)
    {
        $groups = Region::find()->where(['district_id' => $id])->orderby(['name' => SORT_ASC])->all();

        $data = [];
        $data[] = '<option value="">Выберите регион...</option>';
        if (!empty($groups)) {
            foreach ($groups as $key => $group) {
                $data[] = '<option value="' . $group->id . '">' . $group->name . '</option>';
            }
        }

        print_r($data);
        //return $data;
    }

    /*Подставляет муниципальные образования в выпадающий список*/
    public function actionMunicipalitylist($id)
    {
        $groups = Municipality::find()->where(['region_id' => $id])->orderby(['name' => SORT_ASC])->all();

        $data = [];
        $data[] = '<option value="">Выберите муниципальное образование...</option>';
        if (!empty($groups)) {
            foreach ($groups as $key => $group) {
                $data[] = '<option value="' . $group->id . '">' . $group->name . '</option>';
            }
        }

        print_r($data);
    }

    /*Подставляет организации в выпадающий список*/
    public function actionOrganizationName($id)
    {
        $groups = Organization::find()->where(['municipality_id' => $id])->orderby(['title' => SORT_ASC])->all();

        $data = [];
        $data[] = '<option value="">Выберите Вашу организацию...</option>';
        if (!empty($groups)) {
            foreach ($groups as $key => $group) {
                $data[] = '<option value="' . $group->id . '">' . $group->title . '</option>';
            }
        } else {
            $data[] = '<option value="">Организации не добавлены.</option>';
        }
        print_r($data);
    }

    public function actionReport()
    {
        $model = new Table1();

        $resultTable1 = '';
        $federalDistricts = '';
        $fed = 100;
        $reg = 0;
        $month_status = 9;
        $where = [];
        if (Yii::$app->request->post()) {
            /* $post = Yii::$app->request->post()['Table1'];
             if($post['federal_district_id'] !== '100'){
                 $fed = $post['federal_district_id'];
                 $where = [
                     'federal_district.id' => $post['federal_district_id'],
                 ];
             }
             $federalDistricts = \common\models\FederalDistrict::find()->
             select([
                 'federal_district.id as district_id',
                 'federal_district.name as federal',
                 'region.id as region_id',
                 'region.name as region'
             ])->
             leftJoin('region', 'federal_district.id = region.district_id')->
             where($where)->
             asArray()->
             all();*/
            $post = Yii::$app->request->post()['Table1'];
            if (Yii::$app->user->can('admin')) {
                $reg = $post['region_id'];
                if ($post['federal_district_id'] !== '100') {
                    $fed = $post['federal_district_id'];
                    $where = [
                        'federal_district.id' => $post['federal_district_id'],
                    ];
                }
            } else {
                $organizate = Organization::findone(Yii::$app->user->identity->organization_id);
                $where = [
                    'federal_district.id' => $organizate->federal_district_id,
                    'region.id' => $organizate->region_id,
                ];
            }
            $federalDistricts = \common\models\FederalDistrict::find()->
            select([
                'federal_district.id as district_id',
                'federal_district.name as federal',
                'region.id as region_id',
                'region.name as region',
            ])->
            leftJoin('region', 'federal_district.id = region.district_id')->
            where($where)->
            asArray()->
            all();
        }

        return $this->render('report', [
            'models' => $resultTable1,
            'federalDistricts' => $federalDistricts,
            'month_status' => $month_status,
            'fed' => $fed,
            'reg' => $reg,
            'model' => $model,
        ]);
    }
}
