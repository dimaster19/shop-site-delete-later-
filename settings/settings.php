<?php

const SERVERNAME = "localhost";
const USERNAME = "admin";
const PASSWORD = "admin";
const DBNAME = "MyShop";
const PORT = "5432";
$dbConnection = pg_connect("host=".SERVERNAME. " port=".PORT." dbname=".DBNAME." user=".USERNAME." password=".PASSWORD);
