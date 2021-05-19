
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
               <th>Sexe</th>
             </tr>
           </thead>
           <tbody>
      <?php if(is_array($data['student'])): ?>
          
        <?php foreach($data['student'] as $row): ?>
             <tr>
               <td><?=$row->nom ?></td>
               <td><?=$row->prenom?></td>
               <td><?=$row->age?></td>
               <td><?=$row->genre?></td>
               <td><form action="<?=ROOT?>std_profile" method="POST"><input type="submit" name="profile" value="<?=$row->id?>"></form></td>
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
<h3 class="card-title text-center">Add Student</h3>
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
  <select name='id_class' class="form-control"  required>
            <option value=''></option>
            <option value='1'>Male</option>
            <option value='0'>Female</option>
            </select>
  </div>

  <button type="submit" name="save" class="btn mt-3 form-control btn-info btn-block">Save</button>

  </div>
  </div>
</form>

<?php $this->view("include/footer",$data);?>