<?php $this->view("include/header",$data);?>
<div class="card mt-5 m-auto p-5" style="max-width: 640px; height: 300px;">
  <div class="row g-0">
    <div class="col-md-4  rounded-circle">
      <img src="./asset/eye.png" alt="">
    </div>
    <?php if(is_array($data['user'])):?>
  <?php foreach($data['user'] as $row):?>
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="card-title ">Hi <?=$row->username?></h3><br>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<form class="register-form" method="post">
    <div class="card radius p-3 m-auto w-25 mt-4" >
    <div class="card-body">
      <h3 class="card-title text-center">Update Profile</h3>
      <div class="form-group">
        <label>Change Username :</label>
        <input type="text" name="username" value="<?=$row->username?>" class="form-control form-control-lg" required/>
    </div>
      <div class="form-group mt-3">
        <label>Change Email address :</label>
        <input type="text" name="email"  value="<?=$row->email?>"  class="form-control form-control-lg" required />
    </div>
    <div class="form-group mt-3">
        <label>Change Password :</label>
        <input type="password" name="password"  value="<?=$row->password?>"   class="form-control form-control-lg" required/>
        <p class="mt-3">last modification <?=$row->date?></p>
    </div>
            <button type="submit" name="update" class="btn btn-dark form-control btn-lg  btn-block">Update</button>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
    </div>
    </form>
<?php $this->view("include/footer",$data);?>