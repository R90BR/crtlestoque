<?php require_once("../controller/c_ListarRegistro.php")?>
<!DOCTYPE html>

<html lang="pt-br">
<html>
    <?php include("init.php") ?>


    

    <body>
    <div class="container-fluid">
        <?php include("menu.php")?>
        <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Modo</th>
                <th>Data</th>
                                
            </tr>
        </thead>
        <tbody>
            <?php new listarRegistro();  ?>

        </tbody>
    </table>
    </div>

    
    </body>
  

</html>