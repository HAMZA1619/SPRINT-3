<?php
Class Salle_profile extends Controller 
{
	function index()
	{
        $data['page_title'] = "Salle_profile";

        $stud = $this->loadModel("classes");

        $data['salle_profile']= $stud->selectSalle($_POST);

        $stud->modifieClass($_POST);
        
        $stud->deleteClass($_POST);

        
       $this->view("salle_profile",$data);
    }}
