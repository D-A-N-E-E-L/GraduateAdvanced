<?php
namespace app\controllers;

use common\models\User;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use yii\rest\ActiveController;

class StudentController extends ActiveController
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => HttpBasicAuth::class,
            'auth' => function ($username, $password) {
                $user = User::findByUsername($username); // Замените на свой метод поиска пользователя
                if ($user && $user->validatePassword($password)) {
                    return $user;
                }
                return null;
            },
        ];
        return $behaviors;
    }

    public $modelClass = 'common\models\Graduat';
}
