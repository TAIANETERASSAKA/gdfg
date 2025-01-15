
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


