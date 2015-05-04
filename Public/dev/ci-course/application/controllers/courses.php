<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function index()
	{
		$courses = $this->course->getCourse_model();
		$this->load->view('landing_page', array('courses' => $courses));
	}

	public function addCourse()
	{
		$result = $this->course->addCourse_model($this->input->post());
		if($result)
		{
			redirect('/');
		}
		else
		{
			echo "not working!";
		}
	}


	public function getOneCourse()
	{
		$course = $this->course->getOneCourse($this->input->post());
		$this->load->view('delete_review', array('course' => $course));
		
	}

	public function destroyCourse()
	{
		$this->course->destroyCourse($this->input->post('id'));
		redirect('/');
	}

}
