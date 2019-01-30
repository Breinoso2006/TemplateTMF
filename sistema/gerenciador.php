<?php
    session_start();

    if(!isset($_SESSION['nome'])){
        header('Location: index.php?erro=1');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/Sistema.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/responsividade.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

        <title> Sistema de Gerenciamento | TMF </title>
        
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3" id="menu-lateral">
                    <div id="usuarioSistema">
                        <h3> <?= isset($_SESSION['nome'])? $_SESSION['nome'] : 'Nome usuário' ?>  </h3>
                        <h4> <?= isset($_SESSION['cargo'])? $_SESSION['cargo'] : 'cargo' ?> </h4>
                    </div>

                    <div id="menuSistema">
                        <ul type="none">
                            <li class="itemMenuSistema">
                                <img src="../img/location.png">
                                <span> Serviços </span>
                            </li>
                            <li class="itemMenuSistema">
                                <img src="../img/location.png">
                                <span> Produtos </span>
                            </li>
                            <li class="itemMenuSistema">
                                <img src="../img/location.png">
                                <span> Portifólio </span>
                            </li>
                            <li class="itemMenuSistema">
                                <img src="../img/location.png">
                                <span> Newsletter </span>
                            </li>
                            <li class="itemMenuSistema">
                                <img src="../img/location.png">
                                <span> Mensagens </span>
                            </li>
                            <a href="sair.php" style="text-decoration:none">
                                <li class="itemMenuSistema" >
                                    <img src="../img/location.png">
                                    <span> Sair </span>
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>

                <div class="col-9" id="painelSistema">
                <h1 class="titulo_secoes"> Mensagens </h1>
<p>
    <br>
    A lista abaixo contém uma relação completa de todas mensagens que foram recebidas
    através do website. Com tais dados é possível que, mesmo após um contato inicial 
    sem fechamento de um serviço, novas possibilidades futuras possam ser mais 
    facilmente verificadas!
</p>
<div class="table-responsive">
    <table id="listaEmail" class="table table-striped table-hover ">
        <thead>
            <tr>
                <th style="width:6%;"> # </th>
                <th style="width:22%;"> Nome </th>
                <th style="width:30%;"> E-mail </th>
                <th style="width:36%; text-align:justify;"> Mensagem </th>
                <th style="width:6%;">  Respondido?</th>
            </tr>
        </thead>
        <tbody style="vertical-align:center">
            <tr data-toggle="modal" data-target="#modalMsg">
                <th> 1 </th>
                <td> Marco Araujo </td>
                <td> marcoaraujoneves@gmail.com </td>
                <td style="text-align:justify;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean... </td>
                <td>
                    <center>
                        <img src="../img/check.png" class="img-responsive" style="width:45%;">
                    </center>
                </td>
            </tr>
            <tr data-toggle="modal" data-target="#modalMsg">
                <th> 2 </th>
                <td> Marco Gomes </td>
                <td> marcogomes@gmail.com </td>
                <td style="text-align:justify;"> Donec hendrerit erat a metus tempor elementum. Aenean convallis... </td>
                <td>
                    <center>
                        <img src="../img/check.png" class="img-responsive" style="width:45%;">
                    </center>
                </td>
            </tr>
            <tr data-toggle="modal" data-target="#modalMsg">
                <th> 3 </th>
                <td> João Vitor </td>
                <td> buzzercorp@gmail.com </td>
                <td style="text-align:justify;"> Morbi venenatis, est venenatis egesta, lorem ante euismod lacus... </td>
                <td>
                    <center>
                        <img src="../img/check.png" class="img-responsive" style="width:45%;">
                    </center>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Modal de detalhamento das mensagens -->
<div class="modal fade" id="modalMsg" tabindex="-1" role="dialog" aria-labelledby="modalMsgTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(8, 21, 43);color: white;">
                <h5 class="modal-title" id="exampleModalLongTitle"> Detalhes da Mensagem </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="corpoModalMsg">
                <span> Nome: </span>
                <label id="nomeDetalheMsg"> Marco Araujo </label>
                <br><hr>
                <span> Telefone: </span>
                <label id="telefoneDetalheMsg"> (22)99776-6801 </label>
                <br><hr>
                <span> E-mail: </span>
                <label id="emailDetalheMsg"> marcoaraujoneves@gmail.com </label>
                <br><hr>
                <span> Status: </span>
                <label id="statusDetalheMsg"> Respondido </label>
                <br><hr>
                <span> Mensagem: </span>
                <label id="mensagemDetalheMsg" style="text-align:justify;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean enim sem, gravida vel orci faucibus, mattis vehicula magna. In eu commodo lorem. Suspendisse non velit ut erat fringilla commodo. Phasellus nec rhoncus libero, ac elementum sem. Nullam tristique nulla eu facilisis dignissim.  </label>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Deletar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
                </div>
           </div>
       </div>

    </body>
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/Sistema.js"></script>
</html>