<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

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

	public function __construct()
	{
        parent::__construct();
        

                if(!isset($_SESSION["user_logged"])){
                    $this->session->set_flashdata("error","Erreur : vous devez être connecté pour voir cette page.");
                    redirect("auth/login");
                }
	}

	public function index()
	{

        $this->load->view('header');
        if(isset($_SESSION['oui'])){
            $this->load->view('menus/logged_menu');
        }else{
            $this->load->view('menus/menu');
        }
		
		$this->load->view('profile/profile');
		$this->load->view('footer');
	}
}