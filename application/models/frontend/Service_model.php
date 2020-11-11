<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Service_model (Service Model)
 * User model class to get to handle user related data 
 * @author : Amit Yadav
 * @version : 1.1
 * @since : 15 November 2019
 */
class Service_model extends CI_Model
{
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */

    function serviceAllItems()
    {
        $alldata =  $this->db->get('tbl_sev');

        return $alldata->row_array();
    }
    public function allprogram()
    {

        $this->db->select('*');
        $this->db->from('tbl_services');
        $this->db->where('status', 'Active');

        $query = $this->db->get();

        return $query->result();
    }

    function getContact()
    {

        $query = $this->db->get('tbl_contact');

        return $query->row_array();
    }

    function serviceCategory()
    {

        $query = $this->db->get_where('tbl_scategory', array('status' => 'Active'));
        return $query->result();
    }
}
