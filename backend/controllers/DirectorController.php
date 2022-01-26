<?php

namespace backend\controllers;

use common\models\DirectorSearch;
use common\models\DirectorTable4;
use common\models\DirectorTable5;
use common\models\DirectorTable6;
use common\models\DirectorTable7;
use common\models\DirectorTable8;
use common\models\DirectorTable9;
use common\models\DirectorTable10;
use common\models\DirectorTable11;
use common\models\DirectorTable12;
use common\models\DirectorTable13;
use common\models\DirectorTable14;
use common\models\DirectorTable15;
use common\models\DirectorTable16;
use common\models\DirectorTable17;
use common\models\DirectorTable18;
use common\models\DirectorTable19;
use common\models\DirectorTable20;
use common\models\DirectorTable21;
use common\models\DirectorTable23;
use common\models\DirectorTable24;
use common\models\DirectorTable25;
use common\models\DirectorTable26;
use common\models\DirectorTable27;
use common\models\DirectorTable28;
use common\models\DirectorTable29;
use common\models\DirectorTable30;
use common\models\DirectorTable31;
use common\models\DirectorTable32;
use common\models\DirectorTable33;
use Mpdf\Mpdf;
use Yii;
use common\models\Director;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DirectorController implements the CRUD actions for Director model.
 */
class DirectorController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => [
                            'index',
                            'view',
                            'print-anket',
                        ],
                        'allow' => true,
                        'roles' => [
                            'admin',
                            'director_school',
                            'rospotrebnadzor',
                        ],
                    ],
                    [
                        'actions' => [
                            'create',
                        ],
                        'allow' => true,
                        'roles' => [
                            'admin',
                            'director_school',
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

    public function actionIndex()
    {
        if (Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }

        $model = $this->findModel(Yii::$app->user->identity->id);
        $searchModel = new DirectorSearch();
        $search = Yii::$app->request->queryParams;
        $region_items = [];
        $dataProvider = $searchModel->search($search);
        if ($search)
        {
            $region_items = Yii::$app->myComponent->RegionItems($search['DirectorSearch']['federal_district_id']);
            $municipality_items = Yii::$app->myComponent->MunicipalityItems($search['DirectorSearch']['region_id']);
        }

        return $this->render('index', [
            'status' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
            'region_items' => $region_items,
            'municipality_items' => $municipality_items,
        ]);
    }

    public function actionView($id)
    {
        /* $query = (new \yii\db\Query());
        $query->from('director');
        $query->leftJoin('director_table_4', 'director_table_4.id = director.table_4');
        $query->leftJoin('director_table_5', 'director_table_5.id = director.table_5');
        $query->where(['director.id'=>$id]);
        //$query->asArray();
        $query->all();

        $messages_user = Director::find()
            ->innerJoin('director_table_4', 'director_table_4.id = director.table_4')
            ->innerJoin('director_table_5', 'director_table_5.id = director.table_5')
            ->where(['director.id'=>$id])
            ->asArray()
            ->one();

        //$model_ter = new Therapist();
        //$model_ter->attributes = $ter->attributes;
        //$model_ter->user_id = $model->id;
        //$model_ter->save(false);

        print_r($messages_user);
        exit();*/
        /*$messages_user = Chat::find()
            ->select(
                [
                    'chat.id as chat_id',
                    'chat.sender_user_id',
                    'chat.receiver_user_id',
                    'chat.message',
                    'chat.status',
                    'chat.created_at',
                    'auth_assignment.item_name',
                    #'user.type_listener',
                    #'user.training_id',
                    'user.name as u_name',
                    'user.login as u_login',
                    'organization.id as org_id',
                    'organization.title as org_title',

                ]
            )
            ->leftJoin('user', 'user.id=chat.sender_user_id')
            ->leftJoin('organization', 'organization.id=user.organization_id')
            ->leftJoin('auth_assignment', 'auth_assignment.user_id=user.id')
            ->where(['chat.sender_user_id' => $id])
            ->orWhere(['chat.receiver_user_id' => $id])
            ->asArray()
            ->all();*/
        /*$ter = Therapist::find()->where(['user_id' => $id])->one(); //сколько было продублировано пациентов
        if (!empty($ter)) {
            $model_ter = new Therapist();
            $model_ter->attributes = $ter->attributes;
            $model_ter->user_id = $model->id;
            $model_ter->save(false);
        }*/
        if (Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }
        $stausButtom = 1;
        $model = $this->findModelId($id);
        $directorTable4 = $this->findModelDirectorTable4(
            $model->table_4
        );
        $directorTable5 = $this->findModelDirectorTable5(
            $model->table_5
        );
        $directorTable6 = $this->findModelDirectorTable6(
            $model->table_6
        );
        $directorTable7 = $this->findModelDirectorTable7(
            $model->table_7
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable8 = $this->findModelDirectorTable8(
            $model->table_8
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable9 = $this->findModelDirectorTable9(
            $model->table_9
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable10 = $this->findModelDirectorTable10(
            $model->table_10
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable11 = $this->findModelDirectorTable11(
            $model->table_11
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable12 = $this->findModelDirectorTable12(
            $model->table_12
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable13 = $this->findModelDirectorTable13(
            $model->table_13
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable14 = $this->findModelDirectorTable14(
            $model->table_14
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable15 = $this->findModelDirectorTable15(
            $model->table_15
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable16 = $this->findModelDirectorTable16(
            $model->table_16
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable17 = $this->findModelDirectorTable17(
            $model->table_17
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable18 = $this->findModelDirectorTable18(
            $model->table_18
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable19 = $this->findModelDirectorTable19(
            $model->table_19
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable20 = $this->findModelDirectorTable20(
            $model->table_20
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable21 = $this->findModelDirectorTable21(
            $model->table_21
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable23 = $this->findModelDirectorTable23(
            $model->table_23
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable24 = $this->findModelDirectorTable24(
            $model->table_24
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable25 = $this->findModelDirectorTable25(
            $model->table_25
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable26 = $this->findModelDirectorTable26(
            $model->table_26
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable27 = $this->findModelDirectorTable27(
            $model->table_27
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable28 = $this->findModelDirectorTable28(
            $model->table_28
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable29 = $this->findModelDirectorTable29(
            $model->table_29
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable30 = $this->findModelDirectorTable30(
            $model->table_30
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable31 = $this->findModelDirectorTable31(
            $model->table_31
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable32 = $this->findModelDirectorTable32(
            $model->table_32
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable33 = $this->findModelDirectorTable33(
            $model->table_33
        );//проверяем модель существует или нет! для редактирования и внесения
        return $this->render('view', [
            'model' => $model,
            'stausButtom' => $stausButtom,
            'directorTable4' => $directorTable4,
            'directorTable5' => $directorTable5,
            'directorTable6' => $directorTable6,
            'directorTable7' => $directorTable7,
            'directorTable8' => $directorTable8,
            'directorTable9' => $directorTable9,
            'directorTable10' => $directorTable10,
            'directorTable11' => $directorTable11,
            'directorTable12' => $directorTable12,
            'directorTable13' => $directorTable13,
            'directorTable14' => $directorTable14,
            'directorTable15' => $directorTable15,
            'directorTable16' => $directorTable16,
            'directorTable17' => $directorTable17,
            'directorTable18' => $directorTable18,
            'directorTable19' => $directorTable19,
            'directorTable20' => $directorTable20,
            'directorTable21' => $directorTable21,
            'directorTable23' => $directorTable23,
            'directorTable24' => $directorTable24,
            'directorTable25' => $directorTable25,
            'directorTable26' => $directorTable26,
            'directorTable27' => $directorTable27,
            'directorTable28' => $directorTable28,
            'directorTable29' => $directorTable29,
            'directorTable30' => $directorTable30,
            'directorTable31' => $directorTable31,
            'directorTable32' => $directorTable32,
            'directorTable33' => $directorTable33,
        ]);
    }

    public function actionCreate()
    {
        //$model = new Director();
        //$directorTable4 = new DirectorTable4();
        //$directorTable5 = new DirectorTable5();
        //$id = Yii::$app->user->identity->id;
        if (Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }
        $model = $this->findModel(Yii::$app->user->identity->id);
        $directorTable4 = $this->findModelDirectorTable4(
            $model->table_4
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable5 = $this->findModelDirectorTable5(
            $model->table_5
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable6 = $this->findModelDirectorTable6(
            $model->table_6
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable7 = $this->findModelDirectorTable7(
            $model->table_7
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable8 = $this->findModelDirectorTable8(
            $model->table_8
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable9 = $this->findModelDirectorTable9(
            $model->table_9
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable10 = $this->findModelDirectorTable10(
            $model->table_10
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable11 = $this->findModelDirectorTable11(
            $model->table_11
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable12 = $this->findModelDirectorTable12(
            $model->table_12
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable13 = $this->findModelDirectorTable13(
            $model->table_13
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable14 = $this->findModelDirectorTable14(
            $model->table_14
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable15 = $this->findModelDirectorTable15(
            $model->table_15
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable16 = $this->findModelDirectorTable16(
            $model->table_16
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable17 = $this->findModelDirectorTable17(
            $model->table_17
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable18 = $this->findModelDirectorTable18(
            $model->table_18
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable19 = $this->findModelDirectorTable19(
            $model->table_19
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable20 = $this->findModelDirectorTable20(
            $model->table_20
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable21 = $this->findModelDirectorTable21(
            $model->table_21
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable23 = $this->findModelDirectorTable23(
            $model->table_23
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable24 = $this->findModelDirectorTable24(
            $model->table_24
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable25 = $this->findModelDirectorTable25(
            $model->table_25
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable26 = $this->findModelDirectorTable26(
            $model->table_26
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable27 = $this->findModelDirectorTable27(
            $model->table_27
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable28 = $this->findModelDirectorTable28(
            $model->table_28
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable29 = $this->findModelDirectorTable29(
            $model->table_29
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable30 = $this->findModelDirectorTable30(
            $model->table_30
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable31 = $this->findModelDirectorTable31(
            $model->table_31
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable32 = $this->findModelDirectorTable32(
            $model->table_32
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable33 = $this->findModelDirectorTable33(
            $model->table_33
        );//проверяем модель существует или нет! для редактирования и внесения

        if (Yii::$app->request->post())
        {
            /* $ter = Therapist::find()->where(['user_id' => $id])->one(); //сколько было продублировано пациентов
             if (!empty($ter)) {
                 $model_ter = new Therapist();
                 $model_ter->attributes = $ter->attributes;
                 $model_ter->user_id = $model->id;
                 $model_ter->save(false);
             }*/
            //$directorTable6->attributes = Yii::$app->request->post()['DirectorTable6'];
            //print_r($directorTable6);
            //print_r('<br><br><br><br>');

            $status = true;
            $directorTable4->load(Yii::$app->request->post());
            $directorTable5->load(Yii::$app->request->post());
            $directorTable6->load(Yii::$app->request->post());
            $directorTable7->load(Yii::$app->request->post());
            $directorTable8->load(Yii::$app->request->post());
            $directorTable9->load(Yii::$app->request->post());
            $directorTable10->load(Yii::$app->request->post());
            $directorTable11->load(Yii::$app->request->post());
            $directorTable12->load(Yii::$app->request->post());
            $directorTable13->load(Yii::$app->request->post());
            $directorTable14->load(Yii::$app->request->post());
            $directorTable15->load(Yii::$app->request->post());
            $directorTable16->load(Yii::$app->request->post());
            $directorTable17->load(Yii::$app->request->post());
            $directorTable18->load(Yii::$app->request->post());
            $directorTable19->load(Yii::$app->request->post());
            $directorTable20->load(Yii::$app->request->post());
            $directorTable21->load(Yii::$app->request->post());
            $directorTable23->load(Yii::$app->request->post());
            $directorTable24->load(Yii::$app->request->post());
            $directorTable25->load(Yii::$app->request->post());
            $directorTable26->load(Yii::$app->request->post());
            $directorTable27->load(Yii::$app->request->post());
            $directorTable28->load(Yii::$app->request->post());
            $directorTable29->load(Yii::$app->request->post());
            $directorTable30->load(Yii::$app->request->post());
            $directorTable31->load(Yii::$app->request->post());
            $directorTable32->load(Yii::$app->request->post());
            $directorTable33->load(Yii::$app->request->post());

            //print_r(Yii::$app->request->post());
            //print_r('<br><br><br><br>');
            //print_r(Yii::$app->request->post());
            //print_r('<br><br><br><br>');


            if ($status === true)
            {
                $directorTable4->user_id = Yii::$app->user->identity->id;
                $arryaTable4 = [
                    ['field4_4', [$directorTable4->field4_1, $directorTable4->field4_2, $directorTable4->field4_3]],
                    ['field4_8', [$directorTable4->field4_5, $directorTable4->field4_6, $directorTable4->field4_7]],
                    ['field4_12', [$directorTable4->field4_9, $directorTable4->field4_10, $directorTable4->field4_11]],
                    ['field4_16', [$directorTable4->field4_13, $directorTable4->field4_14, $directorTable4->field4_15]],
                    ['field4_20', [$directorTable4->field4_17, $directorTable4->field4_18, $directorTable4->field4_19]],
                    ['field4_24', [$directorTable4->field4_21, $directorTable4->field4_22, $directorTable4->field4_23]],
                ];
                for ($i = 0; $i < count($arryaTable4); $i++)
                {
                    $directorTable4[$arryaTable4[$i][0]] = array_sum($arryaTable4[$i][1]);
                }
                if ($directorTable4->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 4"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable5->user_id = Yii::$app->user->identity->id;
                $arryaTable5 = [
                    ['field5_4', [$directorTable5->field5_1, $directorTable5->field5_2, $directorTable5->field5_3]],
                    ['field5_8', [$directorTable5->field5_5, $directorTable5->field5_6, $directorTable5->field5_7]],
                ];
                for ($i = 0; $i < count($arryaTable5); $i++)
                {
                    $directorTable5[$arryaTable5[$i][0]] = array_sum($arryaTable5[$i][1]);
                }
                if ($directorTable5->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 5"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable6->user_id = Yii::$app->user->identity->id;
                $arryaTable6 = [
                    ['field6_4', [$directorTable6->field6_1, $directorTable6->field6_2, $directorTable6->field6_3]],
                    ['field6_8', [$directorTable6->field6_5, $directorTable6->field6_6, $directorTable6->field6_7]],
                    ['field6_12', [$directorTable6->field6_9, $directorTable6->field6_10, $directorTable6->field6_11]],
                    ['field6_16', [$directorTable6->field6_13, $directorTable6->field6_14, $directorTable6->field6_15]],
                    ['field6_20', [$directorTable6->field6_17, $directorTable6->field6_18, $directorTable6->field6_19]],
                    ['field6_24', [$directorTable6->field6_21, $directorTable6->field6_22, $directorTable6->field6_23]],
                    ['field6_28', [$directorTable6->field6_25, $directorTable6->field6_26, $directorTable6->field6_27]],
                    ['field6_32', [$directorTable6->field6_29, $directorTable6->field6_30, $directorTable6->field6_31]],
                ];
                for ($i = 0; $i < count($arryaTable6); $i++)
                {
                    $directorTable6[$arryaTable6[$i][0]] = array_sum($arryaTable6[$i][1]);
                }
                if ($directorTable6->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 6"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable7->user_id = Yii::$app->user->identity->id;
                $arryaTable7 = [
                    ['field7_4', [$directorTable7->field7_1, $directorTable7->field7_2, $directorTable7->field7_3]],
                    ['field7_8', [$directorTable7->field7_5, $directorTable7->field7_6, $directorTable7->field7_7]],
                    ['field7_12', [$directorTable7->field7_9, $directorTable7->field7_10, $directorTable7->field7_11]],
                    ['field7_16', [$directorTable7->field7_13, $directorTable7->field7_14, $directorTable7->field7_15]],
                    ['field7_20', [$directorTable7->field7_17, $directorTable7->field7_18, $directorTable7->field7_19]],
                    ['field7_24', [$directorTable7->field7_21, $directorTable7->field7_22, $directorTable7->field7_23]],
                ];
                for ($i = 0; $i < count($arryaTable7); $i++)
                {
                    $directorTable7[$arryaTable7[$i][0]] = array_sum($arryaTable7[$i][1]);
                }
                if ($directorTable7->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 7"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable8->user_id = Yii::$app->user->identity->id;
                $arryaTable8 = [
                    ['field8_4', [$directorTable8->field8_1, $directorTable8->field8_2, $directorTable8->field8_3]],
                    ['field8_8', [$directorTable8->field8_5, $directorTable8->field8_6, $directorTable8->field8_7]],
                    ['field8_12', [$directorTable8->field8_9, $directorTable8->field8_10, $directorTable8->field8_11]],
                    ['field8_16', [$directorTable8->field8_13, $directorTable8->field8_14, $directorTable8->field8_15]],
                    ['field8_20', [$directorTable8->field8_17, $directorTable8->field8_18, $directorTable8->field8_19]],
                    ['field8_24', [$directorTable8->field8_21, $directorTable8->field8_22, $directorTable8->field8_23]],
                ];
                for ($i = 0; $i < count($arryaTable8); $i++)
                {
                    $directorTable8[$arryaTable8[$i][0]] = array_sum($arryaTable8[$i][1]);
                }
                if ($directorTable8->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 8"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable9->user_id = Yii::$app->user->identity->id;
                $arryaTable9 = [
                    ['field9_4', [$directorTable9->field9_1, $directorTable9->field9_2, $directorTable9->field9_3]],
                    ['field9_8', [$directorTable9->field9_5, $directorTable9->field9_6, $directorTable9->field9_7]],
                    ['field9_12', [$directorTable9->field9_9, $directorTable9->field9_10, $directorTable9->field9_11]],
                    ['field9_16', [$directorTable9->field9_13, $directorTable9->field9_14, $directorTable9->field9_15]],
                    ['field9_20', [$directorTable9->field9_17, $directorTable9->field9_18, $directorTable9->field9_19]],
                    ['field9_24', [$directorTable9->field9_21, $directorTable9->field9_22, $directorTable9->field9_23]],
                ];
                for ($i = 0; $i < count($arryaTable9); $i++)
                {
                    $directorTable9[$arryaTable9[$i][0]] = array_sum($arryaTable9[$i][1]);
                }
                if ($directorTable9->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 9"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable10->user_id = Yii::$app->user->identity->id;
                $arryaTable10 = [
                    ['field10_4', [$directorTable10->field10_1, $directorTable10->field10_2, $directorTable10->field10_3]],
                    ['field10_8', [$directorTable10->field10_5, $directorTable10->field10_6, $directorTable10->field10_7]],
                    ['field10_12', [$directorTable10->field10_9, $directorTable10->field10_10, $directorTable10->field10_11]],
                    ['field10_16', [$directorTable10->field10_13, $directorTable10->field10_14, $directorTable10->field10_15]],
                    ['field10_20', [$directorTable10->field10_17, $directorTable10->field10_18, $directorTable10->field10_19]],
                    ['field10_24', [$directorTable10->field10_21, $directorTable10->field10_22, $directorTable10->field10_23]],
                ];
                for ($i = 0; $i < count($arryaTable10); $i++)
                {
                    $directorTable10[$arryaTable10[$i][0]] = array_sum($arryaTable10[$i][1]);
                }
                if ($directorTable10->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 10"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable11->user_id = Yii::$app->user->identity->id;
                if ($directorTable11->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 11"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable12->user_id = Yii::$app->user->identity->id;
                $arryaTable12 = [
                    ['field12_4', [$directorTable12->field12_1, $directorTable12->field12_2, $directorTable12->field12_3]],
                    ['field12_8', [$directorTable12->field12_5, $directorTable12->field12_6, $directorTable12->field12_7]],
                    ['field12_12', [$directorTable12->field12_9, $directorTable12->field12_10, $directorTable12->field12_11]],
                    ['field12_16', [$directorTable12->field12_13, $directorTable12->field12_14, $directorTable12->field12_15]],
                    ['field12_20', [$directorTable12->field12_17, $directorTable12->field12_18, $directorTable12->field12_19]],
                    ['field12_24', [$directorTable12->field12_21, $directorTable12->field12_22, $directorTable12->field12_23]],
                ];
                for ($i = 0; $i < count($arryaTable12); $i++)
                {
                    $directorTable12[$arryaTable12[$i][0]] = array_sum($arryaTable12[$i][1]);
                }

                if ($directorTable12->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 12"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable13->user_id = Yii::$app->user->identity->id;
                $arryaTable13 = [
                    ['field13_4', [$directorTable13->field13_1, $directorTable13->field13_2, $directorTable13->field13_3]],
                    ['field13_8', [$directorTable13->field13_5, $directorTable13->field13_6, $directorTable13->field13_7]],
                    ['field13_12', [$directorTable13->field13_9, $directorTable13->field13_10, $directorTable13->field13_11]],
                    ['field13_16', [$directorTable13->field13_13, $directorTable13->field13_14, $directorTable13->field13_15]],
                    ['field13_20', [$directorTable13->field13_17, $directorTable13->field13_18, $directorTable13->field13_19]],
                    ['field13_24', [$directorTable13->field13_21, $directorTable13->field13_22, $directorTable13->field13_23]],
                ];
                for ($i = 0; $i < count($arryaTable13); $i++)
                {
                    $directorTable13[$arryaTable13[$i][0]] = array_sum($arryaTable13[$i][1]);
                }
                if ($directorTable13->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 13"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable14->user_id = Yii::$app->user->identity->id;
                $arryaTable14 = [
                    ['field14_4', [$directorTable14->field14_1, $directorTable14->field14_2, $directorTable14->field14_3]],
                    ['field14_8', [$directorTable14->field14_5, $directorTable14->field14_6, $directorTable14->field14_7]],
                    ['field14_12', [$directorTable14->field14_9, $directorTable14->field14_10, $directorTable14->field14_11]],
                    ['field14_16', [$directorTable14->field14_13, $directorTable14->field14_14, $directorTable14->field14_15]],
                    ['field14_20', [$directorTable14->field14_17, $directorTable14->field14_18, $directorTable14->field14_19]],
                    ['field14_24', [$directorTable14->field14_21, $directorTable14->field14_22, $directorTable14->field14_23]],
                ];
                for ($i = 0; $i < count($arryaTable14); $i++)
                {
                    $directorTable14[$arryaTable14[$i][0]] = array_sum($arryaTable14[$i][1]);
                }
                if ($directorTable14->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 14"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable15->user_id = Yii::$app->user->identity->id;
                $arryaTable15 = [
                    ['field15_4', [$directorTable15->field15_1, $directorTable15->field15_2, $directorTable15->field15_3]],
                    ['field15_8', [$directorTable15->field15_5, $directorTable15->field15_6, $directorTable15->field15_7]],
                    ['field15_12', [$directorTable15->field15_9, $directorTable15->field15_10, $directorTable15->field15_11]],
                    ['field15_16', [$directorTable15->field15_13, $directorTable15->field15_14, $directorTable15->field15_15]],
                    ['field15_20', [$directorTable15->field15_17, $directorTable15->field15_18, $directorTable15->field15_19]],
                    ['field15_24', [$directorTable15->field15_21, $directorTable15->field15_22, $directorTable15->field15_23]],
                ];
                for ($i = 0; $i < count($arryaTable15); $i++)
                {
                    $directorTable15[$arryaTable15[$i][0]] = array_sum($arryaTable15[$i][1]);
                }
                if ($directorTable15->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 15"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable16->user_id = Yii::$app->user->identity->id;
                $arryaTable16 = [
                    ['field16_4', [$directorTable16->field16_1, $directorTable16->field16_2, $directorTable16->field16_3]],
                    ['field16_8', [$directorTable16->field16_5, $directorTable16->field16_6, $directorTable16->field16_7]],
                    ['field16_12', [$directorTable16->field16_9, $directorTable16->field16_10, $directorTable16->field16_11]],
                    ['field16_16', [$directorTable16->field16_13, $directorTable16->field16_14, $directorTable16->field16_15]],
                    ['field16_20', [$directorTable16->field16_17, $directorTable16->field16_18, $directorTable16->field16_19]],
                    ['field16_24', [$directorTable16->field16_21, $directorTable16->field16_22, $directorTable16->field16_23]],
                ];
                for ($i = 0; $i < count($arryaTable16); $i++)
                {
                    $directorTable16[$arryaTable16[$i][0]] = array_sum($arryaTable16[$i][1]);
                }
                if ($directorTable16->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 16"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable17->user_id = Yii::$app->user->identity->id;
                $arryaTable17 = [
                    ['field17_4', [$directorTable17->field17_1, $directorTable17->field17_2, $directorTable17->field17_3]],
                    ['field17_8', [$directorTable17->field17_5, $directorTable17->field17_6, $directorTable17->field17_7]],
                    ['field17_12', [$directorTable17->field17_9, $directorTable17->field17_10, $directorTable17->field17_11]],
                    ['field17_16', [$directorTable17->field17_13, $directorTable17->field17_14, $directorTable17->field17_15]],
                    ['field17_20', [$directorTable17->field17_17, $directorTable17->field17_18, $directorTable17->field17_19]],
                    ['field17_24', [$directorTable17->field17_21, $directorTable17->field17_22, $directorTable17->field17_23]],
                ];
                for ($i = 0; $i < count($arryaTable17); $i++)
                {
                    $directorTable17[$arryaTable17[$i][0]] = array_sum($arryaTable17[$i][1]);
                }
                if ($directorTable17->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 17"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable18->user_id = Yii::$app->user->identity->id;
                if ($directorTable18->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 18"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable19->user_id = Yii::$app->user->identity->id;
                if ($directorTable19->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 19"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable20->user_id = Yii::$app->user->identity->id;
                if ($directorTable20->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 20"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable21->user_id = Yii::$app->user->identity->id;
                if ($directorTable21->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 21"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable23->user_id = Yii::$app->user->identity->id;
                $arryaTable23 = [
                    ['field23_4', [$directorTable23->field23_1, $directorTable23->field23_2, $directorTable23->field23_3]],
                    ['field23_8', [$directorTable23->field23_5, $directorTable23->field23_6, $directorTable23->field23_7]],
                    ['field23_12', [$directorTable23->field23_9, $directorTable23->field23_10, $directorTable23->field23_11]],
                    ['field23_16', [$directorTable23->field23_13, $directorTable23->field23_14, $directorTable23->field23_15]],
                    ['field23_20', [$directorTable23->field23_23, $directorTable23->field23_18, $directorTable23->field23_19]],
                    ['field23_24', [$directorTable23->field23_21, $directorTable23->field23_22, $directorTable23->field23_23]],
                    ['field23_28', [$directorTable23->field23_25, $directorTable23->field23_26, $directorTable23->field23_27]],
                    ['field23_32', [$directorTable23->field23_29, $directorTable23->field23_30, $directorTable23->field23_31]],
                    ['field23_36', [$directorTable23->field23_33, $directorTable23->field23_34, $directorTable23->field23_35]],
                    ['field23_40', [$directorTable23->field23_37, $directorTable23->field23_38, $directorTable23->field23_39]],
                    ['field23_44', [$directorTable23->field23_41, $directorTable23->field23_42, $directorTable23->field23_43]],
                    ['field23_48', [$directorTable23->field23_45, $directorTable23->field23_46, $directorTable23->field23_47]],
                    ['field23_52', [$directorTable23->field23_49, $directorTable23->field23_50, $directorTable23->field23_51]],
                    ['field23_56', [$directorTable23->field23_53, $directorTable23->field23_54, $directorTable23->field23_55]],
                    ['field23_60', [$directorTable23->field23_57, $directorTable23->field23_58, $directorTable23->field23_59]],
                    ['field23_64', [$directorTable23->field23_61, $directorTable23->field23_62, $directorTable23->field23_63]],
                    ['field23_68', [$directorTable23->field23_65, $directorTable23->field23_66, $directorTable23->field23_67]],
                    ['field23_72', [$directorTable23->field23_69, $directorTable23->field23_70, $directorTable23->field23_71]],
                    ['field23_76', [$directorTable23->field23_73, $directorTable23->field23_74, $directorTable23->field23_75]],
                    ['field23_80', [$directorTable23->field23_77, $directorTable23->field23_78, $directorTable23->field23_79]],
                    ['field23_84', [$directorTable23->field23_81, $directorTable23->field23_82, $directorTable23->field23_83]],
                    ['field23_88', [$directorTable23->field23_85, $directorTable23->field23_86, $directorTable23->field23_87]],
                    ['field23_92', [$directorTable23->field23_89, $directorTable23->field23_90, $directorTable23->field23_91]],
                ];
                for ($i = 0; $i < count($arryaTable23); $i++)
                {
                    $directorTable23[$arryaTable23[$i][0]] = array_sum($arryaTable23[$i][1]);
                }
                if ($directorTable23->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 23"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable24->user_id = Yii::$app->user->identity->id;
                if ($directorTable24->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 24"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable25->user_id = Yii::$app->user->identity->id;
                if ($directorTable25->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 25"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable26->user_id = Yii::$app->user->identity->id;
                if ($directorTable26->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 26"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable27->user_id = Yii::$app->user->identity->id;
                if ($directorTable27->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 27"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable28->user_id = Yii::$app->user->identity->id;
                if ($directorTable28->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 28"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable29->user_id = Yii::$app->user->identity->id;
                $arryaTable29 = [
                    ['field29_4', [$directorTable29->field29_1, $directorTable29->field29_2, $directorTable29->field29_3]],
                    ['field29_8', [$directorTable29->field29_5, $directorTable29->field29_6, $directorTable29->field29_7]],
                    ['field29_12', [$directorTable29->field29_9, $directorTable29->field29_10, $directorTable29->field29_11]],
                    ['field29_16', [$directorTable29->field29_13, $directorTable29->field29_14, $directorTable29->field29_15]],
                ];
                for ($i = 0; $i < count($arryaTable29); $i++)
                {
                    $directorTable29[$arryaTable29[$i][0]] = array_sum($arryaTable29[$i][1]);
                }
                if ($directorTable29->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 29"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable30->user_id = Yii::$app->user->identity->id;
                $arryaTable30 = [
                    ['field30_4', [$directorTable30->field30_1, $directorTable30->field30_2, $directorTable30->field30_3]],
                    ['field30_8', [$directorTable30->field30_5, $directorTable30->field30_6, $directorTable30->field30_7]],
                    ['field30_12', [$directorTable30->field30_9, $directorTable30->field30_10, $directorTable30->field30_11]],
                ];
                for ($i = 0; $i < count($arryaTable30); $i++)
                {
                    $directorTable30[$arryaTable30[$i][0]] = array_sum($arryaTable30[$i][1]);
                }
                if ($directorTable30->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 30"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable31->user_id = Yii::$app->user->identity->id;
                if ($directorTable31->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 31"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable32->user_id = Yii::$app->user->identity->id;
                if ($directorTable32->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 32"
                    );
                }
            }

            if ($status === true)
            {
                $directorTable33->user_id = Yii::$app->user->identity->id;
                if ($directorTable33->validate())
                {
                    $status = true;
                }
                else
                {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 33"
                    );
                }
            }

            //СОХРАНЯЕМ ДАННЫЕ!
            if ($status === true)
            {
                $directorTable4->save(false);
                $directorTable5->save(false);
                $directorTable6->save(false);
                $directorTable7->save(false);
                $directorTable8->save(false);
                $directorTable9->save(false);
                $directorTable10->save(false);
                $directorTable11->save(false);
                $directorTable12->save(false);
                $directorTable13->save(false);
                $directorTable14->save(false);
                $directorTable15->save(false);
                $directorTable16->save(false);
                $directorTable17->save(false);
                $directorTable18->save(false);
                $directorTable19->save(false);
                $directorTable20->save(false);
                $directorTable21->save(false);
                $directorTable23->save(false);
                $directorTable24->save(false);
                $directorTable25->save(false);
                $directorTable26->save(false);
                $directorTable27->save(false);
                $directorTable28->save(false);
                $directorTable29->save(false);
                $directorTable30->save(false);
                $directorTable31->save(false);
                $directorTable32->save(false);
                $directorTable33->save(false);
                $model->user_id = Yii::$app->user->identity->id;
                $model->organization_id = Yii::$app->user->identity->organization_id;
                $model->table_4 = $directorTable4->id;
                $model->table_5 = $directorTable5->id;
                $model->table_6 = $directorTable6->id;
                $model->table_7 = $directorTable7->id;
                $model->table_8 = $directorTable8->id;
                $model->table_9 = $directorTable9->id;
                $model->table_10 = $directorTable10->id;
                $model->table_11 = $directorTable11->id;
                $model->table_12 = $directorTable12->id;
                $model->table_13 = $directorTable13->id;
                $model->table_14 = $directorTable14->id;
                $model->table_15 = $directorTable15->id;
                $model->table_16 = $directorTable16->id;
                $model->table_17 = $directorTable17->id;
                $model->table_18 = $directorTable18->id;
                $model->table_19 = $directorTable19->id;
                $model->table_20 = $directorTable20->id;
                $model->table_21 = $directorTable21->id;
                $model->table_23 = $directorTable23->id;
                $model->table_24 = $directorTable24->id;
                $model->table_25 = $directorTable25->id;
                $model->table_26 = $directorTable26->id;
                $model->table_27 = $directorTable27->id;
                $model->table_28 = $directorTable28->id;
                $model->table_29 = $directorTable29->id;
                $model->table_30 = $directorTable30->id;
                $model->table_31 = $directorTable31->id;
                $model->table_32 = $directorTable32->id;
                $model->table_33 = $directorTable33->id;
                if ($model->save(false))
                {
                    Yii::$app->session->setFlash('success', "Данные успешно сохранены!");
                    return $this->redirect('index');
                }

            }

            // Создать views doc и сделать вывод на страницу!
            // сделать печать к doc
        }

        return $this->render('create', [
            'model' => $model,
            'directorTable4' => $directorTable4,
            'directorTable5' => $directorTable5,
            'directorTable6' => $directorTable6,
            'directorTable7' => $directorTable7,
            'directorTable8' => $directorTable8,
            'directorTable9' => $directorTable9,
            'directorTable10' => $directorTable10,
            'directorTable11' => $directorTable11,
            'directorTable12' => $directorTable12,
            'directorTable13' => $directorTable13,
            'directorTable14' => $directorTable14,
            'directorTable15' => $directorTable15,
            'directorTable16' => $directorTable16,
            'directorTable17' => $directorTable17,
            'directorTable18' => $directorTable18,
            'directorTable19' => $directorTable19,
            'directorTable20' => $directorTable20,
            'directorTable21' => $directorTable21,
            'directorTable23' => $directorTable23,
            'directorTable24' => $directorTable24,
            'directorTable25' => $directorTable25,
            'directorTable26' => $directorTable26,
            'directorTable27' => $directorTable27,
            'directorTable28' => $directorTable28,
            'directorTable29' => $directorTable29,
            'directorTable30' => $directorTable30,
            'directorTable31' => $directorTable31,
            'directorTable32' => $directorTable32,
            'directorTable33' => $directorTable33,
        ]);
    }

    //печать
    public function actionPrintAnket($id)
    {
        if (Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }

        ini_set('max_execution_time', 3600);
        ini_set('memory_limit', '3092M');
        ini_set("pcre.backtrack_limit", "5000000");
        $stausButtom = 0;
        $model = $this->findModelId($id);
        $directorTable4 = $this->findModelDirectorTable4(
            $model->table_4
        );
        $directorTable5 = $this->findModelDirectorTable5(
            $model->table_5
        );
        $directorTable6 = $this->findModelDirectorTable6(
            $model->table_6
        );
        $directorTable7 = $this->findModelDirectorTable7(
            $model->table_7
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable8 = $this->findModelDirectorTable8(
            $model->table_8
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable9 = $this->findModelDirectorTable9(
            $model->table_9
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable10 = $this->findModelDirectorTable10(
            $model->table_10
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable11 = $this->findModelDirectorTable11(
            $model->table_11
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable12 = $this->findModelDirectorTable12(
            $model->table_12
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable13 = $this->findModelDirectorTable13(
            $model->table_13
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable14 = $this->findModelDirectorTable14(
            $model->table_14
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable15 = $this->findModelDirectorTable15(
            $model->table_15
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable16 = $this->findModelDirectorTable16(
            $model->table_16
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable17 = $this->findModelDirectorTable17(
            $model->table_17
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable18 = $this->findModelDirectorTable18(
            $model->table_18
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable19 = $this->findModelDirectorTable19(
            $model->table_19
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable20 = $this->findModelDirectorTable20(
            $model->table_20
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable21 = $this->findModelDirectorTable21(
            $model->table_21
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable23 = $this->findModelDirectorTable23(
            $model->table_23
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable24 = $this->findModelDirectorTable24(
            $model->table_24
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable25 = $this->findModelDirectorTable25(
            $model->table_25
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable26 = $this->findModelDirectorTable26(
            $model->table_26
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable27 = $this->findModelDirectorTable27(
            $model->table_27
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable28 = $this->findModelDirectorTable28(
            $model->table_28
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable29 = $this->findModelDirectorTable29(
            $model->table_29
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable30 = $this->findModelDirectorTable30(
            $model->table_30
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable31 = $this->findModelDirectorTable31(
            $model->table_31
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable32 = $this->findModelDirectorTable32(
            $model->table_32
        );//проверяем модель существует или нет! для редактирования и внесения
        $directorTable33 = $this->findModelDirectorTable33(
            $model->table_33
        );//проверяем модель существует или нет! для редактирования и внесения
        $this->layout = false;
        $html = $this->render(
            'view',
            //'director\view?id='.$id.'&stausButtom=0',
            [
                'model' => $model,
                'stausButtom' => $stausButtom,
                'directorTable4' => $directorTable4,
                'directorTable5' => $directorTable5,
                'directorTable6' => $directorTable6,
                'directorTable7' => $directorTable7,
                'directorTable8' => $directorTable8,
                'directorTable9' => $directorTable9,
                'directorTable10' => $directorTable10,
                'directorTable11' => $directorTable11,
                'directorTable12' => $directorTable12,
                'directorTable13' => $directorTable13,
                'directorTable14' => $directorTable14,
                'directorTable15' => $directorTable15,
                'directorTable16' => $directorTable16,
                'directorTable17' => $directorTable17,
                'directorTable18' => $directorTable18,
                'directorTable19' => $directorTable19,
                'directorTable20' => $directorTable20,
                'directorTable21' => $directorTable21,
                'directorTable23' => $directorTable23,
                'directorTable24' => $directorTable24,
                'directorTable25' => $directorTable25,
                'directorTable26' => $directorTable26,
                'directorTable27' => $directorTable27,
                'directorTable28' => $directorTable28,
                'directorTable29' => $directorTable29,
                'directorTable30' => $directorTable30,
                'directorTable31' => $directorTable31,
                'directorTable32' => $directorTable32,
                'directorTable33' => $directorTable33,
            ]
        );

        $mpdf = new Mpdf([
            'margin_top' => 5,
            'margin_left' => 20,
            'margin_right' => 10,
            //'mirrorMargins' => true//для двухсторонней печати !
            //Установлено значение 1, в документе будут отображаться значения левого и правого полей на нечетных и четных страницах, т. е. они станут внутренними и внешними полями.
        ]);
        $mpdf->WriteHTML($html);
        $mpdf->Output('Заполненная анкета.pdf', 'I'); //D - скачает файл!
        //$mpdf->Output(': ' . $shop->name . '.pdf', 'I'); //D - скачает файл!
    }

    protected function findModel($id)
    {
        if (($model = Director::find()->where(['user_id' => $id])->one()) !== null)
        {
            return $model;
        }
        else
        {
            return new Director();
        }
    }

    protected function findModelId($id)
    {
        if (($model = Director::find()->where(['id' => $id])->one()) !== null)
        {
            return $model;
        }
        else
        {
            return new Director();
        }
    }

    protected function findModelDirectorTable4($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable4::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable4();
            }
        }
        else
        {
            return new DirectorTable4();
        }
    }

    protected function findModelDirectorTable5($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable5::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable5();
            }
        }
        else
        {
            return new DirectorTable5();
        }
    }

    protected function findModelDirectorTable6($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable6::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable6();
            }
        }
        else
        {
            return new DirectorTable6();
        }
    }

    protected function findModelDirectorTable7($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable7::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable7();
            }
        }
        else
        {
            return new DirectorTable7();
        }
    }

    protected function findModelDirectorTable8($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable8::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable8();
            }
        }
        else
        {
            return new DirectorTable8();
        }
    }

    protected function findModelDirectorTable9($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable9::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable9();
            }
        }
        else
        {
            return new DirectorTable9();
        }
    }

    protected function findModelDirectorTable10($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable10::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable10();
            }
        }
        else
        {
            return new DirectorTable10();
        }
    }

    protected function findModelDirectorTable11($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable11::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable11();
            }
        }
        else
        {
            return new DirectorTable11();
        }
    }

    protected function findModelDirectorTable12($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable12::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable12();
            }
        }
        else
        {
            return new DirectorTable12();
        }
    }

    protected function findModelDirectorTable13($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable13::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable13();
            }
        }
        else
        {
            return new DirectorTable13();
        }
    }

    protected function findModelDirectorTable14($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable14::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable14();
            }
        }
        else
        {
            return new DirectorTable14();
        }
    }

    protected function findModelDirectorTable15($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable15::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable15();
            }
        }
        else
        {
            return new DirectorTable15();
        }
    }

    protected function findModelDirectorTable16($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable16::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable16();
            }
        }
        else
        {
            return new DirectorTable16();
        }
    }

    protected function findModelDirectorTable17($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable17::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable17();
            }
        }
        else
        {
            return new DirectorTable17();
        }
    }

    protected function findModelDirectorTable18($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable18::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable18();
            }
        }
        else
        {
            return new DirectorTable18();
        }
    }

    protected function findModelDirectorTable19($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable19::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable19();
            }
        }
        else
        {
            return new DirectorTable19();
        }
    }

    protected function findModelDirectorTable20($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable20::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable20();
            }
        }
        else
        {
            return new DirectorTable20();
        }
    }

    protected function findModelDirectorTable21($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable21::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable21();
            }
        }
        else
        {
            return new DirectorTable21();
        }
    }

    protected function findModelDirectorTable23($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable23::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable23();
            }
        }
        else
        {
            return new DirectorTable23();
        }
    }

    protected function findModelDirectorTable24($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable24::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable24();
            }
        }
        else
        {
            return new DirectorTable24();
        }
    }

    protected function findModelDirectorTable25($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable25::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable25();
            }
        }
        else
        {
            return new DirectorTable25();
        }
    }

    protected function findModelDirectorTable26($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable26::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable26();
            }
        }
        else
        {
            return new DirectorTable26();
        }
    }

    protected function findModelDirectorTable27($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable27::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable27();
            }
        }
        else
        {
            return new DirectorTable27();
        }
    }

    protected function findModelDirectorTable28($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable28::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable28();
            }
        }
        else
        {
            return new DirectorTable28();
        }
    }

    protected function findModelDirectorTable29($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable29::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable29();
            }
        }
        else
        {
            return new DirectorTable29();
        }
    }

    protected function findModelDirectorTable30($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable30::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable30();
            }
        }
        else
        {
            return new DirectorTable30();
        }
    }

    protected function findModelDirectorTable31($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable31::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable31();
            }
        }
        else
        {
            return new DirectorTable31();
        }
    }

    protected function findModelDirectorTable32($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable32::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable32();
            }
        }
        else
        {
            return new DirectorTable32();
        }
    }

    protected function findModelDirectorTable33($id)
    {
        if (!empty($id))
        {
            if (($model = DirectorTable33::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = DirectorTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new DirectorTable33();
            }
        }
        else
        {
            return new DirectorTable33();
        }
    }
}



