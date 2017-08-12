<?php

class Controller_Showfile extends Controller
{
	public function action_index()
	{
		
	
		Profiler::mark('indexアクションの開始');
		
		$file = DOCROOT . 'index.php';
		
		$content = file_get_contents($file);
		$title = 'ファイル表示プログラム';
		
		$view = View::forge('showfile');
		$view->set('title', $title);
		$view->set('content', $content);
		
		Profiler::mark('indexアクションの終了');
		
		return $view;
	}

}