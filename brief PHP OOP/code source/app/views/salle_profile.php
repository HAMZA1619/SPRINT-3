<?php $this->view("include/header",$data);?>

<?php if(is_array($data['salle_profile'])):?>
<?php foreach($data['salle_profile'] as $rw):?>

<form method="POST">
    <div class="card p-3 radius m-auto pro" >
        <div class="card-body">
            <a class="btn  btn-info btn-block" href="salle">Back</a>
          <div class="form-group mt-2">
            <label for="">Nom :</label>
            <input type="" class="form-control" value="<?=$rw->nom?>" name="nom" required>
          </div>
          <div class="form-group mt-2">
            <label for="">Specialite :</label>
            <input type="" class="form-control" value="<?=$rw->specialite?>" name="specialite"  required >
          </div>
          <div class="form-group mt-2 ">
            <label for="">Desception :</label>
            <textarea name="desception" class="form-control col-lg-5 d-inline"    required><?=$rw->desception?></textarea>
          </div>
          <p class="mt-3">last modification <?=$rw->date?></p>
          <div class="row gap-4">
          <button name="update" class="btn mt-3 col form-control btn-info btn-block">Update </button>
          <button  name="delete" value="<?=$rw->id?>" class="btn mt-3 col form-control btn-danger btn-block">Delete</button>
          </div>
        </div>
      </div>
</form>
<?php endforeach; ?>
 <?php endif; ?>

<?php $this->view("include/footer",$data);?>