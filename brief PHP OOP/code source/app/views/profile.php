<?php $this->view("include/header",$data);?>

<?php if(is_array($data['user'])):?>
<?php foreach($data['user'] as $row):?>

<div class="card  m-auto p-4" style="max-width: 90%;  ">
<div class="click">
<button onclick="call()" id="click" >^</button>
<button  onclick="back()" id="back">^</button>
</div>
<div class="row w-25 gap-2  " id="none">
<button type="submit" data-toggle="modal" class="btn mt-1 btn-block btn-success  "  data-target="#update-modal"  >Update Profile</button>
<button type="submit" data-toggle="modal" class="btn mt-1 btn-block btn-warning "  data-target="#update-password" >Change password</button>
<a class="btn mt-1 btn-block btn-danger  " href="<?=ROOT?>logout">Logout</a>
</div>
<div class="row g-0">
<h1 class="card-title text-center ">Hi <?=$row->username?></h1>

  <?php if(is_array($data['student'])): ?>
    <?php $totale = count($data['student']); ?>
    <h2 class="text-center"> Totale of students is : <?= $totale ?>  </h2>
    <div class="col-md">
      <div class="card-body">
     
                <h3> Male :  <?= array_count_values(array_column($data['student'],'genre'))['male'] ?? 0 ?></h3>
                <h3> Female :<?= array_count_values(array_column($data['student'],'genre'))['female'] ?? 0 ?></h3>
        
      </div>
    </div>
    <div class="col-md">
      <div class="card-body">
      <?php if(is_array($data['class'])): ?>
        <?php foreach($data['class'] as $rw): ?>
            <?php $nom = $rw->nom;?>

              
                <h3><?= $nom?> : <?=array_count_values(array_column($data['student'],'id_class'))[$nom] ?? 0 ?></h3>
               
          <?php endforeach; ?>
        
          <?php endif; ?>
          <?php endif; ?>
      </div>
    </div>
  </div>
</div>




<!-- update user profile  -->

<div class="modal fade" id="update-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="staticBackdropLabel">Update Profile</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   <form method="post">
    <div class="card radius p-3 m-auto " >
    <div class="card-body">
      <div class="form-group">
        <label>Change Username :</label>
        <input type="text" name="username" value="<?=$row->username?>" class="form-control form-control-lg" required/>
    </div>
      <div class="form-group mt-3">
        <label>Change Email address :</label>
        <input type="text" name="email"  value="<?=$row->email?>"  class="form-control form-control-lg" required />
        <p class="mt-3">last modification <?=$row->date?></p>
    </div>
            <button type="submit" name="update" class="btn btn-dark form-control btn-lg mt-3 btn-block">Update</button>
    </div>
    </div>
    </form>
    </div>
    </div>
  </div>
</div>
<!-- end of update user profile  -->


<!-- update password -->
<div class="modal fade" id="update-password" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="staticBackdropLabel">Change Password</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <form method="post">
    <div class="card radius p-3 m-auto " >
    <div class="card-body">
    <div class="form-group mt-3">
        <label>Change Password :</label>
        <input type="password" name="password"   class="form-control form-control-lg" required/>
        <p class="mt-3">last modification <?=$row->date?></p>
    </div>
            <button type="submit" name="reset" class="btn btn-dark form-control btn-lg  btn-block">Reset</button>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
    </div>
    </form>
    </div>
    </div>
  </div>
</div>



<?php $this->view("include/footer",$data);?>