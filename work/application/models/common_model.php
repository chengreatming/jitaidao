<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model {

	
	 public function __construct()
    {
        $this->load->database();
    }

    public function get_news($slug = FALSE)
	{
    	if ($slug === FALSE)
    	{
       		$query = $this->db->get('notice');
        	return $query->result_array();
    	}

    	$query = $this->db->get_where('notice', array('slug' => $slug));
    	return $query->row_array();
	}

}