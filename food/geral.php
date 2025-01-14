<?php 
    $tipo = [
        'nome' => 'search.php?s=Arrabiata',  // Pesquisar refeiчуo por nome
        'firstLetter' => 'search.php?f=b', // Listar todas as refeiчѕes pela primeira letra
        'id' => 'lookup.php?i=52772', // Pesquisar detalhes completos da refeiчуo por ID
        'random' => 'random.php', // Pesquisar uma њnica refeiчуo aleatѓria
        'princIngrediente' => 'filter.php?i=chicken_breast', // Filtrar por ingrediente principal
        'categoria' => 'filter.php?c=Seafood',  // Filtrar por categoria
        'area' => 'filter.php?a=Canadian', // Filtrar por сrea
        'listarCategorias' => 'list.php?c=list', // Listar todas as categorias
        'listarAreas' => 'list.php?a=list', // Listar todas as сreas
        'listarIngredientes' => 'list.php?i=list' // Listar todas as ingredientes
    ];

    function busca($complemento){
        
        $url = 'https://www.themealdb.com/api/json/v1/1/' .$complemento;

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);

        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($curl);

        $response = json_decode($response, true); //codificando a resposta em json para que possamos manipulala

        curl_close($curl);
        
        chamarFuncaoJS($response);
        
    };

?>