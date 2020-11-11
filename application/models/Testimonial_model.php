<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Testimonial_model (User Model)
 * Testimonial model class to get to handle Testimonial related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Testimonial_model extends CI_Model
{


    function testimonialListing()
    {

        $this->db->where('status', 'active');
        $this->db->from('tbl_testimonials');
        $query = $this->db->get();
        return $query;
    }


    function getUserRoles()
    {
        $this->db->select('roleId, role');
        $this->db->from('tbl_roles');
        $this->db->where('roleId !=', 1);
        $query = $this->db->get();

        return $query->result();
    }



    function getUser($userid)
    {
        $this->db->where('id', $userid);
        return $user = $this->db->get('tbl_testimonials')->row_array();
    }





    function inserttestimonial($forminput)
    {
        $this->db->insert("tbl_testimonials", $forminput);
    }

    function updatetestimonial($id, $formArray)
    {
        $this->db->where('id', $id);
        $this->db->update('tbl_testimonials', $formArray);
    }

    function deleteTestimonial($tid, $serInfo)
    {
        $this->db->where('id', $tid);
        $this->db->update('tbl_testimonials', $serInfo);

        return $this->db->affected_rows();
    }

    function getTestbyId($id)
    {


        return $this->db->get_where('tbl_testimonials', array('id' => $id))->row_array();
    }

    public function testimonial_data()
    {

        $this->load->library('datatable');

        $SQL = "SELECT * FROM tbl_testimonials WHERE tbl_testimonials.status = 'Active'";
        return $this->datatable->LoadJsona($SQL);
    }


    function testimonialListings()
    {

        $this->db->where('status', 'active');
        $this->db->from('tbl_testimonial');
        $query = $this->db->get();
        return $query;
    }


    function getUserRoless()
    {
        $this->db->select('roleId, role');
        $this->db->from('tbl_roles');
        $this->db->where('roleId !=', 1);
        $query = $this->db->get();

        return $query->result();
    }



    function getUsers($userid)
    {
        $this->db->where('id', $userid);
        return $user = $this->db->get('tbl_testimonial')->row_array();
    }





    function inserttestimonials($forminput)
    {
        $this->db->insert("tbl_testimonial", $forminput);
    }

    function updatetestimonials($id, $formArray)
    {
        $this->db->where('id', $id);
        $this->db->update('tbl_testimonial', $formArray);
    }

    function deleteTestimonials($tid, $serInfo)
    {
        $this->db->where('id', $tid);
        $this->db->update('tbl_testimonial', $serInfo);

        return $this->db->affected_rows();
    }

    function getTestbyIds($id)
    {


        return $this->db->get_where('tbl_testimonial', array('id' => $id))->row_array();
    }

    public function testimonial_dataa()
    {

        $this->load->library('datatable');

        $SQL = "SELECT * FROM tbl_testimonial WHERE tbl_testimonial.status = 'Active'";
        return $this->datatable->LoadJsona($SQL);
    }
}
