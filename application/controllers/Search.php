<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

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
