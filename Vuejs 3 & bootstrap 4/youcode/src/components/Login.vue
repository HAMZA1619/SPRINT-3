<template>
  <div class="card p-3 radius m-auto w-25" >
    <div class="card-body">
      <h3 class="card-title text-center">Sign In</h3>
      <div class="form-group mt-3">
        <label>Email address</label>
        <input type="email" class="form-control form-control-lg" />
    </div>
    <div class="form-group mt-3">
        <label>Password</label>
        <input type="password" class="form-control form-control-lg" />
    </div>
    <button type="submit" class="mt-3 btn btn-dark form-control btn-lg  btn-block">Sign In</button>
    <p class="forgot-password text-small text-right mt-2 mb-4">
        <router-link to="/forgot">Forgot password ?</router-link>
    </p>
            <div class="icons">
                <ul class="list-unstyled w-50 m-auto h-50 row">
                    <li class="col"><a href="#"><i class="fa fa-google"></i></a></li>
                    <li class="col"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="col"><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
    </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {}
        }
    }
</script>