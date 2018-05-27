<?php

class Auth extends CI_Controller {


    public function register(){
        
        if(isset($_POST['register'])){
            $data = array(
                'password'=>$_POST['mdp'],
                'nom'=>$_POST['nom'],
                'prenom'=>$_POST['prenom'],
                'mail'=>$_POST['mail'],
                'telephone'=>$_POST['telephone'],
                'statut'=>$_POST['statut']              
            );

            $this->db->insert('user',$data);

            $this->session->set_flashdata("success","votre compte à bien été créé. vous pouvez vous connecter");
            redirect("auth/register", "refresh");
        }

        $this->load->view('header');
        
        $this->load->view('auth/register');
        $this->load->view('footer');

    }

    public function login(){

        if(isset($_POST['login'])){

                $mail = $_POST['mail'];
                $password =$_POST['mdp'];         

            $this->db->select('*');
            $this->db->from('user');
            $this->db->where(array('mail' => $mail, 'password' => $password));
            $query = $this->db->get();

            $user = $query->row();

            if($user->email){
                $this->session->set_flashdata("success","vous vous êtes connecté.");                

                $_SESSION["user_logged"] = TRUE;
                $_SESSION["prenom"] = $user->prenom;
                $_SESSION["nom"] = $user->nom;
                $_SESSION["mail"] = $user->mail;
                $_SESSION["telephone"] = $user->telephone;
                $_SESSION["statut"] = $user->statut;

                redirect("home", "refresh");

            }else{
                $this->session->set_flashdata("failure","Erreur : Identifiants incorrects ou bien inexistants.");
                redirect("auth/login", "refresh");
            }

        }

        $this->load->view('header');        
        $this->load->view('auth/login');
        $this->load->view('footer');
    }

}

