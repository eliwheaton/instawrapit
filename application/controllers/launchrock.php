<?php

class Launchrock_Controller extends Base_Controller {    

	public function action_index()
    {
        return View::make('launchrock.index');
    }

}