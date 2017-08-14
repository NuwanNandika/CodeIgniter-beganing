<?php

class Product_model extends CI_Model {
		 public function __construct() {
                parent::__construct();
        }
		public function insert_entry(){
                $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();
                $this->db->insert('product', $this);
        }
}


?>