<?php 
    $tipo = [
        'nome' => 'search.php?s=Arrabiata',  // Pesquisar refei��o por nome OK
        'firstLetter' => 'search.php?f=b', // Listar todas as refei��es pela primeira letra OK
        'id' => 'lookup.php?i=52772', // Pesquisar detalhes completos da refei��o por ID
        'random' => 'random.php', // Pesquisar uma �nica refei��o aleat�ria
        'princIngrediente' => 'filter.php?i=chicken_breast', // Filtrar por ingrediente principal OK
        'categoria' => 'filter.php?c=Seafood',  // Filtrar por categoria OK
        'area' => 'filter.php?a=Canadian', // Filtrar por �rea OK
        'listarCategorias' => 'list.php?c=list', // Listar todas as categorias OK
        'listarAreas' => 'list.php?a=list', // Listar todas as �reas OK
        'listarIngredientes' => 'list.php?i=list' // Listar todas as ingredientes  OK
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
        
        return $response;
        
    };

?>