<!DOCTYPE html>
<html>
    <head>
        <base href="/">
        <title>Notify</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 main-container">
                    <?php
                    // Initialization file
                    require_once "app/init.php";
                    $app = new App;
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>