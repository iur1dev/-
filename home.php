<?php
include_once("includes/conn.php");
include_once("includes/head.php");
include_once("includes/protect.php");
include_once("includes/nav.php");
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
</div>

<div class="row my-3">
  <label for="codigo" class="fw-bold col-sm-2 col-form-label col-form-label-lg">ID Atendimento</label>
  <div class="col-lg-3">
    <input type="text" class="form-control form-control" id="codigo" name="codigo" placeholder="Digite o ID">
  </div>
</div>

<div class="row my-3">
  <label for="empresa" class="fw-bold col-sm-2 col-form-label col-form-label-lg">Empresa</label>
  <div class="col-lg-3">
    <input type="text" class="form-control form-control" id="empresa" name="empresa" placeholder="Digite a empresa">
  </div>
</div>

<div class="row">
  <label for="data1" class="fw-bold col-sm-2 col-form-label col-form-label-lg">Data</label>
  <div class="col-lg-3">
    <input type="date" class="form-control form-control" id="data1" name="data1">
  </div>
  <div class="col-lg-3">
    <input type="date" class="form-control form-control" id="data2" name="data2" value="<?php echo date("Y-m-d"); ?>">
  </div>
</div>


<div class="row mt-5">
  <div class="card col-5">
    <div class="card-body">
      <h5 class="fw-bold">Informações do Atendimento</h5>
      <p><strong>Nome do Funcionário:</strong> teste </p>
      <p><strong>Função:</strong> teste</p>
      <p><strong>Data:</strong> 25/09/2022</p>
    </div>
  </div>

  <div class="col-1"></div>

  <div class="card col-5">
    <div class="card-body">
      <h5 class="fw-bold">Informações da Empresa</h5>
      <p><strong>Nome da empresa:</strong> Prestomed</p>
      <p><strong>Cnpj:</strong> teste</p>
      <p><strong>Cep:</strong> teste</p>
    </div>
  </div>
</div>

<?php
include_once("includes/footer.php");
include_once("includes/script.php");
?>