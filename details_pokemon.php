<?php

require_once("head.php");
require_once("database-connection.php");
$idpokemon = $_GET["id"];
$query = $databaseConnection->Query("select");