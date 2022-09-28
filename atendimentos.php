<?php
include_once("includes/conn.php");
include_once("includes/head.php");
include_once("includes/protect.php");
include_once("includes/nav.php");
?>

<div class="row my-3">
    <label for="empresa" class="fw-bold col-sm-2 col-form-label col-form-label-lg">Empresa</label>
    <div class="col-lg-3">
        <input type="text" class="form-control form-control" id="empresa" name="empresa" placeholder="Digite a empresa">
    </div>
</div>

<div class="row my-3">
    <label for="funcionario" class="fw-bold col-sm-2 col-form-label col-form-label-lg">Funcionário</label>
    <div class="col-lg-3">
        <input type="text" class="form-control form-control" id="funcionario" name="funcionario" placeholder="Digite o funcionário">
    </div>
</div>

<div class="row my-3">
    <label for="data1" class="fw-bold col-sm-2 col-form-label col-form-label-lg">Data</label>
    <div class="col-lg-3">
        <input type="date" class="form-control form-control" id="data1" name="data1">
    </div>
    <div class="col-lg-3">
        <input type="date" class="form-control form-control" id="data2" name="data2" value="<?php echo date("Y-m-d"); ?>">
    </div>
</div>

<?php
include_once("includes/footer.php");
include_once("includes/script.php");
?>