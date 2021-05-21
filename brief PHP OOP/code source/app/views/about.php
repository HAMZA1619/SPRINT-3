<?php $this->view("include/header",$data);?>
<div class="card  m-auto p-4" >
<h3 class="text-center">About Us</h3>
 <div class="p-5 m-auto">
     <h4>Introduction</h4>
     <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui,  neque deserunt aut blanditiis id obcaecati, officiis assumenda, ullam iste laborum laudantiumsimilique aliquid  eius eum voluptatum dicta dolorum tenetur. Deserunt.</p>
    
   <br>
   
   <h5>Best of what we got :</h5>
            <ul class=" m-4">
              <li class=" m-3"><a class="link-primary text-decoration-none" href="#">Cool stuff</a></li>
              <li class="m-3"><a class="link-primary text-decoration-none" href="#">Random stuff</a></li>
              <li class="m-3"><a class="link-primary text-decoration-none" href="#">Team Random</a></li>
              <li class="m-3"><a class="link-primary text-decoration-none" href="#">Stuff for developers</a></li>
              <li class="m-3"><a class="link-primary text-decoration-none" href="#">Another one</a></li>
              <li class="m-3"><a class="link-primary text-decoration-none" href="#">Last time</a></li>
            </ul>
  
            </div>
  
    <div class="row ">
    <img  class="about col-md-3"  src="<?=ASSETS?>img/about-3.png" alt="hellllll">
    <img  class="about col-md-3"  src="<?=ASSETS?>img/about-1.png" alt="hellllll">
    <img  class="about col-md-3"  src="<?=ASSETS?>img/about-2.png" alt="hellllll">
    <img  class="about col-md-2"  src="<?=ASSETS?>img/about-4.png" alt="hellllll">
    </div>


<div class="p-5 m-auto">
<h5>Contact Us :</h5>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea repellendus nesciunt ipsa? Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime rem rerum quam.
<a class="link-primary text-decoration-none" href="<?=ROOT?>contact">Contact Us</a>
</p>
</div>
</div>
<?php $this->view("include/footer",$data);?>