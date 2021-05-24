<?php
Class Salle_profile extends Controller 
{
	function index()
	{
        if(isset($_SESSION['user_id'])){
        $data['page_title'] = "Salle_profile";

        $stud = $this->loadModel("classes");

        $data['salle_profile']= $stud->selectSalle($_POST);

        $stud->modifieClass($_POST);
        
        $stud->deleteClass($_POST);

        
       $this->view("salle_profile",$data);

      }
    else{
        $data['page_title'] = "Login";
        $this->view("login",$data);
     }
    }}
