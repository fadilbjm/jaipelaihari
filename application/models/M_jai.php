<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_jai extends CI_Model {

    function getPost($count)
    {
        $query=$this->db->get('t_artikel', $count);
        return $query;
    }

}

/* End of file M_jai.php */
