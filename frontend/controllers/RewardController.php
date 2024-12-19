<?php

namespace frontend\controllers;
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
     * Finds the reward model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idr Idr
     * @return Reward the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idr)
    {
        if (($model = Reward::findOne(['IDR' => $idr])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
