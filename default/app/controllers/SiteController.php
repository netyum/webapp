<?php

use \yii\web\Controller;

class SiteController extends Controller
{

	public function actionIndex() {
		echo $this->render('index', array('message'=>'The first app for Yii2.0'));
	}
}
