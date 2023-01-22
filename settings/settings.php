<?php

// DB
const SERVERNAME = "localhost";
const USERNAME = "admin";
const PASSWORD = "admin";
const DBNAME = "MyShop";
const PORT = "5432";
$dbConnection = pg_connect("host=".SERVERNAME. " port=".PORT." dbname=".DBNAME." user=".USERNAME." password=".PASSWORD);

// Title of page
function getTitle($file_name) {
    if ($file_name == 'home')
       return 'Интернет-магазин техники и электроники в Донецке (ДНР), купить в DNS';

    elseif ($file_name == 'contact') {
        return 'Контакты';

    }
}
