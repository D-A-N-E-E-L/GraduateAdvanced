<?php

namespace backend\controllers;

use app\models\ResultOfEGA;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ResultController implements the CRUD actions for ResultOfEGA model.
 */
class ResultController extends Controller
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
     * Lists all ResultOfEGA models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => ResultOfEGA::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'ide' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ResultOfEGA model.
     * @param int $ide Ide
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ide)
    {
        return $this->render('view', [
            'model' => $this->findModel($ide),
        ]);
    }

    /**
     * Creates a new ResultOfEGA model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ResultOfEGA();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ide' => $model->ide]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ResultOfEGA model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ide Ide
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ide)
    {
        $model = $this->findModel($ide);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ide' => $model->ide]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ResultOfEGA model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ide Ide
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ide)
    {
        $this->findModel($ide)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ResultOfEGA model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ide Ide
     * @return ResultOfEGA the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ide)
    {
        if (($model = ResultOfEGA::findOne(['ide' => $ide])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
