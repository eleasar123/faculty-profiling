<template>
  <div id="nav">
    <ul>
      <li><router-link to="/login">Logout</router-link></li>
      <li><a href="#about">About</a></li>
    </ul>
  </div>
  <div class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">☰</a>
    <i class="fa fa-picture-o fa-5x" aria-hidden="true"></i><br><br>
    <b-icon icon="camera" font-scale="7.5"></b-icon>
    <div id="nav">Lut-od NHS Faculty Profiling System</div><br><br>
    <a class="active" href="#personalInfo">Personal Info</a>
    <a href="#manageUser">Manage User</a>
    <a href="#manageIPCRF">Manage IPCRF ></a>
  </div>




  <router-view></router-view>
</template>

<script>
export default {
  name: "App",
  // components: () => {

  // }
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #041562;
  float: center;
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04aa6d;
}

/* sidenav */
.sidebar {
  margin: 0;
  padding-top: 75px;
  width: 250px;
  top: 0;
  left: 0;
  background-color: blue;
  z-index: 1;
  position: fixed;
  overflow-x: hidden;
  transition: 0.5s;
  background-color: #041562;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  padding: 8px 8px 8px 15px;
  text-decoration: none;
  font-size: 15px;
  color: #818181;
  display: block;
}

.sidebar a.active {
  background-color: #b2b1b9;
  color: white;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  left: 0px;
  font-size: 36px;
  padding-left: 5px;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {
    float: left;
  }
  div.content {
    margin-left: 0;
  }
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
/* end of sidenav*/
</style>
