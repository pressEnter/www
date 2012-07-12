<?php

class NewsController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionRead($id, $slug)
	{
		$id = (int)$id;
		
		$post = Post::model()->with('category')->find(array(
			'condition' => 't.id=:id AND t.slug=:slug',
			'params' => array(
				':id' => $id,
				':slug' => $slug
			)
		));
		if(is_null($post)){
			throw new CHttpException(404, 'No se encuentra la noticia solicitada.');
		}
		$this->render('read', array('post' => $post));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
