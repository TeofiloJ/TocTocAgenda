<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller
{

     public function __construct() {
        Parent::__construct();
        $this->load->model("calendar_model");
    }

     public function index()
     {
        $this->load->view('header');
        if(isset($_SESSION['user_logged'])){
            $this->load->view('menus/logged_menu');
       	}else{
            $this->load->view('menus/menu');
       	}
		
        $this->load->view("calendar/index.php", array());
		//$this->load->view('footer');
     }

}

?>