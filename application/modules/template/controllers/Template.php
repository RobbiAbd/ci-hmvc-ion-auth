<?php (defined('BASEPATH') OR exit('No direct script access allowed'));

/**
 * Templates Controllers
 */
class Template extends MX_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function loadview($data = NULL , $page = NULL)
	{
		$this->load->view('v_header',$data);  
		if ($page != NULL) :
			// Jika $page ada maka
			// load url yang ada di dalam variabel $page
			$this->load->view($page, $data);
		else :
			echo "Error : page tidak ada !";
		endif;
			$this->load->view('v_footer', $data);
	}
}