<?php
/**
 *
 */
class Posts extends CWidget {
	
	const POSTS_PER_PAGE = 10;
	public $posts;
	public $limit;
	public $minimal = false;
	public $showPagination = true;
	public $showNoResult = false;
	public $pages;
	public $extraWrapperClasses;
	public $extraItemClasses;
	public $showSocialLinks = true;

	public function run(){
		$criteria = new CDbCriteria;
		$criteria->condition = 'published=1';
		$criteria->order = 'published_date DESC';
		if(isset($this->limit)){
			$criteria->limit = $this->limit;
		}

		$pages = new CPagination(Post::model()->count($criteria));
		$pages->pageSize = isset($this->limit) ? $this->limit : self::POSTS_PER_PAGE;
		$pages->applyLimit($criteria);

		$posts = Post::model()->findAll($criteria);
		
		$extraWrapperClasses = !empty($this->extraWrapperClasses) ? ' ' . $this->extraWrapperClasses : '';
		$extraItemClasses = !empty($this->extraItemClasses) ? ' ' . $this->extraItemClasses : '';
		
		if($this->minimal){
			$this->render('posts_minimal', array(
				'posts' => $posts, 
				'showPagination' => false, 
				'showNoResult' => $this->showNoResult, 
				'pages' => null, 
				'extraWrapperClasses' => $extraWrapperClasses, 
				'extraItemClasses' => $extraItemClasses,
				'showSocialLinks' => $this->showSocialLinks,
			));
		} else {
			$this->render('posts', array(
				'posts' => $posts, 
				'showPagination' => $this->showPagination, 
				'pages' => $pages, 
				'extraWrapperClasses' => $extraWrapperClasses, 
				'extraItemClasses' => $extraItemClasses,
				'showSocialLinks' => $this->showSocialLinks,
			));
		}
	}
}
