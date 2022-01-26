<?php

namespace backend\controllers;

use common\models\Food;
use common\models\FoodTable6;
use common\models\FoodTable7;
use common\models\FoodTable8;
use common\models\FoodTable9;
use common\models\FoodTable10;
use common\models\FoodTable11;
use common\models\FoodTable12;
use common\models\FoodTable13;
use common\models\FoodSearch;
use Mpdf\Mpdf;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FoodController implements the CRUD actions for Food model.
 */
class FoodController extends Controller
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
                            'food_organizer',
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
                            'food_organizer',
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
        $searchModel = new FoodSearch();
        $search = Yii::$app->request->queryParams;
        $region_items = [];
        $dataProvider = $searchModel->search($search);
        if ($search)
        {
            $region_items = Yii::$app->myComponent->RegionItems($search['foodSearch']['federal_district_id']);
            $municipality_items = Yii::$app->myComponent->MunicipalityItems($search['foodSearch']['region_id']);
        }

        return $this->render('index', [
            'status' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
            'region_items' => $region_items,
            'municipality_items' => $municipality_items,
        ]);
    }

    public function actionCreate()
    {
        if (Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }
        $model = $this->findModel(Yii::$app->user->identity->id);
        $foodTable6 = $this->findModelfoodTable6(
            $model->table_6
        );//проверяем модель существует или нет! для редактирования и внесения
        $foodTable7 = $this->findModelfoodTable7(
            $model->table_7
        );//проверяем модель существует или нет! для редактирования и внесения
        $foodTable8 = $this->findModelfoodTable8(
            $model->table_8
        );//проверяем модель существует или нет! для редактирования и внесения
        $foodTable9 = $this->findModelfoodTable9(
            $model->table_9
        );//проверяем модель существует или нет! для редактирования и внесения
        $foodTable10 = $this->findModelfoodTable10(
            $model->table_10
        );//проверяем модель существует или нет! для редактирования и внесения
        $foodTable11 = $this->findModelfoodTable11(
            $model->table_11
        );//проверяем модель существует или нет! для редактирования и внесения
        $foodTable12 = $this->findModelfoodTable12(
            $model->table_12
        );//проверяем модель существует или нет! для редактирования и внесения
        $foodTable13 = $this->findModelfoodTable13(
            $model->table_13
        );//проверяем модель существует или нет! для редактирования и внесения

        if (Yii::$app->request->post())
        {

            $status = true;
            $foodTable6->load(Yii::$app->request->post());
            $foodTable7->load(Yii::$app->request->post());
            $foodTable8->load(Yii::$app->request->post());
            $foodTable9->load(Yii::$app->request->post());
            $foodTable10->load(Yii::$app->request->post());
            $foodTable11->load(Yii::$app->request->post());
            $foodTable12->load(Yii::$app->request->post());
            $foodTable13->load(Yii::$app->request->post());

            if ($status === true)
            {
                $foodTable6->user_id = Yii::$app->user->identity->id;
                if ($foodTable6->validate())
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
                $foodTable7->user_id = Yii::$app->user->identity->id;
                if ($foodTable7->validate())
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
                $foodTable8->user_id = Yii::$app->user->identity->id;
                if ($foodTable8->validate())
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
                if ($foodTable9->validate())
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
                if ($foodTable10->validate())
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
                $foodTable11->user_id = Yii::$app->user->identity->id;
                if ($foodTable11->validate())
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
                if ($foodTable12->validate())
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
                if ($foodTable13->validate())
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
            //СОХРАНЯЕМ ДАННЫЕ!
            if ($status === true)
            {

                $foodTable6->save(false);
                $foodTable7->save(false);
                $foodTable8->save(false);
                $foodTable9->save(false);
                $foodTable10->save(false);
                $foodTable11->save(false);
                $foodTable12->save(false);
                $foodTable13->save(false);

                $model->user_id = Yii::$app->user->identity->id;
                $model->organization_id = Yii::$app->user->identity->organization_id;
                $model->table_6 = $foodTable6->id;
                $model->table_7 = $foodTable7->id;
                $model->table_8 = $foodTable8->id;
                $model->table_9 = $foodTable9->id;
                $model->table_10 = $foodTable10->id;
                $model->table_11 = $foodTable11->id;
                $model->table_12 = $foodTable12->id;
                $model->table_13 = $foodTable13->id;
                $model->save(false);
                Yii::$app->session->setFlash('success', "Данные успешно сохранены!");
            }

            // Создать views doc и сделать вывод на страницу!
            // сделать печать к doc
        }

        return $this->render('create', [
            'model' => $model,
            'foodTable6' => $foodTable6,
            'foodTable7' => $foodTable7,
            'foodTable8' => $foodTable8,
            'foodTable9' => $foodTable9,
            'foodTable10' => $foodTable10,
            'foodTable11' => $foodTable11,
            'foodTable12' => $foodTable12,
            'foodTable13' => $foodTable13,
        ]);
    }

    public function actionView($id)
    {
        if (Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }
        $stausButtom = 1;
        $model = $this->findModelId($id);
        $foodTable6 = $this->findModelfoodTable6(
            $model->table_6
        );//проверяем модель существует или нет! для редактирования и внесения
        $foodTable7 = $this->findModelfoodTable7(
            $model->table_7
        );//проверяем модель существует или нет! для редактирования и внесения
        $foodTable8 = $this->findModelfoodTable8(
            $model->table_8
        );//проверяем модель существует или нет! для редактирования и внесения
        $foodTable9 = $this->findModelfoodTable9(
            $model->table_9
        );//проверяем модель существует или нет! для редактирования и внесения
        $foodTable10 = $this->findModelfoodTable10(
            $model->table_10
        );//проверяем модель существует или нет! для редактирования и внесения
        $foodTable11 = $this->findModelfoodTable11(
            $model->table_11
        );//проверяем модель существует или нет! для редактирования и внесения
        $foodTable12 = $this->findModelfoodTable12(
            $model->table_12
        );//проверяем модель существует или нет! для редактирования и внесения
        $foodTable13 = $this->findModelfoodTable13(
            $model->table_13
        );//проверяем модель существует или нет! для редактирования и внесения
        return $this->render('view', [
            'model' => $model,
            'stausButtom' => $stausButtom,
            'foodTable6' => $foodTable6,
            'foodTable7' => $foodTable7,
            'foodTable8' => $foodTable8,
            'foodTable9' => $foodTable9,
            'foodTable10' => $foodTable10,
            'foodTable11' => $foodTable11,
            'foodTable12' => $foodTable12,
            'foodTable13' => $foodTable13,
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
        $foodTable6 = $this->findModelfoodTable6(
            $model->table_6
        );//проверяем модель существует или нет! для редактирования и внесения
        $foodTable7 = $this->findModelfoodTable7(
            $model->table_7
        );//проверяем модель существует или нет! для редактирования и внесения
        $foodTable8 = $this->findModelfoodTable8(
            $model->table_8
        );//проверяем модель существует или нет! для редактирования и внесения
        $foodTable9 = $this->findModelfoodTable9(
            $model->table_9
        );//проверяем модель существует или нет! для редактирования и внесения
        $foodTable10 = $this->findModelfoodTable10(
            $model->table_10
        );//проверяем модель существует или нет! для редактирования и внесения
        $foodTable11 = $this->findModelfoodTable11(
            $model->table_11
        );//проверяем модель существует или нет! для редактирования и внесения
        $foodTable12 = $this->findModelfoodTable12(
            $model->table_12
        );//проверяем модель существует или нет! для редактирования и внесения
        $foodTable13 = $this->findModelfoodTable13(
            $model->table_13
        );//проверяем модель существует или нет! для редактирования и внесения

        $this->layout = false;
        $html = $this->render(
            'view',
            [
                'model' => $model,
                'stausButtom' => $stausButtom,
                'foodTable6' => $foodTable6,
                'foodTable7' => $foodTable7,
                'foodTable8' => $foodTable8,
                'foodTable9' => $foodTable9,
                'foodTable10' => $foodTable10,
                'foodTable11' => $foodTable11,
                'foodTable12' => $foodTable12,
                'foodTable13' => $foodTable13,
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

    protected function findModel($id)
    {
        if (($model = Food::find()->where(['user_id' => $id])->one()) !== null)
        {
            return $model;
        }
        else
        {
            return new Food();
        }
    }

    protected function findModelId($id)
    {
        if (($model = food::find()->where(['id' => $id])->one()) !== null)
        {
            return $model;
        }
        else
        {
            return new food();
        }
    }

    protected function findModelfoodTable6($id)
    {
        if (!empty($id))
        {
            if (($model = FoodTable6::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = FoodTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new FoodTable6();
            }
        }
        else
        {
            return new FoodTable6();
        }
    }

    protected function findModelFoodTable7($id)
    {
        if (!empty($id))
        {
            if (($model = FoodTable7::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = FoodTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new FoodTable7();
            }
        }
        else
        {
            return new FoodTable7();
        }
    }

    protected function findModelFoodTable8($id)
    {
        if (!empty($id))
        {
            if (($model = FoodTable8::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = FoodTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new FoodTable8();
            }
        }
        else
        {
            return new FoodTable8();
        }
    }

    protected function findModelFoodTable9($id)
    {
        if (!empty($id))
        {
            if (($model = FoodTable9::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = FoodTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new FoodTable9();
            }
        }
        else
        {
            return new FoodTable9();
        }
    }

    protected function findModelFoodTable10($id)
    {
        if (!empty($id))
        {
            if (($model = FoodTable10::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = FoodTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new FoodTable10();
            }
        }
        else
        {
            return new FoodTable10();
        }
    }

    protected function findModelFoodTable11($id)
    {
        if (!empty($id))
        {
            if (($model = FoodTable11::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = FoodTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new FoodTable11();
            }
        }
        else
        {
            return new FoodTable11();
        }
    }

    protected function findModelFoodTable12($id)
    {
        if (!empty($id))
        {
            if (($model = FoodTable12::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = FoodTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new FoodTable12();
            }
        }
        else
        {
            return new FoodTable12();
        }
    }

    protected function findModelFoodTable13($id)
    {
        if (!empty($id))
        {
            if (($model = FoodTable13::find()->where(['id' => $id])->one()) !== null)
            {
                //if (($model = FoodTable4::find()->one()) !== null) {
                return $model;
            }
            else
            {
                return new FoodTable13();
            }
        }
        else
        {
            return new FoodTable13();
        }
    }
}
