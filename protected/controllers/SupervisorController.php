<?php

class SupervisorController extends Controller
{
    public $defaultAction = 'index';

	public function filters()
	{
		return array(
			'accessControl',
		);
	}
	public function accessRules()
	{
		return array(
			array('allow',
				'roles'=>array('supervisor'),
			),
/*
			array('deny',
				'users'=>array('*'),
			),
*/
		);
	}
 


    public function actionIndex()
    {
           $model = new Item;

        if( isset($_GET['pageSize']) && $model->validatePageSize($_GET['pageSize']) )
            $model->currentPageSize = $_GET['pageSize'];


        $fields = new SupervisorSearchForm('search');

        if( isset($_GET['SupervisorSearchForm']) ){
            $fields->attributes = $_GET['SupervisorSearchForm'];

            if( $fields->validate() )
                $model->searchCriteria = $fields->getCriteria();

        }                
        
        $this->render('index',array('model'=>$model, 'fields'=>$fields));
    }
    
    	public function actionCreate()
	{
		$model=new Item;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Item']))
		{
			$model->attributes=$_POST['Item'];
			if($model->save())
			//	$this->redirect(array('view','id'=>$model->Item_Number));
                            $this->redirect(array('index'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
    
    //	public function actionDelete($id)
//	{
//		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
//		if(!isset($_GET['ajax']))
//			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
             
//	}
    
    public function loadModel($id)
	{

		$model=Supervisor::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
 
         public function actionRemove(){
 
                           
     if(isset($_GET['id'])){
            $model = Item::model()->findByPk($_GET['id']);
             $model->delete();
         
            if($model->save()){
                $this->redirect(array('supervisor/index'));
            } else{
                throw new \Exception(print_r($model->getErrors(), true));
            }
        }
                               
 
             
      
//        $this->loadModel($id)->delete();
//      if(!isset($_GET['ajax']))
//    $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
           
        
         }
   
}

      

