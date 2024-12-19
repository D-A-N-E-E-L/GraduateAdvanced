<?php

namespace backend\controllers;

use app\models\Graduat;
use app\models\Service;
use app\models\Technical;
use app\models\User;
use app\models\Work;
use common\models\LoginForm;
use frontend\models\SignupForm;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'tables', 'index', 'table', 'view', 'create', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($this->request->isPost) {
          $usr = $_POST['LoginForm']['username'];
          $id = User::find()->where(['username' => $usr])->one()
          }
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
  /**
   * Finds the Graduat model based on its primary key value.
   * If the model is not found, a 404 HTTP exception will be thrown.
   * @param int $ids Ids
   * @return Graduat the loaded model
   * @throws NotFoundHttpException if the model cannot be found
   */
  protected function findModel($ids)
  {
    if (($model = Graduat::findOne(['ids' => $ids])) !== null) {
      return $model;
    }

    throw new NotFoundHttpException('The requested page does not exist.');
  }

  /**
   * Deletes an existing Graduat model.
   * If deletion is successful, the browser will be redirected to the 'index' page.
   * @param int $ids Ids
   * @return \yii\web\Response
   * @throws NotFoundHttpException if the model cannot be found
   */
  public function actionDelete($ids)
  {
    $this->findModel($ids)->delete();

    return $this->redirect(['table']);
  }

  /**
   * Updates an existing Graduat model.
   * If update is successful, the browser will be redirected to the 'view' page.
   * @param int $IDS Ids
   * @return string|\yii\web\Response
   * @throws NotFoundHttpException if the model cannot be found
   */
  public function actionUpdate($ids)
  {
    $model = $this->findModel($ids);
    if ($this->request->isPost) {
      $isExists1 = Technical::find()->where(['idt' => $_POST["Graduat"]['idt']])->exists();
      $isExists2 = Service::find()->where(['idsvs' => $_POST["Graduat"]['idsvs']])->exists();
      $isExists3 = Work::find()->where(['ido' => $_POST["Graduat"]['ido']])->exists();
      if ($isExists1 && $isExists2 && $isExists3) {
        if ($model->load(Yii::$app->request->post())) {
          if ($model->save()) {
            return $this->redirect(['view', 'ids' => $model->ids]);
          }
        }
      }
    }
    return $this->render('Graduate/update', [
      'model' => $model,
    ]);
  }

  /**
   * Creates a new Graduat model.
   * If creation is successful, the browser will be redirected to the 'view' page.
   * @return string|\yii\web\Response
   */
  public function actionCreate()
  {
    $model = new Graduat();
    if ($this->request->isPost) {
      $isExists1 = Technical::find()->where(['idt' => $_POST["Graduat"]['idt']])->exists();
      $isExists2 = Service::find()->where(['idsvs' => $_POST["Graduat"]['idsvs']])->exists();
      $isExists3 = Work::find()->where(['ido' => $_POST["Graduat"]['ido']])->exists();
      if ($isExists1 && $isExists2 && $isExists3) {
        if ($model->load(Yii::$app->request->post())) {
          if ($model->save()) {
            return $this->redirect(['view', 'ids' => $model->ids]);
          }
        }
      }
    } else {
      $model->loadDefaultValues();
    }

    return $this->render('Graduate/create', [
      'model' => $model,
    ]);
  }

  /**
   * Displays a single Graduat model.
   * @param int $ids Ids
   * @return string
   * @throws NotFoundHttpException if the model cannot be found
   */
  public function actionView($ids)
  {
    return $this->render('Graduate/view', [
      'model' => $this->findModel($ids),
    ]);
  }

  /**
   * Lists all Graduat models.
   *
   * @return string
   */
  public function actionTable()
  {
    $dataProvider = new ActiveDataProvider([
      'query' => Graduat::find(),
      /*
      'pagination' => [
          'pageSize' => 50
      ],
      'sort' => [
          'defaultOrder' => [
              'IDS' => SORT_DESC,
          ]
      ],
      */
    ]);

    return $this->render('table', [
      'dataProvider' => $dataProvider,
    ]);
  }

  public function actionTables()
  {
    return $this->render('tables');
  }
  public function actionSignup()
  {
    $model = new SignupForm();

    if ($model->load(Yii::$app->request->post())) {
      if ($user = $model->signup()) {
        if (Yii::$app->getUser()->login($user)) {
          return $this->goHome();
        }
      }
    }

    return $this->render('signup', [
      'model' => $model,
    ]);
  }
}
