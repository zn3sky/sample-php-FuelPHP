<?php

class Controller_Blog extends Controller
{
	public function action_category($cat = 'php', $page = '1')
	{
		return __FILE__ . '<br>' . $cat . '<br>' . $page;
	}
	
	public function action_search($cat = 'php', $page = '1')
	{
		return __FILE__ . '<br>' . $cat . '<br>' . $page;
	}
	
	

}