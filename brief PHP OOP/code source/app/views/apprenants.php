
<?php $this->view("include/header",$data);?>
<section>
       <h3>Tableux Des Apprenants </h3>
       <div class="tbl-header">
         <table border="1">
           <thead>
             <tr>
               <th>Nom</th>
               <th>Prenom</th>
               <th>Age</th>
               <th>Class</th>
             </tr>
           </thead>
           <tbody>
      <?php if(is_array($data['student'])): ?>
        <?php foreach($data['student'] as $row): ?>
             <tr>
               <td><?=$row->nom ?></td>
               <td><?=$row->prenom?></td>
               <td><?=$row->age?></td>
               <td><?=$row->id_class?></td>
               <td><form action="<?=ROOT?>std_profile" method="POST"><button  type="submit" name="profile" value="<?=$row->id?>" class="btn btn-info btn-block">Profile</button></form></td>
             </tr>
     <?php endforeach; ?>
          <?php endif; ?>
     </tbody>
         </table>
       </div>
     </section>

     <button type="submit" data-toggle="modal" data-target="#add-student" class="btn btn-5 primery"class="btn btn-5" name="update" class="btn btn-5 primery">Add Student</button>

<!-- Add student ------------------- -->
  <div class="modal fade" id="add-student" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="staticBackdropLabel">Add Student</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
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
            <select name='genre' class="form-control"  required>
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
            <select name='id_class' class="form-control"  >
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