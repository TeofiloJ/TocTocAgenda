<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Annonces extends CI_Controller {


	public function __construct()
	{
        parent::__construct();
        
    }
    
     
    public function index()
	{

        $this->load->view('header');
        $this->load->view('menus/logged_menu');
		
		$this->load->view('annonces/annonce_form');
    }

    public function display($id){
        $this->load->view('header');
        $this->load->view('menus/logged_menu');
        
        $this->db->select("*");
        $this->db->from("annonce");
        $this->db->where("idAnnonce = $id");
        $annonce = $this->db->get()->result();
        $data = array ('annonce' => $annonce);

		$this->load->view('annonces/details-annonce', $data);
    }

    public function delete($id){

        $result  = $this->db->query("select * from annonce where idAnnonce =".$id);
        $data = $result->row();
        echo $data->idUser;
        if($_SESSION['idUser'] == $data->idUser){
            $this->db->query('select idUser from annonce where idAnnonce = "'.$id.'"');
            $this->session->set_flashdata("success","Succès : Votre annonce a été supprimée.");
            redirect("annonces/list");
        }
        $this->session->set_flashdata("danger","Erreur : vous n'avez pas la permission d'effectuer cette action.");
        redirect("annonces/list");

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
            redirect("annonces/list");
        }

        $this->load->view('header');
        $this->load->view('menus/logged_menu');
		
		$this->load->view('annonces/annonce_form');
		//$this->load->view('footer');
    }

    public function list(){
        if(!isset($_SESSION["user_logged"])){
            $this->session->set_flashdata("error","Erreur : vous devez être connecté pour voir cette page.");
            redirect("auth/login");
        }

        $this->db->select("*");
        $this->db->from("annonce");
        $this->db->like("idUser",$_SESSION['idUser']);
        $this->db->order_by('dateEnregistrement', 'DESC');
        $annonces = $this->db->get();
        $data = array(
            'annonces' => $annonces
        );
       

        $this->load->view('header');
        if(isset($_SESSION['user_logged'])){
            $this->load->view('menus/logged_menu');
        }else{
            $this->load->view('menus/menu');
        }		
        $this->load->view('annonces/annonce_list',$data);
    }
    
    public function search()
    {
        $output = '';
        $query = '';

        if($this->input->post('validate'))
        {
            $query = 'select * from Annonce where ';
            if(isset($_POST['typeAnnonce'])&& $_POST['typeAnnonce'] !=""){
                if($query != 'select * from Annonce where '){
                    $query .=" and ";
                }
                $query .=' typeAnnonce =  "'.$_POST['typeAnnonce'].'"';
            }
            if(isset($_POST['typeDeBien'])&& $_POST['typeDeBien'] !=""){
                if($query != 'select * from Annonce where '){
                    $query .=" and ";
                }
                $query .=' typeDeBien =  "'.$_POST['typeDeBien'].'"';
            }
            if(isset($_POST['prix'])&& $_POST['prix'] !=""){
                if($query != 'select * from Annonce where '){
                    $query .=" and ";
                }
                $query .=' prix =  "'.$_POST['prix'].'"';
            }
            if(isset($_POST['charges'])&& $_POST['charges'] !=""){
                if($query != 'select * from Annonce where '){
                    $query .=" and ";
                }
                $query .=' charges =  "'.$_POST['charges'].'"';
            }
            if(isset($_POST['surface'])&& $_POST['surface'] !=""){
                if($query != 'select * from Annonce where '){
                    $query .=" and ";
                }
                $query .=' surface =  "'.$_POST['surface'].'"';
            }
            if(isset($_POST['exposition'])&& $_POST['exposition'] !=""){
                if($query != 'select * from Annonce where '){
                    $query .=" and ";
                }
                $query .=' exposition =  "'.$_POST['exposition'].'"';
            }
            if(isset($_POST['etage'])&& $_POST['etage'] !=""){
                if($query != 'select * from Annonce where '){
                    $query .=" and ";
                }
                $query .=' etage =  "'.$_POST['etage'].'"';
            }
            if(isset($_POST['chauffage']) && $_POST['chauffage'] !=""){
                if($query != 'select * from Annonce where '){
                    $query .=" and ";
                }
                $query .=' chauffage =  "'.$_POST['chauffage'].'"';
            }

            if($query == 'select * from Annonce where '){
                $query ="select * from Annonce";
            }
            
            $result  = $this->db->query($query);
            $data = array(
                'annonces' => $result
            );

        }else{

            $this->db->select("*");
            $this->db->from("annonce");
                //$this->db->like("idUser",$_SESSION['idUser']);
            if($query != '')
            {
                $this->db->like('typeAnnonce', $query);
                $this->db->or_like('idAnnonce', $query);
                $this->db->or_like('typeDeBien', $query);
                $this->db->or_like('nom', $query);
                $this->db->or_like('prix', $query);
                $this->db->or_like('charges', $query);
                $this->db->or_like('description', $query);
                $this->db->or_like('surface', $query);
                $this->db->or_like('exposition', $query);
                $this->db->or_like('etage', $query);
                $this->db->or_like('chauffage', $query);
            }
            $this->db->order_by('dateEnregistrement', 'DESC');
            $annonces = $this->db->get();
            $data = array(
                'annonces' => $annonces
            );
        }     

        $this->load->view('header');
        if(isset($_SESSION['user_logged'])){
            $this->load->view('menus/logged_menu');
       	}else{
            $this->load->view('menus/menu');
       	}		
		$this->load->view('annonces/annonce_search',$data);
        
    }

}
    
    

