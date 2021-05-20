
<?php $this->view("include/header",$data);?>
<section>
       <h3>Tableux Des Apprenants </h3>

       <button type="submit" data-toggle="modal" data-target="#add-salle"  class="btn btn-primery  btn-block">Add class</button>

       <div class="tbl-header">
         <table border="1">
           <thead>
             <tr>
               <th>Nom</th>
               <th>Specialite</th>
               <th>Desception</th>
               <th>Number of Students</th>
             </tr>
           </thead>
           <tbody>
          <?php if(is_array($data['salle'])): ?>
          <?php foreach($data['salle'] as $row): ?>
            <?php $nom = $row->nom;?>
             <tr>
               <td><?=$nom ?></td>
               <td><?=$row->specialite?></td>
               <td><?=$row->desception?></td>
               <!-- count students  -------------->
                <?php if(is_array($data['student'])): ?>
                <td><?= array_count_values(array_column($data['student'],'id_class'))[$nom] ?? 0 ?></td>
                <?php endif; ?>
                <!-- end of counting  -------------->
               <td><form action="<?=ROOT?>salle_profile"  method="POST"><button  type="submit" name="profile" value="<?=$row->id?>" class="btn  btn-info btn-block">Edit</button></form></td>
             </tr>             
          <?php endforeach; ?>
          <?php endif; ?>
         </tbody>
        </table>
       </div>
     </section>


     



<!-- Add class  ----------------->
<div class="modal fade" id="add-salle" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="staticBackdropLabel">Add class</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
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
</div>

<?php $this->view("include/footer",$data);?>