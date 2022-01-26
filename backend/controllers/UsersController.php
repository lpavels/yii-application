<?php

namespace backend\controllers;

use common\models\Organization;
use common\models\ChangePassword;
use common\models\SignupForm;
use common\models\User;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\rbac\DbManager;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class UsersController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => [
                            'login',
                            'logout',
                            'create-user',
                            'change-password',
                            'profile',
                            'edit',
                            'report-anket1',
                            'report-anket2',
                            'report-anket3'
                        ],
                        'allow' => true,
                        'roles' => [
                            'admin',
                            'director_school',
                            'food_organizer',
                            'rospotrebnadzor',
                        ],
                    ],
                    [
                        'actions' => [
                            'profile',
                            'edit',
                        ],
                        'allow' => true,
                        'roles' => [
                            'curator',
                        ],
                    ],
                    [
                        'actions' => [
                            'index',
                        ],
                        'allow' => true,
                        'roles' => [
                            'admin',
                        ],
                    ],
                    [
                        'actions' => [
                            'rospotrebnadzor-index',
                            'login-school',
                        ],
                        'allow' => true,
                        'roles' => [
                            'admin',
                            'rospotrebnadzor',
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

    public function actionProfile()
    {
        $user = User::find()
            ->select(
                [
                    'user.name as name',
                    'user.login as login',
                    'organization.title as title',
                    'federal_district.name as federal_district',
                    'region.name as region',
                    'municipality.name as municipality',
                ]
            )
            ->leftJoin('organization', 'organization.id = user.organization_id')
            ->innerJoin('federal_district', 'federal_district.id = user.federal_district_id')
            ->innerJoin('region', 'region.id = user.region_id')
            ->innerJoin('municipality', 'municipality.id = user.municipality_id')
            ->where(['user.id' => Yii::$app->user->identity->id])
            ->asArray()
            ->one();

        $model = new User();
        $u_role = $model->get_role(Yii::$app->user->id);

        return $this->render('profile', [
            'user' => $user,
            'u_role' => $u_role,
        ]);
    }

    public function actionLogin($id)
    {
        $model = User::findOne($id);

        Yii::$app->user->login($model);

        return $this->redirect(['site/index']);
    }

    public function actionLoginSchool()
    {
        $post = Yii::$app->request->post();
        $model = User::findOne($post['id']);

        if ($model->federal_district_id === Yii::$app->user->identity->federal_district_id && $model->region_id === Yii::$app->user->identity->region_id)
        {
            Yii::$app->user->login($model);
            return $this->redirect(['site/index']);
        }
        else
        {
            Yii::$app->session->setFlash(
                "error",
                "У Вас нет доступа, сообщите об этом в чате!"
            );
            return $this->redirect(Yii::$app->request->referrer);
        }
    }

    public function actionRospotrebnadzorIndex()
    {
        if (Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }

        if (Yii::$app->user->can('rospotrebnadzor') || Yii::$app->user->can('admin'))
        {
            $whereUser = [
                'organization.federal_district_id' => Yii::$app->user->identity->federal_district_id,
                'organization.region_id' => Yii::$app->user->identity->region_id,
                'user.status' => 10,
            ];
            //3-food_organizer
            //5-school
            $whereOrganization = [
                'or',
                ['organization.organization_type_id' => '3'],
                ['organization.organization_type_id' => '5']
            ];
            $query = (new \yii\db\Query());
            $query->select(
                [
                    'user.id as userId',
                    'user.name as userName',
                    'organization_type.decryption as decryptionOrganizationType',
                    'organization.title as organizationTitle',
                ]
            );
            $query->from('organization');
            $query->innerJoin('user', 'user.organization_id = organization.id');
            $query->innerJoin('organization_type', 'organization.organization_type_id = organization_type.id');
            $query->where($whereUser);
            $query->andWhere($whereOrganization);

            $dataProvider = new ActiveDataProvider([
                'query' => $query,
                'pagination' => [
                    'pageSize' => 100,
                ],
                'sort' => [
                    'defaultOrder' => [
                        //'organization.title' => SORT_DESC,
                        //'title' => SORT_ASC,
                    ],
                ],
            ]);

            return $this->render('rospotrebnadzor-index', [
                'dataProvider' => $dataProvider,
            ]);
        }
        else
        {
            return $this->goHome();
        }

    }

    public function actionEdit()
    {
        $model = User::findOne(Yii::$app->user->identity->id);

        return $this->render('edit', [
            'model' => $model,
        ]);
    }

    public function actionCreateUser()
    {
        if (Yii::$app->user->can('admin'))
        {
            $done = 'no';
            $org = new Organization();
            $org->title = 'Центральный аппарат';
            $org->federal_district_id = '7';
            $org->region_id = '69';
            $org->municipality_id = '1215';
            if ($org->save())
            {
                $user = new User();
                $user->name = 'Центральный аппарат';
                $user->login = 'gsen2021';
                $user->organization_id = $org->id;
                $user->parent_id = 0;
                $user->email = 'gsen';
                $user->phone = 'gsen';
                $user->post = 'gsen';
                $user->application = 1;
                $user->setPassword('mskgsen2021');
                $user->generateAuthKey();
                if ($user->save())
                {
                    $r = new DbManager();
                    $r->init();
                    $assign = $r->createRole('admin');
                    $r->assign($assign, $user->id);
                    $done = 'yes';
                }
            }
            print_r($done);
            die();
        }
        else
        {
            print_r(34534534);
            die();
        }
    }

    public function actionIndex()
    {
        if (Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }

        if (Yii::$app->user->can('admin'))
        {
            $dataProvider = new ActiveDataProvider([
                'query' => User::find()->where(['status' => 10]),
                'pagination' => [
                    'pageSize' => 20,
                ],
                'sort' => [
                    'defaultOrder' => [
                        'created_at' => SORT_DESC,
                        //'title' => SORT_ASC,
                    ],
                ],
            ]);

            return $this->render('index', [
                'dataProvider' => $dataProvider,
            ]);
        }
        else
        {
            return $this->goHome();
        }
    }

    public function actionChangePassword()
    {
        $passChange = new ChangePassword();

        if ($passChange->load(Yii::$app->request->post()) && $passChange->validate())
        {
            $user = User::findOne(Yii::$app->user->id);
            $user->setPassword(Yii::$app->request->post()['PasswordChange']['password_new']);
            if ($user->save())
            {
                Yii::$app->session->setFlash('success', "ПАРОЛЬ ИЗМЕНЕН");
                return $this->redirect(['change-password']);
            }
        }

        return $this->render('change-password', [
            'model' => $passChange
        ]);
    }

    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null)
        {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionReportAnket1()
    {
        $model = new User();
        if (Yii::$app->request->post())
        {
            $post = Yii::$app->request->post()['User'];
            return $this->render('report-anket1', [
                'model' => $model,
                'post' => $post,
            ]);
        }
        return $this->render('report-anket1',
            [
                'model' => $model
            ]);
    }

    public function actionReportAnket2()
    {
        $model = new User();
        if (Yii::$app->request->post())
        {
            $post = Yii::$app->request->post()['User'];
            return $this->render('report-anket2', [
                'model' => $model,
                'post' => $post,
            ]);
        }
        return $this->render('report-anket2',
            [
                'model' => $model
            ]);
    }

    public function actionReportAnket3()
    {
        $model = new User();
        if (Yii::$app->request->post())
        {
            $post = Yii::$app->request->post()['User'];
            return $this->render('report-anket3', [
                'model' => $model,
                'post' => $post,
            ]);
        }
        return $this->render('report-anket3',
            [
                'model' => $model
            ]);
    }
}
