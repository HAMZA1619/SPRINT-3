<?php 
class Classes {

    function addClass($POST){
		$DB = new Database();
        $_SESSION['error'] = "";
		if(isset($POST['save']))
		{
			$arr['nom'] = $POST['nom'];
			$arr['specialite'] =$POST['specialite']  ;
			$arr['desception'] = $POST['desception'];
			$arr['id_user'] = $_SESSION['user_id'];
			$arr['date'] = date("Y-m-d H:i:s");

			$query = "insert into class (nom,specialite,desception,id_user,date) values (:nom,:specialite,:desception,:id_user,:date)";
			$data = $DB->write($query,$arr);
			if($data)
			{
				
				header("Location:". ROOT . "salle");
				die;
			}

		}else{

			$_SESSION['error'] = "please enter a valid username and password";
		}

    }

    function selectClass(){
		$DB = new Database();
		  $arr['id_user'] = $_SESSION['user_id'];
			$query = "select * from class  where id_user = :id_user ORDER BY nom ASC";
			$data = $DB->read($query,$arr);
			if(is_array($data))
		   {
			return $data;
		    }
			return false;
    }
	function selectSalle($POST){
		$DB = new Database();
		if(isset($POST['profile'])){
		$arr['id'] = $POST['profile'] ;
			$query = "select * from class where id = :id";
			$data = $DB->read($query,$arr);
			if(is_array($data))
		   {
			$_SESSION['class_id'] = $data[0]->id;
			return $data;
			
		    }}
			return false;
    }
    function modifieClass($POST){
		$DB = new Database();
		if(isset($POST['update']))
		{   $arr['id']= $_SESSION['class_id'];
			$arr['nom'] = $POST['nom'];
			$arr['specialite'] =$POST['specialite']  ;
			$arr['desception'] = $POST['desception'];
			$arr['id_user'] = $_SESSION['user_id'];
			$arr['date'] = date("Y-m-d H:i:s");

			$query = "UPDATE  class SET nom= :nom ,specialite = :specialite ,desception =:desception, id_user=:id_user, date=:date WHERE id = :id ";
			$data = $DB->write($query,$arr);
			if(is_array($data))
			{
				return true;
			}
			header("Location:". ROOT . "salle");
		}

		return false;

    }
    function deleteClass($POST){

		$DB = new Database();
		if(isset($POST['delete'])){
			
		$arr['id'] = $POST['delete'];
			$query = "DELETE FROM class where id = :id";
			$data = $DB->write($query,$arr);
			if($data)
		   {
			header("Location:". ROOT . "salle");
			
		    }
			
		}
			return false;
    }
}