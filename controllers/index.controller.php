<?php
require_once 'data.php';
view("index", [
    'livros' => $livros
]);