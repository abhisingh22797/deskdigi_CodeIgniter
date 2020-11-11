<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Class : About (AboutController)
 * About Class to control About Page.
 * @author : Amit Yadav
 * @version : 1.5
 * @since : 15 November 2019-20
 */
class About extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/about_model');
    }

    /**
     * This function used to load the first screen
     */
    public function index()
    {

        $data['contact'] =  $this->about_model->getContact();
        $data['allBarnds'] = $this->about_model->getBrands();
        $data['allData'] = $this->about_model->getAllItems();
        $data['title'] = 'About Us  | Birjuflower Store';
        $data['layout'] = 'about';
        $this->load->view('layout', $data);
    }
}
