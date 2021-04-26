<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

    <title>Puppy</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" class="">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body>

    <style>
        body {
            font-family: 'Lato', sans-serif;
        }

        section.section-hero {
            background: rgba(242, 242, 242, 0.873);
            height: 490px;
        }

        section.section-hero h1.title-hero {
            font-weight: 900;
            font-size: 56px;
            line-height: 100%;
            color: hsla(0, 0%, 10%, 0.612) !important;
        }


        section.section-hero p.title-hero-2 {
            font-weight: 900;
            font-size: 18px;
            line-height: 100%;
            color: hsla(0, 0%, 10%, 0.27) !important;
            margin: 0;
        }

        section.section-hero p.description-hero {
            font-weight: 300;
            font-size: 26px;
            line-height: 100%;
            color: hsla(0, 0%, 10%, 0.612) !important;
        }

        a.btn-pet {
            background: #fff;
            border-radius: 30px;
            font-size: 16px;
            font-weight: 400;
            padding: 15px 0;
            width: 30%;
            color: hsla(0, 0%, 10%, 0.612) !important;
        }

        a.btn-pet:hover {
            background: hsla(0, 0%, 10%, 0.612) !important;
            border: 1px solid hsla(0, 0%, 10%, 0.612) !important;
            color: #fff !important;
        }

        section.section-productos h2.title-section {
            font-weight: 900;
            font-size: 45px;
            line-height: 100%;
            color: hsla(0, 1%, 56%, 0.414);
        }


        section.section-cta {
            background: hsla(0, 0%, 10%, 0.201);
            height: 250px;
        }

        section.section-cta h1.title-hero {
            font-weight: 900;
            font-size: 30px;
            line-height: 100%;
            color: #fff;
        }

        section.section-cta p.description-hero {
            font-weight: 300;
            font-size: 16px;
            line-height: 100%;
            color: #fff;
        }

        i.ico {
            font-size: 450%;
            color: hsla(0, 0%, 10%, 0.612) !important;

        }
    </style>
    <header>
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <h5 class="font-weight-bold">Puppy's Pet Shop</h5>
                    </div>
                    <div class="col-12 col-md-2">
                        <a href="http://127.0.0.1:8000/admin/login/form" type="button"
                            class="btn btn-info text-light">Iniciar Sesion <i class="fas fa-shopping-cart ml-2"></i>
                    </div></a>
                </div>
            </div>
            </div>
        </nav>
    </header>
    <section class="section-hero">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-6">
                    <p class="title-hero-2">Bienvenido a la tienda de mascotas</p>
                    <h1 class="title-hero">Puppy's Pet Shop</h1>
                    <p class="description-hero col-9">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium
                        optio dicta dolores excepturi,</p>
                    <a class="btn btn-pet">Ver productos</a>
                </div>
                <div class="col-4">
                    <img  src="https://www.pngkey.com/png/detail/1-16476_golden-retriever-dog-png-free-dog-png.png"
                        class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <div id="app">
        <section class="section-productos">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8 text-center">
                        <h2 class="title-section">Producto destacados</h2>
                        <p class="mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        <producto-principal></producto-principal>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-productos mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8 text-center">
                        <h2 class="title-section">Producto Promocion</h2>
                        <p class="mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        <product-sale></product-sale>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="section-cta mb-5">
        <div class="container">
            <div class="row justify-content-center mt-5 text-center">
                <div class="col-8">
                    <h1 class="title-hero">Contacanos</h1>
                    <p class="description-hero">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium
                        optio dicta dolores excepturi,</p>
                    <a class="btn btn-pet">Escirbir mensaje</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section mb-5">
        <div class="container">
            <div class="row justify-content-center mt-5 text-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fas fa-truck ico mb-3"></i>
                            <h3>Despacho a Domicilio</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            <a href="">Saber más</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fas fa-credit-card ico mb-3"></i>
                            <h3>Medios de Pago</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            <a href="">Saber más</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fas fa-paw ico mb-3"></i>
                            <h3>Servicio al Cliente</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            <a href="">Saber más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 text-center">
                    <p>Puppy's Pet Shop &copy; 2021</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
</body>

</html>