<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    die('<div class="text-center">
    <img src="img/logo.png" style="width:30rem;margin-top:10rem;margin-bottom:10rem" alt="logo prestomed"><br>
    <a href="index.php" class="fw-bold fs-1 text-decoration-none text-light facaLogin azulPresto p-3 rounded-3">Faça o login</a>
    </div>');
}
