<?php 
use Mike\Services\Models\Category;use Mike\Services\Models\Item;class Cms600ddae6dea05510466704_08cb93105e9d4b39dea3ebb94b9ade2bClass extends Cms\Classes\PageCode
{


public function onStart()
{
	$this['current_category'] = Category::select('id', 'title', 'slug')
								->whereSlug($this->param('category'))
								->remember(60)->first();
	$this['current_item']     = Item::select('id', 'title', 'slug', 'data')
								->whereSlug($this->param('item'))
								->remember(60)->first();

	if(!$this['current_category'] || !$this['current_item']){
		return \Redirect::to('404');
	}

	$this->page['title'] = $this['current_category']['title'].' / '.$this['current_item']['title'];

	$this['categories'] = Category::select('id', 'title', 'slug')->remember(60)->get();
}
}
