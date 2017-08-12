<?php
class Controller_Routingtest extends Controller
{
	public function router($resource, $arguments)
	{
		var_dump($resource);
		var_dump($arguments);
				
	
		Debug::dump($this->request->route);
		Debug::dump($this->params());
	
	}

}