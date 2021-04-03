<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
    <link  rel="stylesheet" href="css/bootstrap.css">

    <style type="text/css">
    
        #tamanhoContainer{
            width: 900px;
        }

        #botao{
            background-color: #A020F0; /* cor de fundo */
            color:  #ffffff; /* cor da letra */
        }
    </style>

</head>
<body>
    <div class="container" id="tamanhoContainer" style="margin-top: 40px">  
        <div class="row">
            <h1>Adicionar Cliente</h1>
        </div>
        
        <form action="_inserir_produto.php" method="post" style="margin-top: 20px;">  
            <div class="row">
                <div class="col-sm">  
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" name="nomecliente" placeholder="Informe o nome do cliente" autocomplete="off" required>
                    </div>
                </div>
                <div class="col-sm">  
                    <div class="form-group">
                        <label>CPF (opcional)</label>
                        <input type="text" class="form-control" name="cpf" pattern="\d{3}\.?\d{3}\.?\d{3}\.?\d{2}" placeholder="Informe o CPF" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">  
                    <div class="form-group">
                        <label>E-mail (opcional)</label>
                        <input type="email" class="form-control" name="email" placeholder="Informe o email do cliente" autocomplete="off">
                    </div>
                </div>
                <div class="col-sm">  
                    <div class="form-group">
                        <label>Celula (opcional)</label>
                        <input type="number" class="form-control" name="cpf" pattern="\(\d{2}\)?\d{5}\-?\d{4}\." placeholder="Informe o Celular" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">  
                    <div class="form-group">
                        <label>Cep (opcional)</label>
                        <input type="number" class="form-control" name="cep" placeholder="Informe o Cep" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">  
                    <div class="form-group">
                        <label>Endereço (opcional)</label>
                        <input type="text" class="form-control" name="endereco" placeholder="Informe o endereço" autocomplete="off">
                    </div>
                </div>
                <div class="col-sm">  
                    <div class="form-group">
                        <label>Número (opcional)</label>
                        <input type="number" class="form-control" name="num" placeholder="Informe o número" autocomplete="off">
                    </div>
                </div>
            </div>   
            <div class="row">
                <div class="col-sm">  
                    <div class="form-group">
                        <label>Complemento (opcional)</label>
                        <input type="text" class="form-control" name="complemento" placeholder="Informe o complemento" autocomplete="off">
                    </div>
                </div>
                <div class="col-sm">  
                    <div class="form-group">
                        <label>Bairro (opcional)</label>
                        <input type="text" class="form-control" name="bairro" placeholder="Informe o Bairro" autocomplete="off">
                    </div>
                </div>
            </div> 
            <div class="row"> 
                <div class="form-group">
                    <label>Fornecedor</label>
                    <select class="form-control" name="fornecedor" required>
                        <option>São Paulo - São Paulo</option>
                        <option>Abadia de Goiás - Goiás</option>
                        <option>Abadia dos Dourados - Minas Gerais</option>
                        <option>Abadiânia - Goiás</option>
                        <option>Abaeté - Minas Gerais</option>
                        <option>Abaetetuba - Pará</option>
                        <option>Abaiara - Ceará</option>
                        <option>Abaíra - Bahia</option>
                        <option>Abaré - Bahia</option>
                        <option>Abatiá - Paraná</option>
                        <option>Abdon Batista - Santa Catarina</option>
                        <option>Abel Figueiredo - Pará</option>
                        <option>Abelardo Luz - Santa Catarina</option>
                        <option>Abre Campos - Minas Gerais</option>
                        <option>Abreu e Lima - Pernambuco</option>
                        <option>Abreulândia - Tocantins</option>
                        <option>Acaiaca - Minas Gerais</option>
                        <option>Açailandia - Maranhão</option>
                        <option>Acajutiba - Bahia</option>
                        <option>Acará - Pará</option>
                       
                    </select>
                </div> 
            </div>
            
                <div style="text-align: right; margin-top: 15px">
                    <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
                </div>
            </form>
        </div>









<script src="js/bootstrap.js"></script>
    
</body>
</html>