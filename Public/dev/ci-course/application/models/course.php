<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Model {

	public function addCourse_model($courseContent)
	{
		$query = "INSERT INTO courses (title, description, created_at, updated_at) VALUES (?, ?, NOW(), NOW())";
		$result = $this->db->query( $query, array($courseContent['title'],$courseContent['description']));
		return $result;
	}

	public function getCourse_model()
	{
		$query = "SELECT * FROM courses";
		$courses = $this->db->query( $query)->result_array();
		return $courses;		
	}

	public function getOneCourse($id)
	{
		$query = "SELECT * FROM courses WHERE id = ?";
		$course = $this->db->query( $query, array($id) )->row_array();
		return $course;			
	}

	public function destroyCourse($id)
	{
		$query = "DELETE FROM courses WHERE id = $id";
		$result = $this->db->query( $query, array($id) );
		return $result;
	}
}
