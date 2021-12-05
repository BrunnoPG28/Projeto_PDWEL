<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Agenda</title>
    <!-- Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, height=device-heigth" />
    <meta name="description" content="Agenda" />

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Scripts -->
    <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  </head>
  <body>
    <div class="container mt-4">
        <?php $this->loadViewInTemplate($viewName, $viewData);  ?>  
    </div>
  </body>
</html>