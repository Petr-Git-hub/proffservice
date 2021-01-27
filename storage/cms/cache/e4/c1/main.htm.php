<?php 
use Mike\Services\Models\Item;class Cms60107098f3bff527076683_ca8aa206265e6fc11d603b3dfd046b36Class extends Cms\Classes\LayoutCode
{

public function onStart()
{
	$this['json'] = new class {
		public function decode($json_string){
			return json_decode($json_string, true);
		}
	};
	$this['format'] = new class {
		public function price($price){
			if(preg_match('~^[\d]+$~', $price))
			{
				return number_format($price, 0, '', ' ').' руб.';
			} else {
				$price = str_replace('цена по договоренности', 'договор.', $price);
				return $price;
			}
		}
	};
}
public function onSearch()
{
	$q = filter_input(INPUT_POST, 'q', FILTER_SANITIZE_SPECIAL_CHARS);
	if(empty($q)) return '';
	$q = mb_strtolower($q);

	$result = Db::table('mike_services_item as i')
					->leftJoin('mike_services_category as c', 'i.category_id', '=', 'c.id')
					->whereRaw('LOWER(i.data) LIKE "%'.$q.'%"')
					->select('i.title', 'i.slug', 'c.slug as cslug', 'i.data')
					->get();
	$suggestions = [];
	foreach($result as $cat)
	{
		$data = json_decode($cat->data);
		foreach($data as $obj)
		{
			if(mb_strpos(mb_strtolower($obj->title), $q) !== false)
			{
				array_push($suggestions, [
					'data' => [
						'slug' => '/'.$cat->cslug.'/'.$cat->slug,
						'category' => $cat->title,
					],
					'value' => $obj->title
				]);
			}
		}
	}
	return json_encode($suggestions, JSON_UNESCAPED_UNICODE);
}
}
