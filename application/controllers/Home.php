<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
	}

	public function comingSoon(){
		$this->load->view('pages/comingsoon');
	}
	

	public function index()
	{

        $this->load->view('header');
        if(isset($_SESSION['user_logged'])){
            $this->load->view('menus/logged_menu');
       	}else{
            $this->load->view('menus/menu');
       	}
		
		$this->load->view('pages/home');
	}

	public function contact()
	{
        $this->load->view('header');
        if(isset($_SESSION['user_logged'])){
            $this->load->view('menus/logged_menu');
       	}else{
            $this->load->view('menus/menu');
       	}
		
		$this->load->view('pages/contact');
	}

	public function about()
	{
        $this->load->view('header');
        if(isset($_SESSION['user_logged'])){
            $this->load->view('menus/logged_menu');
       	}else{
            $this->load->view('menus/menu');
       	}
		
		$this->load->view('pages/about');
	}

}
