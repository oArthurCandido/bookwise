<?php
$id = $_REQUEST['id'];
// $livro = array_filter($livros, fn($livro) => $livro['id'] == $id);
// $livro = $livro ? array_values($livro)[0] : null;
$livro = (new DB)->livro($id);
if (!$livro) {
    http_response_code(404);
    echo "Livro não encontrado.";
    exit;
}

view("livro", [
    'livro' => $livro
]);
