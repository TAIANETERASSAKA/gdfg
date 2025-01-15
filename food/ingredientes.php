<?php    
        $response = busca('list.php?i=list');
        foreach($response as $ingredientes => $ingrediente){
            foreach($ingrediente as $item => $infoIngrediente){
            $imagem = 'https://www.themealdb.com/images/ingredients/' .$infoIngrediente['strIngredient'].   '.png' ?>

            <div class="card" style="width: 18rem;">
                <img src="<?= $imagem ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $infoIngrediente['strIngredient']?></h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?=$infoIngrediente['strIngredient']?>">
                        Mais informações
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="<?=$infoIngrediente['strIngredient']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="<?=$infoIngrediente['strIngredient']?>Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="<?=$infoIngrediente['strIngredient']?>Label"></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="<?= $imagem?>" class="card-img-top" alt="...">
                            <h2><?= $infoIngrediente['strIngredient']?></h2>
                            Descrição: <?= $infoIngrediente['strDescription']?>
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