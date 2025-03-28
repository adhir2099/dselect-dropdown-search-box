<?php
    
    try {
        $connect = new PDO("mysql:host=host;dbname=dbname;charset=utf8", "user", "pass");
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = " SELECT country_name FROM countries ORDER BY country_name ASC ";

        $result = $connect->query($query);
    } catch (PDOException $e) {
        error_log("Database connection error: " . $e->getMessage());
        echo "Oops! Something terribly wrong happened here.";    
        exit();
    }