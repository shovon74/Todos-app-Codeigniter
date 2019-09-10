<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 


class Todo_model extends CI_Model {


  function __construct() {
    parent::__construct();
  } 

  function get_all_entries() {
  $query = $this->db-> order_by('rank', 'ASC') ->get('todos');
  $results = array();
  foreach ($query->result() as $result) {
    $results[] = $result;
  }
  return $results;
  }


}