<?php

$db = mysqli_connect('localhost', 'root', '', 'database');

if ($db) {
    //echo "Conexiune la baza de date";
    //echo "Conection to the local database"
} else {
    echo mysqli_error($db);
}
