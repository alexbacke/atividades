<html>
    <head>
        <title> Cadastro</title>
        <link rel="stylesheet" type="text/css"  href="style.css" >
    </head>
    <body>
        
            <?php
            require_once("menu.php");
            
            ?>
            
        <form action="cadastrar.php" method="post" >
           <fieldset>
            <label>Nome:</label><input type="text"  name="nome" /> <br/>
            <br/>
            </fieldset> <br/>
           <fieldset>
            <input type="radio" name="sexo" value="m" checked="checked"> <label> Masculino</label> <br /> 
            <input type="radio" name="sexo" value="f"> <label> Feminino</label> <br />
            <br/>
            </fieldset> <br />
            <input type="submit"    value="Enviar" />
            <input type="reset" value="Resetar" />
        </form>
    </body>
    
</html>

