<?php

class Controller_SampleAfter extends Controller
{
	public function after($response)
	{
		$response .= __METHOD__ . '�����s����܂���<br>';
		return parent::after($response);
	}
	
	
	public function action_index()
	{
		return __METHOD__ . '�����s����܂���<br>';
	}
	
	public function action_test()
	{
		return __METHOD__ . '�����s����܂���<br>';
	}
}
