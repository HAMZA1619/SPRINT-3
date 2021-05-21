<?php $this->view("include/header",$data);?>

<?php if(is_array($data['user'])):?>
<?php foreach($data['user'] as $row):?>

<div class="card  m-auto p-5" >
<!-- onclick -->
<div class="click">
<button onclick="call()" id="click" class="btn btn-secondary" ><i class="fas fa-user-cog"></i></button>
<button  onclick="back()" id="back" class="btn btn-secondary"><i class="fas fa-angle-double-up"></i></button>
</div>
<!-- onclick end -->
<!-- profile --------->
<div class="row text-center mb-3">
<div class="row w-75 gap-2 sitting col-md " id="none">
<button type="submit" data-toggle="modal" class="btn mt-1 btn-block btn-success  "  data-target="#update-modal"  >Update Profile <i class="fas fa-user"></i></button>
<button type="submit" data-toggle="modal" class="btn mt-1 btn-block btn-warning "  data-target="#update-password" >Change password <i class="fas fa-key"></i></button>
<a class="btn mt-1 btn-block btn-danger  " href="<?=ROOT?>logout">Logout <i class="fas fa-sign-out-alt"></i></a>
</div>
<!-- profile end --------->
<!-- title ---------->
<div class=" col-md">
<h1 class="card-title  ">Hi <?=$row->username?></h1>
  <?php if(is_array($data['student'])): ?>
    <?php $totale = count($data['student']); ?>
    <h2 > Totale of students is : <?= $totale ?>  </h2>
    </div>

    <!-- title end ---------->
    </div>
    <div class="row gap-4 " >
    <!-- apprenant statistics-------------------- -->
    <div class="card bg-light col-md">
      <div class="card-body">
      <?php
           $male= array_count_values(array_column($data['student'],'genre'))['male'] ?? 0;
           $female=array_count_values(array_column($data['student'],'genre'))['female'] ?? 0;
           $one = $male/$totale*100; 
           $tow = $female/$totale*100;
           ?>
             <h3 class="text-center">Appranants</h3>
          <h4 >Male : <?=round($one,1)?> %</h4> <progress class="male" value='<?=$one?>' max='100'> </progress>
          <h4> Female : <?=round($tow,1)?> %</h4> <progress class="female" value='<?=$tow?>' max='100'>  </progress>
        
      </div>
    </div>
    <!-- ----------------------------- -->
    <!-- classes statistics----------------------- -->
    <div class="card bg-light col-md">
      <div class="card-body">
      <h3 class="text-center">Classes</h3>
      <?php if(is_array($data['class'])): ?>
        <?php foreach($data['class'] as $rw): ?>
            <?php $nom = $rw->nom;
            $num =array_count_values(array_column($data['student'],'id_class'))[$nom] ?? 0;
            $por = $num /$totale*100; 
            ?>  
                <h4>Class  <strong><?= $nom?></strong> : <?=round($por,1)?> % </h4> <progress  value='<?=$por?>' max='100'>  </progress>     
          <?php endforeach; ?>
          <?php endif; ?>
          <!-- ----------------- ------------------>
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
        <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
        <i class="fas fa-times"></i>
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
        <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
        <i class="fas fa-times"></i>
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