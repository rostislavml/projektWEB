<?php 


class Articles_model extends CI_Model {
public function __construct() {
    parent::__construct();
} 

public function getArticles()
  {
      $this->db->select('id,title,text');
      $this->db->from('articles');  
      $data = $this->db->get()->result();
      return $data;
  }
}


?>