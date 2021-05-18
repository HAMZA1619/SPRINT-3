<?php 
//  require_once ('controller/controller.php');
//  require_once ('controller/db.php');

// class Model{
// public function getlogin(){
  
//   $db = new Db();
//     if (isset($_REQUEST['usrname']) && isset($_REQUEST['password'])) {
//       $name = strip_tags($_REQUEST['usrname']);
//       $password = strip_tags($_REQUEST['password']); 
    
//       $sql = "SELECT * FROM user WHERE name = '$name'          
//       and password = '$password'";

//      $query = mysqli_query($db->db ,$sql);
//      if ($query) {
//       while( $row = mysqli_fetch_row($query)){
//       $dbname = $row[1];
//       $dbPassword = $row[3];
 
//    if ($name == $dbname && $password == $dbPassword){
  
//      return 'login';
//    }
   
// }
// }
// else 
//  {
//   return 'invalide user';
// }
// }  
// }
// public function logout(){

// }

// }