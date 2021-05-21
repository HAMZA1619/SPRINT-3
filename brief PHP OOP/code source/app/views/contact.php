<?php $this->view("include/header",$data);?>
<div class="card p-3">
    <h3 class="text-center p-3">Cantact Us</h3>
<form  method="POST">
        <div class="card p-3  pro bg-light mb-3 m-auto " >
          <div class="card-body">
            <div class="form-group ">
              <label for="">Enter Your Nom :</label>
                <input type="" class="form-control" name="Nom" required>
            </div>
            <div class="form-group mt-4">
              <label for="">Enter Your Email Adress :</label>
                <input type="email" class="form-control" name="Email"  required >
            </div>
            <div class="form-group mt-4">
              <label for="">Enter Your Object :</label>
                <input type="text" class="form-control" name="Object"  required >
            </div>
            <div class="form-group mt-4 ">
              <label for="">Type In Your Massege  :</label>
              <textarea name="Massege" id="" class="form-control col-lg-5 d-inline"  rows="5" required></textarea>
            </div>
               <button type="submit"  class="btn mt-4 form-control btn-info btn-block">Sand</button>
            </div>
            </div>
          </div>
      </form>

      </div>
<?php $this->view("include/footer",$data);?>