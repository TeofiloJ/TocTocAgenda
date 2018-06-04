<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Annonces extends CI_Controller {


	public function __construct()
	{
        parent::__construct();
        
    }
    
    public function search(){
        $this->load->view('header');
        if(isset($_SESSION['user_logged'])){
            $this->load->view('menus/logged_menu');
       	}else{
            $this->load->view('menus/menu');
       	}
		
		$this->load->view('annonces/annonce_search');
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

    public function adsList(){
        if(!isset($_SESSION["user_logged"])){
            $this->session->set_flashdata("error","Erreur : vous devez être connecté pour voir cette page.");
            redirect("auth/login");
        }

        $this->load->view('header');
        $this->load->view('menus/logged_menu');
		
		$this->load->view('annonces/annonce_user_list');
		$this->load->view('footer');
    }
    
    function fetch_user(){  
        $this->load->model("crud_model");  
        $fetch_data = $this->crud_model->make_datatables();  
        $data = array();  
        foreach($fetch_data as $row)  
        {  
             $sub_array = array();  
             $sub_array[] = $row->typeAnnonce;  
             $sub_array[] = $row->typeAnnonce;  
             $sub_array[] = $row->typeAnnonce;  
             $sub_array[] = '<button type="button" name="update" id="'.$row->idAnnonce.'" class="btn btn-warning btn-xs update">Update</button>';  
             $sub_array[] = '<button type="button" name="delete" id="'.$row->idAnnonce.'" class="btn btn-danger btn-xs delete">Delete</button>';  
             $data[] = $sub_array;  
        }  
        $output = array(  
             "draw"                    =>     intval($_POST["draw"]),  
             "recordsTotal"          =>      $this->crud_model->get_all_data($_SESSION['idUser']),  
             "recordsFiltered"     =>     $this->crud_model->get_filtered_data(),  
             "data"                    =>     $data  
        );  
        echo json_encode($output);  
   }  
   function user_action(){  
        if($_POST["action"] == "Add")  
        {  
             $insert_data = array(  
                  'first_name'          =>     $this->input->post('first_name'),  
                  'last_name'               =>     $this->input->post("last_name"),  
                  'image'                    =>     $this->upload_image()  
             );  
             $this->load->model('crud_model');  
             $this->crud_model->insert_crud($insert_data);  
             echo 'Data Inserted';  
        }  
        if($_POST["action"] == "Edit")  
        {  
             $user_image = '';  
             if($_FILES["user_image"]["name"] != '')  
             {  
                  $user_image = $this->upload_image();  
             }  
             else  
             {  
                  $user_image = $this->input->post("hidden_user_image");  
             }  
             $updated_data = array(
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
             $this->load->model('crud_model');  
             $this->crud_model->update_crud($_SESSION["idUser"], $updated_data);  
             echo 'Data Updated';  
        }  
   }  

   function upload_image()  
   {  
        if(isset($_FILES["user_image"]))  
        {  
             $extension = explode('.', $_FILES['user_image']['name']);  
             $new_name = rand() . '.' . $extension[1];  
             $destination = './upload/' . $new_name;  
             move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
             return $new_name;  
        }  
   }  
   function fetch_single_user()  
   {  
        $output = array();  
        $this->load->model("crud_model");  
        $data = $this->crud_model->fetch_single_ad($_POST["user_id"]);  
        foreach($data as $row)  
        {  
             $output['first_name'] = $row->first_name;  
             $output['last_name'] = $row->last_name;  
             if($row->image != '')  
             {  
                  $output['user_image'] = '<img src="'.base_url().'upload/'.$row->image.'" class="img-thumbnail" width="50" height="35" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
             }  
             else  
             {  
                  $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
             }  
        }  
        echo json_encode($output);  
   }  

}
