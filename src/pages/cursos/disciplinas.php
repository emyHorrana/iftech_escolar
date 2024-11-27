<?php
include_once("../../components/topo.php");
include_once("./components/menu.php");
include_once("../../adm/conexao.php");

$sql = "SELECT * from disciplinas";
$comando = $pdo->prepare($sql);

$comando->execute();

?>

<body class="d-flex h-100 text-center text-bg-dark flex-column">
  <div class="d-flex">
    <div class="d-flex flex-column h-100 flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
          <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">Menu</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="./index.php" class="nav-link text-white" aria-current="page">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#home"></use>
            </svg>
            Cursos
          </a>
        </li>
        <li>
          <a href="./disciplinas.php" class="nav-link active">
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
      <header class="mb-5">
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
    </div>
  </div>
  <main class="d-flex mx-5 flex-column">
      <div>
        <h2>Disciplinas
          <a class="btn btn-primary" href="./cadastrar/cadastrar_disciplinas.php">Cadastrar Pessoas</a>
        </h2>
      </div>
      <table class="table table-dark" id="tabelaListar" border="1" width="100%">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th> </th>
            <th> </th>

          </tr>
        </thead>
        <tbody>
          <?php

          while ($cursos = $comando->fetch(PDO::FETCH_ASSOC)) {
            if ($cursos) {
              ?>
              <tr>

                <td><?php echo $cursos['id_desciplina']; ?></td>
                <td><?php echo $cursos['nome']; ?></td>


                <td>
                  <a class="btn btn-success"
                    href="editar/editar_disciplinas.php?id=<?php echo $cursos["id_desciplina"]; ?>">Editar</a>
                </td>
                <td>
                  <a class="btn btn-danger"
                    href="excluir/excluir_disciplinas.php?id=<?php echo $cursos["id_desciplina"]; ?>">Excluir</a>
                </td>
              </tr>

            <?php }
          }
          ?>
        </tbody>
      </table>
    </main>
    <footer class="mt-auto text-white-50">
      <?php
      include_once("../../components/footer.php");
      ?>
    </footer>
  <script src="../../../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>


