<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function ourvision(){
		$this->load->view("ourvision");
	}
	
	public function ourmission(){
		$this->load->view("ourmission");
	}
	public function Mmessage(){
		$this->load->view("Mmessage");
	}
	public function Dmessage(){
		$this->load->view("Dmessage");
	}
	public function facilities(){
		$this->load->view("facilities");
	}
	
	public function faculty(){
		$this->load->view("faculty");
	}
	
	public function infrastructure(){
		$this->load->view("infrastructure");
	}
	
	public function schoolCal(){
		$this->load->view("schoolCal");
	}
	public function playgroup(){
		$this->load->view("playgroup");
	}
	public function achievements(){
		$this->load->view("achievements");
	}
	public function adminpros(){
		$this->load->view("adminpro");
	}
	
	public function viewEnquiry(){
		$this->load->view("viewEnquiry");
	}
	public function enquiry(){
		$this->load->view("enquiry");
	}
	public function pgallery(){
		$this->load->view("pgallery");
	}
	public function vgallery(){
		$this->load->view("vgallery");
	}
	public function syllabus(){
	    $this->load->view("syllabus");
	}
	public function vacancy(){
		$this->load->view("vacancy");
	}
	public function jobApp(){
		$this->load->view("jobApp");
	}
	
	public function feedback(){
		$this->load->view("feedback");
	}
	public function reachus(){
		$this->load->view("reachus");
	}
	public function circulars(){
		$this->load->view("circulars");
	}
	public function dprincipal(){
	$this->load->view("dprincipal");
	}
	public function birthday(){
			$this->load->view("birthday");
	}
	public function highlight(){
		$this->load->view("highlight");
	}
	
	public function ddshighersection(){
	$this->load->view("ddshighersection");
	}
	public function ddsprimarysection(){
	$this->load->view("ddsprimarysection");
	}
	public function aboutschool(){
		$this->load->view("aboutschool");
	}
	public function mspeaks(){
		$this->load->view("mspeaks");
	}
	
	public function saveEnquery(){
		$data['academicyear'] =	$this->input->post("academicyear");	
		$data['class']	=	$this->input->post("class");
		$data['stu_first_name']	=	$this->input->post("firstname");
		$data['stu_last_name']	=	$this->input->post("lastname");
		$data['f_name']	=	$this->input->post("fathername");
		$data['m_name']	=	$this->input->post("mothername");
		$data['dob']	=	$this->input->post("dateofbirth");
		$data['email']	=	$this->input->post("emailid");
		$data['mobile']	=	$this->input->post("mobileno");
		$data['phone']	=	$this->input->post("phoneno");
		$data['gender']	=	$this->input->post("genderid");
		$data['address'] =	$this->input->post("address");
		$data['city']	=	$this->input->post("city");
		$data['state']	=	$this->input->post("state");
		$data['remark']	=	$this->input->post("remarks");
		$data['status'] = 	"Pending";
		$data['submit_date'] = 	date("Y-m-d");
		$v = $this->db->insert("enquery",$data);
		if($v){
			$num = "9415280222,9450601811";
			$sms = "For Enquiry ".$this->input->post("fathername")." has been generated for his ward ".$this->input->post("firstname")." ".$this->input->post("lastname")." Please Contact and Solve it.";
			$num1 = $this->input->post("mobileno");
			$sms1 = "Your enquiry is submitted successfully we will contact you soon. Principal DDS MANNER HIGHER SECONDARY SCHOOL";
			sms($num,$sms);
			sms($num1,$sms1);
			
			$lobe = $this->input->post("emailid");
			$phone = $this->input->post("mobileno");
			$date1 = date("Y-m-d");
			$this->load->library('email');
			
			$this->email->from('info@ddsmanner.in', 'DDS MANNER HIGHER SECONDARY SCHOOL');
			$this->email->to($lobe);
			$this->email->cc('info@ddsmanner.in');
			$this->email->bcc('themannerschool@gmail.com,anandnarayansingh@gmail.com');
				
			$this->email->subject('Thanks For enquiry us');
			$this->email->message('Your Details are Successfully seved and we will contact you soon. Thanks DDS MANNER HIGHER SECONDARY SCHOOL, CHIRAIYAKOT');
				
			$this->email->send();
			redirect(base_url()."index.php/welcome/enquiry/success");
		}
	}
	
	function saveJobApp(){
		
		$photo_name = time().trim($_FILES['resume']['name']);
		$this->load->library('upload');
		// Set configuration array for uploaded photo.
		$image_path = realpath(APPPATH . '../assets/resume');
		$config['upload_path'] = $image_path;
		$config['allowed_types'] = 'pdf|doc|docx|png';
		$config['max_size'] = '2024';
		$config['file_name'] = $photo_name;
		// Upload first photo and create a thumbnail of it.
		if (!empty($_FILES['resume']['name'])) {
			$this->upload->initialize($config);
			if ($this->upload->do_upload('resume')) {
				
				$data =array(
						'subdate' =>$this->input->post("subdate"),
						'classt' =>$this->input->post("classt"),
						'app_name' =>$this->input->post("firstname"),
						'mnumber'	=>$this->input->post("mnumber"),
						'gid'		=>$this->input->post("genderid"),
						'address'	=>$this->input->post("address"),
						'city'	=>$this->input->post("city"),
						'state'	=>$this->input->post("state"),
						'file_name'	=>$photo_name
				);
				
				$this->db->insert("upload_resume",$data);
				$num = "9415280222,9450601811";
			$sms = "For Job Application ".$this->input->post("firstname")." has been generated for the post ".$this->input->post("classt").". Please Contact and him.";
			$num1 = $this->input->post("mnumber");
			$sms1 = "Your resume is submitted successfully we will contact you soon. Principal DDS MANNER HIGHER SECONDARY SCHOOL";
			sms($num,$sms);
			sms($num1,$sms1);
			
			
				redirect(base_url()."index.php/welcome/jobApp/success");
			}
	}
	}
	
}

