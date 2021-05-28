
<?php $this->view("include/header",$data);?>
<div class="card  p-4" >

       <h3 class="text-center  ">Tableux Des Classes </h3>
      
       <div >
         <table>
           <thead>
             <tr>
               <th>Name</th>
               <th class="diss">Specialite</th>
               <th class="diss">Desception</th>
               <th>Students</th>
               <?php if ($_SESSION['user_role'] == "admin"): ?>
               <th>Modifie</th>
               <?php endif; ?>
             </tr>
           </thead>
           <tbody>
          <?php if(is_array($data['salle'])): ?>
          <?php foreach($data['salle'] as $row): ?>
            <?php $nom = $row->nom;?>
             <tr>
               <td><?=$nom ?></td>
               <td class="diss"><?=$row->specialite?></td>
               <td class="diss"><?=$row->desception?></td>
               <!-- count students  -------------->
                <?php if(is_array($data['student'])): ?>
                <td><?= array_count_values(array_column($data['student'],'id_class'))[$nom] ?? 0 ?></td>
                <?php endif; ?>
                <!-- end of counting  -------------->
                <?php if ($_SESSION['user_role'] == "admin"): ?>
               <td><form action="<?=ROOT?>salle_profile"  method="POST">
               <button  type="submit" name="profile" value="<?=$row->id?>" class="btn  btn-primary btn-block">
               Edit <i style="margin-left: 5px;"  class="far fa-edit"></button></form></td>
               <?php endif; ?>
              </tr>             
          <?php endforeach; ?>
          <?php endif; ?>
         </tbody>
        </table>
       </div>
  

       <?php if ($_SESSION['user_role'] == "admin"): ?>
     <!-- Add class button  -->
       <button type="submit" data-toggle="modal" data-target="#add-salle" class="btn add btn-info " >
         Add class <i  class="fas fa-plus-circle"></i></button>
         <!-- ------------ -->
</div>


<!-- Add class  ----------------->
<div class="modal fade" id="add-salle" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="staticBackdropLabel">Add class</h3>
        <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
        <i class="fas fa-times"></i>
        </button>
      </div>
      <div class="modal-body">
      <form  method="POST">
        <div class="card p-3 radius m-auto " >
          <div class="card-body">
            <div class="form-group mt-2">
              <label for="">Nom :</label>
                <input type="" class="form-control" name="nom" required>
            </div>
            <div class="form-group mt-2">
              <label for="">Specialite :</label>
                <input type="" class="form-control" name="specialite"  required >
            </div>
            <div class="form-group mt-2 ">
              <label for="">Desception :</label>
              <textarea name="desception" id="" class="form-control col-lg-5 d-inline"   required></textarea>
            </div>
               <button type="submit" name="save" class="btn mt-3 form-control btn-info btn-block">Save</button>
            </div>
            </div>
          </div>
      </form>
    </div>
    </div>
  </div>
  <?php endif; ?>
</div>

<?php $this->view("include/footer",$data);?>