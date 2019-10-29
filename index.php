<?php
session_start();
if(!isset($_COOKIE['reuniao']['IdUsuario'])) {
    echo '<script type="text/javascript">window.location = "login.php";</script>';
} else {
    if($_COOKIE['reuniao']['IdUsuario'] == '') {
        echo '<script type="text/javascript">window.location = "login.php";</script>';
    }
}
?>


<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="./DataTables/datatables.min.css">
<link rel="stylesheet" type="text/css" href="./Select2/css/select2.min.css">
<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript" src="./DataTables/datatables.min.js"></script>
<script type="text/javascript" src="./js/bootstrap.js"></script>
<script type="text/javascript" src="./Select2/js/select2.min.js"></script>

<nav class="navbar navbar-default navbar-fixed-top ">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <!--<ul class="nav navbar-nav">
                <li id="BtnHome" class="active" onclick="AcessoPagina('Home');"><a href="#">Home</a></li>
            </ul>-->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"> </span> <?php echo strtoupper($_COOKIE['reuniao']['Nome']);?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="" style="" data-toggle="modal" data-target="#myModal_AlterarSenha">Alterar Senha</a></li>
                    </ul>
                    </a>
                </li>
                <li><a href="./logout.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
            </ul>
        </div>
    </div>
</nav>
<br>
<br>
<br>
<div class="row" id="ConteudoPrincipalHome" >
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <div class="panel panel-default">
            <div class="panel-heading"><b>Sala de Reuniões</b></div>
            <div class="panel-body" style="width:100%;height: 500px;overflow: auto;">
                <div><button type="button" class="btn btn-primary" onclick="BuscaCadastro(0,'CAD')">Cadastrar</button></div>
                <br>
                <div id="Tabela_Reunioes">

                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-1"></div>
</div>
<div id="visualiza-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="titulo_do_modal">Excluir Unidade</h4>
            </div>
            <div class="modal-body">
                <div id="content_modal">
                </div>
            </div>
            <div class="modal-footer">
                <div id="content_modal_footer">
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./js/bootstrap.js"></script>
<link href="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.6/b-html5-1.5.6/datatables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.6/b-html5-1.5.6/datatables.min.js"></script>
<script type="text/javascript" src="./js/index.js"></script>
<script>
    $(document).ready (function(){
        VerificaCadReuniao();
    });
</script>