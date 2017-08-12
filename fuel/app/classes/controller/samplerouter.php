<?php

class Controller_SampleRouter extends Controller
{
	public function router($method, $params)
	{
		if ($method === 'abc')
		{
			return $this->action_test($params);
		}
		else
		{
			return $this->action_index($params);
		}
	}
	
	public function before()
	{
		$this->current_user = 'Mio';
	}
	
	public function action_index($params)
	{
		$output = $this->current_user . '‚³‚ñ';
		$output .= __METHOD__ . '‚ªÀs‚³‚ê‚Ü‚µ‚½<br>';
		$output .= var_export($params, true);
		
		return $output;
	}

	public function action_test($params)
	{
		$output = $this->current_user . '‚³‚ñ';
		$output .= __METHOD__ . '‚ªÀs‚³‚ê‚Ü‚µ‚½<br>';
		$output .= var_export($params, true);
		
		return $output;
	}
}