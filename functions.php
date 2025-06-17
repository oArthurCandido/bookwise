<?php

function view($view, $data = []){
    foreach($data as $key => $value){
        $$key = $value;
    }

    require "views/template/app.php";
}

function dd(...$data)
{
    echo "<pre>";
    var_dump(...$data);
    echo "</pre>";
    die();
}

function abort($code)
{
    http_response_code($code);
    view($code);
    die();
}

