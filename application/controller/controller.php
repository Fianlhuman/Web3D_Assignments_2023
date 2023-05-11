<?php
include './debug/ChromePhp.php';
ChromePhp::log('controller.php: Hello World');
ChromePhp::log($_SERVER);	

// Create the controller class for the MVC design pattern
class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;
	
	// Create functions for the controller class
	function __construct($pageURI = null) // constructor of the class
	{
		$this->load = new Load(); 
		$this->model = new Model();
		// determine what page you are on
		$this->$pageURI();
	}
    // home page function
	function home(){
		$this->load->view('index_home');
	}
	function about()
	{
		$this->load->view('about');
	}
	function models()
	{
		$this->load->view('models');
	}

	function dbImagesInsert(){
		$data = $this->model->dbImagesInsert();
		var_dump($data);
	}
	function ReaddbImages()
	{
		$data = $this->model->ReaddbImages();
		echo json_encode($data);
	}
	function deleteDb(){
		$data = $this->model->Deletedb();
		var_dump($data);
	}
}
?>    