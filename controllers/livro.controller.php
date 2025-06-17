<?php
require_once 'data.php';
$id = $_REQUEST['id'];
$livro = array_filter($livros, fn($livro) => $livro['id'] == $id);
$livro = $livro ? array_values($livro)[0] : null;
if (!$livro) {
    http_response_code(404);
    echo "Livro não encontrado.";
    exit;
}
$view = "livro.view";
require_once 'views/template/app.php';
