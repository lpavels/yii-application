<?php

namespace backend\controllers;

use common\models\DetiSearch;
use common\models\DetiTable20;
use common\models\DetiTable24;
use common\models\DetiTable25;
use common\models\DetiTable26;
use common\models\DetiTable28;
use common\models\DetiTable30;
use common\models\DetiTable32;
use common\models\DetiTable33;
use common\models\DetiTable37;
use common\models\DetiTable38;
use common\models\DetiTable39;
use common\models\DetiTable40;
use common\models\DetiTable43;
use common\models\DetiTable44;
use common\models\FederalDistrict;
use common\models\Municipality;
use common\models\Organization;
use common\models\Region;
use Mpdf\Mpdf;
use Yii;
use common\models\Deti;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetiController implements the CRUD actions for Deti model.
 */
class DetiController extends Controller
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
                            'region-list',
                            'organization-list',
                            'municipality-list',
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
                            'region-list',
                            'organization-list',
                            'municipality-list',
                        ],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                ],
                'denyCallback' => function ($rule, $action) {
                    Yii::$app->session->setFlash(
                        "error",
                        "У Вас нет доступа к этой странице, пожалуйста, обратитесь к администратору!"
                    );
                    if (Yii::$app->user->isGuest) {
                        return $this->goHome();
                    } else {
                        return $this->redirect(Yii::$app->request->referrer);
                    }
                },
            ],
        ];
    }

    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = $this->findModel(Yii::$app->user->identity->id);
        $searchModel = new DetiSearch();
        $search = Yii::$app->request->queryParams;
        $region_items = [];
        $dataProvider = $searchModel->search($search);
        if ($search) {
            $region_items = Yii::$app->myComponent->RegionItems($search['DetiSearch']['federal_district_id']);
            $municipality_items = Yii::$app->myComponent->MunicipalityItems($search['DetiSearch']['region_id']);
        }

        return $this->render('index', [
            'status' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
            'region_items' => $region_items,
            'municipality_items' => $municipality_items,
        ]);
    }

    public function actionCreate($id = false)
    {
        if($id == false){
            $model = new Deti();
            $DetiTable20 = new DetiTable20();
            $DetiTable24 = new DetiTable24();
            $DetiTable25 = new DetiTable25();
            $DetiTable26 = new DetiTable26();
            $DetiTable28 = new DetiTable28();
            $DetiTable30 = new DetiTable30();
            $DetiTable32 = new DetiTable32();
            $DetiTable33 = new DetiTable33();
            $DetiTable37 = new DetiTable37();
            $DetiTable38 = new DetiTable38();
            $DetiTable39 = new DetiTable39();
            $DetiTable40 = new DetiTable40();
            $DetiTable43 = new DetiTable43();
            $DetiTable44 = new DetiTable44();
        } else {
            $model = $this->findModel(Yii::$app->user->identity->id);
            $DetiTable20 = $this->findModelDetiTable20(
                $model->table_20
            );//проверяем модель существует или нет! для редактирования и внесения
            $DetiTable24 = $this->findModelDetiTable24(
                $model->table_24
            );//проверяем модель существует или нет! для редактирования и внесения
            $DetiTable25 = $this->findModelDetiTable25(
                $model->table_25
            );//проверяем модель существует или нет! для редактирования и внесения
            $DetiTable26 = $this->findModelDetiTable26(
                $model->table_26
            );//проверяем модель существует или нет! для редактирования и внесения
            $DetiTable28 = $this->findModelDetiTable28(
                $model->table_28
            );//проверяем модель существует или нет! для редактирования и внесения
            $DetiTable30 = $this->findModelDetiTable30(
                $model->table_30
            );//проверяем модель существует или нет! для редактирования и внесения
            $DetiTable32 = $this->findModelDetiTable32(
                $model->table_32
            );//проверяем модель существует или нет! для редактирования и внесения
            $DetiTable33 = $this->findModelDetiTable33(
                $model->table_33
            );//проверяем модель существует или нет! для редактирования и внесения
            $DetiTable37 = $this->findModelDetiTable37(
                $model->table_37
            );//проверяем модель существует или нет! для редактирования и внесения
            $DetiTable38 = $this->findModelDetiTable38(
                $model->table_38
            );//проверяем модель существует или нет! для редактирования и внесения
            $DetiTable39 = $this->findModelDetiTable39(
                $model->table_39
            );//проверяем модель существует или нет! для редактирования и внесения
            $DetiTable40 = $this->findModelDetiTable40(
                $model->table_40
            );//проверяем модель существует или нет! для редактирования и внесения
            $DetiTable43 = $this->findModelDetiTable43(
                $model->table_43
            );//проверяем модель существует или нет! для редактирования и внесения
            $DetiTable44 = $this->findModelDetiTable44(
                $model->table_44
            );//проверяем модель существует или нет! для редактирования и внесения
        }

        $district_items = ArrayHelper::merge(['' => 'Выберите федеральный округ...'], ArrayHelper::map(FederalDistrict::find()->all(), 'id', 'name'));
        $region_items = ArrayHelper::merge(['' => 'Выберите регион...'], ArrayHelper::map(Region::find()->where(['district_id'=>1])->all(), 'id', 'name'));
        $municipality_items = ArrayHelper::merge(['' => 'Выберите муниципальное образование...'], ArrayHelper::map(Municipality::find()->where(['region_id'=>1])->all(), 'id', 'name'));
        $org_items = ArrayHelper::merge(['' => 'Выберите организацию...'], ArrayHelper::map(Organization::find()->where(['municipality_id'=>1565])->all(), 'id', 'title'));

        if (Yii::$app->request->post()) {
            $status = true;
            $model->load(Yii::$app->request->post());
            $DetiTable20->load(Yii::$app->request->post());
            $DetiTable20->load(Yii::$app->request->post());
            $DetiTable24->load(Yii::$app->request->post());
            $DetiTable25->load(Yii::$app->request->post());
            $DetiTable26->load(Yii::$app->request->post());
            $DetiTable28->load(Yii::$app->request->post());
            $DetiTable30->load(Yii::$app->request->post());
            $DetiTable32->load(Yii::$app->request->post());
            $DetiTable33->load(Yii::$app->request->post());
            $DetiTable37->load(Yii::$app->request->post());
            $DetiTable38->load(Yii::$app->request->post());
            $DetiTable39->load(Yii::$app->request->post());
            $DetiTable40->load(Yii::$app->request->post());
            $DetiTable43->load(Yii::$app->request->post());
            $DetiTable44->load(Yii::$app->request->post());



            if ($status === true) {
                if ($DetiTable20->validate()) {
                    $status = true;
                } else {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 20"
                    );
                }
            }

            if ($status === true) {
                if ($DetiTable24->validate()) {
                    $status = true;
                } else {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 21-24"
                    );
                }
            }

            if ($status === true) {
                if ($DetiTable25->validate()) {
                    $status = true;
                } else {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 25"
                    );
                }
            }

            if ($status === true) {
                if ($DetiTable26->validate()) {
                    $status = true;
                } else {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 26"
                    );
                }
            }

            if ($status === true) {
                if ($DetiTable28->validate()) {
                    $status = true;
                } else {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 27-28"
                    );
                }
            }

            if ($status === true) {
                if ($DetiTable30->validate()) {
                    $status = true;
                } else {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 29-30"
                    );
                }
            }

            if ($status === true) {
                if ($DetiTable32->validate()) {
                    $status = true;
                } else {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 31-32"
                    );
                }
            }

            if ($status === true) {
                if ($DetiTable33->validate()) {
                    $status = true;
                } else {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 33"
                    );
                }
            }

            if ($status === true) {
                if ($DetiTable37->validate()) {
                    $status = true;
                } else {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 34-37"
                    );
                }
            }

            if ($status === true) {
                if ($DetiTable38->validate()) {
                    $status = true;
                } else {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 38"
                    );
                }
            }

            if ($status === true) {
                if ($DetiTable39->validate()) {
                    $status = true;
                } else {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 39"
                    );
                }
            }

            if ($status === true) {
                if ($DetiTable40->validate()) {
                    $status = true;
                } else {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 40"
                    );
                }
            }

            if ($status === true) {
                if ($DetiTable43->validate()) {
                    $status = true;
                } else {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 41-43"
                    );
                }
            }

            if ($status === true) {
                if ($DetiTable44->validate()) {
                    $status = true;
                } else {
                    $status = false;
                    Yii::$app->session->setFlash(
                        'error',
                        "У Вас ошибка при внесении! Проверьте внесения данных! В вопросе 44-46"
                    );
                }
            }

            //СОХРАНЯЕМ ДАННЫЕ!
            if ($status === true) {
                //print_r($model);
                //exit();

                $DetiTable20->save(false);
                $DetiTable24->save(false);
                $DetiTable25->save(false);
                $DetiTable26->save(false);
                $DetiTable28->save(false);
                $DetiTable30->save(false);
                $DetiTable32->save(false);
                $DetiTable33->save(false);
                $DetiTable37->save(false);
                $DetiTable38->save(false);
                $DetiTable39->save(false);
                $DetiTable40->save(false);
                $DetiTable43->save(false);
                $DetiTable44->save(false);
                if (!Yii::$app->user->isGuest) {
                    $model->user_id = Yii::$app->user->identity->id;
                } else {
                    $model->user_id = 0;
                }
                $model->table_20 = $DetiTable20->id;
                $model->table_24 = $DetiTable24->id;
                $model->table_25 = $DetiTable25->id;
                $model->table_26 = $DetiTable26->id;
                $model->table_28 = $DetiTable28->id;
                $model->table_30 = $DetiTable30->id;
                $model->table_32 = $DetiTable32->id;
                $model->table_33 = $DetiTable33->id;
                $model->table_37 = $DetiTable37->id;
                $model->table_38 = $DetiTable38->id;
                $model->table_39 = $DetiTable39->id;
                $model->table_40 = $DetiTable40->id;
                $model->table_43 = $DetiTable43->id;
                $model->table_44 = $DetiTable44->id;
                $model->save(false);

                $sex = $model->field1_8; //пол
                $weight = $model->field1_18; //10. Укажите массу тела (кг)
                $growth = $model->field1_17; //10.1 Укажите длину тела в см
                $age = $model->field1_7; //возраст

                if (!is_numeric($weight)) {
                    $weight = 1;
                }
                if (!is_numeric($growth)) {
                    $growth = 1;
                }
                if (!is_numeric($age)) {
                    $age = 1;
                }

                $imt = $model->get_imt2($growth, $weight, 2,$sex,$age,1);

                $rr = $growth/100;
                //exit();
                $imt2 = $weight/($rr*$rr);
                $imt2 = round($imt2, 2);
                $imt_str = '';
                if($imt == 'Дефицит массы тела'){
                    $imt_str = 'отмечается дефицит массы';
                }
                elseif($imt == 'Нормальный вес'){
                    $imt_str = 'гармоничное';
                }
                elseif($imt == 'Избыточная масса тела'){
                    $imt_str = 'отмечается избыток массы';
                }
                elseif($imt == 'Ожирение'){
                    $imt_str = 'отмечается ожирение';
                }

                Yii::$app->session->setFlash(
                    'success',
                    "Данные успешно сохранены! <br>
                         <b>Индекс массы тела ребенка:</b> составляет {$imt2}; физическое развитие - {$imt_str}.<br>"
                );
                return $this->redirect('create');
            }

            // Создать views doc и сделать вывод на страницу!
            // сделать печать к doc
        }

        return $this->render('create', [
            'model' => $model,
            'district_items' => $district_items,
            'region_items' => $region_items,
            'municipality_items' => $municipality_items,
            'org_items' => $org_items,
            'DetiTable20' => $DetiTable20,
            'DetiTable24' => $DetiTable24,
            'DetiTable25' => $DetiTable25,
            'DetiTable26' => $DetiTable26,
            'DetiTable28' => $DetiTable28,
            'DetiTable30' => $DetiTable30,
            'DetiTable32' => $DetiTable32,
            'DetiTable33' => $DetiTable33,
            'DetiTable37' => $DetiTable37,
            'DetiTable38' => $DetiTable38,
            'DetiTable39' => $DetiTable39,
            'DetiTable40' => $DetiTable40,
            'DetiTable43' => $DetiTable43,
            'DetiTable44' => $DetiTable44,
        ]);
    }

    public function actionView($id)
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $stausButtom = 1;
        $model = $this->findModelId($id);
        $DetiTable6 = $this->findModelDetiTable6(
            $model->table_6
        );//проверяем модель существует или нет! для редактирования и внесения
        $DetiTable7 = $this->findModelDetiTable7(
            $model->table_7
        );//проверяем модель существует или нет! для редактирования и внесения
        $DetiTable8 = $this->findModelDetiTable8(
            $model->table_8
        );//проверяем модель существует или нет! для редактирования и внесения
        $DetiTable9 = $this->findModelDetiTable9(
            $model->table_9
        );//проверяем модель существует или нет! для редактирования и внесения
        $DetiTable10 = $this->findModelDetiTable10(
            $model->table_10
        );//проверяем модель существует или нет! для редактирования и внесения
        $DetiTable11 = $this->findModelDetiTable11(
            $model->table_11
        );//проверяем модель существует или нет! для редактирования и внесения
        $DetiTable12 = $this->findModelDetiTable12(
            $model->table_12
        );//проверяем модель существует или нет! для редактирования и внесения
        $DetiTable13 = $this->findModelDetiTable13(
            $model->table_13
        );//проверяем модель существует или нет! для редактирования и внесения
        return $this->render('view', [
            'model' => $model,
            'stausButtom' => $stausButtom,
            'DetiTable6' => $DetiTable6,
            'DetiTable7' => $DetiTable7,
            'DetiTable8' => $DetiTable8,
            'DetiTable9' => $DetiTable9,
            'DetiTable10' => $DetiTable10,
            'DetiTable11' => $DetiTable11,
            'DetiTable12' => $DetiTable12,
            'DetiTable13' => $DetiTable13,
        ]);
    }

    //печать
    public function actionPrintAnket($id)
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        ini_set('max_execution_time', 3600);
        ini_set('memory_limit', '3092M');
        ini_set("pcre.backtrack_limit", "5000000");
        $stausButtom = 0;
        $model = $this->findModelId($id);
        $DetiTable6 = $this->findModelDetiTable6(
            $model->table_6
        );//проверяем модель существует или нет! для редактирования и внесения
        $DetiTable7 = $this->findModelDetiTable7(
            $model->table_7
        );//проверяем модель существует или нет! для редактирования и внесения
        $DetiTable8 = $this->findModelDetiTable8(
            $model->table_8
        );//проверяем модель существует или нет! для редактирования и внесения
        $DetiTable9 = $this->findModelDetiTable9(
            $model->table_9
        );//проверяем модель существует или нет! для редактирования и внесения
        $DetiTable10 = $this->findModelDetiTable10(
            $model->table_10
        );//проверяем модель существует или нет! для редактирования и внесения
        $DetiTable11 = $this->findModelDetiTable11(
            $model->table_11
        );//проверяем модель существует или нет! для редактирования и внесения
        $DetiTable12 = $this->findModelDetiTable12(
            $model->table_12
        );//проверяем модель существует или нет! для редактирования и внесения
        $DetiTable13 = $this->findModelDetiTable13(
            $model->table_13
        );//проверяем модель существует или нет! для редактирования и внесения

        $this->layout = false;
        $html = $this->render(
            'view',
            [
                'model' => $model,
                'stausButtom' => $stausButtom,
                'DetiTable6' => $DetiTable6,
                'DetiTable7' => $DetiTable7,
                'DetiTable8' => $DetiTable8,
                'DetiTable9' => $DetiTable9,
                'DetiTable10' => $DetiTable10,
                'DetiTable11' => $DetiTable11,
                'DetiTable12' => $DetiTable12,
                'DetiTable13' => $DetiTable13,
            ]
        );

        $mpdf = new Mpdf([
            'margin_top' => 5,
            'margin_left' => 20,
            'margin_right' => 10,
            //'mirrorMargins' => true
            //Установлено значение 1, в документе будут отображаться значения левого и правого полей на нечетных и четных страницах, т. е. они станут внутренними и внешними полями.
        ]);
        $mpdf->WriteHTML($html);
        $mpdf->Output('Анкета.pdf', 'I'); //D - скачает файл!
        //$mpdf->Output(': ' . $shop->name . '.pdf', 'I'); //D - скачает файл!
    }

    public function actionRegionList($id)
    {
        $groups = Region::find()->where(['district_id' => $id])->orderby(['name' => SORT_ASC])->all();

        $data = [];
        $data[] = '<option value="">Выберите регион...</option>';
        if (!empty($groups)) {
            foreach ($groups as $key => $group) {
                $data[] = '<option value="'.$group->id.'">'.$group->name.'</option>';
            }
        }

        print_r($data);
        //return $data;
    }

    public function actionMunicipalityList($id)
    {
        $groups = Municipality::find()->where(['region_id' => $id])->orderby(['name' => SORT_ASC])->all();

        $data = [];
        $data[] = '<option value="">Выберите муниципальное образование...</option>';
        if (!empty($groups)) {
            foreach ($groups as $key => $group) {
                $data[] = '<option value="'.$group->id.'">'.$group->name.'</option>';
            }
        }

        print_r($data);
        //return $data;
    }

    public function actionOrganizationList($id)
    {
        $groups = Organization::find()->where(['municipality_id' => $id,'organization_type_id' => 5])->orderby(['title' => SORT_ASC])->all();

        $data = [];
        $data[] = '<option value="">Выберите Вашу организацию ...</option>';
        if (!empty($groups)) {
            foreach ($groups as $key => $group) {
                $data[] = '<option value="'.$group->id.'">'.$group->title.'</option>';
            }
        }

        print_r($data);
        //return $data;
    }

    protected function findModel($id)
    {
        if (($model = Deti::find()->where(['user_id' => $id])->one()) !== null) {
            return $model;
        } else {
            return new Deti();
        }
    }

    protected function findModelId($id)
    {
        if (($model = Deti::find()->where(['id' => $id])->one()) !== null) {
            return $model;
        } else {
            return new Deti();
        }
    }

    protected function findModelDetiTable20($id)
    {
        if (!empty($id)) {
            if (($model = DetiTable20::find()->where(['id' => $id])->one()) !== null) {
                //if (($model = DetiTable4::find()->one()) !== null) {
                return $model;
            } else {
                return new DetiTable20();
            }
        } else {
            return new DetiTable20();
        }
    }

    protected function findModelDetiTable24($id)
    {
        if (!empty($id)) {
            if (($model = DetiTable24::find()->where(['id' => $id])->one()) !== null) {
                //if (($model = DetiTable4::find()->one()) !== null) {
                return $model;
            } else {
                return new DetiTable24();
            }
        } else {
            return new DetiTable24();
        }
    }

    protected function findModelDetiTable25($id)
    {
        if (!empty($id)) {
            if (($model = DetiTable25::find()->where(['id' => $id])->one()) !== null) {
                //if (($model = DetiTable4::find()->one()) !== null) {
                return $model;
            } else {
                return new DetiTable25();
            }
        } else {
            return new DetiTable25();
        }
    }

    protected function findModelDetiTable26($id)
    {
        if (!empty($id)) {
            if (($model = DetiTable26::find()->where(['id' => $id])->one()) !== null) {
                //if (($model = DetiTable4::find()->one()) !== null) {
                return $model;
            } else {
                return new DetiTable26();
            }
        } else {
            return new DetiTable26();
        }
    }

    protected function findModelDetiTable28($id)
    {
        if (!empty($id)) {
            if (($model = DetiTable28::find()->where(['id' => $id])->one()) !== null) {
                //if (($model = DetiTable4::find()->one()) !== null) {
                return $model;
            } else {
                return new DetiTable28();
            }
        } else {
            return new DetiTable28();
        }
    }

    protected function findModelDetiTable30($id)
    {
        if (!empty($id)) {
            if (($model = DetiTable30::find()->where(['id' => $id])->one()) !== null) {
                //if (($model = DetiTable4::find()->one()) !== null) {
                return $model;
            } else {
                return new DetiTable30();
            }
        } else {
            return new DetiTable30();
        }
    }

    protected function findModelDetiTable32($id)
    {
        if (!empty($id)) {
            if (($model = DetiTable32::find()->where(['id' => $id])->one()) !== null) {
                //if (($model = DetiTable4::find()->one()) !== null) {
                return $model;
            } else {
                return new DetiTable32();
            }
        } else {
            return new DetiTable32();
        }
    }

    protected function findModelDetiTable33($id)
    {
        if (!empty($id)) {
            if (($model = DetiTable33::find()->where(['id' => $id])->one()) !== null) {
                //if (($model = DetiTable4::find()->one()) !== null) {
                return $model;
            } else {
                return new DetiTable33();
            }
        } else {
            return new DetiTable33();
        }
    }

    protected function findModelDetiTable37($id)
    {
        if (!empty($id)) {
            if (($model = DetiTable37::find()->where(['id' => $id])->one()) !== null) {
                //if (($model = DetiTable4::find()->one()) !== null) {
                return $model;
            } else {
                return new DetiTable37();
            }
        } else {
            return new DetiTable37();
        }
    }

    protected function findModelDetiTable38($id)
    {
        if (!empty($id)) {
            if (($model = DetiTable38::find()->where(['id' => $id])->one()) !== null) {
                //if (($model = DetiTable4::find()->one()) !== null) {
                return $model;
            } else {
                return new DetiTable38();
            }
        } else {
            return new DetiTable38();
        }
    }

    protected function findModelDetiTable39($id)
    {
        if (!empty($id)) {
            if (($model = DetiTable39::find()->where(['id' => $id])->one()) !== null) {
                //if (($model = DetiTable4::find()->one()) !== null) {
                return $model;
            } else {
                return new DetiTable39();
            }
        } else {
            return new DetiTable39();
        }
    }

    protected function findModelDetiTable40($id)
    {
        if (!empty($id)) {
            if (($model = DetiTable40::find()->where(['id' => $id])->one()) !== null) {
                //if (($model = DetiTable4::find()->one()) !== null) {
                return $model;
            } else {
                return new DetiTable40();
            }
        } else {
            return new DetiTable40();
        }
    }

    protected function findModelDetiTable43($id)
    {
        if (!empty($id)) {
            if (($model = DetiTable43::find()->where(['id' => $id])->one()) !== null) {
                //if (($model = DetiTable4::find()->one()) !== null) {
                return $model;
            } else {
                return new DetiTable43();
            }
        } else {
            return new DetiTable43();
        }
    }

    protected function findModelDetiTable44($id)
    {
        if (!empty($id)) {
            if (($model = DetiTable44::find()->where(['id' => $id])->one()) !== null) {
                //if (($model = DetiTable4::find()->one()) !== null) {
                return $model;
            } else {
                return new DetiTable44();
            }
        } else {
            return new DetiTable44();
        }
    }
}
