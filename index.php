<?php
include_once("includes/conn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $conn->real_escape_string($_POST['login']);
    $senha = $conn->real_escape_string($_POST['senha']);

    if (empty($_POST['login'])) {
        $erro = "Digite o login";
    } else if (empty($_POST['senha'])) {
        $erro = "Digite a senha";
    } else {
        $sql = "SELECT * FROM usuario where user = '$login' AND senha = '$senha'";
        $query = $conn->query($sql) or die("404 código sql" . $conn->error);

        $quantidade = $query->num_rows;

        if ($quantidade == 1) {
            $usuario = $query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION["user"] = $usuario["user"];

            header("Location: home.php");
        } else {
            $erro = "Login ou senha incorretos";
        }
    }
}
?>
<?php include_once("includes/head.php"); ?>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");

    * {
        box-sizing: border-box;
    }

    body {
        font-family: "Poppins", sans-serif;
        background-image: url(img/sede.jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }

    .branco {
        background-color: snow;
    }
</style>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <div class="text-center">
                    <a href="index.php"><img src="img/logo.png" style="width: 300px;" class="img-fluid my-5" alt="prestomed"></a>
                </div>
                <form method="POST" class="rounded p-4 branco">
                    <div class="mb-3">
                        <i class="fa-solid fa-user"></i> <label for="login" class="form-label fw-bold">Login</label>
                        <input type="text" class="form-control" id="login" name="login" placeholder="Login" <?php if (isset($login)) {
                                                                                                                echo "value='" . $login . "'";
                                                                                                            } ?>>
                    </div>
                    <div class="mb-3">
                        <i class="fa-solid fa-lock"></i> <label for="senha" class="form-label fw-bold">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                    </div>
                    <div class="my-2 text-danger fw-bold"><?php if (isset($erro)) {
                                                                echo $erro;
                                                            }; ?></div>
                    <button type="submit" class="btn btn-primary col-12 fw-bold">Entrar</button>
                </form>
            </div>
        </div>
    </div>

    <?php include_once("includes/script.php"); ?>

</body>

</html>