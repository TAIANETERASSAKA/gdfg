<?php
    require_once('geral.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: aquamarine;">
<html>
    <?php 

        $response = busca('search.php?f=b');
        foreach($response as $lista => $Receita){
            foreach($Receita as $itemReceita => $infoReceita){
            
            $id = $infoReceita['idMeal'];

            $nome = $infoReceita['strMeal'];

            $categoria =$infoReceita['strCategory'] ;

            $area = $infoReceita['strArea'];

            $imagem = $infoReceita['strMealThumb'];

            $tags = $infoReceita['strTags'];

            $linkYoutube =$infoReceita['strYoutube'] ;

            $dataModif = $infoReceita['dateModified'];

            $alternativaDrink =$infoReceita['strDrinkAlternate'] ;

            $instrucoes = $infoReceita['strCategory'];

            $Source = $infoReceita['strInstructions'];

            $ImageSource = $infoReceita['strImageSource'];

            $CreativeCommonsConfirmed = $infoReceita['CreativeCommonsConfirmed'];

            $medidas = [];
            
            for($i=1; $i<=20; $i++){
                $qnt = 'strMeasure' .$i;
                $ingrediente = 'strIngredient' .$i;
                
                if (!empty($infoReceita[$qnt]) && !empty($infoReceita[$ingrediente])) {
                    $medidas[] = [
                        'medida' => $infoReceita[$qnt],
                        'ingrediente' => $infoReceita[$ingrediente]
                    ];
                }
            }?>

            <div class="card" style="width: 18rem;">
                <img src="<?= $imagem?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $nome?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <?php foreach($medidas as $lista => $ingredientPorMedida){?>
                            <li class="list-group-item"><?= $ingredientPorMedida['ingrediente']?> - <?= $ingredientPorMedida['medida']?></li>
                    <?php }?>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Saiba mais</a>
                </div>
            </div>
            <?php
            }
        }
    ?>

    categoria

    <?php    
        $response = busca('list.php?c=list');
        foreach($response as $lista => $categoria){
            foreach($categoria as $itemCategoria => $infoCategoria){
            $categoria = $infoCategoria['strCategory'];
            $id = 'flexCheck'.$categoria?>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="<?=$categoria?>" id="<?=$id?>">
                <label class="form-check-label" for="<?=$id?>">
                    <?=$categoria?>
                </label>
            </div>
            <?php
            }
        }
    ?>

    area

    <?php    
        $response = busca('list.php?a=list');
        foreach($response as $lista => $area){
            foreach($area as $itemArea => $infoArea){
            $nome = $infoArea['strArea'];
            $id = 'flexCheck'.$nome?>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="<?=$nome?>" id="<?=$id?>">
                <label class="form-check-label" for="<?=$id?>">
                    <?=$nome?>
                </label>
            </div>
            <?php
            }
        }
    ?>

    ingredientes

    <?php    
        $response = busca('list.php?i=list');
        foreach($response as $ingredientes => $ingrediente){
            foreach($ingrediente as $item => $infoIngrediente){
            $imagem = 'https://www.themealdb.com/images/ingredients/' .$infoIngrediente['strIngredient'].   '.png' ?>

            <div class="card" style="width: 18rem;">
            <img src="<?= $imagem ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $infoIngrediente['strIngredient']?></h5>
                <p class="card-text"><?= $infoIngrediente['strDescription']?></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>

            <?php
            }
        }
    ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>