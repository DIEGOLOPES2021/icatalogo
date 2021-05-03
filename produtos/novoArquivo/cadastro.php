<?php

require("../../database/conexaoBD.php");




        $sqlinsert= "INSERT INTO tbl_produto (descricao, peso, quantidade, cor, valor) VALUES ('$descricao', $peso, $quantidade, '$cor', $valor)";


        $resultado = mysqli_query($conexao, $sqlinsert);

    if ($resultado) {

        header("location: index.php?mensagem=padrão");

    }else{    

        echo "deu erro";

    }
    
    if(isset($_POST["tamanho"])){
        $tamanho = $_POST["tamanho"];
        
        $sqlinsert= "INSERT INTO tbl_produto (descricao, peso, quantidade, cor, valor, tamanho) VALUES ('$descricao', $peso, $quantidade, '$cor', $valor, '$tamanho')";


        $resultado = mysqli_query($conexao, $sqlinsert);
        
        if ($resultado) {

            header("location: index.php?mensagem=comTamanho");

        }else{    

            echo "deu erro";

        }
        
    }
    
    if(isset($_POST["desconto"])){
        
        $desconto = $_POST["desconto"];

        $sqlinsert= "INSERT INTO tbl_produto (descricao, peso, quantidade, cor, valor, tamanho, desconto) VALUES ('$descricao', $peso, $quantidade, '$cor', $valor, '$tamanho', $desconto)";


        $resultado = mysqli_query($conexao, $sqlinsert);
        
        if ($resultado) {

            header("location: index.php?mensagem=comDesconto");

        }else{    

            echo "deu erro";
        }
        
    }
    
    
    function validacao (string $descricao, string $cor, string $tamanho, $peso, $valor, $quantidade, $desconto){
        $erros = [];

        if(isset($_POST["descricao"])){

        }
        if(isset($_POST["peso"])){
    
        }
        if(isset($_POST["quantidade"])){
    
        }
        if(isset($_POST["cor"])){
    
        }
        if(isset($_POST["valor"])){
    
        }
        if(isset($_POST["tamanho"])){
    
        }
        if(isset($_POST["desconto"])){
    
        }
    }