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
