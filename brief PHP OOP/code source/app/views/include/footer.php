
<footer class=" mt-5">

<hr class="break margin-top-bottom-0" style="border-color: rgba(0, 0, 0, 0.80);">
     <section class="row text-center ">
        
                   
              <div class="col-md">
                <h4 >Company Address</h4>
                <p >
                Marrakech ,Morocco<br>
                </p>               
              </div>
              <div class="col-md">
                <h4 >E-mail</h4>
                <p >
                   chyoin188@gmail.com<br>                
                </p>          
              </div>          
              <div class="col-md">
                <h4 >Phone Numbers</h4>
                <p >
                   0212 6510 189 01<br>
                </p>             
              </div>
        </section>
        
              <div class="row text-center w-75  m-auto">
              <p class="col-md"><i class="fab fa-google-plus-square"></i> Google</p>
                <p class="col-md"> <i class="fab fa-facebook"></i> Facebook</p>  
                <p class="col-md"><i class="fab fa-twitter-square"> Twitter</i></p> 
                <p class="col-md"><i class="fab fa-linkedin"></i> Linkedin</p>    
          </div>

          <?php if(!isset($_SESSION['user_id'])): ?>
          <div>
          <div class=" row "> 
         <h4 class="col-8 text-center"> <a class="link-light " href="<?=ROOT?>contact">Contact</a></h4>
         <h4 class="col">  <a class="link-light " href="<?=ROOT?>about">About-Us</a></h4>
          </div> 
          </div>  
          <?php endif; ?> 
        <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 0, 0, 0.80);">
       
        
        <!-- Bottom Footer -->
        
        <section class="padding  full-width">
          <div class="text-center mt-2">
            <p class="text-size-12">Copyright © 2021 Full Stack  HAMZA. All rights reserved.</p>
            
          </div>
        </section>
      </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?=ASSETS?>/js/main.js"></script>

   
  </body>
</html>