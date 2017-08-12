<?php
class Controller_ViewSample2 extends Controller
{
	public function action_index()
	{
		$view = View::forge('viewsample');
		
		$view->set('title', 'ビューのサンプル2');
		//$view->set('username', 'hogehoge');
		//$view->set_safe('username', '<script>alert(0);</script>');
		//$view->set('username', '<script>alert(0);</script>', false);
		$view->set('username', '<script>alert(0);</script>');
		
		return $view;
	}
}