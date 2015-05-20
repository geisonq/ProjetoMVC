<!DOCTYPE html>
<html>
    <head>
        <title>Deletar</title>
        <!-- Bootstrap -->
        <link href="www/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="www/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="www/assets/styles.css" rel="stylesheet" media="screen">
        <link href="www/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="www/vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="www/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">E-COMMERCE</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Usuario Logado <i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="login.html">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li>
                            <a href="index.php?controller=UsuarioController&action=inserir"></i> Cadastrar Usuario</a>
                        </li>
                        <li >
                            <a href="index.php?controller=UsuarioController&action=listar"></i> Listar Usuario</a>
                        </li>
                                        <li>
                            <a href="index.php?controller=CategoriaController&action=inserir"></i> Cadastrar Categoria</a>
                        </li>
                        <li>
                            <a href="index.php?controller=CategoriaController&action=listar"></i> Listar Categoria</a>
                        </li>
                    </ul>
                </div>
                <!--/span-->
                <div class="span9" id="content">
                    <div class="row-fluid">
                        <!-- block -->
                        <br>
                        <div class="alert alert-success alert-block">
                            <h4 class="alert-heading">Deletado!</h4>
                            <?php echo ($msg) ? $msg : ''; ?>
                            <p>
                                <br>
                                <a href="index.php?controller=CategoriaController&action=listar">Listar Categorias</a>
                            </p>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
            <hr>
            <footer>

            </footer>
        </div>
        <!--/.fluid-container-->

        <script src="www/vendors/jquery-1.9.1.js"></script>
        <script src="www/bootstrap/js/bootstrap.min.js"></script>
        <script src="www/vendors/datatables/js/jquery.dataTables.min.js"></script>

        <script src="www/assets/scripts.js"></script>
        <script src="www/assets/DT_bootstrap.js"></script>
        <script>
            $(function () {

            });
        </script>
    </body>
</html>
