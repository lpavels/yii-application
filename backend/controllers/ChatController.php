<?php

namespace backend\controllers;

use Yii;
use common\models\Chat;
use yii\web\Controller;
use yii\filters\VerbFilter;

class ChatController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex($id = false)
    {
        if (Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }

        $model = new Chat();
        if (Yii::$app->user->can('admin'))
        {
            if ($id == false)
            {
                $show = false;


                #Список пользователей
                $sender_users = Chat::find()
                    ->select(['chat.sender_user_id', 'chat.status', 'chat.created_at', 'user.name'])
                    ->innerJoin('user', 'user.id=chat.sender_user_id')
                    ->where(['!=', 'chat.sender_user_id', 1])
                    ->orderBy(['chat.status' => SORT_DESC])
                    /*->groupBy(['chat.sender_user_id'])*/
                    ->asArray()
                    ->all();

                $sender_user_ids = [];
                foreach ($sender_users as $sender_user)
                {
                    if ($sender_user['status'] == 0)
                    {
                        $sender_user_ids['new'][$sender_user['sender_user_id']] = $sender_user['sender_user_id'] . '|' . $sender_user['name'] . '|new|' . $sender_user['created_at'];
                    }
                    else
                    {
                        $sender_user_ids['nonew'][$sender_user['sender_user_id']] = $sender_user['sender_user_id'] . '|' . $sender_user['name'] . '||' . $sender_user['created_at'];
                    }
                }

                $messages = false;
            }
            else
            {
                $show = true;

                Chat::updateAll(['status' => 1], ['sender_user_id' => $id]);
                #Список пользователей
                $sender_users = Chat::find()
                    ->select(['chat.sender_user_id', 'chat.status', 'chat.created_at', 'user.name'])
                    ->innerJoin('user', 'user.id=chat.sender_user_id')
                    ->where(['!=', 'chat.sender_user_id', 1])
                    ->orderBy(['chat.status' => SORT_DESC])
                    /*->groupBy(['chat.sender_user_id'])*/
                    ->asArray()
                    ->all();

                $sender_user_ids = [];
                foreach ($sender_users as $sender_user)
                {
                    if ($sender_user['status'] == 0)
                    {
                        $sender_user_ids['new'][$sender_user['sender_user_id']] = $sender_user['sender_user_id'] . '|' . $sender_user['name'] . '|new|' . $sender_user['created_at'];
                    }
                    else
                    {
                        $sender_user_ids['nonew'][$sender_user['sender_user_id']] = $sender_user['sender_user_id'] . '|' . $sender_user['name'] . '||' . $sender_user['created_at'];
                    }
                }

                #Сообщения от пользователя
                $messages_user = Chat::find()
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
                    ->all();

                foreach ($messages_user as $m_user)
                {
                    $messages[] = $m_user['sender_user_id'] . '|' . $m_user['receiver_user_id'] . '|' . $m_user['message'] . '|' . $m_user['status'] . '|' . $m_user['created_at'] . '|' . $m_user['title'] . '|' . $m_user['chat_id'];
                }

                $org = $messages_user[0]['org_title'] . ' (' . $messages_user[0]['org_id'] . ')';
                $u_name = $messages_user[0]['u_name'] . ' (' . $messages_user[0]['u_login'] . ')' . ' (' . $id . ')';
            }

            return $this->render(
                'index-admin',
                [
                    'model' => $model,
                    'sender_user_ids' => $sender_user_ids,
                    'show' => $show,
                    'messages' => $messages,
                    'u_id' => $id,
                    'org' => $org,
                    'u_name' => $u_name,
                ]
            );
        }
        else
        {
            $u_id = Yii::$app->user->id;
            Chat::updateAll(['status' => 1], ['receiver_user_id' => $u_id]);
            #Сообщения от пользователя
            $messages_user = Chat::find()
                ->select(
                    [
                        'chat.sender_user_id',
                        'chat.receiver_user_id',
                        'chat.message',
                        'chat.status',
                        'chat.created_at',
                        'user.name'
                    ]
                )
                ->leftJoin('user', 'user.id=chat.sender_user_id')
                ->where(['sender_user_id' => $u_id])
                ->orWhere(['receiver_user_id' => $u_id])
                ->asArray()
                ->all();
            foreach ($messages_user as $m_user)
            {
                $messages[] = $m_user['sender_user_id'] . '|' . $m_user['receiver_user_id'] . '|' . $m_user['message'] . '|' . $m_user['status'] . '|' . $m_user['created_at'] . '|' . $m_user['created_at'];
            }

            return $this->render(
                'index',
                [
                    'model' => $model,
                    'messages' => $messages,
                ]
            );
        }
    }

    public function actionCreate()
    {
        if (Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }

        if (Yii::$app->request->post())
        {
            $post = Yii::$app->request->post()['Chat'];

            $model = new Chat();
            if (Yii::$app->user->can('admin'))
            {
                $model->sender_user_id = Yii::$app->user->id;
                $model->receiver_user_id = $post['receiver_user_id'];
                $model->message = 'Здравствуйте. <br>' . $post['message'];
                $model->ip = Yii::$app->params['ip'];
                $model->save(false);
                return $this->redirect(['index', 'id' => $post['receiver_user_id']]);
            }
            else
            {
                $model->sender_user_id = Yii::$app->user->id;
                $model->receiver_user_id = 1;
                $model->message = $post['message'];
                $model->ip = Yii::$app->params['ip'];
                $model->save(false);
            }
        }
        return $this->redirect(['index']);
    }

    public function actionNotRead($id)
    {
        if (!Yii::$app->user->can('admin'))
        {
            return $this->goHome();
        }
        $model = Chat::findOne($id);
        $model->status = 0;
        $model->save(false);
        Yii::$app->session->setFlash('success', 'Вопрос №' . $id . ' отмечен не прочитанным.');
        return $this->redirect(['index']);
    }
}
