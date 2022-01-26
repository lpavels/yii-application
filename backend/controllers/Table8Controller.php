<?php

namespace backend\controllers;

use common\models\Organization;
use common\models\Table8;
use common\models\Table8Search;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Table8Controller implements the CRUD actions for Table8 model.
 */
class Table8Controller extends Controller
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
     * Lists all Table8 models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Table8Search();
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
     * Displays a single Table8 model.
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
     * Creates a new Table8 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Table8();
        $organization = $this->findOrganization(Yii::$app->user->identity->organization_id);
        if (Yii::$app->request->post())
        {
            $model->load(Yii::$app->request->post());
            //добавляем данные в модель,
            $model->user_id = Yii::$app->user->identity->id;
            $model->federal_district_id = $organization->federal_district_id;
            $model->region_id = $organization->region_id;
            $model->municipality_id = $organization->municipality_id;
            $model->field9 = $model->totalOrganization(
                [
                    $model->field10,
                    $model->field11,
                    $model->field12,
                ]
            );
            $model->field13 = $model->totalOrganization(
                [
                    $model->field9,
                    $model->field10,
                    $model->field11,
                    $model->field12,
                ]
            );
            $model->field7 = $model->totalOrganization(
                [
                    $model->field8,
                    $model->field9,
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
     * Updates an existing Table8 model.
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
            $model->field9 = $model->totalOrganization(
                [
                    $model->field10,
                    $model->field11,
                    $model->field12,
                ]
            );
            $model->field13 = $model->totalOrganization(
                [
                    $model->field9,
                    $model->field10,
                    $model->field11,
                    $model->field12,
                ]
            );
            $model->field7 = $model->totalOrganization(
                [
                    $model->field8,
                    $model->field9,
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
        $model = new Table8();
        $resultTable1 = '';
        $fed = 100;
        $reg = 0;
        $where = [];
        if (Yii::$app->request->post())
        {
            $post = Yii::$app->request->post()['Table8'];
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
            $resultTable1 = Table8::find()->where(['month_status' => $post['month_status']])->andWhere($where)->asArray()->all();
        }

        return $this->render('report', [
            'models' => $resultTable1,
            'fed' => $fed,
            'reg' => $reg,
            'model' => $model
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Table8::findOne($id)) !== null)
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
        if (($model = Table8::find()->where(
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
