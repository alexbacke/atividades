<html>
    <head>
        <title> Cadastro</title>
        <link rel="stylesheet" type="text/css"  href="style.css" >
    </head>
    <body>
        
            <?php
            require("menu.php");
            ?>
            
        <form action="remover.php" method="post" >
            <label> Remover o codido da pessoa para remover</label>
            <br/>
            <input type="text"  name="id" />
            <input type="submit"    value="Remover" />

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
