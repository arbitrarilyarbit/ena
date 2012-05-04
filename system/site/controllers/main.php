<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends Main_Controller
{
	/**
	 * Constructor method
	 *
	 * @access public
	 * @return void
	 */
	public function __construct()
	{
  		parent::__construct();
 	}

 	/**
 	 * Show the control panel
	 *
	 * @access public
	 * @return void
 	 */
 	public function index()
	{
		$data = array();

		$this->template
			->title('Dashboard')
			->build('dashboard', $data);
	}
}