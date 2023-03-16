<?php
/**
 * Main Controller
 */

class MainController extends Controller
{

	/**
	 * Index
	 *
	 * http://localhost/
	 */
	public function index()
	{
		Site::redirect( '/posts' );
	}

}
