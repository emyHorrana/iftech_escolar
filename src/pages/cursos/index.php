<?php
include_once("../../components/topo.php");
include_once("./components/menu.php");
?>

<body class="d-flex h-100 text-center text-bg-dark">
  <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi me-2" width="40" height="32">
        <use xlink:href="#bootstrap"></use>
      </svg>
      <span class="fs-4">Menu</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="./index.php" class="nav-link active" aria-current="page">
          <svg class="bi me-2" width="16" height="16">
            <use xlink:href="#home"></use>
          </svg>
          Cursos
        </a>
      </li>
      <li>
        <a href="./disciplinas.php" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16">
            <use xlink:href="#speedometer2"></use>
          </svg>
          Disciplinas
        </a>
      </li>
      <li>
        <a href="./matrizes_curriculares.php" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16">
            <use xlink:href="#table"></use>
          </svg>
          Matrizes curriculares.
        </a>
      </li>
    </ul>
  </div>
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
      <div>
        <h3 class="float-md-start mb-0"><a class="nav-link" href="../../index.php">IF TECH</a></h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
          <a class="nav-link fw-bold py-1 px-0" aria-current="page" href="../pessoas/index.php">Pessoas</a>
          <a class="nav-link fw-bold py-1 px-0 active" href="#">Cursos</a>
          <a class="nav-link fw-bold py-1 px-0" href="../turmas/index.php">Turmas</a>
          <a class="nav-link fw-bold py-1 px-0" href="../financeiro/index.php">Financeiro</a>
        </nav>
      </div>
    </header>
    <main class="d-flex justify-content-start">
      <div>
        <h2>Cursos
          <a class="btn btn-primary" href="./cadastrar/cadastrar_cursos.php">Cadastrar Pessoas</a>
        </h2>
      </div>
    </main>
    <footer class="mt-auto text-white-50">
      <?php
      include_once("../../components/footer.php");
      ?>
    </footer>
  </div>
  <script src="../../../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>