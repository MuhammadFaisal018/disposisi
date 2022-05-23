<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
    public function index()
    {   
        $data = array(
<<<<<<< HEAD
            'title' => 'Dashboard'
=======
>>>>>>> 56d9ce162c17e5cf49a23af4452de6859702d27f
            'content'=> 'dashboard/index.php'
        );
        $this->load->view('template/menu',$data);
    }
	}
