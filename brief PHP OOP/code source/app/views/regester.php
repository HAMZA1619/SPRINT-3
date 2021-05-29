<?php $this->view("include/header",$data);?>

<form method="POST" enctype="multipart/form-data">
    <p><?php check_message() ?></p>
    <div class="card p-3 radius m-auto pro " >
          <h4 class="text-center">Regester</h4>
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
            <label for="">Photo :</label>
            <input type="file" class="form-control" name="file"  required >
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
            <select name='id_class' class="form-select"   required>
                 <option value=''></option>
                 <?php if(is_array($data['sall'])): ?>
                 <?php foreach($data['sall'] as $rw): ?>
                    <option value='<?=$rw->nom ?>'><?=$rw->nom ?></option>
                    <?php endforeach; ?>
                 <?php endif; ?>
            </select>
           
          </div>
           <button type="submit" name="save" class="btn mt-3 form-control btn-dark btn-block">Save</button>
          </div>
        </div>
      
    </form>
   
    <?php $this->view("include/footer",$data);?>