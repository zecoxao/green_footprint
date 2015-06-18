
<?php
class SimulacaoEquipamentoController extends RController
{
	public $layout='//layouts/column2';
	
	public function filters()
    {
        return array(
            'rights', // perform access control for CRUD operations
 
        );
    }
	
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('SimulacaoEquipamento');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionCreate()
	{
	    $model=new SimulacaoEquipamento;

	    if(isset($_POST['ajax']) && $_POST['ajax']==='client-account-create-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }

	    if(isset($_POST['SimulacaoEquipamento']))
	    {
	        $model->attributes=$_POST['SimulacaoEquipamento'];
	        if($model->validate())
	        {
				$this->saveModel($model);
				$this->redirect(array('view','simulacao'=>$model->simulacao, 'equipamento'=>$model->equipamento));
	        }
	    }
	    $this->render('create',array('model'=>$model));
	} 
	
	public function actionDelete($simulacao, $equipamento)
	{
		if(Yii::app()->request->isPostRequest)
		{
			try
			{
				// we only allow deletion via POST request
				$this->loadModel($simulacao, $equipamento)->delete();
			}
			catch(Exception $e) 
			{
				$this->showError($e);
			}

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}
	
	public function actionUpdate($simulacao, $equipamento)
	{
		$model=$this->loadModel($simulacao, $equipamento);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['SimulacaoEquipamento']))
		{
			$model->attributes=$_POST['SimulacaoEquipamento'];
			$this->saveModel($model);
			$this->redirect(array('view',
	                    'simulacao'=>$model->simulacao, 'equipamento'=>$model->equipamento));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionAdmin()
	{
		$model=new SimulacaoEquipamento('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['SimulacaoEquipamento']))
			$model->attributes=$_GET['SimulacaoEquipamento'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionView($simulacao, $equipamento)
	{		
		$model=$this->loadModel($simulacao, $equipamento);
		$this->render('view',array('model'=>$model));
	}
	
	public function loadModel($simulacao, $equipamento)
	{
		$model=SimulacaoEquipamento::model()->findByPk(array('simulacao'=>$simulacao, 'equipamento'=>$equipamento));
		if($model==null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function saveModel($model)
	{
		try
		{
			$model->save();
		}
		catch(Exception $e)
		{
			$this->showError($e);
		}		
	}

	function showError(Exception $e)
	{
		if($e->getCode()==23000)
			$message = "This operation is not permitted due to an existing foreign key reference.";
		else
			$message = "Invalid operation.";
		throw new CHttpException($e->getCode(), $message);
	}		
}
