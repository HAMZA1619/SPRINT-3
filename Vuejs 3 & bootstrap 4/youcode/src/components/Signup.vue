<template>
<div class="card radius p-3 m-auto w-25" >
    <div class="card-body">
      <h3 class="card-title text-center">Sign Up</h3>
      <div class="form-group">
        <label>Full Name</label>
        <input type="text" class="form-control form-control-lg"/>
    </div>
      <div class="form-group mt-3">
        <label>Email address</label>
        <input type="email" class="form-control form-control-lg" />
    </div>
    <div class="form-group mt-3">
        <label>Password</label>
        <input type="password" class="form-control form-control-lg" />
    </div>
            <button type="submit" class="btn btn-dark btn-lg btn-block">Sign Up</button>
            <p class="forgot-password mt-2 text-small text-right">
                Already registered 
                <router-link :to="{name: 'login'}">sign in?</router-link>
            </p>
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