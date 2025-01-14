<?php
    require_once('geral.php');

    function chamarFuncaoJS($response){
        // Passando os dados JSON para a função JavaScript
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                function cardReceita(response) {
                    console.log(response); // Verifique se a resposta é válida

                    qntItens = response.meals.length;

                    console.log(qntItens);

                    for (qnt = 0; qnt < qntItens; qnt++){

                        const id = response.meals[qnt].idMeal;

                        const nome = response.meals[qnt].strMeal

                        const categoria = response.meals[qnt].strCategory

                        const area = response.meals[qnt].strArea

                        const imagem = response.meals[qnt].strMealThumb

                        const tags = response.meals[qnt].strTags

                        const linkYoutube = response.meals[qnt].strYoutube

                        const dataModif = response.meals[qnt].dateModified

                        const alternativaDrink = response.meals[qnt].strDrinkAlternate

                        const instrucoes = response.meals[qnt].strInstructions

                        const Source = response.meals[qnt].strSource

                        const ImageSource = response.meals[qnt].strImageSource

                        const CreativeCommonsConfirmed = response.meals[qnt].CreativeCommonsConfirmed

                        // medidaPorIngrediente = array();

                        // for(i=1; i<=20; i++){
                        //     medidaPorIngrediente[i] = [
                        //         ingrediente = response.meals[0].strIngredient+i
                        //         medida = response.meals[0].strMeasure+i
                        //     ];
                        // };

                        let divReceita = document.createElement("div");
                        divReceita.classList.add("conteinerReceita");

                        let imgReceita = document.createElement("img");
                        imgReceita.src = imagem;
                        imgReceita.classList.add("conteinerImagem");

                        let divInfoReceita = document.createElement("div");

                        let divTitulo = document.createElement("div");
                        let titulo = document.createTextNode(nome);
                        divTitulo.appendChild(titulo);

                        let divClass = document.createElement("div");
                        let classificacao = document.createTextNode(categoria);
                        divClass.appendChild(classificacao);


                        divInfoReceita.appendChild(divTitulo);
                        divInfoReceita.appendChild(divClass);
                        divInfoReceita.classList.add("conteinerInfo")

                        let divInstrucoes  = document.createElement("div");
                        let preparo = document.createTextNode(instrucoes);
                        divInstrucoes.appendChild(preparo); 
                        divInstrucoes.classList.add("conteinerDesc")

                        divReceita.appendChild(imgReceita)
                        divReceita.appendChild(divInfoReceita)
                        divReceita.appendChild(divInstrucoes);
                        
                        let saibaMais = document.createElement("button");
                        let descButton = document.createTextNode("Detalhes");
                        saibaMais.setAttribute("value", id);

                        saibaMais.appendChild(descButton);
                        divReceita.appendChild(saibaMais);

                        document.getElementById("receitas").appendChild(divReceita);
                    
                    }
                }
                cardReceita('.json_encode($response).');
            });
        </script>';
    }


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

    

    <?= busca($tipo['firstLetter']);?>
    <div id="receitas">
    </div>

    <div id="categorias">

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>