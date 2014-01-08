<link rel="stylesheet" type="text/css"  href="style.css" >
   

<?php




require_once("menu.php");

    session_start();
    if(isset($_SESSION["cadastros"])) {
        $cadastros = $_SESSION["cadastros"];
        
        
        echo "<dl>"; //dl e lista de inscricao
        
        foreach($cadastros as $pessoa) {
            if($pessoa != null) {
                
               $sexo = $pessoa ["sexo"];
                
                echo "<dt class='$sexo'>" . $pessoa ["nome"] . "</dt>"; 
                echo "<dd>Sexo:" . $sexo . "</dd>";
            }
            
        }
        
        echo "</dl>";
    }
    else {
        echo "Nao existe pessoas cadastradas";
    }
?>
    
