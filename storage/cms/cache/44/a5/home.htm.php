<?php 
use Mike\Services\Models\Category;use Mike\Services\Models\Item;class Cms60106b9fe80c8319397340_a9df394bacffe3b2ae02893509ebe84dClass extends Cms\Classes\PageCode
{


public function onStart()
{
	if($this->param('category')) {

		$this['current_category'] = Category::with(['items' => function($q){
			$q->select('category_id', 'title', 'slug', 'data')->remember(60);
		}])->select('id', 'title', 'slug')->whereSlug($this->param('category'))->remember(60)->first(); 
		$this->page['title'] = $this['current_category']['title'];
		if(!$this['current_category']){
			return \Redirect::to('404');
		}
	}
	$this['categories'] = Category::select('id', 'title', 'slug')->remember(60)->get();
}
}
