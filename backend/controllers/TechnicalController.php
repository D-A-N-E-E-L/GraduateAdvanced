<?php

namespace backend\controllers;

use app\models\Technical;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TechnicalController implements the CRUD actions for Technical model.
 */
class TechnicalController extends Controller
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
     * Lists all Technical models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Technical::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'IDT' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Technical model.
     * @param int $idt Idt
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idt)
    {
        return $this->render('view', [
            'model' => $this->findModel($idt),
        ]);
    }

    /**
     * Creates a new Technical model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Technical();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idt' => $model->idt]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Technical model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idt Idt
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idt)
    {
        $model = $this->findModel($idt);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idt' => $model->idt]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Technical model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idt Idt
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idt)
    {
        $this->findModel($idt)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Technical model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idt Idt
     * @return Technical the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idt)
    {
        if (($model = Technical::findOne(['idt' => $idt])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
