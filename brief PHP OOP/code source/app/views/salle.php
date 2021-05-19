
<?php $this->view("include/header",$data);?>
<section>
       <h3>Tableux Des Apprenants </h3>
       <div class="tbl-header">
         <table border="1">
           <thead>
             <tr>
               <th>Nom</th>
               <th>Specialite</th>
               <th>Desception</th>
             
             </tr>
           </thead>
           <tbody>
      <?php if(is_array($data['salle'])): ?>
          
        <?php foreach($data['salle'] as $row): ?>
             <tr>
               <td><?=$row->nom ?></td>
               <td><?=$row->specialite?></td>
               <td><?=$row->desception?></td>
               <td><form action="<?=ROOT?>salle_profile"  method="POST"><input type="submit" name="profile" value="<?=$row->id?>"></form></td>
             </tr>
     <?php endforeach; ?>
          <?php endif; ?>
     </tbody>
         </table>
       </div>
     </section>


<form method="POST">
<div class="card p-3 radius m-auto w-25 mt-4" >
<div class="card-body">
<h3 class="card-title text-center">Add class</h3>
  <div class="form-group mt-2">
  <label for="">Nom :</label>
    <input type="" class="form-control" name="nom" required>
  </div>
  <div class="form-group mt-2">
  <label for="">Specialite :</label>
    <input type="" class="form-control" name="specialite"  required >
  </div>
  <div class="form-group mt-2">
  <div class="form-group mt-2 ">
  <label for="">Desception :</label>
  <textarea name="desception" id="" class="form-control col-lg-5 d-inline"   required></textarea>
  </div>
  <button type="submit" name="save" class="btn mt-3 form-control btn-info btn-block">Save</button>
  </div>
  </div>
  </div>
</form>

<?php $this->view("include/footer",$data);?>