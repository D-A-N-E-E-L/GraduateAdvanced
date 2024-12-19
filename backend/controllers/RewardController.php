<?php

namespace backend\controllers;
use app\models\Reward;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RewardController implements the CRUD actions for reward model.
 */
class RewardController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all reward models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Reward::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'NSWRewarded' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single reward model.
     * @param int $idr Idr
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idr)
    {
        return $this->render('view', [
            'model' => $this->findModel($idr),
        ]);
    }

    /**
     * Creates a new reward model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Reward();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idr' => $model->idr]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing reward model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idr Idr
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idr)
    {
        $model = $this->findModel($idr);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idr' => $model->idr]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing reward model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idr Idr
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idr)
    {
        $this->findModel($idr)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the reward model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $IDR Idr
     * @return Reward the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($IDR)
    {
        if (($model = Reward::findOne(['idr' => $IDR])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
