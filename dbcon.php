<?php
    $connect = new PDO("mysql:host=host;dbname=name;charset=utf8", "user", "pass");

    $query = " SELECT country_name FROM countries ORDER BY country_name ASC ";

    $result = $connect->query($query);
?>