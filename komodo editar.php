<?php

    require_once("menu.php");

    session_start();
    
    $id = $_REQUEST["id"];
    $novoNome = $_REQUEST["nome"];
    $sexo = $_REQUEST["sexo"];
    
    
    if(!isset($_SESSION["cadastros"])) {
      echo "Nao existe cadastros para edicao";
    }
    else {
        $cadastros =& $_SESSION["cadastros"];
        
        $pessoa = array("nome" => $novoNome, "sexo" => $sexo);
        
        $cadastros[$id] = $pessoa;
        
        
        
    }

    
    echo "Edicao efeituado com sucesso";
?>
