<?php

class MetronicController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('metronic_layout.index');
	}


	

}
