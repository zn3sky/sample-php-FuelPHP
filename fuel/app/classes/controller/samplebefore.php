<?php

class Controller_SampleBefore extends Controller
{
	public function before()
	{
		$this->current_user = 'Yui';
	}
	
	public function action_index()
	{
		$output = $this->current_user . '����A' . __METHOD__ . '�����s����܂����B<br>(index)';
		
		return $output;
	}
	
	public function action_test()
	{
		$output = $this->current_user . '����' . __METHOD__ . '�����s����܂���<br>(test)';
		
		return $output;
	}
}