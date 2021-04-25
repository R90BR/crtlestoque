<!DOCTYPE html>
<html lang="en">
    
    <?php include('init.php'); ?>

    
    
    <body>

        <div class="container-fluid">
                           
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d9d9d9;">   
                    <a class="navbar-brand" href="#"><h3>Controle de Estoque v1.0</h3></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>    

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                    <li class="nav-item ">
                    <a class="nav-link" href="index.php">Inicio <span class="sr-only"></span></a>
                    </li>

                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Equipamento
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../view/cadastrarEquipamento.php">Cadastrar</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="listarEstoque.php">Listar Equipamentos <span class="sr-only"></span></a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="registros.php">Registros<span class="sr-only"></span></a>
                    </li>

                    


                    </ul>
                    </div>


                    

                    
                </nav>
           
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    </body>

</html>