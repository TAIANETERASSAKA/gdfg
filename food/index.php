<?php
    require_once('geral.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand">Guia de Receitas</a>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">buscar</button>
          </form>
        </div>
    </nav>


    <div width="100%" style="display: flex;">
        <div width="20%" >
            <div style="background-color: rgb(179, 130, 211);">
                <?php include_once('area.php')?>
            </div>
            <div style="background-color: rgb(145, 230, 170);">
                <?php include_once('categoria.php')?>
            </div>
        </div>

        <div width="80%" display="flex">
           
            <?php include_once('ingredientes.php')?>
            <?php include_once('receitas.php')?>

            
        </div>

       

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>