<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        
	}

 
    
    function fetch()
    {
     $output = '';
     $query = '';
     $this->load->model('ajaxsearch_model');
     if($this->input->post('query'))
     {
      $query = $this->input->post('query');
     }
     $data = $this->ajaxsearch_model->fetch_data($query);
     $output .= '
     <div class="table-responsive">
        <table class="table table-bordered table-striped">
         <tr>
          <th>Aperçu</th>
          <th>Type de bien</th>
          <th>Prix</th>
          <th>Surface</th>
          <th>Nom</th>
          <th>Détail</th>
         </tr>
     ';
     if($data->num_rows() > 0)
     {
      foreach($data->result() as $row)
      {
       $output .= '
         <tr>
         <th><img src="'.base_url().'assets/img/apercu.jpg"."></img></th>
          <td>'.$row->typeDeBien.'</td>
          <td>'.$row->prix.'</td>
          <td>'.$row->surface.'</td>
          <td>'.$row->nom.'</td>
          <th><a href="display/'.$row->idAnnonce.'">Détails</a></th>
         </tr>
       ';
      }
     }
     else
     {
      $output .= '<tr>
          <td colspan="5">No Data Found</td>
         </tr>';
     }
     $output .= '</table>';
     echo $output;
    }
    
}
