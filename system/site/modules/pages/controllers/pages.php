<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Main_Controller
{
	/**
	 * Constructor method
	 * @access public
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Default Method
	 * @access public
	 * @return void
	 */
	public function index() {
		redirect();
	}

	/**
	* home method
	* @access public
	* @return void
	*/
	public function home()
	{
		// Create page output
		$this->template->title('Home');
	
		$this->template->build('pages/home');
	}
}
