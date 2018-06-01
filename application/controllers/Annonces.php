<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Annonces extends CI_Controller {


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
        $this->load->view('menus/logged_menu');
		
		//$this->load->view('annonces/annonce_form');
		$this->load->view('footer');
    }
    
    public function create()
	{
        $this->load->view('header');
        $this->load->view('menus/logged_menu');
		
		$this->load->view('annonces/annonce_form');
		$this->load->view('footer');
	}
}
