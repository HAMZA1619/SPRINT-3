<?php $this->view("include/header",$data);?>
<form  method="post">
<div class="card p-3 radius m-auto log mt-4" >
    <div class="card-body ">
      <h3 class="card-title text-center">Forgot Password</h3>
      <div class="form-group mt-4">
        <label>Email address :</label>
        <input type="email" name="email" class="form-control form-control-lg" required/>
      <button name="reset"  class="mt-4 btn btn-dark form-control btn-lg  btn-block">Reset password</button>
    </div>
    
</div>
<p><?php check_message() ?></p>
</div>

</form>
<?php $this->view("include/footer",$data);?>