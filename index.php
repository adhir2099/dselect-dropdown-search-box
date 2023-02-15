<?php 
    require_once('dbcon.php');
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Bootstrap 5 select dropdown with search box using Dselect & PHP</title>
        
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Adhirsaurio" />
        <meta name="description" content="Bootstrap 5 select dropdown with search box using Dselect & PHP" />

        <!-- Bootstrap v5.2.3-->
        <link href="assets/css/bootstrapv5.css" rel="stylesheet"/>
        <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
        <!-- Dselect library -->
        <link rel="stylesheet" href="https://unpkg.com/@jarstone/dselect/dist/css/dselect.css">
        <script src="https://unpkg.com/@jarstone/dselect/dist/js/dselect.js"></script>
        <!-- Favicon -->
        <link href="assets/img/world.png" type="image/x-icon" rel="icon"/>
        <!-- Your custom css -->
        <link href="assets/css/custom.css" rel="stylesheet" />
        <!-- Bootstrap v5.2.3core JS-->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
    </head>

    <body class="d-flex flex-column min-vh-100">
        
        <span id="forkongithub"><a href="https://github.com/adhirsaurio/dropdown-with-search-box">Fork me on GitHub</a></span>
        
        <div class="container">
            <h1 class="mt-2 text-center text-primary mb-5">Bootstrap 5 select dropdown with search box using Dselect & PHP</h1>
            <div class="row">
                <div class="col-md-3">&nbsp;</div>
                <div class="col-md-6">
                    <select name="select_box" class="form-select" id="select_box">
                        <option value="">Select country</option>
                        <?php 
                            foreach($result as $row){
                                echo '<option value="'.$row["country_name"].'">'.$row["country_name"].'</option>';
                            }
                        ?>  
                    </select>
                </div>
                <div class="col-md-3">&nbsp;</div>
            </div>      
        </div>

        <footer class="footer text-center mt-auto bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="lead mb-0">Bootstrap 5 select dropdown with search box using Dselect & PHP <a href="https://github.com/adhirsaurio?tab=repositories"><i class="bi bi-github"></i></a></p>
                    </div>
                </div>
            </div>
        </footer>

        <div class="copyright py-4 text-center text-black bg-primary">
            <div class="container"><small>Bootstrap 5 select dropdown with search box using Dselect & PHP © 2023</small></div>
        </div>

    </body>
</html>

<script>

    var select_box_element = document.querySelector('#select_box');

    dselect(select_box_element, {
        search: true
    });

</script>