<?php $this->view("include/header",$data);?>

    <form class="register-form" method="post">
    <div class="card radius p-3 m-auto log mt-4" >
    <div class="card-body">
      <h3 class="card-title text-center">Sign Up</h3>
      <div class="form-group">
        <label>Username :</label>
        <input type="text" name="username" class="form-control form-control-lg" required/>
    </div>
      <div class="form-group mt-3">
        <label>Email address :</label>
        <input type="email" name="email" class="form-control form-control-lg" required />
    </div>
    <div class="form-group mt-3">
        <label>Password :</label>
        <input type="password" name="password" class="form-control form-control-lg" required/>
    </div>
            <button type="submit" name="signup" class="mt-3 btn btn-dark form-control btn-lg  btn-block">Sign Up</button>
            <p class="forgot-password mt-2 text-small text-end">
                Already registered 
                <a class="text-decoration-none" href="<?=ROOT?>login">sign in?</a>
            </p>
            <p><?php check_message() ?></p>
    </div>
    </div>
    </form>
 
    <?php $this->view("include/footer",$data);?>