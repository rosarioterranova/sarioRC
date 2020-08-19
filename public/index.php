<?php

require_once "../server/core/functions.php"; 

render_component("header", [
    "title" => "SarioRC",
    "styles" => [
        "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css",
        "./css/style.css"
    ]
]);

render_component("navbar", [
    "title" => "SarioRC"
]);

render_component("hello", [
    "name" => "User"
]);

render_component("footer", [
    "scripts" => [
        "https://code.jquery.com/jquery-3.5.1.slim.min.js",
        "https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js",
        "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js",
        "./js/main.js"
    ]
]);
