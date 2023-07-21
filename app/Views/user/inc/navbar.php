<!-- Topbar  -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  <div class="navbar-header text-left">
    <a class="navbar-brand">Academia Online</a>
  </div>



  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">

    <li class="nav-item">
      <a class="nav-link" href="/panel">       
       <span class="text-dark">Dashboard</span>
     </a>
   </li>

   <li class="nav-item">
    <a class="nav-link" href="/courses">       
     <span class="text-dark">Cursos</span>
   </a>
 </li>

 <li class="nav-item">
    <a class="nav-link" href="/tutorials">       
     <span class="text-dark">Cursos Gratis</span>
   </a>
 </li>

  <li class="nav-item">
    <a class="nav-link" href="/panel/certificates">       
     <span class="text-dark">Certificados</span>
   </a>
 </li>

 <!--    divider -->
 <div class="topbar-divider d-none d-sm-block"></div>



 <!-- Nav Item - User Information -->
 <li class="nav-item dropdown no-arrow">
      <!-- <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Lenguaje</span>       
      </a> -->

      <!-- Dropdown - dropdown -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="">
          <i class="fas fa-globe-americas fa-sm fa-fw mr-2 text-gray-400"></i>
          
        </a>
        <a class="dropdown-item" href="">
          <i class="fas fa-flag-usa fa-sm fa-fw mr-2 text-gray-400"></i>
          
        </a>

      </div>    
    </li>



    <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small"> </span>
        <!-- <img class="img-profile rounded-circle" src="https://source.unsplash.com/iFgRcqHznqg"> -->

        <img class="img-profile rounded-circle" src="<?php echo ('uploads/thumbnails/user.png'); ?>">        
      </a>

      <!-- Dropdown - dropdown -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="/panel/profile">
          <i class="fas fa-fw fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>          
          Perfil
        </a>        
        <a class="dropdown-item" href="/logout">
          <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
          <!-- <?php //echo lang('registrarse'); ?> -->
          Close session
        </a>          

      </div>     
    </li>

  </ul>


</nav>
        <!-- End of Topbar