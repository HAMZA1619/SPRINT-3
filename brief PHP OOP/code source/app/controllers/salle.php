<?php 
Class Salle extends Controller
{
	function index()
	{
		$data['page_title'] = "Salle";

		$add = $this->loadModel("classes");
		$data['salle'] = $add->selectClass();

		if(isset($_POST['save']))
 	 	{
 	 		$add->addClass($_POST);

 	 	}
		$this->view("salle",$data);
	}

}