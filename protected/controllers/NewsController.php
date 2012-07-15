<?php

class NewsController extends Controller {

  public function actionIndex() {
    $this->render('index');
  }

  public function actionRead($id, $slug) {
    $id = (int) $id;

    $post = Post::model()->with('category')->find(array(
        'condition' => 't.id=:id AND t.slug=:slug',
        'params' => array(
            ':id' => $id,
            ':slug' => $slug
        )
            ));
    if (is_null($post)) {
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
  public function actionRss() {

    Yii::import('ext.feed.*');
// RSS 2.0 is the default type
    $feed = new EFeed();

    $feed->title = 'pressEnter Cooperativa de {Software Libre}';
    $feed->description = 'Novededes de pressEnter Coop. Ltda.';

    $feed->setImage($feed->title, $this->createAbsoluteUrl('/news/rss'), $this->createAbsoluteUrl('/').'/images/logo-200x55.png');

    $feed->addChannelTag('language', 'es-ar');
    $feed->addChannelTag('pubDate', date(DATE_RSS, time()));
    $feed->addChannelTag('link', $this->createAbsoluteUrl('/news/rss/'));

// * self reference
    //$feed->addChannelTag('atom:link', 'http://www.pressenter.com.ar/news/rss');

    $posts = Post::model()->findAll();
    foreach ($posts as $post) {
      $item = $feed->createNewItem();
      $item->title = $post->title;
      $item->link = sprintf('%s/%d/%s',$this->createAbsoluteUrl('/news/read/'), $post->id, $post->slug);
      $item->date = $post->published_date;
      $item->description = $post->body;
      $item->addTag('author', 'info@pressenter.com.ar (pressEnter)');
      $item->addTag('guid', 'pressenter-com-ar-'.$post->id, array('isPermaLink' => 'false'));
     $feed->addItem($item);
    }


    // this is just a test!!
    //    $item->setEncloser('http://www.tester.com', '1283629', 'audio/mpeg');
    //   $item->addTag('author', 'thisisnot@myemail.com (Antonio Ramirez)');
    //   $item->addTag('guid', 'http://www.ramirezcobos.com/', array('isPermaLink' => 'true'));


    $feed->generateFeed();
    Yii::app()->end();
  }

}
