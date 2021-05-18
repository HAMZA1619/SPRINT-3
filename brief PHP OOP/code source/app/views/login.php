

<?php $this->view("include/header",$data);?>


    <form  method="post">
    <div class="card p-3 radius m-auto w-25 mt-4" >
    <div class="card-body">
      <h3 class="card-title text-center">Login</h3>
      <div class="form-group mt-3">
        <label>Full Name</label>
        <input type="text" name="username" class="form-control form-control-lg" required />
    </div>
    <div class="form-group mt-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control form-control-lg"  required/>
    </div>
    <button  class="mt-3 btn btn-dark form-control btn-lg  btn-block">Login</button>
    <p class="text-small text-right mt-2 mb-4">
    
        <a href="<?=ROOT?>forgot">Forgot password ?</a>
    </p>
    <p><?php check_message() ?></p>
            <div class="icons">
                <ul class="list-unstyled w-50 m-auto h-50 row">
                    <li class="col"><a href="#"><i class="fa fa-google"></i></a></li>
                    <li class="col"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="col"><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
    </div>
    </div>
  
    </form>
  </div>

<?php $this->view("include/footer",$data);?>


