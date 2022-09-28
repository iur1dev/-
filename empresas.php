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
    <label for="cnpj" class="fw-bold col-sm-2 col-form-label col-form-label-lg">Cnpj</label>
    <div class="col-lg-3">
        <input type="text" class="form-control form-control" id="cnpj" name="cnpj" placeholder="Digite o cnpj">
    </div>
</div>

<form method="POST">
    <button class="btn btn-primary my-4 fw-bold" type="submit">Pesquisar</button>
</form>

<div class="container mt-3">
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="col-2">Código</th>
                <th class="col-10">Empresa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $json = file_get_contents("https://ws1.soc.com.br/WebSoc/exportadados?parametro={'empresa':'1148049','codigo':'148204','chave':'dd201ff2c98c7381e864','tipoSaida':'json'}");

                $data = json_decode(utf8_encode($json));

                foreach ($data as $key => $value) {
            ?>
                    <tr>
                        <td><?php echo $value->CODIGO; ?></td>
                        <td><?php echo $value->NOMEABREVIADO; ?></td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>

<?php
include_once("includes/footer.php");
include_once("includes/script.php");
?>