<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Advisor extends BaseController
{
	/**
	 * This is default constructor of the class
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Advisor_model');

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

			$this->global['pageTitle'] = 'Finecore  : Homepage Listing';
			$this->loadViews("admin/gallery/listGallery", $this->global, NULL, NULL);
		}
	}



	/**
	 * This function is used load user edit information
	 * @param number About
	 */
	function edit($id = NULL)
	{

		if ($this->isAdmin() == TRUE || $id == 1) {
			$this->loadThis();
		} else {


			$data['allData'] = $this->Advisor_model->getplacement();

			$this->global['pageTitle'] = 'Deskdigi: Social Media Marketing';

			$this->loadViews("admin/advisors/editadvisors", $this->global, $data, NULL);
		}
	}





	/**
	 * This function is used to edit the user information
	 */
	function editstudentplacement()
	{

		if ($this->input->post('submit') !== NULL) {


			if (!empty($_FILES["slid_img1"]['name'])) {
				$config = array(
					'upload_path' => "./uploads/advisor/",
					'allowed_types' => "jpg|PNG|png|gif|jpeg",
					'overwrite' => FALSE,
					'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
				);

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('slid_img1')) {
					$this->session->set_flashdata('error', $this->upload->display_errors());
				} else {
					$slid_img1 = $_FILES["slid_img1"]['name'];
				}
			} else {

				$slid_img1 = $this->db->get_where('tbl_advisor', array('id' => 1))->row_array()['slid_img1'];
			}

			/*	if (!empty($_FILES["slid_img2"]['name'])) {
				$config = array(
					'upload_path' => "./uploads/advisor/",
					'allowed_types' => "jpg|PNG|png|gif|jpeg",
					'overwrite' => FALSE,
					'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
				);

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('slid_img2')) {
					$this->session->set_flashdata('error', $this->upload->display_errors());
				} else {
					$slid_img2 = $_FILES["slid_img2"]['name'];
				}
			} else {

				$slid_img2 = $this->db->get_where('tbl_advisor', array('id' => 1))->row_array()['slid_img2'];
			}*/



			$homeInfo =
				array(

					'slid_title1' => $this->input->post('slid_title1'),
					'slid_subtitle1' => $this->input->post('slid_subtitle1'),
					'slid_img1' => $slid_img1,


					'slid_title2' => $this->input->post('slid_title2'),
					'slid_subtitle2' => $this->input->post('slid_subtitle2'),

					//'slid_img2' => $slid_img2,


					'pdes' => $this->input->post('pdes'),



					'p1' => $this->input->post('p1'),
					//  'pi1'=>$pi1,

					'p2' => $this->input->post('p2'),
					// 'pi2'=>$pi2,

					'p3' => $this->input->post('p3'),
					// 'pi3'=>$pi3,


					'p4' => $this->input->post('p4'),
					// 'pi4'=>$pi4,

					'p5' => $this->input->post('p5'),
					//'pi5'=>$pi5,

					'p6' => $this->input->post('p6'),
					//   'pi6'=>$pi6,


					'p7' => $this->input->post('p7'),

					'p5pr' => $this->input->post('p5pr'),
					'pt6' => $this->input->post('pt6'),

					'pt7' => $this->input->post('pt7'),


					'pt5pr' => $this->input->post('pt5pr'),


					'sec3pt6' => $this->input->post('sec3pt6'),


					'sec3pt7' => $this->input->post('sec3pt7'),


					'sec4pt6' => $this->input->post('sec4pt6'),

					'sec4pt7' => $this->input->post('sec4pt7'),



					//'pi7'=>$pi7,

				);

			$result = $this->Advisor_model->editplacement($homeInfo, 1);

			if ($result == true) {
				$this->session->set_flashdata('success', 'Social Media Marketing updated successfully');
			} else {
				$this->session->set_flashdata('error', 'Social Media Marketing updation failed');
			}

			redirect('admin/Advisor/edit');
		}
		redirect('admin/Advisor/edit');
	}
}
