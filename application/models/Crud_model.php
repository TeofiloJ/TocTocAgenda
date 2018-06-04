<?php  
 class Crud_model extends CI_Model  
 {  
      var $table = "annonce";  
      var $select_column = array("id", "first_name", "last_name", "image");  
      var $order_column = array(null, "first_name", "last_name", null, null);  
      function make_query()  
      {  
           $this->db->select($this->select_column);  
           $this->db->from($this->table);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("first_name", $_POST["search"]["value"]);  
                $this->db->or_like("last_name", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id', 'DESC');  
           }  
      }  
      function make_datatables(){  
           $this->make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function get_filtered_data(){  
           $this->make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data($user_id)  
      {  
           $this->db->select("*");             
           $this->db->from($this->table);
           $this->db->where("idUser", $user_id);  
           return $this->db->count_all_results();  
      }  
      function insert_crud($data)  
      {  
           $this->db->insert('annonce', $data);  
      }  
      function fetch_single_ad($annonce_id)  
      {  
           $this->db->where("idAnnonce", $annonce_id);  
           $query=$this->db->get('annonce');  
           return $query->result();  
      }  
      function update_crud($annonce_id, $data)  
      {  
           $this->db->where("idAnnonce", $annonce_id);  
           $this->db->update("annonce", $data);  
      }  
 }  