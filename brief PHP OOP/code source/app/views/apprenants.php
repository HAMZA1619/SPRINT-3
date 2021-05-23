
<?php $this->view("include/header",$data);?>

<div class="card  p-4" >
  <h3 class="text-center  ">Tableux Des Apprenants </h3>
      
       <div >
         <table >
           <thead>
             <tr>
               <th>Nom</th>
               <th>Prenom</th>
               <th class="diss">Age</th>
               <th class="diss">Class</th>
               <th>View Profile</th>
             </tr>
           </thead>
           <tbody>
      <?php if(is_array($data['student'])): ?>
        <?php foreach($data['student'] as $row): ?>
             <tr>
               <td><?=$row->nom ?></td>
               <td ><?=$row->prenom?></td>
               <td class="diss"><?=$row->age?></td>
               <td class="diss"><?=$row->id_class?></td>
               <td><form action="<?=ROOT?>std_profile" method="POST"><button  type="submit" name="profile" value="<?=$row->id?>" class="btn btn-success btn-block">Profile <i class="fas fa-user"></i></button></form></td>
             </tr>
     <?php endforeach; ?>
          <?php endif; ?>
     </tbody>
         </table>
       </div>
  
       <!-- Add student button  -->
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
</div>

<?php $this->view("include/footer",$data);?>