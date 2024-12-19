<?php

namespace frontend\controllers;

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
