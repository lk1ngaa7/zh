<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\UploadForm;
use app\models\ZH;
class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
	return $this->render('index');
    }

    public function actionUpload()
    {
	$request = Yii::$app->request;
	$model = new UploadForm();

    	if (Yii::$app->request->isPost) {
        	$model->file = UploadedFile::getInstance($model, 'file');
		if($model->file->extension != 'xlsx'){
			$this->redirect(['site/index']);
		}
       		if ($model->validate()) {                
			$file = 'upload/' . $model->file->baseName . '.' . $model->file->extension;
            		if($model->file->saveAs('upload/' . $model->file->baseName . '.' . $model->file->extension)){
				$objPHPExcel = \PHPExcel_IOFactory::load($file);
				$sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
				$num = 0;
				foreach($sheetData as $sd){
					$mo = new ZH;
				//	if($num == 0){
				//		continue;
				//	}
					$mo->number = $sd['A'];
					$mo->name = $sd['B'];
					$mo->gender = $sd['C'];
					$mo->class = $sd['D'];
					$mo->jianhuren = $sd['E'];
					$mo->phone= $sd['F'];
					if(!$mo->save()){
						var_dump($mo->errors);die();	
					}
					$num++;
				}
				$data = ZH::find()->all();
				return 	$this->render('data' ,  ['data' => $sheetData] );
			}
        	}else{
				$this->render('fileerror' , ['model' => $model]);
		}
   	 }else{
			$this->redirect(['site/index']);
}

    }
}
