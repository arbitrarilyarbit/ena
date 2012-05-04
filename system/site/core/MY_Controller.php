<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH."libraries/MX/Controller.php";

// Code here is run before ALL controllers
class MY_Controller extends MX_Controller {

	public function __construct()
	{
		parent::__construct();

		// Load the user model and get user data
		$this->load->library('users/ion_auth');
		$this->template->current_user = ci()->current_user = $this->current_user = $this->ion_auth->get_user();

		$this->load->model('main_m');

		$_POST = $this->security->xss_clean($_POST);
	}
}

/**
 * Returns the CI object.
 *
 * Example: ci()->db->get('table');
 *
 * @staticvar	object	$ci
 * @return		object
 */
function ci()
{
	return get_instance();
}
