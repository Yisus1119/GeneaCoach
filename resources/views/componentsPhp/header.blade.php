<!-- Header -->
<header id="header">
  <div class="Container-nav-logo">
    <img src="assets/Icon.png" alt="Logo" />
    <a href="#" class="Logo">GeneaCoach</a>
  </div>

  <!-- Nav -->
  <nav class="nav">
    <ul class="List">
      <li class="nav-item">
        <a class="nav-link" href="#">Curso</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Blog">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Docente">Enseña con nosotros</a>
      </li>
    </ul>

    <div class="Botones">
      <form action="">
        <input class="search" type="search" placeholder="Buscar curso ">
      </form>

      <a id="Button-1" href="Login">Inciar sesi&oacute;n</a>
      <a id="Button-2" href="Register">Comienza gratis</a>
    </div>


    @yield('ContenedorHeader')

    <!-- <form action="">
          <button id="sign-in-btn">Inciar seccion</button>
          <button id="free-btn">Comienza gratis</button>
        </form> -->
  </nav>

  <!-- End Nav -->
</header>
<!-- End Header -->