<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Controller extends MY_Controller {

	public function __construct() {
		parent::__construct();

		// Show error and exit if the user does not have sufficient permissions
		/*if ( !self::_check_access())
		{
			$this->session->set_flashdata('error', 'Access Denied');
			redirect();
		}*/

		$this->load->helper('admin_theme');

		// Template configuration
		$this->template
			->enable_parser(FALSE)
			->set_theme('site')
			->set_layout('default');
	}

	private function _check_access()
	{
		// These pages get past permission checks
		$ignored_pages = array('users/login', 'users/logout');

		// Check if the current page is to be ignored
		$current_page = $this->uri->segment(1, '') . '/' . $this->uri->segment(2, 'index');

		if (in_array($current_page, $ignored_pages)) { // Dont need to log in, this is an open page
			return TRUE;
		} else if ( ! $this->current_user) {
			redirect('users/login');
		} else if ($this->current_user->group === 'admin') { // Admins can go straight in
			return TRUE;
		} else if ($this->current_user) { // Well they at least better have permissions!
			if ($current_page == 'main/index' && $this->permissions) { // We are looking at the index page. Show it if they have ANY admin access at all
				return TRUE;
			} else {
				// Check if the current user can view that page
				return array_key_exists($this->module, $this->permissions);
			}
		}

		// if nothing matches
		return FALSE;
	}

}