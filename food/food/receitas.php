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

    $instrucoes = $infoReceita['strInstructions'];

    $Source = $infoReceita['strSource'];

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

        <div class="card-body">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?=$id?>">
             Leia mais...
            </button>

            <div class="modal fade" id="<?=$id?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="<?=$id?>Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="<?=$id?>Label"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="<?= $imagem?>" class="card-img-top" alt="...">
                    <h2><?= $nome?></h2>
                    <ul class="list-group list-group-flush">
                        <strong>Ingredientes:</strong>

                        <?php foreach($medidas as $lista => $ingredientPorMedida){?>
                                <li class="list-group-item"><?= $ingredientPorMedida['ingrediente']?> - <?= $ingredientPorMedida['medida']?></li>
                        <?php }?>
                    </ul>
                    <strong>Modo de preparo:</strong> </br>

                    <?= $instrucoes?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <?php
    }
}
?>