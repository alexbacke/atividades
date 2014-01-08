<html>
    <head>
        <title> Cadastro</title>
        <link rel="stylesheet" type="text/css"  href="style.css" >
    </head>
    <body>
        
            <?php
            require("menu.php");
            ?>
            
        <form action="editar.php" method="post" >
            <label> Remover o codido da pessoa</label>
            <br />
            <input type="text"  name="id" /> <br />
            <br />
            <fieldset> 
            <label>Nome:</label><input type="text"  name="nome" /> <br/>
            <br/>
            </fieldset> <br/>
           <fieldset>
            <input type="radio" name="sexo" value="m" checked="checked"> <label> Masculino</label> <br /> 
            <input type="radio" name="sexo" value="f"> <label> Feminino</label> <br />
            <br/>
            </fieldset> <br />
            <input type="submit"    value="Editar" />

        </form>
    </body>
    
</html>

<?php

    session_start();
    if(isset($_SESSION["cadastros"])) {
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id => $pessoa) {
            if ($pessoa != null) {
        
                echo "[$id] => " . $pessoa ["nome"] . "<br />"; 
            }
            
        }
    }
    else {
        echo "Nao existe pessoas cadastradas";
    }
?>
