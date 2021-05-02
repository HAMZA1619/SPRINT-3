<template>
  <div >
    <nav class="navbar shadow bg-white justify-content-between  flex-row ">
      <div class="container">
        <a class="navbar-brand float-left" href="" >Youcode </a>
         <ul class="nav navbar-nav flex-row float-right">
          <li class="nav-item">
            <router-link class="nav-link pr-3" to="/login">Sign in</router-link>
          </li>
          <li class="nav-item">
            <router-link class="btn btn-outline-primary" to="/">Sign up</router-link>
          </li>
        </ul>
      </div>
    </nav>

    <div class="App">
          <router-view />
    </div>
  </div>
</template>
