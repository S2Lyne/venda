<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link  rel="stylesheet" href="css/bootstrap.css">

    <style type="text/css">
    
        #tamanhoContainer{
            width: 1200px;
        }

        #botao{
            background-color: #A020F0; /* cor de fundo */
            color:  #ffffff; /* cor da letra */
        }
    </style>

</head>
<body>
    <div class="container" id="tamanhoContainer" style="margin-top: 40px">  
        <nav class="navbar navbar-light" style="background-color: #A020F0">        
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar w/ text</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        Navbar text with an inline element
                    </span>
                </div>
            </div>
           


        </nav>


        <div class="row">
            <div class="col-sm">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>

            <div class="col-xl">
            
                <div style="text-align: right; margin-top: 15px">
                <a href="cadastrar_cliente.php"  id="botao" role="button" class="btn btn-sm">Cadastrar Novo Cliente</a>
                </div>
            </div>


        </div>


        

    </div>

<script src="js/bootstrap.js"></script>
    
</body>
</html>