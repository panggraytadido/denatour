<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use common\models\LoginForm;
use backend\models\Kabupaten;
use backend\models\Propinsi;
use backend\models\ViewElektabilitas;

/**
 * Site controller
 */
class HomeController extends Controller
{
	
	/**
     * @inheritdoc
     */
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
     
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
		
		//Propinsi::findOne(['ID'=>1]);
		
		//$viewEl = ViewElektabilitas::find()
		//->orderBy('kecamatanid,kelompokpemilihid')
		//->all();
		
		$sql = 'SELECT * FROM view_elektabilitas order by kecamatanid,kelompokpemilihid';
		$viewEl = ViewElektabilitas::findBySql($sql
			//[':status' => Customer::STATUS_INACTIVE]
			
			)->all();
		
		return $this->render('index_view', [
               'viewEl' => $viewEl,
            ]);
		
       
    }
}
