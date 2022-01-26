<?php

namespace backend\controllers;

use common\models\DetiTable20;
use Yii;
use common\models\DetiTable30;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetiTable30Controller implements the CRUD actions for DetiTable30 model.
 */
class DetiTable30Controller extends Controller
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
                            'doc-table-20',
                        ],
                        'allow' => true,
                        'roles' => [
                            'admin',
                            'director_school',
                            'rospotrebnadzor',
                        ],
                    ],
                ],
                'denyCallback' => function ($rule, $action) {
                    Yii::$app->session->setFlash(
                        "error",
                        "У Вас нет доступа к этой странице, пожалуйста, обратитесь к администратору!"
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
        $dataProvider = new ActiveDataProvider([
            'query' => DetiTable30::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCreate()
    {
        return $this->render('create');
    }

    public function actiondDocTable20()
    {
        return $this->render('doc-table-20');
    }
}
