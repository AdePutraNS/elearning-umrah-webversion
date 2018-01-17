<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_forum extends CI_Model {

		public function forum(){
	  			$data = $this->db->query("select * from forum")->result();
	  			return $data;
		}

	}


?>
