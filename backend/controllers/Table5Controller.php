<?php

namespace backend\controllers;

use common\models\Organization;
use common\models\Table5;
use common\models\Table5Search;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Table5Controller implements the CRUD actions for Table5 model.
 */
class Table5Controller extends Controller
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
                            'user',
                        ],
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
     * Lists all Table5 models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Table5Search();
        $search = Yii::$app->request->queryParams;
        $region_items = [];
        $dataProvider = $searchModel->search($search);
        if ($search)
        {
            $region_items = Yii::$app->myComponent->RegionItems($search['Table1Search']['federal_district_id']);
        }

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
            'region_items' => $region_items,
        ]);
    }

    /**
     * Displays a single Table5 model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render(
            'view',
            [
                'model' => $this->findModel($id),
            ]
        );
    }

    /**
     * Creates a new Table5 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Table5();
        $organization = $this->findOrganization(Yii::$app->user->identity->organization_id);
        if (Yii::$app->request->post())
        {
            $model->load(Yii::$app->request->post());
            //добавляем данные в модель,
            $model->user_id = Yii::$app->user->identity->id;
            $model->federal_district_id = $organization->federal_district_id;
            $model->region_id = $organization->region_id;
            $model->municipality_id = $organization->municipality_id;
            $model->field78 = $model->totalOrganization(
                [
                    $model->field79,
                    $model->field80,
                ]
            );
            $model->field76 = $model->totalOrganization(
                [
                    $model->field77,
                    $model->field78,
                ]
            );
            $model->field73 = $model->totalOrganization(
                [
                    $model->field74,
                    $model->field75,
                ]
            );
            $model->field71 = $model->totalOrganization(
                [
                    $model->field72,
                    $model->field73,
                ]
            );
            $model->field68 = $model->totalOrganization(
                [
                    $model->field69,
                    $model->field70,
                ]
            );
            $model->field66 = $model->totalOrganization(
                [
                    $model->field67,
                    $model->field68,
                ]
            );
            $model->field63 = $model->totalOrganization(
                [
                    $model->field64,
                    $model->field65,
                ]
            );
            $model->field61 = $model->totalOrganization(
                [
                    $model->field62,
                    $model->field63,
                ]
            );
            $model->field58 = $model->totalOrganization(
                [
                    $model->field59,
                    $model->field60,
                ]
            );
            $model->field56 = $model->totalOrganization(
                [
                    $model->field57,
                    $model->field58,
                ]
            );
            $model->field53 = $model->totalOrganization(
                [
                    $model->field54,
                    $model->field55,
                ]
            );
            $model->field51 = $model->totalOrganization(
                [
                    $model->field52,
                    $model->field53,
                ]
            );
            $model->field48 = $model->totalOrganization(
                [
                    $model->field49,
                    $model->field50,
                ]
            );
            $model->field46 = $model->totalOrganization(
                [
                    $model->field47,
                    $model->field48,
                ]
            );
            $model->field43 = $model->totalOrganization(
                [
                    $model->field44,
                    $model->field45,
                ]
            );
            $model->field41 = $model->totalOrganization(
                [
                    $model->field42,
                    $model->field43,
                ]
            );
            $model->field38 = $model->totalOrganization(
                [
                    $model->field39,
                    $model->field40,
                ]
            );
            $model->field36 = $model->totalOrganization(
                [
                    $model->field37,
                    $model->field38,
                ]
            );
            $model->field33 = $model->totalOrganization(
                [
                    $model->field34,
                    $model->field35,
                ]
            );
            $model->field31 = $model->totalOrganization(
                [
                    $model->field32,
                    $model->field33,
                ]
            );
            $model->field28 = $model->totalOrganization(
                [
                    $model->field29,
                    $model->field30,
                ]
            );
            $model->field26 = $model->totalOrganization(
                [
                    $model->field27,
                    $model->field28,
                ]
            );
            $model->field23 = $model->totalOrganization(
                [
                    $model->field24,
                    $model->field25,
                ]
            );
            $model->field21 = $model->totalOrganization(
                [
                    $model->field22,
                    $model->field23,
                ]
            );
            $model->field18 = $model->totalOrganization(
                [
                    $model->field19,
                    $model->field20,
                ]
            );
            $model->field16 = $model->totalOrganization(
                [
                    $model->field17,
                    $model->field18,
                ]
            );
            $model->field13 = $model->totalOrganization(
                [
                    $model->field14,
                    $model->field15,
                ]
            );
            $model->field11 = $model->totalOrganization(
                [
                    $model->field12,
                    $model->field13,
                ]
            );
            $model->field8 = $model->totalOrganization(
                [
                    $model->field9,
                    $model->field10,
                ]
            );
            $model->field6 = $model->totalOrganization(
                [
                    $model->field7,
                    $model->field8,
                ]
            );
            $model->field3 = $model->totalOrganization(
                [
                    $model->field4,
                    $model->field5,
                ]
            );
            $model->field1 = $model->totalOrganization(
                [
                    $model->field2,
                    $model->field3,
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

        return $this->render(
            'create',
            [
                'model' => $model,
                'organization' => $organization,
            ]
        );
    }

    /**
     * Updates an existing Table5 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $year = $model->year_study;
        $month = $model->month_status;
        if (Yii::$app->request->post())
        {
            $model->load(Yii::$app->request->post());
            $model->field78 = $model->totalOrganization(
                [
                    $model->field79,
                    $model->field80,
                ]
            );
            $model->field76 = $model->totalOrganization(
                [
                    $model->field77,
                    $model->field78,
                ]
            );
            $model->field73 = $model->totalOrganization(
                [
                    $model->field74,
                    $model->field75,
                ]
            );
            $model->field71 = $model->totalOrganization(
                [
                    $model->field72,
                    $model->field73,
                ]
            );
            $model->field68 = $model->totalOrganization(
                [
                    $model->field69,
                    $model->field70,
                ]
            );
            $model->field66 = $model->totalOrganization(
                [
                    $model->field67,
                    $model->field68,
                ]
            );
            $model->field63 = $model->totalOrganization(
                [
                    $model->field64,
                    $model->field65,
                ]
            );
            $model->field61 = $model->totalOrganization(
                [
                    $model->field62,
                    $model->field63,
                ]
            );
            $model->field58 = $model->totalOrganization(
                [
                    $model->field59,
                    $model->field60,
                ]
            );
            $model->field56 = $model->totalOrganization(
                [
                    $model->field57,
                    $model->field58,
                ]
            );
            $model->field53 = $model->totalOrganization(
                [
                    $model->field54,
                    $model->field55,
                ]
            );
            $model->field51 = $model->totalOrganization(
                [
                    $model->field52,
                    $model->field53,
                ]
            );
            $model->field48 = $model->totalOrganization(
                [
                    $model->field49,
                    $model->field50,
                ]
            );
            $model->field46 = $model->totalOrganization(
                [
                    $model->field47,
                    $model->field48,
                ]
            );
            $model->field43 = $model->totalOrganization(
                [
                    $model->field44,
                    $model->field45,
                ]
            );
            $model->field41 = $model->totalOrganization(
                [
                    $model->field42,
                    $model->field43,
                ]
            );
            $model->field38 = $model->totalOrganization(
                [
                    $model->field39,
                    $model->field40,
                ]
            );
            $model->field36 = $model->totalOrganization(
                [
                    $model->field37,
                    $model->field38,
                ]
            );
            $model->field33 = $model->totalOrganization(
                [
                    $model->field34,
                    $model->field35,
                ]
            );
            $model->field31 = $model->totalOrganization(
                [
                    $model->field32,
                    $model->field33,
                ]
            );
            $model->field28 = $model->totalOrganization(
                [
                    $model->field29,
                    $model->field30,
                ]
            );
            $model->field26 = $model->totalOrganization(
                [
                    $model->field27,
                    $model->field28,
                ]
            );
            $model->field23 = $model->totalOrganization(
                [
                    $model->field24,
                    $model->field25,
                ]
            );
            $model->field21 = $model->totalOrganization(
                [
                    $model->field22,
                    $model->field23,
                ]
            );
            $model->field18 = $model->totalOrganization(
                [
                    $model->field19,
                    $model->field20,
                ]
            );
            $model->field16 = $model->totalOrganization(
                [
                    $model->field17,
                    $model->field18,
                ]
            );
            $model->field13 = $model->totalOrganization(
                [
                    $model->field14,
                    $model->field15,
                ]
            );
            $model->field11 = $model->totalOrganization(
                [
                    $model->field12,
                    $model->field13,
                ]
            );
            $model->field8 = $model->totalOrganization(
                [
                    $model->field9,
                    $model->field10,
                ]
            );
            $model->field6 = $model->totalOrganization(
                [
                    $model->field7,
                    $model->field8,
                ]
            );
            $model->field3 = $model->totalOrganization(
                [
                    $model->field4,
                    $model->field5,
                ]
            );
            $model->field1 = $model->totalOrganization(
                [
                    $model->field2,
                    $model->field3,
                ]
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

        return $this->render(
            'update',
            [
                'model' => $model,
            ]
        );
    }

    public function actionReport()
    {
        $model = new Table5();
        $resultTable1 = '';
        $fed = 100;
        $reg = 0;
        $where = [];
        if (Yii::$app->request->post())
        {
            $post = Yii::$app->request->post()['Table5'];
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
            $resultTable1 = Table5::find()->where(['month_status' => $post['month_status']])->andWhere($where)->asArray()->all();
        }

        return $this->render('report', [
            'models' => $resultTable1,
            'fed' => $fed,
            'reg' => $reg,
            'model' => $model,
        ]);
    }

    /**
     * Finds the Table5 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Table5 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Table5::findOne($id)) !== null)
        {
            return $model;
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
        if (($model = Table5::find()->where(
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
