<?php

namespace backend\controllers;

use Yii;
use common\models\DirectorTable33;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DirectorTable33Controller implements the CRUD actions for DirectorTable33 model.
 */
class DirectorTable33Controller extends Controller
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
                            'doc-table-33',
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
        $dataProvider = new ActiveDataProvider([
            'query' => DirectorTable33::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCreate()
    {
        return $this->render('create');
    }

    public function actiondDocTable33()
    {
        return $this->render('doc-table-33');
    }
}
