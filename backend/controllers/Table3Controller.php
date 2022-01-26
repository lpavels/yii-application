<?php

namespace backend\controllers;

use common\models\Organization;
use common\models\Table3;
use common\models\Table3Search;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Table3Controller implements the CRUD actions for Table3 model.
 */
class Table3Controller extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => [
                            'create',
                            'index',
                            'update',
                            'view',
                            'report',
                        ],
                        'allow' => true,
                        'roles' => [
                            'admin',
                            'director_school',
                            'food_organizer',
                            'rospotrebnadzor',
                            'user',
                        ],
                    ],
                    [
                        'actions' => [
                            'create',
                        ],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                ],
                'denyCallback' => function ($rule, $action) {
                    Yii::$app->session->setFlash(
                        "error",
                        "У Вас нет доступа к этой  странице, пожалуйста, обратитесь к администратору!"
                    );
                    if (Yii::$app->user->isGuest)
                    {
                        return $this->goHome();
                    }
                    else
                    {
                        return $this->redirect(Yii::$app->request->referrer);
                    }
                },
            ],
        ];
    }

    /**
     * Lists all Table3 models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Table3Search();
        $search = Yii::$app->request->queryParams;
        $region_items = [];
        $dataProvider = $searchModel->search($search);
        if ($search)
        {
            $region_items = Yii::$app->myComponent->RegionItems($search['Table3Search']['federal_district_id']);
        }

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
            'region_items' => $region_items,
        ]);
    }

    /**
     * Displays a single Table3 model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Table3 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Table3();
        $organization = $this->findOrganization(Yii::$app->user->identity->organization_id);
        if (Yii::$app->request->post())
        {
            $model->load(Yii::$app->request->post());
            //добавляем данные в модель,
            $model->user_id = Yii::$app->user->identity->id;
            $model->federal_district_id = $organization->federal_district_id;
            $model->region_id = $organization->region_id;
            $model->municipality_id = $organization->municipality_id;
            $model->field158 = $model->totalOrganization(
                [
                    $model->field159,
                    $model->field160,
                    $model->field161,
                ]
            );
            $model->field154 = $model->totalOrganization(
                [
                    $model->field155,
                    $model->field156,
                    $model->field157,
                ]
            );
            $model->field147 = $model->totalOrganization(
                [
                    $model->field148,
                    $model->field149,
                    $model->field150,
                ]
            );
            $model->field144 = $model->totalOrganization(
                [
                    $model->field145,
                    $model->field146,
                ]
            );
            $model->field137 = $model->totalOrganization(
                [
                    $model->field138,
                    $model->field139,
                    $model->field140,
                ]
            );
            $model->field122 = $model->totalOrganization2(
                [
                    $model->field123,
                    $model->field124,
                    $model->field125,
                    $model->field126,
                    $model->field127,
                    $model->field128,
                    $model->field129,
                ]
            );
            $model->field114 = $model->totalOrganization2(
                [
                    $model->field122,
                    $model->field123,
                    $model->field124,
                    $model->field125,
                    $model->field126,
                    $model->field127,
                    $model->field128,
                ]
            );
            $model->field101 = $model->totalOrganization(
                [
                    $model->field103,
                    $model->field104,
                    $model->field105,
                    $model->field106,
                    $model->field107,
                    $model->field108,
                    $model->field109,
                ]
            );
            $model->field100 = $model->totalOrganization(
                [
                    $model->field102,
                    $model->field103,
                    $model->field104,
                    $model->field105,
                    $model->field106,
                    $model->field107,
                    $model->field108,
                ]
            );
            $model->field89 = $model->totalOrganization(
                [
                    $model->field91,
                    $model->field93,
                    $model->field95,
                    $model->field97,
                    $model->field99,
                ]
            );
            $model->field88 = $model->totalOrganization(
                [
                    $model->field90,
                    $model->field92,
                    $model->field94,
                    $model->field96,
                    $model->field98,
                ]
            );
            $model->field28 = $model->totalOrganization(
                [
                    $model->field29,
                    $model->field30,
                    $model->field31,
                    $model->field32,
                    $model->field33,
                    $model->field34,
                ]
            );
            $model->field11 = $model->totalOrganization(
                [
                    $model->field12,
                    $model->field13,
                    $model->field14,
                    $model->field15,
                ]
            );
            $model->field8 = $model->totalOrganization(
                [
                    $model->field9,
                    $model->field10,
                    $model->field11,
                    $model->field16,
                    $model->field17,
                    $model->field18,
                    $model->field19,
                    $model->field20,
                    $model->field22,
                    $model->field24,
                    $model->field25,
                    $model->field26,
                    $model->field27,
                    $model->field28,
                    $model->field35,
                    $model->field36,
                ]
            );
            $model->field7 = $model->totalOrganization(
                [
                    $model->total_organizations,
                    $model->field1,
                    $model->field2,
                    $model->field3,
                    $model->field4,
                    $model->field5,
                    $model->field6,
                ]
            );
            $model->field2 = $model->totalOrganization(
                [
                    $model->field3,
                    $model->field4,
                    $model->field5,
                ]
            );
            //отправляем на валидацию
            if ($model->validate())
            {
                //проверяем есть ли уже запсь в бд
                if ($this->findCheck($model->user_id, $model->year_study, $model->month_status) === false)
                {
                    $model->save();
                    Yii::$app->session->setFlash('success', "Данные сохранены!");

                    return $this->redirect(['index']);
                }
                else
                {
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас уже внесены данные на " . Yii::$app->myComponent->monthsLearningShort(
                            $model->month_status
                        ) . ' за учебный год ' . Yii::$app->myComponent->yearStudy(
                            $model->year_study
                        )
                    );
                }
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $year = $model->year_study;
        $month = $model->month_status;
        if (Yii::$app->request->post())
        {
            $model->load(Yii::$app->request->post());
            $model->total_organizations = $model->totalOrganization(
                [$model->field8, $model->field10, $model->field11]
            );
            //отправляем на валидацию
            if ($model->validate())
            {
                if (($year == $model->year_study) && ($month == $model->month_status))
                {
                    $model->save();
                    Yii::$app->session->setFlash('success', "Данные сохранены!");

                    return $this->redirect(['index']);
                }
                else
                {
                    //проверяем есть ли уже запсь в бд
                    if ($this->findCheck($model->user_id, $model->year_study, $model->month_status) === false)
                    {
                        $model->save();
                        Yii::$app->session->setFlash('success', "Данные сохранены!");

                        return $this->redirect(['index']);
                    }
                    else
                    {
                        Yii::$app->session->setFlash(
                            'error',
                            "У Вас уже внесены данные на " . Yii::$app->myComponent->monthsLearningShort(
                                $model->month_status
                            ) . ' за учебный год ' . Yii::$app->myComponent->yearStudy(
                                $model->year_study
                            )
                        );
                    }
                }
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionReport()
    {
        $model = new Table3();
        $resultTable1 = '';
        $fed = 100;
        $reg = 0;
        $where = [];
        if (Yii::$app->request->post())
        {
            $post = Yii::$app->request->post()['Table3'];
            if (Yii::$app->user->can('admin'))
            {
                $reg = $post['region_id'];
                if ($post['federal_district_id'] !== '100')
                {
                    $fed = $post['federal_district_id'];
                    $where = [
                        'federal_district_id' => $post['federal_district_id'],
                    ];
                }
            }
            else
            {
                $organizate = Organization::findone(Yii::$app->user->identity->organization_id);
                $where = [
                    'federal_district_id' => $organizate->federal_district_id,
                    'region_id' => $organizate->region_id,
                ];
            }
            $resultTable1 = Table3::find()->where(['month_status' => $post['month_status']])->andWhere($where)->asArray()->all();
        }

        return $this->render('report', [
            'models' => $resultTable1,
            'fed' => $fed,
            'reg' => $reg,
            'model' => $model,
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Table3::findOne($id)) !== null)
        {
            return $model;
        }
        else
        {
            Yii::$app->session->setFlash(
                'error',
                "У Вас возникла ошибка при редактировании, обратитесь к администратору!"
            );

            return $this->redirect(['index']);
        }
    }

    protected function findOrganization($id)
    {
        if (($model = Organization::findOne($id)) !== null)
        {
            return $model;
        }
        else
        {
            $model = Organization::findOne(1);
            Yii::$app->session->setFlash('error', "У Вас не назначена организация, обратитесь к администратору!");

            return $model;
        }
    }

    protected function findCheck($user_id, $year, $month)
    {
        if (($model = Table3::find()->where(
                ['user_id' => $user_id, 'year_study' => $year, 'month_status' => $month]
            )->one()) !== null)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}