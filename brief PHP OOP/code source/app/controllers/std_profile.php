<?php

Class Std_profile extends Controller 
{
	function index()
	{
        $data['page_title'] = "Std_profile";

        $stud = $this->loadModel("apprenant");
        $data['std_profile']= $stud->selectProfile($_POST);

        
       $sall = $this->loadModel("classes");
       $data['sall'] = $sall->selectClass();

        $stud->modifieApprenant($_POST);
        
        $stud->deleteApprenant($_POST);

        
       $this->view("std_profile",$data);
    }}