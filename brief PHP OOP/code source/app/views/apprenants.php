
<?php $this->view("include/header",$data);?>

<div class="card  p-4" >
  <h3 class="text-center  ">Tableux Des Apprenants </h3>
      
       <div >
       <?php if(is_array($data['salle'])): ?>
          <?php foreach($data['salle'] as $rw): ?>
            <h4 class="text-center m-4 ">Class : <strong><?=$rw->nom?> </strong></h4>
         <table >
           <thead>
             <tr>
               <th>FirstName</th>
               <th>LastName</th>
               <th class="diss">Age</th>
              
               <?php if ($_SESSION['user_role'] == "admin"): ?>
               <th>View Profile</th>
               <?php else: ?>
                <th>Id</th>
               <?php endif; ?>
             </tr>
           </thead>
           <tbody>
      <?php if(is_array($data['student'])): ?>
        <?php foreach($data['student'] as $row):
          if ($row->id_class == $rw->nom): ?>
        
             <tr>
               <td><?=$row->nom ?></td>
               <td ><?=$row->prenom?></td>
               <td class="diss"><?=$row->age?></td>
               <?php if ($_SESSION['user_role'] == "admin"): ?>
               <td><form action="<?=ROOT?>std_profile" method="POST"><button  type="submit" name="profile" value="<?=$row->id?>" class="btn btn-primary btn-block">Profile <i class="fas fa-user"></i></button></form></td>
               <?php else: ?>
                <td><?=$row->id ?></td>
               <?php endif; ?>
              </tr>
              <?php endif; ?>
     <?php endforeach; ?>
          <?php endif; ?>
     </tbody>
         </table>
         <?php endforeach; ?>
          <?php endif; ?>
       </div>
  
       <!-- Add student button  -->
       <?php if ($_SESSION['user_role'] == "admin"): ?>
       <button type="submit" data-toggle="modal" data-target="#add-student" class="btn add btn-info " >
         Add student <i  class="fas fa-plus-circle"></i></button>
        <!-- ------------ -->
        </div>
<!-- Add student ------------------- -->
  <div class="modal fade" id="add-student" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="staticBackdropLabel">Add Student</h3>
        <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
        <i class="fas fa-times"></i>
        </button>
      </div>
      <div class="modal-body">
    <form method="POST">
      <div class="card p-3 radius m-auto  " >
      <div class="card-body">
          <div class="form-group mt-2">
            <label for="">Nom :</label>
            <input type="" class="form-control" name="nom" required>
          </div>
          <div class="form-group mt-2">
            <label for="">Prenom :</label>
            <input type="" class="form-control" name="prenom"  required >
          </div>
          <div class="form-group mt-2">
            <label for="">Sexe :</label>
            <select name='genre' class="form-select"  required>
                    <option value=''></option>
                    <option value='male'>Male</option>
                    <option value='female'>Female</option>
                    </select>
          </div>
          <div class="form-group mt-2 ">
            <label for="">Age :</label>
            <input type="" class="form-control col-lg-5 d-inline" name="age"  required >
          </div>
          <div class="form-group mt-2">
         
            <label for="">Class :</label>
            <select name='id_class' class="form-select"  >
                 <option value=''></option>
                 <?php if(is_array($data['sall'])): ?>
                 <?php foreach($data['sall'] as $rw): ?>
                    <option value='<?=$rw->nom ?>'><?=$rw->nom ?></option>
                    <?php endforeach; ?>
                 <?php endif; ?>
            </select>
           
          </div>
           <button type="submit" name="save" class="btn mt-3 form-control btn-info btn-block">Save</button>
          </div>
        </div>
    </form>
</div>
    </div>
  </div>
  <?php endif; ?>
</div>

<?php $this->view("include/footer",$data);?>