<?php $this->view("include/header",$data);?>
<?php if(is_array($data['std_profile'])):?>
  <?php foreach($data['std_profile'] as $rw):?>
<form method="POST">

<div class="card p-3 radius m-auto w-50 mt-4" >
<div class="card-body">
<a class="btn  btn-info btn-block" href="apprenants">Back</a>
  <div class="form-group mt-2">
  <label for="">Nom :</label>
    <input type="" class="form-control" value="<?=$rw->nom?>" name="nom" required>
  </div>
  <div class="form-group mt-2">
  <label for="">Prenom :</label>
    <input type="" class="form-control" value="<?=$rw->prenom?>" name="prenom"  required >
  </div>
  <div class="form-group mt-2">
  <label for="">Sexe :</label>
  <select name='genre' class="form-control" value="<?=$rw->genre?>" required>
          
            <option value='male'>Male</option>
            <option value='female'>Female</option>
            </select>
  </div>
  <div class="form-group mt-2 ">
  <label for="">Age :</label>
    <input type="" class="form-control col-lg-5 d-inline" value="<?=$rw->age?>" name="age"  required >
  </div>
  <div class="form-group mt-2">
  <label for="">Class :</label>
  <select name='id_class' class="form-control"  required>
                  <option value='<?=$rw->id_class ?>'><?=$rw->id_class ?></option>
                    <?php if(is_array($data['sall'])): ?>
                    <?php foreach($data['sall'] as $row): ?>
                    <option value='<?=$row->nom ?>'><?=$row->nom ?></option>
                    <?php endforeach; ?>
                 <?php endif; ?>
            </select>
  </div>
 
  <p class="mt-3">last modification <?=$rw->date?></p>
 
  <button name="update" class="btn mt-3 form-control btn-info btn-block">Update</button>
  <button  name="delete" value="<?=$rw->id?>" class="btn mt-3 form-control btn-danger btn-block">Delete</button>
  <?php endforeach; ?>
    <?php endif; ?>
  </div>
  </div>
</form>

<?php $this->view("include/footer",$data);?>