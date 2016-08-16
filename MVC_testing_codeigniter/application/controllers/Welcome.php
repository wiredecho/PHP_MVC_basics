<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}

// Methods and loading a view file
// Inside the controller, we can have multiple methods to do different tasks within that controller. Common tasks in the controller's method include

// handling post data
// handling session data
// adding validations
// generating json data (for Ajax)
// loading appropriate view files (and passing data to the view files)
// passing or retrieving information from the database by calling 'models'
// To have the method render a view file in /application/views/hello.php (view file in CodeIgniter is basically an HTML file with embedded PHP code), you do something like below:

// class Dojos extends CI_Controller {
//      public function ninjas()
//      {
//            $this->load->view('hello');
//      }
// }

// Passing arguments to methods
// You can pass arguments to the method through the URL, For example, say that our URL is now

// localhost/dojos/ninjas/red/35