<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 * sdfgsdfgsdf gsdfg sdfg sdf gsdfg 
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}