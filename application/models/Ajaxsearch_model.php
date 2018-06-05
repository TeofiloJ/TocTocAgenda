<?php
class Ajaxsearch_model extends CI_Model
{
    function fetch_data($query)
    {
            $this->db->select("*");
            $this->db->from("annonce");
            $this->db->like("idUser",$_SESSION['idUser']);
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
        return $this->db->get();
    }

}
?>
