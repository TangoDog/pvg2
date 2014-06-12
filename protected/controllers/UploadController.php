<?php

class UploadController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create','update'),
				'users'=>array('admin','evan'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Upload;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
                // make the directory to store the pic:
                if(!is_dir(Yii::getPathOfAlias('webroot').'/images/uploads')) {
                   mkdir(Yii::getPathOfAlias('webroot').'/images/uploads');
                   chmod(Yii::getPathOfAlias('webroot').'/images/uploads', 0755); 
                   // the default implementation makes it under 777 permission, which you could possibly change recursively before deployment, but here's less of a headache in case you don't
                }
                Yii::trace('Entered Create');
		if(isset($_POST['Upload']))
		{
			//$model->attributes=$_POST['Upload'];
                        Yii::trace('Post entered, $_FILES is'.CVarDumper::dumpAsString($_FILES));
                        // THIS is how you capture those uploaded images: remember that in your CMultiFile widget, you set 'name' => 'spreads'
                        $images = CUploadedFile::getInstancesByName('spreads');
                        Yii::trace('Post entered, $images name will be ');
                        // proceed if the images have been setp
                        if (isset($images) && count($images) > 0) 
                                foreach($images as $image) {
                                     Yii::trace('Post entered, $images name will be '.$image->name);
                                     $pathFile = Yii::getPathOfAlias('webroot').'/images/uploads/'.$image->name;
                                     $model->url = $pathFile;
                                     $model->user_id = 1;
                                     $model->created = date('m-d-Y');
                                     Yii::trace('Post entered, $images name will be '.$pathFile);
                                    if ($image->saveAs($pathFile)) {
                                        // add it to the main model now
                                        // run R script to process the file and do the data
                                          exec("Rscript /var/www/pvg/protected/R/testExec.R", $output, $return);
                                          Yii::trace('Post entered, $return is'.CVarDumper::dumpAsString($return));
                                          Yii::trace('Post entered, $output is'.CVarDumper::dumpAsString($output));

                                    }
                                    else Yii::trace('File Save failed for '.$image->name);
                                } // foreach
                        //save the rest of your information from the form
                       if ($model->save()) {
                           Yii::trace('Saved Model');
                           // Now use PHP files to parse the csv into arrays and then insert into the patient record
                           $row = 1;
                           $rawData = new Rawdata;
                           $keys = array_keys($rawData->attributeLabels());
//                           $keyFile = Yii::getPathOfAlias('webroot').'/images/uploads/keyfile.txt';
//                                    
//                           if (($handle = fopen($keyFile, "r")) !== FALSE) {
//                               $keys  = fgetcsv($handle, ","); // 1 line with 341 fields
//                               $num2 = count($keys);
//                           }
//                           
                           $csvFile = $model->url;
                           if (($handle = fopen($csvFile, "r")) !== FALSE) {
                                while (($data = fgetcsv($handle, ",")) !== FALSE) {
                                    // ignore the heading line - $ro1 ==1
                                    if ($row>1) {
                                        $rawData = new Rawdata;
                                        // these are the last five keys not collected in the csv read
//                                        'id' => 'ID',
//                                        'created' => 'Created',
//                                        'updated' => 'Updated',
//                                        'user_id' => 'User',
//                                        'edited_by' => 'Edited By',
                                        $data[] = 0;  // primary key
                                        $data[] = date("Y/m/d"); //'created' => 'Created',
                                        $data[] = date("Y/m/d"); //'updated' => 'Updated',
                                        $data[] =  1;       //'user_id' => 'User',
                                        $data[] = 1;       //'edited_by' => 'Edited By',
                                        $atts = array_combine($keys,$data);
                                        $atts['comments'] = substr($atts['comments'],0,48);
                                        $rawData->attributes=$atts ;
                                        
                                        if($rawData->save()){
                                           Yii::trace('RawData Record '. $row .' Created');
                                        } else {
                                           Yii::trace('RawData Record '. $row .' Failed Creation '.CVarDumper::dumpAsString($rawData->errors));
                                           // Yii::trace('Validateion Errors:'.implode(", ",$rawData->errors));
                                          
                                        }
//                                        $num = count($data);
//                                        echo "<p> $num fields in line $row: <br /></p>";
//                                        for ($c=0; $c < $num; $c++) {
//                                            echo $data[$c] . ",&nbsp";
//                                        }
//                                        echo "\n";
                                    }
                                    $row++;
                                    
                                }
                                fclose($handle);
                            }
                               //$this->redirect(array('view','id'=>$model->id));
                       }
                       else Yii::trace('Model Not Saved');
       } 
                else Yii::trace('Records not set');
                            
//			if($model->save())
//				$this->redirect(array('view','id'=>$model->id));
		

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Upload']))
		{
			$model->attributes=$_POST['Upload'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Upload');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Upload('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Upload']))
			$model->attributes=$_GET['Upload'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Upload the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Upload::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Upload $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='upload-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
