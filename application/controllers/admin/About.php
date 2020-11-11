<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class About extends BaseController
{
  /**
   * This is default constructor of the class
   */
  public function __construct()
  {
    parent::__construct();
    $this->load->model('about_model');

    $this->load->helper('form');
    $this->isLoggedIn();
  }

  /**
   * This function used to load the first screen of the user
   */
  public function index()
  {


    if ($this->isAdmin() == TRUE) {
      $this->loadThis();
    } else {

      $this->global['pageTitle'] = 'Deskdigi  : About';
      $this->loadViews("admin/gallery/listGallery", $this->global, Null, NULL);
    }
  }


  function _uploadfilesamenamess($file, $tem)
  {
    $file = $file;
    $tmp = $tem;
    $test = strpos($file, '.');
    $ext = substr($file, $test);
    //$file=substr(self::uuid(), 1, 7);
    $attach = $file . $ext;
    $destN = "./uploads/client/" . $file;
    move_uploaded_file($tmp, $destN);
    return $file;
  }



  /**
   * This function is used load user edit information
   * @param number Gallery
   */
  function edit($id = NULL)
  {

    if ($this->isAdmin() == TRUE || $id == 1) {
      $this->loadThis();
    } else {



      $data['allData'] = $this->about_model->getAbout();

      $this->global['pageTitle'] = 'Deskdigi : Edit About Page';

      $this->loadViews("admin/about/editAbout", $this->global, $data, NULL);
    }
  }





  /**
   * This function is used to edit the user information
   */
  function editAbout()
  {


    $ptitle = $this->input->post('ptitle');
    $title = $this->input->post('title');
    $stitle = $this->input->post('stitle');
    $description1 = $this->input->post('description1');
    $description2 = $this->input->post('description2');
    $sec2title = $this->input->post('sec2title');
    $sec2description = $this->input->post('sec2description');
    $support = $this->input->post('support');
    $Awesome = $this->input->post('Awesome');
    $Performance = $this->input->post('Performance');
    $vision_title = $this->input->post('vision_title');
    $vision_description = $this->input->post('vision_description');
    $clint_title = $this->input->post('clint_title');
    $client_description = $this->input->post('client_description');

    $id = $this->input->post('id');


    if ($_FILES["client1"]['name']) {


      $image1 = $this->_uploadfilesamenamess($_FILES["client1"]['name'], $_FILES["client1"]['tmp_name']);
    } else {
      $image1 = $this->input->post('oldimage1');
    }


    if ($_FILES["client2"]['name']) {


      $image2 = $this->_uploadfilesamenamess($_FILES["client2"]['name'], $_FILES["client2"]['tmp_name']);
    } else {
      $image2 = $this->input->post('oldimage2');
    }


    if ($_FILES["client3"]['name']) {


      $image3 = $this->_uploadfilesamenamess($_FILES["client3"]['name'], $_FILES["client3"]['tmp_name']);
    } else {
      $image3 = $this->input->post('oldimage3');
    }


    if ($_FILES["client4"]['name']) {


      $image4 = $this->_uploadfilesamenamess($_FILES["client4"]['name'], $_FILES["client4"]['tmp_name']);
    } else {
      $image4 = $this->input->post('oldimage4');
    }


    $aboutInfo = array(
      'ptitle' => $ptitle,
      'title' => $title,
      'stitle' => $stitle,
      'description1' => $description1,
      'description2' => $description2,
      'sec2title' => $sec2title,
      'sec2description' => $sec2description,
      'support' => $support,
      'Awesome' => $Awesome,
      'Performance' => $Performance,
      'vision_title' => $vision_title,
      'vision_description' => $vision_description,
      'clint_title' => $clint_title,
      'client_description' => $client_description,
      'client1' => $image1,
      'client2' => $image2,
      'client3' => $image3,
      'client4' => $image4,
      'date_updated' => date('Y-m-d H:i:s')
    );


    $result = $this->about_model->editAbout($aboutInfo, $id);

    if ($result == true) {
      $this->session->set_flashdata('success', 'About updated successfully');
    } else {
      $this->session->set_flashdata('error', 'About updation failed');
    }

    redirect('admin/about/edit');
  }




  function editservice($id = NULL)
  {

    if ($this->isAdmin() == TRUE || $id == 1) {
      $this->loadThis();
    } else {



      $data['allData'] = $this->about_model->getservice();

      $this->global['pageTitle'] = 'Deskdigi : Edit About Page';

      $this->loadViews("admin/about/editservice", $this->global, $data, NULL);
    }
  }





  /**
   * This function is used to edit the user information
   */
  function editserv()
  {


    $ptitle = $this->input->post('ptitle');
    $title = $this->input->post('title');
    $stitle = $this->input->post('stitle');
    $description1 = $this->input->post('description1');
    $description2 = $this->input->post('description2');
    $sec2title = $this->input->post('sec2title');
    $sec2description = $this->input->post('sec2description');
    $support = $this->input->post('support');
    $Awesome = $this->input->post('Awesome');
    $Performance = $this->input->post('Performance');
    $vision_title = $this->input->post('vision_title');
    $vision_description = $this->input->post('vision_description');
    $clint_title = $this->input->post('clint_title');
    $client_description = $this->input->post('client_description');
    $client_subdescription2 = $this->input->post('client_subdescription2');
    $client_subdescriptions1 = $this->input->post('client_subdescriptions1');
    $descriptionsec3 = $this->input->post('descriptionsec3');
    $titlesec3 = $this->input->post('titlesec3');
    $client_descriptionq = $this->input->post('client_descriptionq');



    $id = $this->input->post('id');

    $aboutInfo = array(
      'ptitle' => $ptitle,
      'title' => $title,
      'stitle' => $stitle,
      'description1' => $description1,
      'description2' => $description2,
      'sec2title' => $sec2title,
      'sec2description' => $sec2description,
      'support' => $support,
      'Awesome' => $Awesome,
      'Performance' => $Performance,
      'vision_title' => $vision_title,
      'vision_description' => $vision_description,
      'clint_title' => $clint_title,
      'client_description' => $client_description,
      'client_subdescription2' => $client_subdescription2,
      'client_subdescriptions1' => $client_subdescriptions1,
      'descriptionsec3' => $descriptionsec3,
      'client_descriptionq' => $client_descriptionq,
      'titlesec3' => $titlesec3,
      //'client1' => $image1,
      //'client2' => $image2,
      //'client3' => $image3,
      //'client4' => $image4,
      'date_updated' => date('Y-m-d H:i:s')
    );


    $result = $this->about_model->editserv($aboutInfo, $id);

    if ($result == true) {
      $this->session->set_flashdata('success', 'Service updated successfully');
    } else {
      $this->session->set_flashdata('error', 'Service updation failed');
    }

    redirect('admin/about/editservice');
  }
}
