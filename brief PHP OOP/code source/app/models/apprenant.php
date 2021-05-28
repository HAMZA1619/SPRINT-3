<?php 
class Apprenant {

	

    function addApprenant($POST){
		$DB = new Database();
        $_SESSION['error'] = "";
		if(isset($POST['save']))
		{
			$arr['nom'] = $POST['nom'];
			$arr['prenom'] =$POST['prenom']  ;
			$arr['genre'] = $POST['genre'];
			$arr['age'] = $POST['age'];
			$arr['id_class'] = $POST['id_class'];
		
			$arr['date'] = date("Y-m-d H:i:s");

			$query = "insert into apprenant (nom,prenom,genre,age,id_class,date) values (:nom,:prenom,:genre,:age,:id_class,:date)";
			$data = $DB->write($query,$arr);
			if($data)
			{
				
				header("Location:". ROOT . "apprenants");
				die;
			}

		}else{

			$_SESSION['error'] = "please enter a valid username and password";
		}

    }

    function selectApprenant(){
		$DB = new Database();
		
			$query = "select * from apprenant   ORDER BY nom ASC";
			$data = $DB->read($query);
			if(is_array($data))
		   {
			return $data;
		    }
			return false;
    }
	function selectProfile($POST){
		$DB = new Database();
		if(isset($POST['profile'])){
		$arr['id'] = $POST['profile'] ;
			$query = "select * from apprenant where id = :id";
			$data = $DB->read($query,$arr);
			if(is_array($data))
		   {
			$_SESSION['app_id'] = $data[0]->id;
			return $data;
			
		    }}
			return false;
    }

    function modifieApprenant($POST){
		$DB = new Database();
		if(isset($POST['update']))
		{   $arr['id']= $_SESSION['app_id'];
			$arr['nom'] = $POST['nom'];
			$arr['prenom'] =$POST['prenom']  ;
			$arr['genre'] = $POST['genre'];
			$arr['age'] = $POST['age'];
			
			$arr['id_class'] = $POST['id_class'];
			$arr['date'] = date("Y-m-d H:i:s");

			$query = "UPDATE  apprenant SET nom= :nom ,prenom = :prenom ,genre =:genre,age = :age, id_class=:id_class, date=:date WHERE id = :id ";
			$data = $DB->write($query,$arr);
			if(is_array($data))
			{
				return true;
			}
			header("Location:". ROOT . "apprenants");
		}

		return false;

    }
    function deleteApprenant($POST){

		$DB = new Database();
		if(isset($POST['delete'])){
			
		$arr['id'] = $POST['delete'];
			$query = "DELETE FROM apprenant where id = :id";
			$data = $DB->write($query,$arr);
			if($data)
		   {
			header("Location:". ROOT . "apprenants");
			
		    }
			
		}
			return false;
    }
}