<html>

<head>
    <title>Claro - Servicios ventas móviles, hogar, tecnología.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is an example of a meta description. 
This will often show up in search results.">
    <meta name="keywords" content="palabra clave 1, palabra clave 2, palabra clave 3" />
    <link rel="icon" type="image/ico" href="img/favicon.ico" rs_id="" /> 
  <link rel="icon" type="image/png" href="img/favicon.png" />
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <style>
        .btn-outline-danger {
            color: whitesmoke !important;
            border-color: #e8423c !important;
        }

        .btn-outline-danger:hover {
            color: whitesmoke !important;
            background-color: #e8423c !important;

        }
    </style>

</head>

<body>

    <!-- <small>¡Conoce todos los servicios que claro tiene para ti!</small> -->
    <!-- <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
        <div class="container-fluid">
            <img class="navbar-brand" href="index.php" src="img/logo.png" width="90px" />
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="index.php">Home</a>
                    <a class="nav-link" href="#">Servicios</a>
                    <a class="nav-link" href="#">Contacto</a>
                </div>
            </div>
        </div>
    </nav> -->
    <div class=" bg-dark  sticky-top d-none d-md-block">
        <div class="container">
            <div class="col-12-offset-1 align-content-center">
                <div class="row">
                    <div class="col-2 text-center align-self-center">
                        <img src="img/logo.png" class="img-llamamos" alt="te llamamos" width="120px">
                    </div>

                    <div class="col-6 text-center align-self-center">
                        <h4 class="text-white llamamos-tittle pt-2">Linea única de Ventas: 7943247</h4>
                    </div>

                    <button style="margin: 5px;" class="text-white col-3 btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalContacto">
                        Te Llamamos! Déjanos tu numero y te llamamos...
                    </button>
                    <!-- <button class="form-control  btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#modalContacto">Te Llamamos</button> -->

                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/01.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/02.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/03.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    </br>
    <div class="black-color">
        <center><img src="img/planes-incluyen-bg-negro.png"></center>
    </div>
    </br>


    <!-- Modal -->
    <div class="modal fade" id="modalContacto" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <h5 class="modal-title" id="staticBackdropLabel">¡Te Llamamos!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <center><img src="img/call.png" width="100px" /></center>
                    <div class=" align-self-center">
                        <form class="row g-2 input-group-sm needs-validation" novalidate="">
                            <div class="col-4">
                                <p class="small  fw-normal lh-sm ">Déjanos tu número celular y te llamaremos en breve</p>
                            </div>
                            <!-- input Indicativo-->
                            <div class="col-4">
                                <label for="indicativodesktop" class="form-label my-1  small llamamos">Nombre</label>
                                <input name="indicativodesktop" class="form-control form-control-sm" list="indicativos" id="indicativodesktop" placeholder="Nombre" required="">
                            </div>
                            <!-- Fin input Indicativo-->

                            <!-- input Numero-->
                            <div class="col-4">
                                <label for="telefonodesktop" class="form-label my-1  small llamamos"># Celular</label>
                                <input name="telefonodesktop" class="form-control form-control-sm" id="telefonodesktop" type="number" placeholder="Número celular" maxlength="10" minlength="7" oninput="maxlengthNumber(this);" required="">
                                <div class="invalid-feedback text-white"> Ingresa un número válido</div>
                            </div>

                            <div class="col-4"></div>

                            <!-- Botón envío-->
                            <div class="col-8 ">
                                <button class="btn btn-danger  form-control ">
                                    Registrar solicitud
                                </button>
                            </div>
                            <!-- Fin Botón envío-->

                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <?php
    include('celular.php');
    ?>




    <footer class="footer">
        <p>&copy <?php echo date('Y'); ?></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>



</body>

</html>