<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Annonces extends CI_Controller {


	public function __construct()
	{
        parent::__construct();
        
    }
    
    public function search(){
        $this->load->view('header');
        $this->load->view('menus/menu');
		
		$this->load->view('annonces/annonce_search');
		$this->load->view('footer');
    }

	public function index()
	{

        $this->load->view('header');
        $this->load->view('menus/logged_menu');
		
		$this->load->view('annonces/annonce_form');
		$this->load->view('footer');
    }

    public function display(){
        $this->load->view('header');
        $this->load->view('menus/logged_menu');
		
		$this->load->view('annonces/annonce_form');
		$this->load->view('footer');
    }
    
    public function create()
	{
        if(!isset($_SESSION["user_logged"])){
            $this->session->set_flashdata("error","Erreur : vous devez être connecté pour voir cette page.");
            redirect("auth/login");
        }

        if(isset($_POST['validate'])){
            $data = array(
                'idUser'=>$_SESSION["idUser"],
                'typeAnnonce'=>$_POST['typeAnnonce'],
                'typeDeBien'=>$_POST['typeDeBien'],
                'nom'=>$_POST['nom'],
                'prix'=>$_POST['prix'],
                'charges'=>$_POST['charges'],
                'description'=>$_POST['description'],
                'surface'=>$_POST['surface'],
                'exposition'=>$_POST['exposition'],
                'etage'=>$_POST['etage'],
                'chauffage'=>$_POST['chauffage']                  
            );

            $this->db->insert('annonce',$data);

            $this->session->set_flashdata("success","Votre annonce à bien été créée.");
            redirect("annonces/display",$data);
        }

        $this->load->view('header');
        $this->load->view('menus/logged_menu');
		
		$this->load->view('annonces/annonce_form');
		$this->load->view('footer');
	}
}
